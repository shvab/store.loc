<?php

namespace app\controllers;

use Yii;
use app\models\Product;

class ScriptController extends \yii\web\Controller
{
    public function actionCategories()
    {
        return $this->renderJSON(Yii::$app->params['categories']);
    }
    
    public function actionProducts_home()
    {
    	$Product = new Product();
    	return $this->renderJSON($Product->getHomeProducts());
    }

    private function renderJSON($data){
    	header('Content-Type: application/json');
    	echo json_encode($data);
    	exit;
    }
}
