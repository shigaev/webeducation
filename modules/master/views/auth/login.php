<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<!--wrapper-->
<div class="wrapper">
	<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
		<div class="container-fluid">
			<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
				<div class="col mx-auto">
					<div class="mb-4 text-center">
<!--						<img src="assets/images/logo-img.png" width="180" alt=""/>-->
					</div>
					<div class="card">
						<div class="card-body">
							<div class="border p-4 rounded">
								<div class="text-center">
									<h3 class="">Sign in</h3>
									<!--<p>Don't have an account yet?
										<a href="authentication-signup.html">Sign up here</a>
									</p>-->
								</div>
								<!--<div class="d-grid">
									<a class="btn my-4 shadow-sm btn-white" href="javascript:;">
										<span class="d-flex justify-content-center align-items-center">
                          					<img class="me-2" src="assets/images/icons/search.svg" width="16"
												 alt="Image Description">
                          					<span>Sign in with Google</span>
										</span>
									</a>
									<a href="javascript:;" class="btn btn-facebook">
										<i class="bx bxl-facebook"></i>
										Sign in with Facebook
									</a>
								</div>-->
								<div class="login-separater text-center mb-4"><span>OR SIGN IN WITH EMAIL</span>
									<hr/>
								</div>
								<div class="form-body">
                                    <?php $form = ActiveForm::begin(); ?>
									<form class="row g-3">
										<div class="col-12">
											<!--											<label for="inputEmailAddress" class="form-label">Email Address</label>
                                                                                        <input type="email" class="form-control" id="inputEmailAddress"
                                                                                               placeholder="Email Address">-->
                                            <?= $form->field($model, 'username', ['template' => "<div class='form-group has-feedback'> {input} <span class=\"glyphicon glyphicon-user form-control-feedback\"></span><div>{error}</div></div>",])->textInput(['placeholder' => 'Login']) ?>
										</div>
										<div class="col-12">
											<!--<label for="inputChoosePassword" class="form-label">Enter Password</label>
											<div class="input-group" id="show_hide_password">
												<input type="password" class="form-control border-end-0"
													   id="inputChoosePassword" value="12345678"
													   placeholder="Enter Password"> <a href="javascript:;"
																						class="input-group-text bg-transparent"><i
															class='bx bx-hide'></i></a>
											</div>-->
                                            <?= $form->field($model, 'password', ['template' => "<div class='form-group has-feedback'> {input} <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span><div>{error}</div></div>",])->passwordInput(['placeholder' => 'Password']) ?>
										</div>
										<div class="col-md-6">
											<div class="form-check form-switch">
												<!--<input class="form-check-input" type="checkbox"
													   id="flexSwitchCheckChecked" checked>
												<label class="form-check-label" for="flexSwitchCheckChecked">
													Remember Me
												</label>-->
                                                <?= $form->field($model, 'rememberMe')->checkbox([
                                                    'template' => "{label} {input}"
                                                ]) ?>
											</div>
										</div>
										<!--										<div class="col-md-6 text-end">
                                                                                    <a href="authentication-forgot-password.html">
                                                                                        Forgot Password ?
                                                                                    </a>
                                                                                </div>-->
										<div class="col-12">
											<div class="d-grid">
												<!--<button type="submit" class="btn btn-primary"><i
															class="bx bxs-lock-open"></i>Sign in
												</button>-->
                                                <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
											</div>
										</div>
									</form>
                                    <?php ActiveForm::end(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--end row-->
		</div>
	</div>
</div>
<!--end wrapper-->
<!--<div class="login-box">
	<div class="login-logo">
		<a href="/"><b>Web education</b></a>
	</div>
	<div class="login-box">
		<div class="login-box-body">
			<p class="login-box-msg">Sign in to start your session</p>

            <?php /*$form = ActiveForm::begin(); */ ?>

            <? /*= $form->field($model, 'username', ['template' => "<div class='form-group has-feedback'> {input} <span class=\"glyphicon glyphicon-user form-control-feedback\"></span><div>{error}</div></div>",])->textInput(['placeholder' => 'Login']) */ ?>

            <? /*= $form->field($model, 'password', ['template' => "<div class='form-group has-feedback'> {input} <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span><div>{error}</div></div>",])->passwordInput(['placeholder' => 'Password']) */ ?>

			<div class="row">
				<div class="col-xs-8">
					<div class="checkbox2">
                        <? /*= $form->field($model, 'rememberMe')->checkbox([
                            'template' => "{label} {input}"
                        ]) */ ?>
					</div>
				</div>

				<div class="col-xs-4">
                    <? /*= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) */ ?>
				</div>
			</div>

            <?php /*ActiveForm::end(); */ ?>

		</div>

	</div>
</div>-->