<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\master\models\ChapterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Разделы';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="card">
	<div class="card-body">
		<div class="creater">
            <?= Html::a('Создать раздел', ['create'], ['class' => 'btn btn-success']) ?>
		</div>

        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
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

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
	</div>
</div>