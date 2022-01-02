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
	<div class="container">

	</div>
</div>