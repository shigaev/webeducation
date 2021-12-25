<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\master\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Категории';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <?= Html::a('Создать категорию', ['create'], ['class' => 'btn btn-success']) ?>
            </div>
            <div class="box-body">
                <div class="category-index">
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'tableOptions' => ['class' => 'table table-striped table-bordered table-hover'],
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'id',
                            'title',
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
                    ]); ?>

                </div>
            </div>
        </div>
    </div>
</div>