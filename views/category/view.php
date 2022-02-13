<?php

use yii\helpers\Url;

?>

<div class="wrapper category-view">
    <div class="container">
        <h2><?= $category['title'] ?></h2>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <?php foreach ($chapter as $item): ?>
                    <?php
                    $result = false;
                    foreach ($item->cate as $chap): ?>
                        <?php if ($chap['parent_id'] === $category['id']) {
                            $result = true;
                        }
                        ?>
                    <?php endforeach; ?>

                    <?php if ($result === true): ?>
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
                <hr>
                <ul class="no-chapter">
                    <?php foreach ($cat as $items): ?>
                        <?php if ($items['chapter_id'] == 0): ?>
                            <li class="no-chapter__item">
                                <a class="no-chapter__link"
                                   href="<?= Url::to(['category/posts', 'id' => $items['id']]) ?>">
                                    <?= $items['title'] . '<br>' ?>
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>