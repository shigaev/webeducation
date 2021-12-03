<?php

use yii\bootstrap4\Breadcrumbs;
use yii\helpers\Url;

$this->title = $title;

echo Breadcrumbs::widget([
    'itemTemplate' => "<li class='breadcrumb-item test'>{link}</li>\n", // template for all links
    'homeLink' => [
        'label' => 'Главная ',
        'url' => Yii::$app->homeUrl,
        'title' => 'Главная страница сайта',
        //любые атрибуты ссылки : class, style и т.п.
    ],
    'links' => [
        [
            'label' => $parentCategory['title'],
            'url' => Url::toRoute($parentCategory['id']),
            'template' => "<li class='breadcrumb-item test'>{link}</li>\n", // template for this link only
        ],
        $model['title'],
    ],
]);
?>

<div class="wrapper wrapper-post">
    <h2 class="title"><?= $model['title'] ?></h2>
    <?php

    ?>
    <div class="test">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-12">
                <div class="sidebar">
                    <p class="sidebar-title">Темы:</p>
                    <div class="sidebar-inside">
                        <ol class="sidebar-list">
                            <?php foreach ($posts as $post): ?>
                                <li class="sidebar-item">
                                    <a class="sidebar-link"
                                       href="#<?= $post['id'] ?>"><?= $post['post_title'] ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-12">
                <?php foreach ($posts as $post): ?>
                    <div class="post">
                        <h2 class="post-title">
                            <a class="post-title__link" href="#<?= $post['id'] ?>" name="<?= $post['id'] ?>">
                                <?= $post['post_title'] ?>
                            </a>
                        </h2>
                        <p>
                            <?= $post['post_content'] ?>
                        </p>
                        <hr>
                        <p>
                            <?= $post['post_date'] ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>