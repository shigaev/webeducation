<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\master\models\Post */

$this->title = 'Редактирование поста: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-body">

                <div class="post-update">
                    <?= $this->render('_form', [
                        'model' => $model,
                    ]) ?>

                </div>

            </div>
        </div>
    </div>
</div>