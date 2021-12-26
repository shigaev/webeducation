<?php

use yii\helpers\Url;

?>

<div class="wrapper-articles">
    <div class="container">
        <h1><?= $articleCategory['title'] ?></h1>
        <?php foreach ($articles as $article): ?>

            <h2>
                <a href="<?= Url::to(['article-view', 'id' => $article['id']]) ?>"><?= $article['title'] ?></a>
            </h2>
            <p>
                <?= $article['content'] ?>
            </p>
            <span><?= $article['article_date'] ?></span>

        <?php endforeach; ?>
    </div>
</div>