<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\master\models\Category */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Категории', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>


<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <p>
                <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Загрузить изображение', ['upload-image', 'id' => $model->id], ['class' => 'btn btn-secondary']) ?>
                <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],
                ]) ?>
            </p>

            <?= DetailView::widget([
                'model' => $model,
                'options' => [
                    'class' => 'table'
                ],
                'attributes' => [
                    'id',
                    //'parent_id',
                    [
                        'attribute' => 'parent_id',
                        'value' => isset($model->category->title) ? '<a href=" ' . \yii\helpers\Url::to(['category/view', 'id' => $model->category->id]) . ' ">' . $model->category->title . '</a>' : 'Самостоятельная категория',
                        'format' => 'raw'
                    ],
                    'title',
                    'description',
                    [
                        'attribute' => 'index_page',
                        'value' => function ($data) {
                            return ($data->index_page) ? 'да' : 'нет';
                        }
                    ],
                ],
            ]) ?>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <tbody>
                <tr>
                    <th style="width: 10px">ID</th>
                    <th>Заголовок поста</th>
                </tr>
                <?php foreach ($testPost as $item): ?>
                    <tr>
                        <td><?= $item['id'] ?></td>
                        <td>
                            <a href="/master/post/view?id=<?= $item->id ?>">
                                <?= $item->post_title ?>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


