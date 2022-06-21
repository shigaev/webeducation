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

<?php

$optionCategory = Category::find()

?>

<div class="record-form">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <div class="form-group field-category-parent_id has-success">
        <label class="control-label" for="category-parent_id">Родительская категория</label>
        <select id="category-parent_id" class="form-control" name="Category[parent_id]">
            <option value="0">Самостоятельная категория</option>
            <?= CategoryMenuWidget::widget([
                'tpl' => 'select',
                'model' => $model,
                'cache_time' => 0
            ]) ?>
        </select>
    </div>

    <div class="form-group field-category-chapter_id has-success">
        <label class="control-label" for="category-chapter_id">Раздел</label>
        <select id="category-chapter_id" class="form-control" name="Category[chapter_id]">
            <option value="0">Без раздела</option>
            <?php echo Chapter::widget([
                'tpl' => 'select',
                'model' => $model
            ]) ?>
        </select>
    </div>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'index_page')->dropDownList(['нет', 'да']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>