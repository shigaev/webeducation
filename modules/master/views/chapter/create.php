<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\master\models\Chapter */

$this->title = 'Создание раздела';
$this->params['breadcrumbs'][] = ['label' => 'Chapters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="card">
	<div class="card-body">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
	</div>
</div>