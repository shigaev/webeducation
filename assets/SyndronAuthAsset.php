<?php

namespace app\assets;

use yii\web\AssetBundle;

class SyndronAuthAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // plugins
        'syndron/assets/plugins/simplebar/css/simplebar.css',
        'syndron/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css',
        'syndron/assets/plugins/metismenu/css/metisMenu.min.css',
        // loader
        'web/syndron/assets/css/pace.min.css',
        // Bootstrap CSS
        'syndron/assets/css/bootstrap.min.css',
        'syndron/assets/css/app.css',
        'syndron/assets/css/icons.css',
    ];
    public $js = [
        'syndron/assets/js/pace.min.js',
        'syndron/assets/js/bootstrap.bundle.min.js',
        // plugins
        'syndron/assets/js/jquery.min.js',
        'syndron/assets/plugins/simplebar/js/simplebar.min.js',
        'syndron/assets/plugins/metismenu/js/metisMenu.min.js',
        'syndron/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js',
        // app
        'syndron/assets/js/app.js',
        'syndron/assets/js/my-app.js',
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap4\BootstrapAsset',
    ];
}