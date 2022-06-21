<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\master\models\ChapterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Разделы';
$this->params['breadcrumbs'][] = $this->title;
?>

<?= Html::a('Создать раздел', ['create'], ['class' => 'btn btn-success']) ?>

<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<div class="table-wrapper">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'tableOptions' => ['class' => 'table table-hover'],
        'pager' => [
            'nextPageLabel' => 'Next',
            'prevPageLabel' => 'Previous',
            'disableCurrentPageButton' => false,
            'nextPageCssClass' => 'page-item',
            'prevPageCssClass' => 'page-item',
            'pageCssClass' => 'page-item',
//					'maxButtonCount' => '',
            'linkOptions' => [
                'class' => 'page-link'
            ],
            'disabledListItemSubTagOptions' => [
                'class' => 'page-link'
            ]
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',

            [
                'class' => 'yii\grid\ActionColumn',
                'contentOptions' => [
                    // 'style' => 'white-space: nowrap; background-color:#f2f2f2; text-align: center; letter-spacing: 0.1em; max-width: 7rem;',
                    'class' => 'table-actions'
                ],
                'header' => 'Actions',
                'buttons' => [
                    'update' => function ($url, $model) {
                        return Html::a(
                            '<i class="bi bi-pencil-square"></i>',
                            $url);
                    },
                    'view' => function ($url, $model) {
                        return Html::a(
                            '<i class="bi bi-eye"></i>',
                            $url);
                    },
                    'delete' => function ($url) {
                        return Html::a('<i class="bi bi-trash3"></i>', $url,
                            ['data' => [
                                'method' => 'post',
                                'confirm' => 'Are you sure?',
                            ]]);
                    },
                ],
            ],
        ],
    ]); ?>
</div>