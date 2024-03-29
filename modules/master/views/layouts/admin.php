<?php

use app\assets\AdminAsset;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;

AdminAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!doctype html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <header class="header-admin">

        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?= Url::to(['main/index']) ?>">Главная</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= Yii::$app->homeUrl ?>" target="_blank">На сайт</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= Url::to(['auth/logout']) ?>">Выйти</a>
                        </li>
                    </ul>
                    <!--<form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button type="button" class="btn btn-success">Search</button>
                    </form>-->
                </div>
            </div>
        </nav>

    </header>
    <!-- /.header-admin -->

    <div class="wrapper">
        <div class="container-fluid py-3">
            <div class="row">
                <div class="col-md-2">
                    <?= $this->render('/layouts/inc/admin-sidebar') ?>
                </div>
                <div class="col-md-10">
                    <?= Alert::widget() ?>
                    <?= Breadcrumbs::widget([
                        'itemTemplate' => "<li class='breadcrumb-item'>{link}</li>\n", // template for all links
                        'activeItemTemplate' => "<li class=\"breadcrumb-item active\">{link}</li>\n",
                        'homeLink' => ['label' => 'Главная', 'url' => '/master/'],
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]) ?>
                    <?= $content ?>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer mt-auto py-3">
        <div class="container-fluid">
            <h2>Footer</h2>
        </div>
    </footer>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>