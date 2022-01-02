<div class="container">

    <?= \app\widgets\ArticleCategory::widget([
        'tpl' => 'stroke',
        'div_class' => 'article-category'
    ]) ?>

	<div class="article-view">
		<h2><?= $artArt['title'] ?></h2>
		<p>
            <?= $artArt['content'] ?>
		</p>
	</div>


</div>