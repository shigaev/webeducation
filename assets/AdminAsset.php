<?php

namespace app\assets;

use yii\web\AssetBundle;

class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'web/master/bower_components/bootstrap/dist/css/bootstrap.min.css',
        'web/master/bower_components/font-awesome/css/font-awesome.min.css',
        'web/master/bower_components/Ionicons/css/ionicons.min.css',
        'web/master/dist/css/AdminLTE.min.css',
        'web/master/dist/css/skins/skin-blue.min.css',
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic',
    ];
    public $js = [
//        'master/bower_components/jquery/dist/jquery.min.js',
        'web/master/bower_components/bootstrap/dist/js/bootstrap.min.js',
        'web/master/dist/js/adminlte.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap4\BootstrapAsset',
    ];
}