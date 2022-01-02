<?php

namespace app\widgets;

use app\models\Articles;
use app\models\ArticlesCategory;
use yii\base\Widget;

class ArticleCategory extends Widget
{
    public $articleCategoryData;
    public $htmlTemplate;
    public $tpl;
    public $div_class;

    public function init()
    {
        parent::init();
        if ($this->articleCategoryData === null) {
            $this->articleCategoryData = [];
        }
        if ($this->div_class === null) {
            $this->div_class = 'default';
        }
        $this->tpl .= '.php';
    }

    public function run()
    {
        $this->articleCategoryData = ArticlesCategory::find()
            ->asArray()
            ->all();

        $this->htmlTemplate = '<div class="' . $this->div_class . '">';
        $this->htmlTemplate .= $this->getArticleCategoryData($this->articleCategoryData);
        $this->htmlTemplate .= '</div>';

        return $this->htmlTemplate;
    }

    public function getArticleCategoryData($articleCategoryArray)
    {
        $artCatStr = '';
        foreach ($articleCategoryArray as $item) {
            $artCatStr .= $this->getArticleCategoryTemplate($item, '');
        }
        return $artCatStr;
    }

    public function getArticleCategoryTemplate($category, $key)
    {
        ob_start();
        include __DIR__ . '/article_category_tpl/' . $this->tpl;
        return ob_get_clean();
    }
}