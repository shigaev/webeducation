<?php

/* @var $this yii\web\View */

use yii\helpers\StringHelper;
use yii\helpers\Url;

$this->title = 'Web education. Справочный портал по языкам программирования.';
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
                    <!--<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3">-->
                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <div class="row h-100">
                                <div class="col-md-4">
                                    <div class="card-image"
                                        <?php if (!empty($cat['image'])): ?>
                                            style="background: url('/uploads/<?= $cat['image'] ?>') center center no-repeat;background-size: cover"
                                        <?php else: ?>
                                            style="background: url('/img/no-image.svg') center center no-repeat;background-size: cover"
                                        <?php endif; ?>
                                    ></div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <a href="<?= Url::to(['category/view', 'id' => $cat['id']]) ?>"><?= $cat['title'] ?></a>
                                        </h5>
                                        <p class="card-text">
                                            <?= StringHelper::truncate($cat['description'], 70) ?>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>