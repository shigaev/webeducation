<?php
?>

<div class="wrapper">
    <div class="container-fluid">
        <h2 class="title"><?= $model['title'] ?></h2>
        <div class="row">
            <div class="sidebar">
                <div class="sidebar-inside">
                    <ul class="sidebar-list">
                        <?php foreach ($posts as $post): ?>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="#<?= $post['id'] ?>"><?= $post['post_title'] ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
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
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>