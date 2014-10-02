<?php

namespace app\models;

use Yii;
use yii\base\NotSupportedException;
use yii\db\ActiveRecord;
use yii\helpers\Security;
use yii\base\Exception;
use yii\web\IdentityInterface;
use yii\base\UserException;


/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $lastname
 * @property string $firstname
 * @property string $email
 * @property string $gmail 
 * @property string $passwd
 * @property string $auth_key
 * @property string $access_token
 * @property string $date_add
 * @property string $date_upd
 * @property integer $active
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }
 
	/**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
    	return static::findOne($id);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token)
    {
    	echo 'findIdentityByAccessToken'; exit;
    	throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
        foreach (self::$users as $user) {
            if ($user['access_token'] === $token) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * Finds user by username
     *
     * @param  string      $username
     * @return static|null
     */
    public static function findByGmail($gmail)
    {
    	$User = static::findOne(['gmail' => strtolower($gmail)]);
    	if ($User == null){
    		return null;
    	}elseif($User->active == 0){
    		throw new UserException('Please activate your account by link in your mail ('.$gmail.'@gmail.com) // check spam folder');
    	}else{
    		return $User;
    	}
    	
    }
    
    /**
     * Finds user by password reset token
     *
     * @param  string      $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
    	$expire = Yii::$app->params['user.passwordResetTokenExpire'];
    	$parts = explode('_', $token);
    	$timestamp = (int) end($parts);
    	if ($timestamp + $expire < time()) {
    		// token expired
    		return null;
    	}
    
    	return static::findOne([
    			'password_reset_token' => $token
    			]);
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
    	echo 'validateAuthKey'; exit;
        return $this->auth_key === $authKey;
    }

    /**
     * Validates password
     *
     * @param  string  $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->passwd === sha1($password);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
    	echo 'setPassword'; exit;
    	$this->password_hash = Security::generatePasswordHash($password);
    }
    
    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
    	$this->auth_key = Security::generateRandomKey();
    }
    
    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
    	$this->password_reset_token = Security::generateRandomKey() . '_' . time();
    }
    
    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
    	$this->password_reset_token = null;
    }
    
    /**
     * @param Form model $form
     * @return false or create token
     */
    public static function createUser($form){
    	if (static::userExist($form->gmail)){
    		throw new UserException('User with this gmail login is already registered');
    	}
    	$model = new self;
    	$model->lastname = $form->lastname;
    	$model->firstname = $form->firstname;
    	$model->email = $form->email;
    	$model->gmail = $form->gmail;
    	$model->passwd = sha1($form->passwd);
    	$model->create_token = Security::generateRandomKey();
    	$model->active = 0;
   		if($model->insert()){
   			return $model->create_token;
   		}else{
   			return false;
   		}

    }
    
    /**
     * @param string $gmail
     * @return boolean
     */
    public static function userExist($gmail){
    	return (static::findByGmail($gmail) === null)? false : true;
    }
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
           [['lastname', 'firstname', 'email', 'gmail', 'passwd', 'active'], 'required'],
           [['gmail'], 'unique'],
           [['date_add', 'date_upd'], 'safe'],
           [['active'], 'integer'],
           [['lastname', 'firstname', 'email', 'gmail', 'passwd', 'auth_key', 'access_token'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lastname' => 'Lastname',
            'firstname' => 'Firstname',
            'email' => 'Email',
            'gmail' => 'Gmail login', 
            'passwd' => 'Passwd',
            'auth_key' => 'Auth Key',
            'access_token' => 'Access Token',
            'date_add' => 'Date Add',
            'date_upd' => 'Date Upd',
            'active' => 'Active',
        ];
    }
}
