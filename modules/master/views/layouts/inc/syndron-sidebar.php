<?php

use yii\helpers\Url;

?>

<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
	<div class="sidebar-header">
		<!--		<div>-->
		<!--			<img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">-->
		<!--		</div>-->
		<div>
			<a href="<?= Yii::$app->homeUrl ?>" target="_blank">
				<h4 class="logo-text">Web education</h4>
			</a>

		</div>
		<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
		</div>
	</div>
	<!--navigation-->
	<ul class="metismenu" id="menu">
		<li>
			<a href="<?= Url::to(['main/index']) ?>">
				<div class="parent-icon"><i class='fadeIn animated bx bx-stats'></i>
				</div>
				<div class="menu-title">Статистика сайта</div>
			</a>
		</li>
		<li>
			<a href="<?= Url::to(['category/index']) ?>">
				<div class="parent-icon"><i class='fadeIn animated bx bx-cube'></i>
				</div>
				<div class="menu-title">Категории</div>
			</a>
		</li>
		<li>
			<a href="<?= Url::to(['post/index']) ?>">
				<div class="parent-icon"><i class='fadeIn animated bx bx-message-square-edit'></i>
				</div>
				<div class="menu-title">Посты</div>
			</a>
		</li>
        <li>
            <a href="<?= Url::to(['articles/index']) ?>">
                <div class="parent-icon"><i class='fadeIn animated bx bx-cabinet'></i>
                </div>
                <div class="menu-title">Статьи</div>
            </a>
        </li>
		<li>
			<a href="<?= Url::to(['chapter/index']) ?>">
				<div class="parent-icon"><i class='fadeIn animated bx bx-cabinet'></i>
				</div>
				<div class="menu-title">Разделы</div>
			</a>
		</li>
	</ul>
	<!--end navigation-->
</div>
<!--end sidebar wrapper -->