<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="sign">
    <?php $form = ActiveForm::begin(
        [
            'options' => [
                'class' => 'sign-form',
            ]
        ]
    ); ?>
    <form>
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating">
            <?= $form->field($model, 'username', ['template' => "<div class='sign-login sign-input'> {input} <span></span><div>{error}</div></div>",])
                ->textInput(['placeholder' => 'Login'])
            ?>
        </div>
        <div class="form-floating">
            <?= $form->field($model, 'password', ['template' => "<div class='sign-pass sign-input'> {input} <span></span><div>{error}</div></div>",])->passwordInput(['placeholder' => 'Password'])
            ?>
        </div>

        <div class="checkbox mb-3">
            <div class="sign-check">
                <?= $form->field($model, 'rememberMe')->checkbox([
                    'template' => "{label} {input}"
                ]) ?>
            </div>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
    </form>

    <?php ActiveForm::end(); ?>
</div>