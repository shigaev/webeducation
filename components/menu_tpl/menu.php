<li
    <?php
    if ($category['parent_id'] == 0) echo 'class="category-all__item"';
    if ($category['parent_id'] > 0) echo 'class="sub-category-all__item"';
    ?>
>
    <a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $category['id']]) ?>"
        <?php
        if ($category['parent_id'] == 0) echo 'class="category-all__link"';
        if ($category['parent_id'] > 0) echo 'class="sub-category-all__link"';
        ?>
    >
        <?= $category['title'] ?>
    </a>
    <?php if (isset($category['children'])): ?>
        <ul class="sub-category-all">
            <?= $this->getMenuHtml($category['children']) ?>
        </ul>
    <?php endif; ?>
</li>