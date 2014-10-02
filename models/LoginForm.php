<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 */
class LoginForm extends Model
{
    public $gmail;
    public $password;
    public $rememberMe = true;

    private $_user = false;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['gmail', 'password'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     */
    public function validatePassword()
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            
            if ($user === null) {
            	throw new \yii\base\Exception('Current user has not been found in the database.');
            }

            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError('password', 'Incorrect gmail login or password.');
            }
        }
    }

    /**
     * Logs in a user using the provided gmail and password.
     * @return boolean whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600*24*30 : 0);
        } else {
            return false;
        }
    }

    /**
     * Finds user by [[gmail]]
     *
     * @return User|null
     */
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::findByGmail($this->gmail);
        }

        return $this->_user;
    }
}
