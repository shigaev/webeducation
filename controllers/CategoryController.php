<?php

namespace app\controllers;

use app\models\Category;
use yii\web\Controller;

class CategoryController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionView($id)
    {
        $category = Category::findOne($id);

        $cat = Category::find()
            ->select('id,parent_id,title')
            ->where([
                'parent_id' => $id,
            ])
            ->asArray()
            ->all();

        return $this->render('view', compact('cat', 'category'));
    }

    public function actionPosts($id)
    {

        $model = Category::findOne($id);

        $posts = $model->posts;

        return $this->render('posts', compact('posts'));
    }
}