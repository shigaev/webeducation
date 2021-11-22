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

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-body">
                <div class="category-view">

                    <p>
                        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
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
                        ],
                    ]) ?>

                </div>
            </div>
        </div>

        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Посты категории</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
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
                    <!--<tr>
                        <td>2.</td>
                        <td>Clean database</td>
                        <td>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                            </div>
                        </td>
                        <td><span class="badge bg-yellow">70%</span></td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Cron job running</td>
                        <td>
                            <div class="progress progress-xs progress-striped active">
                                <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                            </div>
                        </td>
                        <td><span class="badge bg-light-blue">30%</span></td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>Fix and squish bugs</td>
                        <td>
                            <div class="progress progress-xs progress-striped active">
                                <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                            </div>
                        </td>
                        <td><span class="badge bg-green">90%</span></td>
                    </tr>-->
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
            <!--<div class="box-footer clearfix">
                <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">«</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">»</a></li>
                </ul>
            </div>-->
        </div>

    </div>
</div>