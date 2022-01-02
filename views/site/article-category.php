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
		<h2><?= $articleCategory['title'] ?></h2>
        <?php foreach ($articles as $article): ?>

			<h2>
				<a href="<?= Url::to(['article-view', 'id' => $article['id']]) ?>"><?= $article['title'] ?></a>
			</h2>
			<p>
                <?= StringHelper::truncate($article['content'], 150) ?>
			</p>
			<span><?= $article['article_date'] ?></span>

        <?php endforeach; ?>
	</div>
</div>