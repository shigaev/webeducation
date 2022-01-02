<?php

namespace app\assets;

use yii\web\AssetBundle;

class SyndronAuthAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // plugins
        'web/syndron/assets/plugins/simplebar/css/simplebar.css',
        'web/syndron/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css',
        'web/syndron/assets/plugins/metismenu/css/metisMenu.min.css',
        // loader
        'web/syndron/assets/css/pace.min.css',
        // Bootstrap CSS
        'web/syndron/assets/css/bootstrap.min.css',
        'web/syndron/assets/css/app.css',
        'web/syndron/assets/css/icons.css',
    ];
    public $js = [
        'web/syndron/assets/js/pace.min.js',
        'web/syndron/assets/js/bootstrap.bundle.min.js',
        // plugins
        'web/syndron/assets/js/jquery.min.js',
        'web/syndron/assets/plugins/simplebar/js/simplebar.min.js',
        'web/syndron/assets/plugins/metismenu/js/metisMenu.min.js',
        'web/syndron/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js',
        // app
        'web/syndron/assets/js/app.js',
        'web/syndron/assets/js/my-app.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap4\BootstrapAsset',
    ];
}