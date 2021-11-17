<?php

use app\modules\master\models\Category;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\master\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<?php

$optionCategory = Category::find()

?>

<div class="category-form">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <div class="form-group field-category-parent_id has-success">
        <label class="control-label" for="category-parent_id">Родительская категория</label>
        <select id="category-parent_id" class="form-control" name="Category[parent_id]">
            <option value="0">Самостоятельная категория</option>
            <?= \app\components\CategoryMenuWidget::widget([
                'tpl' => 'select',
                'model' => $model,
                'cache_time' => 0
            ]) ?>
        </select>
    </div>


    <!--    --><? //= $form->field($model, 'parent_id')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    <?php
    /*        debug($model);
        */ ?>

</div>
