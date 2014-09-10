<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $lastname
 * @property string $firstname
 * @property string $email
 * @property string $passwd
 * @property string $last_passwd_gen
 * @property integer $active
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }
    
 	/*private static $users = [
		'100' => [
		'id' => '100',
		'username' => 'admin',
		'password' => 'admin',
		'authKey' => 'test100key',
		'accessToken' => '100-token',
		],
		'101' => [
		'id' => '101',
		'username' => 'demo',
		'password' => 'demo',
		'authKey' => 'test101key',
		'accessToken' => '101-token',
		],
	];	*/
 
	/**
	* @inheritdoc
	*/
	public static function findIdentity($id){
		return new static(self::findOne($id));
	}
	
	/**
	 * @inheritdoc
	 * TODO: authKey cheking
	 */
	public function validateAuthKey($authKey){
		return true;
		//return $this->authKey === $authKey;
	}

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lastname', 'firstname', 'email', 'passwd', 'last_passwd_gen', 'active'], 'required'],
            [['last_passwd_gen'], 'safe'],
            [['active'], 'integer'],
            [['lastname', 'firstname', 'email', 'passwd'], 'string', 'max' => 255]
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
            'passwd' => 'Passwd',
            'last_passwd_gen' => 'Last Passwd Gen',
            'active' => 'Active',
        ];
    }
}
