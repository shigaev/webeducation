'use strict'

let paths = {
    build: {
        css: 'web/css/',
        js: 'web/js/',
        img: 'web/img/',
        sprites: 'web/img/sprites/',
        fonts: 'web/fonts/'
    },
    src: {
        scss: 'src/scss/**/main.scss',
        js: [
            'src/**/main.js'
        ],
        img: 'src/img/**/*',
        sprites: 'src/img/sprites/*.*',
        fonts: 'src/fonts/**/*',
        php: 'views/**/*.php'
    },
    watch: {
        scss: 'src/**/*.scss',
        js: 'src/**/*.js',
        img: 'src/img/**/*',
        sprites: 'src/img/sprites/**/*.*',
        fonts: 'src/fonts/**/*',
        php: 'views/**/*.php'
    }
}

// Плагины
// const {src, dest, parallel, series, watch} = require('gulp');
const {src, dest, parallel, watch} = require('gulp');
const browserSync = require('browser-sync').create();
const concat = require('gulp-concat');
const uglify = require('gulp-uglify-es').default;
const scss = require('gulp-sass');
const autoprefix = require('gulp-autoprefixer');
const cleanCss = require('gulp-clean-css');
const image = require('gulp-imagemin');
const newer = require('gulp-newer');
const del = require('del');
const sourcemap = require('gulp-sourcemaps');
const rigger = require('gulp-rigger');
const favicon = require('favicons').stream;
const mode = require('gulp-mode')();
const svgstore = require('gulp-svgstore');
const svgmin = require('gulp-svgmin');
// const svgo = require('gulp-svgo');
const rename = require('gulp-rename')

// Сервер
function browsersync() {
    browserSync.init({
        proxy: {
            target: "http://webeducation.loc/", // заворачивает локальный адрес в localhost
        },
        notify: false, // Отключает уведомления browser-sync
        online: true // Работа в локальной сети (есть возможность зайти с мобильного устройства)
    })
}

function css() {
    return src(paths.src.scss)
        .pipe(scss())
        .pipe(autoprefix({
            overrideBrowserslist: [
                'last 10 versions' // 10 последних версий браузеров
            ], grid: true // префиксы для grid css
        }))
        .pipe(rigger())
        .pipe(concat('main.min.css'))
        .pipe(mode.development(sourcemap.init()))
        .pipe(mode.production(cleanCss(
            (
                {
                    level:
                        {
                            1: {specialComments: 0}
                        },
                }
            )
        )))
        .pipe(mode.development(sourcemap.write()))
        .pipe(dest(paths.build.css))
        .pipe(browserSync.stream())
}

// Работа с файлами javascript
function js() {
    return src(paths.src.js)
        .pipe(rigger())
        .pipe(concat('main.min.js'))
        .pipe(mode.development(sourcemap.init()))
        .pipe(mode.production(uglify()))
        .pipe(mode.development(sourcemap.write()))
        .pipe(dest(paths.build.js))
        .pipe(browserSync.stream())
}

// Работа с изображениями
function img() {
    return src(paths.src.img, {force: true})
        .pipe(newer(paths.build.img))
        .pipe(image([
            image.gifsicle({interlaced: true}),
            image.mozjpeg({quality: 75, progressive: true}),
            image.optipng({optimizationLevel: 5}),
            image.svgo({
                plugins: [
                    {removeViewBox: true},
                    {cleanupIDs: false}
                ]
            })
        ]))
        .pipe(dest(paths.build.img))
}

// Генерация фавиконок
function faviconGenerate() {
    return src('src/img/favicon/*.*')
        .pipe(favicon({
            icons: {
                appleIcon: true,
                favicons: true,
                online: false,
                appleStartup: false,
                android: false,
                firefox: false,
                yandex: false,
                windows: false,
                coast: false
            }
        }))
        .pipe(dest('../web/img/favicon/'))
        .pipe(browserSync.stream())
}

// Генерация svg-спрайтов
function sprite() {
    return src(paths.src.sprites)
        .pipe(svgmin({
            js2svg: {
                pretty: true
            }
        }))
        .pipe(svgstore({
            inlineSvg: true
        }))
        .pipe(rename('sprite.svg'))
        .pipe(dest(paths.build.sprites))
}

// Перенос шрифтов
function fonts() {
    return src(paths.src.fonts)
        .pipe(dest(paths.build.fonts))
}

function php() {
    return src(paths.src.php)
        .pipe(browserSync.stream())
}

// Очищает папку web
function cleanWeb() {
    return del(
        [
            '../web/js/',
            '../web/css/',
        ], {force: true})
}

// Отслеживает изменения в исходных файлах
function startWatch() {
    watch([
        paths.watch.js,
    ], js)
    watch([
        paths.watch.scss
    ], css)
    watch([paths.watch.img], img)
    watch([paths.watch.fonts], fonts)
    watch([paths.watch.php], php)
}

exports.browsersync = browsersync
exports.js = js
exports.php = php
exports.css = css
exports.img = img
exports.fonts = fonts
exports.faviconGenerate = faviconGenerate
exports.sprite = sprite
exports.cleanWeb = cleanWeb

exports.default = parallel(cleanWeb, css, php, js, img, fonts, faviconGenerate, sprite, browsersync, startWatch)