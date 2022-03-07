<?php

use yii\helpers\Url;

$this->title = 'Статистика сайта';
$this->params['breadcrumbs'][] = $this->title;

?>

<p>
    <a href="<?= Url::to(['category/index']) ?>">Категорий</a>: <?= $categories ?>
</p>
<p>
    <a href="<?= Url::to(['post/index']) ?>">Постов</a>: <?= $posts ?>
</p>