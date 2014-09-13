<?php

namespace app\controllers;

use Yii;

class ScriptController extends \yii\web\Controller
{
    public function actionCategories()
    {
        return $this->renderJSON(Yii::$app->params['categories']);
    }

    private function renderJSON($data){
    	header('Content-Type: application/json');
    	echo json_encode($data);
    	exit;
    }
}
