<?php

use yii\helpers\Url;

?>
<a class="article-category__title" href="<?= Url::to(['article-category', 'id' => $category['id']]) ?>">
    <?= $category['title'] ?>
</a>