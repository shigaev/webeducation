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

<div class="category-form">
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'image')->fileInput() ?>

    <button>Submit</button>


    <!--<div class="form-group">
        </?/*= Html::submitButton('Submit', ['class' => 'btn btn-success']) */?>
    </div>-->

    <?php ActiveForm::end(); ?>
</div>