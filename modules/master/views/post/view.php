<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\master\models\Post */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-body">
                <div class="post-view">

                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]) ?>
                    </p>

                    <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            'id',
                            'post_title',
//                            'category_id',
//                            [
//                                'attribute' => 'category_id',
//                                'value' => function ($data) {
//                                    return $data->category->title;
//                                }
//                            ],
                            [
                                'attribute' => 'category_id',
                                'value' => isset($model->category->title) ? '<a href=" ' . \yii\helpers\Url::to(['category/view', 'id' => $model->category->id]) . ' ">' . $model->category->title . '</a>' : 'Самостоятельная категория',
                                'format' => 'raw'
                            ],
                            'post_content:ntext',
                            'post_status',
                        ],
                    ]) ?>

                </div>

            </div>
        </div>
    </div>
</div>