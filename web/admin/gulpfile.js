'use strict'

let preprocessor = 'scss'
let paths = {
    dist: {
        html: 'dist',
        css: 'dist/css/',
        js: 'dist/js/',
        img: 'dist/img/',
        fonts: 'dist/fonts/',
    },
    src: {
        html: 'src/*.html',
        scss: 'src/scss/**/main.scss',
        js: [
            /*'node_modules/jquery/dist/jquery.min.js'*/ // необязательно jquery подключать именно так, можно подключить непосредственно в файле main.js
            // 'src/js/main.js'
            'src/**/*.js'
        ],
        img: 'src/img/**/*',
        fonts: 'src/fonts/**/*',
    },
    watch: {
        html: 'src/**/*.html',
        scss: 'src/**/*.scss',
        js: 'src/**/*.js',
        img: 'src/img/**/*',
        fonts: 'src/fonts/**/*',
    }
}

// Плагины
const {src, dest, parallel, series, watch} = require('gulp');
const browserSync = require('browser-sync').create();
const concat = require('gulp-concat');
const uglify = require('gulp-uglify-es').default;
const scss = require('gulp-sass');
const less = require('gulp-less');
const autoprefix = require('gulp-autoprefixer');
const cleanCss = require('gulp-clean-css');
const images = require('gulp-imagemin');
const newer = require('gulp-newer');
const del = require('del');
const sourcemap = require('gulp-sourcemaps');
const gulpif = require('gulp-if');
const rigger = require('gulp-rigger');
const htmlmin = require('gulp-htmlmin');
const favicon = require('favicons').stream;
const mode = require('gulp-mode')();

// Папка, запускаемая как сервер browser-sync
function reload() {
    browserSync.init({
        // server: ["pages", "dist"],
        server: {
            baseDir: "./dist",
            index: "index.html",
            // directory: true // показывает все директории приложениея в браузере
        },
        notify: true, // Отключает уведомления browser-sync
        online: true // Работа в локальной сети (есть возможность зайти с мобильного устройства)
    })
}

// Работа с html
function html() {
    return src(paths.src.html)
        .pipe(rigger())
        .pipe(mode.production(htmlmin({collapseWhitespace: true})))
        .pipe(dest(paths.dist.html))
        .pipe(browserSync.stream())
}

// Работа с файлами scss/scss/less
function css() {
    return src(paths.src.scss)
        .pipe(eval(preprocessor)())
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
                    // format: 'beautify' // Выравнивает код если необходимо
                }
            )
        )))
        .pipe(mode.development(sourcemap.write()))
        .pipe(autoprefix({
            overrideBrowserslist: [
                'last 10 versions' // 10 последних версий браузеров
            ], grid: true // префиксы для grid css
        }))
        .pipe(dest(paths.dist.css))
        .pipe(browserSync.stream())
}

// Работа с файлами javascript
function js() {
    return src(paths.src.js)
        .pipe(concat('main.min.js'))
        .pipe(mode.development(sourcemap.init()))
        .pipe(mode.production(uglify()))
        .pipe(mode.development(sourcemap.write()))
        .pipe(dest(paths.dist.js))
        .pipe(browserSync.stream())
}

// Работа с изображениями
function img() {
    return src(paths.src.img, {force: true})
        .pipe(newer('dist/img'))
        .pipe(images())
        .pipe(dest(paths.dist.img))
}

// Очищает папку img
function cleanimg() {
    return del('dist/img/**/*')
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
        .pipe(dest('dist/img/favicon/'))
        .pipe(browserSync.stream())
}

// Перенос шрифтов
function fonts() {
    return src(paths.src.fonts)
        .pipe(dest(paths.dist.fonts))
}

// Очищает папку dist
function cleanDist() {
    return del(
        ['dist/**/*', '!dist/fontawesome/**'],
        {force: true}
    )
}

// Отслеживает изменения в исходных файлах
function startWatch() {
    watch([
        paths.watch.js,
        '!src/**/*.min.js'
    ], js)
    watch([
        paths.watch.scss
    ], css)
    watch([
        paths.watch.html
    ], html).on('change', browserSync.reload)
    watch([paths.watch.img], img)
}

exports.reload = reload
exports.html = html
exports.js = js
exports.css = css
exports.img = img
exports.fonts = fonts
exports.faviconGenerate = faviconGenerate
exports.cleanimg = cleanimg
exports.cleanDist = cleanDist

exports.default = parallel(cleanDist, html, css, js, img, fonts, faviconGenerate, reload, startWatch)