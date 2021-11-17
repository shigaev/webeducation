<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <!--<div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>-->

    <div class="body-content">

        <?php
        //        debug($category);
        ?>

        <div class="row">

            <?php foreach ($category as $cat): ?>
                <div class="col-md-4">
                    <div class="card m-2" style="width: 18rem;">
                        <!--                        <img src="..." class="card-img-top" alt="...">-->
                        <div class="card-body">

                            <h5 class="card-title">
                                <a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $cat['id']]) ?>">
                                    <?= $cat['title'] ?>
                                </a>
                            </h5>
                            <p class="card-text">
                                <?= $cat['description'] ?>
                            </p>
                            <a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $cat['id']]) ?>"
                               class="btn btn-primary">Подробнее</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>


    </div>
</div>
