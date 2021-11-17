<?php

namespace app\modules\master\controllers;

use app\modules\master\models\Category;
use app\modules\master\models\Post;

class MainController extends AppAdminController
{
    public function actionIndex()
    {
        $categories = Category::find()->count();
        $posts = Post::find()->count();

        return $this->render('index', compact('categories', 'posts'));
    }
}