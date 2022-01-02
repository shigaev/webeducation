<?php

namespace app\assets;

use yii\web\AssetBundle;

class SyndronAdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // plugins
        'web/syndron/assets/plugins/simplebar/css/simplebar.css',
        'web/syndron/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css',
        'web/syndron/assets/plugins/metismenu/css/metisMenu.min.css',
        'web/syndron/assets/plugins/datatable/css/dataTables.bootstrap5.min.css',
        // loader
        'web/syndron/assets/css/pace.min.css',
        // Bootstrap CSS
        'web/syndron/assets/css/bootstrap.min.css',
        'web/syndron/assets/css/app.css',
        'web/syndron/assets/css/icons.css',
        // Theme Style CSS
        'web/syndron/assets/css/dark-theme.css',
        'web/syndron/assets/css/semi-dark.css',
        'web/syndron/assets/css/header-colors.css',
        'web/syndron/assets/css/my-app.css',
    ];
    public $js = [
        // loader
        'web/syndron/assets/js/pace.min.js',
        // Bootstrap JS
        'web/syndron/assets/js/bootstrap.bundle.min.js',
        // plugins
        'web/syndron/assets/plugins/simplebar/js/simplebar.min.js',
        'web/syndron/assets/plugins/metismenu/js/metisMenu.min.js',
        'web/syndron/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js',
        'web/syndron/assets/plugins/apexcharts-bundle/js/apexcharts.min.js',
        'web/syndron/assets/plugins/datatable/js/jquery.dataTables.min.js',
        'web/syndron/assets/plugins/datatable/js/dataTables.bootstrap5.min.js',
        'web/syndron/assets/js/index.js',
        // app JS
        'web/syndron/assets/js/app.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}