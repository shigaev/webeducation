<?php

namespace app\assets;

use yii\web\AssetBundle;

class AuthAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'web/adminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css',
        'web/adminLTE/bower_components/font-awesome/css/font-awesome.min.css',
        'web/adminLTE/bower_components/Ionicons/css/ionicons.min.css',
        'web/adminLTE/dist/css/AdminLTE.min.css',
        'web/adminLTE/plugins/iCheck/square/blue.css',
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic',
    ];
    public $js = [
        'web/adminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js',
        'web/adminLTE/plugins/iCheck/icheck.min.js',
        'js/admin.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap4\BootstrapAsset',
    ];
}