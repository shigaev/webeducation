<?php

namespace app\controllers;

use app\components\CategoryMenuWidget;
use app\models\Category;
use app\models\Chapter;
use app\models\Post;
use yii\web\Controller;

class CategoryController extends Controller
{
    public $arr = [];

    public function actionIndex()
    {
        $chapter = Chapter::find()->all();
        return $this->render('index', compact('chapter'));
    }

    public function actionView($id)
    {
        $category = Category::findOne($id);
        $chapter = Chapter::find()->all();

        $cat = Category::find()
            ->select('id,parent_id,title,chapter_id')
            ->indexBy('id')
            ->where([
                'parent_id' => $id,
            ])
            ->orderBy('sort_field')
            ->asArray()
            ->all();

        return $this->render('view', compact('cat', 'category', 'chapter'));
    }

    public function actionPosts($id)
    {
        $model = Category::findOne($id);
        $title = $model['title'];
        $parentCategory = $model->parent;
        $posts = $model->posts;

        return $this->render('posts', compact('posts', 'model', 'title', 'parentCategory'));
    }
}