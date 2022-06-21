<?php

use app\components\CategoryMenuWidget;
use app\modules\master\models\Category;
use app\widgets\Chapter;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\master\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="file-upload">
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <div class="file-upload__input">
        <?= $form->field($model, 'image')->fileInput() ?>
    </div>

    <div class="file-upload__button">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-success file-submit']) ?>
    </div>

    <?php
    if ($file !== null) {
        Yii::$app->response->redirect(['master/category/view', 'id' => $category->id]);
    }
    ?>
    <?php ActiveForm::end(); ?>
</div>