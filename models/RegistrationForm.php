<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\User;
use yii\helpers\Url;
use yii\base\Exception;

/**
 * ContactForm is the model behind the contact form.
 */
class RegistrationForm extends Model
{
	public $gmail;
	public $email;
    public $lastname;
    public $firstname;
    public $passwd;
    public $verifyCode;
    public $passwdVerification;
    public $termsOfUse;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
    	return [
    	[['lastname', 'firstname', 'email', 'gmail', 'passwd', 'passwdVerification', 'termsOfUse'], 'required'],
    	['email', 'email'],
    	['gmail', 'match', 'not' => true, 'pattern' => '/[^_a-zA-Z0-9-.]+/',
  			'message' => 'Gmail login must consist of letters, numbers, underscores, dashes and point only'],
    	[['passwdVerification'], 'compare', 'compareAttribute'=>'passwd', 'operator'=>'=='],
    	['verifyCode', 'captcha'],
    	[['lastname', 'firstname', 'email', 'gmail', 'passwd', 'passwdVerification'], 'string', 'max' => 255],
    	[['passwd', 'passwdVerification'], 'string', 'min' => 7],
    	[['gmail'], 'string', 'min' => 3],
    	['termsOfUse', 'boolean'],
    	['termsOfUse', 'compare', 'compareValue' => true, 'message' => 'You must agree to the  Terms of Use and Privacy Policy'],
    	];
    }


    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
        	'gmail' => 'Gmail login',
        	'email' => 'Email for reports',
	        'lastname' => 'Lastname',
	        'firstname' => 'Firstname',
	        'passwd' => 'Password',
	        'passwdVerification' => 'Password verification',
            'verifyCode' => 'Verification Code',
            'termsOfUse' => 'label', 
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * 
     * @todo subject and body of mail   
     * @param  string  $email the target email address
     * @return boolean whether the model passes validation
     */
    public function send()
    {
        if ($this->validate()) {
        	$create_token = User::createUser($this);
        	if ($create_token){
	            $mailResult = Yii::$app->mail->compose()
	                ->setTo($this->gmail.'@gmail.com')
	                ->setFrom(Yii::$app->params['noReplayEmail'])
	                ->setSubject('subject')
	                ->setTextBody('body')
	                ->send();
	            if (!$mailResult){
	            	User::deleteAll(['create_token' => $create_token]);
	            	throw new Exception('Mail with create token not send');
	            }
	            return true;
        	} 
        } 
        return false;
    }
}
