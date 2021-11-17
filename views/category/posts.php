<?php
?>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="sidebar">
                <ul>
                    <?php foreach ($posts as $post): ?>
                        <li>
                            <a href="#"><?= $post['post_title'] ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <?php foreach ($posts as $post): ?>
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
    </div>
</div>