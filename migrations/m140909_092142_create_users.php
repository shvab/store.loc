<?php

use yii\db\Schema;

class m140909_092142_create_users extends \yii\db\Migration
{
    public function up()
    {
    	
	    $this->createTable('user', [
				'id' => Schema::TYPE_PK,
		    	'lastname' => Schema::TYPE_STRING . ' NOT NULL',
		    	'firstname' => Schema::TYPE_STRING . ' NOT NULL',
	    		'email' => Schema::TYPE_STRING . ' NOT NULL',
	    		'passwd' => Schema::TYPE_STRING . ' NOT NULL',
	    		'last_passwd_gen' => Schema::TYPE_TIMESTAMP . ' NOT NULL',
	    		'active' => Schema::TYPE_SMALLINT . ' NOT NULL',
	    ]);
    }

    public function down()
    {
        return $this->dropTable('user');
    }
}
