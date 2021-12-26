<?php

use yii\helpers\StringHelper;
use yii\helpers\Url;

?>
<div class="wrapper-articles">
    <div class="container">
        <div class="article-category">
            <?php foreach ($articleCategory as $artCat): ?>
                <a class="article-category__title" href="<?= Url::to(['article-category', 'id' => $artCat['id']]) ?>">
                    <?= $artCat['title'] ?>
                </a>
            <?php endforeach; ?>
        </div>
        <?php foreach ($allArticles as $article): ?>
            <article class="article">
                <h2 class="article-title">
                    <a href="<?= Url::to(['article-view', 'id' => $article['id']]) ?>">
                        <?= $article['title'] ?>
                    </a>
                </h2>
                <p class="article-description">
                    <?= StringHelper::truncate($article['content'], 150) ?>
                </p>
                <span><?= $article['article_date'] ?></span>
            </article>
        <?php endforeach; ?>
    </div>
</div>