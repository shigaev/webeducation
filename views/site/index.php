<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'My Yii Application';
?>

<div class="wrapper">
    <div class="container">
        <div class="slider">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1>Справочный портал по языкам программрования</h1>
                    <p class="slider-content">
                        Здесь вы найдёте полезную информацию по разным языкам программирования, а также
                        пошаговые схемы изучения.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="/img/img_1.svg" alt="">
                </div>
            </div>

        </div>

        <div class="row">
            <?php foreach ($category as $cat): ?>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <a class="card-img" href="<?= Url::to(['category/view', 'id' => $cat['id']]) ?>">
                            <div class="card-img__title">
                                <?= $cat['title'] ?>
                            </div>
                        </a>
                        <div class="card-body">
                            <p class="card-text">
                                <?= $cat['description'] ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>