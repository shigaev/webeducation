<?php

namespace app\modules\master\controllers;

use yii\web\Controller;

/**
 * Default controller for the `adminLTE` module
 */
class DefaultController extends AppAdminController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
