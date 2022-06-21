<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

mihaildev\elfinder\Assets::noConflict($this);

/* @var $this yii\web\View */
/* @var $model app\modules\master\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'post_title')->textInput(['maxlength' => true]) ?>

    <div class="form-group field-post-category_id has-success">
        <label class="control-label" for="post-category_id">Родительская категория</label>
        <select id="post-category_id" class="form-control" name="Post[category_id]">
            <?= \app\components\CategoryMenuWidget::widget([
                'tpl' => 'select_post',
                'model' => $model,
                'cache_time' => 0
            ]) ?>
        </select>
    </div>

    <!--    --><? //= $form->field($model, 'post_content')->textarea(['rows' => 6]) ?>

    <?php
    /*    echo $form->field($model, 'post_content')->widget(CKEditor::class, [
            'editorOptions' => [
                'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                'inline' => false, //по умолчанию false
            ],
        ]);
        */ ?>

    <?php

    echo $form->field($model, 'post_content')->widget(CKEditor::class, [
        'editorOptions' => ElFinder::ckeditorOptions(['elfinder'], [/* Some CKEditor Options */]),
    ]);

    ?>

    <?= $form->field($model, 'post_status')->dropDownList(['Деактивировано', 'Активировано']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
