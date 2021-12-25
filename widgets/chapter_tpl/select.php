<option value="<?= $datum['id'] ?>"
    <?php if ($datum['id'] == $this->model->chapter_id) echo 'selected' ?>
    <?php if ($datum['id'] == $this->model->id) echo 'disabled' ?>
>
    <?= $datum['title'] ?>
</option>
<?php
debug($this->model);
?>