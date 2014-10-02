<?php

use yii\db\Schema;

class m140922_094707_users extends \yii\db\Migration
{
    public function up()
    {
    	$type = Schema::TYPE_INTEGER . ' NOT NULL';
    	$this->addColumn('product', 'id_publisher', $type);
    	$this->dropColumn('product', 'id_google_plus');
    	$this->createTable('user', [
    			'id' => Schema::TYPE_PK,
    			'lastname' => Schema::TYPE_STRING . ' NOT NULL',
    			'firstname' => Schema::TYPE_STRING . ' NOT NULL',
    			'email' => Schema::TYPE_STRING . ' NOT NULL',
    			'gmail' => Schema::TYPE_STRING . ' NOT NULL',
    			'passwd' => Schema::TYPE_STRING . ' NOT NULL',
    			'auth_key' => Schema::TYPE_STRING . ' NOT NULL',
    			'access_token' => Schema::TYPE_STRING . ' NOT NULL',
    			'password_reset_token' => Schema::TYPE_STRING,
    			'create_token' => Schema::TYPE_STRING,
    			'date_add' => 'TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP',
    			'date_upd' => Schema::TYPE_TIMESTAMP,
    			'active' => Schema::TYPE_SMALLINT . ' NOT NULL',
    			]);
    	$this->insert('user', [
    			'id' => 1,
    			'lastname' => 'Shvab',
    			'firstname' => 'Ostap',
    			'email' => 'shvabuk@gmail.com',
    			'gmail' => 'admin',
    			'passwd' => sha1('admin'),
    			'auth_key' => '',
    			'access_token' => '',
    			'date_upd' => time(),
    			'active' => 1,
    			]);
    	
    }

    public function down()
    {
    	$this->dropTable('user');
		$this->dropColumn('product', 'id_publisher');
		return $this->addColumn('product', 'id_google_plus', Schema::TYPE_STRING);
    }
}
