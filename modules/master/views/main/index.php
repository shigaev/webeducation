<?php

use yii\helpers\Url;

$this->title = 'Статистика сайта';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
	<div class="col">
		<a class="index-link" href="<?= Url::to(['category/index']) ?>">
			<div class="card radius-10">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<div>
							<p class="mb-0 text-secondary">Категорий</p>
							<h4 class="my-1"><?= $categories ?></h4>
						</div>
						<div class="widgets-icons bg-light-success text-success ms-auto">
							<i class='fadeIn animated bx bx-cube'></i>
						</div>
					</div>
				</div>
			</div>
		</a>

	</div>
	<div class="col">
		<a class="index-link" href="<?= Url::to(['post/index']) ?>">
			<div class="card radius-10">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<div>
							<p class="mb-0 text-secondary">Постов</p>
							<h4 class="my-1"><?= $posts ?></h4>
						</div>
						<div class="widgets-icons bg-light-warning text-warning ms-auto">
							<i class='fadeIn animated bx bx-message-square-edit'></i>
						</div>
					</div>
				</div>
			</div>
		</a>
	</div>
</div>