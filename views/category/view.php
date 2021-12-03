<?php

use yii\helpers\Url;

?>

<div class="wrapper category-view">
    <div class="container">
        <h2><?= $category['title'] ?></h2>
        <hr>
        <?php foreach ($chapter as $item): ?>
            <?php
            $test = false;
            foreach ($item->cate as $chap): ?>
                <?php if ($chap['parent_id'] === $category['id']) {
                    $test = true;
                }
                ?>
            <?php endforeach; ?>
            <?php if ($test === true): ?>
                <h4><?= $item['title'] ?></h4>
                <hr>
            <?php endif; ?>
            <ul>
                <?php foreach ($item->cate as $chap): ?>
                    <?php if ($chap['parent_id'] === $category['id']): ?>
                        <li>
                            <a href="<?= Url::to(['category/posts', 'id' => $chap['id']]) ?>">
                                <?= $chap['title'] ?>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        <?php endforeach; ?>
    </div>
</div>