<?php

namespace app\widgets;

use yii\base\Widget;

class Chapter extends Widget
{
    public $data;
    public $htmlTemplate;
    public $tpl;
    public $model;

    public function init()
    {
        parent::init();
        if ($this->data === null) {
            $this->data = [];
        }
        $this->tpl .= '.php';
    }

    public function run()
    {
        $this->data = \app\modules\master\models\Chapter::find()
            ->select('id,title')
            ->indexBy('id')
            ->asArray()
            ->all();


        $this->htmlTemplate .= $this->getChapterData($this->data);

        return $this->htmlTemplate;
    }

    public function getChapterData($data)
    {
        $dataStr = '';
        foreach ($data as $datum) {
            $dataStr .= $this->getChapterTemplate($datum, '');
        }
        return $dataStr;
    }

    public function getChapterTemplate($datum, $key)
    {
        ob_start();
        include __DIR__ . '/chapter_tpl/' . $this->tpl;
        return ob_get_clean();
    }
}