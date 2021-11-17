<?php

use app\components\CategoryMenuWidget;

?>

<div class="container">
    <h2>Все категории</h2>

    <?= CategoryMenuWidget::widget([
        'tpl' => 'menu',
        'ul_class' => 'category-all',
    ]) ?>
</div>