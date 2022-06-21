<?php

use app\modules\master\models\Articles;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\master\models\ArticlesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Articles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="articles-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Articles', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="table-wrapper">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            // 'filterModel' => $searchModel,
            'showHeader' => true,
            'summary' => "Showing {begin} - {end} of {totalCount} items",
            'tableOptions' => [
                'class' => 'table table-hover',
            ],
            'rowOptions' => function ($model, $key, $index, $grid) {
                $class = $index % 2 ? 'odd' : 'table-row';
                return [
                    'key' => $key,
                    'index' => $index,
                    'class' => $class
                ];
            },
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
//            'category_id',
                'title',
//            'description',
//            'content:ntext',
                //'article_date',

                [
                    'class' => 'yii\grid\ActionColumn',
                    'contentOptions' => [
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
</div>