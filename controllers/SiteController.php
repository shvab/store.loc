<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\RegistrationForm;

class SiteController extends Controller
{
	
	/**
	 * TODO: verbs uncomment
	 */
    public function behaviors()
    {
    	
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                /*'actions' => [
                    'logout' => ['post'],
                ],*/
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
    	Yii::$app->view->registerJsFile('js/home.js');
    	Yii::$app->view->title = '';
        return $this->render('index',
        		['categories' => Yii::$app->params['categories']]);
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
        	Yii::$app->view->title = '- Login';
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
    
	public function actionRegistration()
	{
	    $model = new RegistrationForm;
	
	    if ($model->load(Yii::$app->request->post()) && $model->send()) {
	    	return $this->goHome();
	    }
	    
	    Yii::$app->view->registerJsFile('js/registration.js');
	    Yii::$app->view->title = '- Registration';
	
	    return $this->render('registration', [
	        'model' => $model,
	    ]);
	}
	
	public function actionTerms()
	{
		Yii::$app->view->title = '- Terms of Use';
		return $this->render('termsOfUse');
	}
	
	public function actionPolicy()
	{
		Yii::$app->view->title = '- Private Policy';
		return $this->render('privacyPolicy');
	}

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionAbout()
    {
        return $this->render('about');
    }
}
