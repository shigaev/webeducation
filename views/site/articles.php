<?php

use yii\helpers\StringHelper;
use yii\helpers\Url;

?>
<div class="wrapper-articles">
    <div class="container">
        <?= \app\widgets\ArticleCategory::widget([
            'tpl' => 'stroke',
            'div_class' => 'article-category'
        ]) ?>
        
        <h2>Все статьи</h2>

        <?php /*foreach ($allArticles as $article): */ ?><!--
			<article class="article">
				<h2 class="article-title">
					<a href="<? /*= Url::to(['article-view', 'id' => $article['id']]) */ ?>">
                        <? /*= $article['title'] */ ?>
					</a>
				</h2>
				<p class="article-description">
                    <? /*= StringHelper::truncate($article['content'], 150) */ ?>
				</p>
				<span><? /*= $article['article_date'] */ ?></span>
			</article>
        --><?php /*endforeach; */ ?>

        <?php foreach ($allArticles as $article): ?>

            <div class="card mb-3 h-100">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/cards.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="<?= Url::to(['article-view', 'id' => $article['id']]) ?>">
                                    <?= $article['title'] ?>
                                </a>
                            </h5>
                            <p class="card-text">
                                <?= StringHelper::truncate($article['content'], 150) ?>
                            </p>
                            <p class="card-text"><small class="text-muted"><?= $article['article_date'] ?></small></p>
                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>

    </div>
    <div class="container">

    </div>
</div>