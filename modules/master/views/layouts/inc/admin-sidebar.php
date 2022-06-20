<?php

use yii\helpers\Url;

?>
<div class="flex-shrink-0 p-3 bg-white admin" style="width: 100%;">
    <ul class="list-unstyled ps-0">
        <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0"
                    data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                Home
            </button>
            <div class="collapse show" id="home-collapse" style="">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="<?= Url::to(['main/index']) ?>"
                           class="link-dark d-inline-flex text-decoration-none rounded">Статистика</a></li>
                    <li><a href="<?= Url::to(['category/index']) ?>"
                           class="link-dark d-inline-flex text-decoration-none rounded">Категории</a></li>
                    <li><a href="<?= Url::to(['post/index']) ?>"
                           class="link-dark d-inline-flex text-decoration-none rounded">Посты</a></li>
                    <li><a href="<?= Url::to(['articles/index']) ?>"
                           class="link-dark d-inline-flex text-decoration-none rounded">Статьи</a></li>
                    <li><a href="<?= Url::to(['chapter/index']) ?>"
                           class="link-dark d-inline-flex text-decoration-none rounded">Разделы</a></li>
                </ul>
            </div>
        </li>
        <li class="border-top my-3"></li>
    </ul>
</div>