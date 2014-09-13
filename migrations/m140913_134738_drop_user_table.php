<?php

use yii\db\Schema;

class m140913_134738_drop_user_table extends \yii\db\Migration
{
    public function up()
    {
		$this->dropTable('user');
		$this->dropColumn('product', 'id_publisher');
		$this->addColumn('product', 'id_google_plus', Schema::TYPE_STRING);
    }

    public function down()
    {
    	$type = Schema::TYPE_INTEGER . ' NOT NULL';
    	$this->addColumn('product', 'id_publisher', $type);
    	$this->dropColumn('product', 'id_google_plus');
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
}
