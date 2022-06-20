<?php

namespace app\assets;

use yii\web\AssetBundle;

class SyndronAdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // plugins
        'syndron/assets/plugins/simplebar/css/simplebar.css',
        'syndron/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css',
        'syndron/assets/plugins/metismenu/css/metisMenu.min.css',
        'syndron/assets/plugins/datatable/css/dataTables.bootstrap5.min.css',
        // loader
        'syndron/assets/css/pace.min.css',
        // Bootstrap CSS
        'syndron/assets/css/bootstrap.min.css',
        'syndron/assets/css/app.css',
        'syndron/assets/css/icons.css',
        // Theme Style CSS
        'syndron/assets/css/dark-theme.css',
        'syndron/assets/css/semi-dark.css',
        'syndron/assets/css/header-colors.css',
        'syndron/assets/css/my-app.css',
    ];
    public $js = [
        // loader
        'syndron/assets/js/pace.min.js',
        // Bootstrap JS
        'syndron/assets/js/bootstrap.bundle.min.js',
        // plugins
        'syndron/assets/plugins/simplebar/js/simplebar.min.js',
        'syndron/assets/plugins/metismenu/js/metisMenu.min.js',
        'syndron/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js',
        'syndron/assets/plugins/apexcharts-bundle/js/apexcharts.min.js',
        'syndron/assets/plugins/datatable/js/jquery.dataTables.min.js',
        'syndron/assets/plugins/datatable/js/dataTables.bootstrap5.min.js',
        'syndron/assets/js/index.js',
        // app JS
        'syndron/assets/js/app.js',
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap4\BootstrapAsset',
    ];
}