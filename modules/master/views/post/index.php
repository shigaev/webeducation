<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\master\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Все посты';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="card">
	<div class="card-body">
		<div class="box-header with-border">
			<div class="creater">
                <?= Html::a('Создать пост', ['create'], ['class' => 'btn btn-success']) ?>
			</div>
		</div>

        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
//            'filterModel' => $searchModel,
            'tableOptions' => ['class' => 'table table-hover'],
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
            'columns' => [
//                ['class' => 'yii\grid\SerialColumn'],

                'id',
                'post_title',
//                            'category_id',
                [
                    'attribute' => 'category_id',
                    'value' => function ($data) {
                        return $data->category->title;
                    }
                ],
//                            'post_content:ntext',
                'post_status',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
	</div>
</div>

<!--<div class="row">-->
<!--    <div class="col-md-12">-->
<!--        <div class="box">-->
<!--            <div class="box-header with-border">-->
<!--                --><? //= Html::a('Создать пост', ['create'], ['class' => 'btn btn-success']) ?>
<!--            </div>-->
<!--            <div class="box-body">-->
<!---->
<!--                <div class="post-index">-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--                </div>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->