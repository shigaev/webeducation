<?php

/* @var $this yii\web\View */

use yii\helpers\StringHelper;
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
    </div>
    <div class="category">
        <div class="container">
            <div class="row">
                <?php foreach ($category as $cat): ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3">

                        <div class="category-card">
                            <a href="<?= Url::to(['category/view', 'id' => $cat['id']]) ?>"
                               class="category-card__header">

                            </a>
                            <div class="category-card__body">
                                <h3>
                                    <a href="<?= Url::to(['category/view', 'id' => $cat['id']]) ?>"><?= $cat['title'] ?></a>
                                </h3>
                                <p>
                                    <?= StringHelper::truncate($cat['description'], 130) ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>