<?php

namespace app\widgets;

use yii\base\Widget;

class Chapter extends Widget
{
    public $data;
    public $htmlTemplate;

    public function init()
    {
        parent::init();
        if ($this->data === null) {
            $this->data = 'Нет данных';
        }
    }

    public function run()
    {
        $this->data = \app\modules\master\models\Chapter::find()
            ->select('id,title')
            ->indexBy('id')
            ->asArray()
            ->all();

        $this->htmlTemplate .= $this->getHtmlTemplate($this->data);

        return $this->htmlTemplate;
    }

    public function getHtmlTemplate($data)
    {
        $dataStr = '';
        foreach ($data as $key => $datum) {
            $dataStr .= '<option value="' . $data[$key]['id'] . '">' . $data[$key]['title'] . '</option>';
        }
        return $dataStr;
    }
}