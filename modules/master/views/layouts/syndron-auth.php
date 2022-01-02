<?php

use app\assets\SyndronAuthAsset;
use yii\helpers\Html;

SyndronAuthAsset::register($this);
?>
<?= $this->beginPage() ?>
	<!doctype html>
	<html lang="<?= Yii::$app->language ?>">

	<head>
		<base href="/web/syndron/">
		<!-- Required meta tags -->
		<meta charset="<?= Yii::$app->charset ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->registerCsrfMetaTags() ?>
		<!--favicon-->
		<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png"/>
		<title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
	</head>

	<body class="bg-login">
    <?php $this->beginBody() ?>
    <?= $content ?>
    <?php $this->endBody() ?>
	</body>
	</html>
<?php $this->endPage() ?>