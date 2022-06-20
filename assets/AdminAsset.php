<?php

namespace app\assets;

use yii\web\AssetBundle;

class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'admin/dist/fontawesome/css/all.min.css',
//        'admin/dist/css/main.min.css'
        'css/admin.min.css'
    ];
    public $js = [
        'js/admin.min.js'
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap4\BootstrapAsset',
    ];
}