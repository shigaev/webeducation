<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'timeZone' => 'Europe/Moscow',
    'name' => 'Web education',
    'language' => 'ru',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'modules' => [
        'master' => [
            'class' => 'app\modules\master\Module',
            'layout' => 'admin',
            'defaultRoute' => 'main/index' // Дефолтный маршрут админки
        ],
    ],
    'components' => [
        'assetManager' => [
            'appendTimestamp' => true, // кеширование js и css
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'CDeczPUs4i2V6GL_OcMyShVRJ-Gy8_Ea',
            'baseUrl' => '',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
            'loginUrl' => '/master/auth/login'
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,

        'urlManager' => [
//            'enableStrictParsing' => true,
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '/' => 'site/index',
                'about' => 'site/about',
                'contact' => 'site/contact',
//                'login' => 'site/login',
                'category/<id:\d+>' => 'category/view',
                'articles' => 'site/articles',
//                'articles-view/<id:\d+>' => 'site/articles-view',
                'article-category/<id:\d+>' => 'site/article-category'
            ],
        ],

    ],
    /**
     * Загрузка картинок из админки
     * ссылка на расширение: https://github.com/MihailDev/yii2-elfinder
     */
    'controllerMap' => [
        'elfinder' => [
            'class' => 'mihaildev\elfinder\PathController',
            'access' => ['@'],
            'root' => [
                'path' => '/upload/files',
                'name' => 'Upload'
            ],
            // Наложение водяных знаков
            /*'watermark' => [
                'source' => __DIR__ . '/logo.png', // Path to Water mark image
                'marginRight' => 5,          // Margin right pixel
                'marginBottom' => 5,          // Margin bottom pixel
                'quality' => 95,         // JPEG image save quality
                'transparency' => 70,         // Water mark image transparency ( other than PNG )
                'targetType' => IMG_GIF | IMG_JPG | IMG_PNG | IMG_WBMP, // Target image formats ( bit-field )
                'targetMinPixel' => 200         // Target image minimum pixel size
            ]*/
        ]
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
