<?php

use yii\bootstrap4\LinkPager;
use yii\data\Pagination;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\master\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Категории';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="card">

    <div class="card-body">
        <div class="creater">
            <?= Html::a('Создать категорию', ['create'], ['class' => 'btn btn-success']) ?>
        </div>
        <div class="">


            <?= GridView::widget([
                'dataProvider' => $dataProvider,
//                'filterModel' => $searchModel,
                'tableOptions' => ['class' => 'table table-hover'],
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
//					'maxButtonCount' => '',
                    'linkOptions' => [
                        'class' => 'page-link'
                    ],
                    'disabledListItemSubTagOptions' => [
                        'class' => 'page-link'
                    ]
                ],

                'columns' => [
//                    ['class' => 'yii\grid\SerialColumn'],

                    'id',
                    'title',
//                    'image',
                    [
                        'attribute' => 'image',
                        'value' => function ($data) {
                            return !empty($data->image) ? '<img style="width:30px;" src="/uploads/' . $data->image . '">' :
                                '<img style="width:30px;" src="/upload/files/no-image.png">';
                        },
                        'format' => 'raw'
                    ],
                    //'index_page',
                    [
                        'attribute' => 'index_page',
                        'value' => function ($data) {
                            return ($data->index_page) ? 'да' : 'нет';
                        }
                    ],
                    //'chapter_id',
                    //'parent_id',
                    [
                        'attribute' => 'parent_id',
                        'value' => function ($data) {
                            return $data->category->title ?? 'Самостоятельная категория';
                        }
                    ],
                    'description',
                    ['class' => 'yii\grid\ActionColumn', 'header' => 'Действия'],
                ],
            ]);

            ?>
        </div>
    </div>
</div>