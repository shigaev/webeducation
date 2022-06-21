<?php

use yii\bootstrap4\LinkPager;
use yii\data\Pagination;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\master\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>

<?= Html::a('New category', ['create'], ['class' => 'btn btn-success']) ?>
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
            // ['class' => 'yii\grid\SerialColumn'],
            /*[
                'class' => 'yii\grid\CheckboxColumn', 'checkboxOptions' => function ($model) {
                return ['value' => $model->id];
            },
            ],*/
            'id',
            // 'title',
            [
                'attribute' => 'title',
                'value' => function ($data) {
                    $row = explode(' ', $data->title);
                    $out_put = array_slice($row, 0, 4);
                    $result = implode(' ', $out_put);

                    return $result . '...';
                }
            ],
            [
                'attribute' => 'image',
                'value' => function ($data) {
                    return !empty($data->image) ? '<img style="width:30px;" src="/uploads/' . $data->image . '">' :
                        '<img style="width:30px;" src="/upload/files/no-image.png">';
                },
                'format' => 'raw'
            ],
            [
                'attribute' => 'index_page',
                'headerOptions' => ['width' => '100'],
                'contentOptions' => [
                    'class' => 'table-visibility-column',
                ],
                'format' => 'raw',
                'value' => function ($data) {
                    return ($data->index_page) ?
                        Html::tag('span', Html::encode('visible'), ['class' => 'visible']) :
                        Html::tag('span', Html::encode('hidden'), ['class' => 'hidden']);
                }
            ],
            //'chapter_id',
            [
                'attribute' => 'parent_id',
                'contentOptions' => [
                    'class' => 'table-independent-colum',
                ],
                'format' => 'raw',
                'value' => function ($data) {
                    return $data->category->title ?? Html::tag('span', Html::encode('Independent'), ['class' => 'table-independent-colum__data']);
                }
            ],
            [
                'attribute' => 'description',
                'format' => 'raw',
                'value' => function ($data) {
                    $row = explode(' ', $data->description);
                    $out_put = array_slice($row, 0, 5);
                    $result = implode(' ', $out_put);

                    return $result . '...';
                },
            ],
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

        /**
         * Настройки пагинации
         */
        'pager' => [
            'nextPageLabel' => 'Next',
            'prevPageLabel' => 'Previous',
            'disableCurrentPageButton' => false,
            'nextPageCssClass' => 'page-item',
            'prevPageCssClass' => 'page-item',
            'pageCssClass' => 'page-item',
            // 'maxButtonCount' => '',
            'linkOptions' => [
                'class' => 'page-link'
            ],
            'disabledListItemSubTagOptions' => [
                'class' => 'page-link'
            ]
        ],
    ]); ?>
</div>