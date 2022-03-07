<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="sign">
    <div class="sign-logo">
        <img src="/admin/dist/img/user-admin.png" alt="">
    </div>
    <?php $form = ActiveForm::begin(
        [
            'options' => [
                'class' => 'sign-form',
            ]
        ]
    ); ?>
    <form class="sign-form">
        <fieldset>
            <legend>Sign in</legend>

            <?= $form->field($model, 'username', ['template' => "<div class='sign-login sign-input'> {input} <span></span><div>{error}</div></div>",])
                ->textInput(['placeholder' => 'Login'])
            ?>

            <?= $form->field($model, 'password', ['template' => "<div class='sign-pass sign-input'> {input} <span></span><div>{error}</div></div>",])->passwordInput(['placeholder' => 'Password'])
            ?>

            <div class="sign-check">
                <?= $form->field($model, 'rememberMe')->checkbox([
                    'template' => "{label} {input}"
                ]) ?>
            </div>
        </fieldset>
        <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
    </form>
    <?php ActiveForm::end(); ?>
    <div class="sign-copyright">
        <span class="sign-copyright__text">Web education admin 2022</span>
    </div>
</div>