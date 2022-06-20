<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\master\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Все посты';
$this->params['breadcrumbs'][] = $this->title;
?>

<?= Html::a('Создать пост', ['create'], ['class' => 'btn btn-success']) ?>

<?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<div class="table-wrapper">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//            'filterModel' => $searchModel,
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
//                ['class' => 'yii\grid\SerialColumn'],

            'id',
//            'post_title',
            [
                'attribute' => 'post_title',
                'value' => function ($data) {
                    $row = explode(' ', $data->post_title);
                    $out_put = array_slice($row, 0, 5);
                    $result = implode(' ', $out_put);

                    return $result . '...';
                }
            ],
//                            'category_id',
            [
                'attribute' => 'category_id',
                'value' => function ($data) {
                    return $data->category->title;
                }
            ],
//                            'post_content:ntext',
            'post_status',

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
                    'delete' => function ($url, $model) {
                        return Html::a(
                            '<i class="bi bi-trash3"></i>',
                            $url);
                    },
                ],
            ],
        ],
        /**
         * Настройки пагинации
         */
        'pager' => [
            'nextPageLabel' => 'Previous',
            'prevPageLabel' => 'Next',
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
    ]); ?>
</div>
