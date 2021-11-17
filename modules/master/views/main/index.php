<?php

use yii\helpers\Url;

$this->title = 'Статистика сайта';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3><?= $categories ?></h3>
                <p>Категорий</p>
            </div>
            <div class="icon">
                <i class="fa fa-cubes"></i>
            </div>
            <a href="<?= Url::to(['category/index']) ?>" class="small-box-footer">
                Больше информации <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3><?= $posts ?></h3>
                <p>Постов</p>
            </div>
            <div class="icon">
                <i class="fa fa-edit"></i>
            </div>
            <a href="<?= Url::to(['post/index']) ?>" class="small-box-footer">
                Больше информации <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
</div>
