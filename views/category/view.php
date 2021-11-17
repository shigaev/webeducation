<?php
?>

<div class="container">

    <h2><?= $category['title'] ?></h2>
    <ul>
        <?php foreach ($cat as $item): ?>
            <li>
                <a href="<?= \yii\helpers\Url::to(['category/posts', 'id' => $item['id']]) ?>">
                    <?= $item['title'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>


    <?php foreach ($category->posts as $post): ?>
        <div class="post">
            <h2>
                <?= $post['post_title'] ?>
            </h2>
            <p>
                <?= $post['post_content'] ?>
            </p>
        </div>
    <?php endforeach; ?>

</div>