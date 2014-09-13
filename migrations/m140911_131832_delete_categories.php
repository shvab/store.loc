<?php

use yii\db\Schema;

class m140911_131832_delete_categories extends \yii\db\Migration
{
    public function up()
    {
    	$this->dropTable('category');
    }

    public function down()
    {
        $this->createTable('category', [
    			'id' => Schema::TYPE_PK,
    			'id_parent' => Schema::TYPE_INTEGER . ' NOT NULL',
    			'name' => Schema::TYPE_STRING . ' NOT NULL',
    			'active' => Schema::TYPE_SMALLINT . ' NOT NULL',
    			'date_add' => Schema::TYPE_TIMESTAMP,
    			'date_upd' => Schema::TYPE_TIMESTAMP,
    			'position' => Schema::TYPE_INTEGER . ' NOT NULL',
    			]);
    	$this->insert('category', [
				'id' => 1,
    			'id_parent' => 0,
    			'name' => 'root',
    			'active' => 0,
    			'position' => 1,
    	]);
    	$this->insert('category', [
    			'id' => 2,
    			'id_parent' => 1,
    			'name' => 'Accessories',
    			'active' => 1,
    			'position' => 1,
    			]);
    	$this->insert('category', [
    			'id' => 3,
    			'id_parent' => 1,
    			'name' => 'Graphics',
    			'active' => 1,
    			'position' => 2,
    			]);
    	$this->insert('category', [
    			'id' => 4,
    			'id_parent' => 1,
    			'name' => 'Internet',
    			'active' => 1,
    			'position' => 3,
    			]);
    	$this->insert('category', [
    			'id' => 5,
    			'id_parent' => 1,
    			'name' => 'Programming',
    			'active' => 1,
    			'position' => 4,
    			]);
    	$this->insert('category', [
    			'id' => 6,
    			'id_parent' => 1,
    			'name' => 'Sound & Video',
    			'active' => 1,
    			'position' => 5,
    			]);
    	$this->insert('category', [
    			'id' => 7,
    			'id_parent' => 1,
    			'name' => 'System Tools',
    			'active' => 1,
    			'position' => 6,
    			]);
    	$this->insert('category', [
    			'id' => 8,
    			'id_parent' => 1,
    			'name' => 'Games',
    			'active' => 0,
    			'position' => 7,
    			]);
    	$this->insert('category', [
    			'id' => 9,
    			'id_parent' => 1,
    			'name' => 'Other',
    			'active' => 1,
    			'position' => 8,
    			]);
    	$this->insert('category', [
    			'id' => 10,
    			'id_parent' => 1,
    			'name' => 'OS',
    			'active' => 1,
    			'position' => 9,
    			]);
    	$this->insert('category', [
    			'id' => 11,
    			'id_parent' => 8,
    			'name' => 'Arcade',
    			'active' => 1,
    			'position' => 1,
    			]);
    	$this->insert('category', [
    			'id' => 12,
    			'id_parent' => 8,
    			'name' => 'Board',
    			'active' => 1,
    			'position' => 2,
    			]);
    	$this->insert('category', [
    			'id' => 13,
    			'id_parent' => 8,
    			'name' => 'Card',
    			'active' => 1,
    			'position' => 3,
    			]);
    	$this->insert('category', [
    			'id' => 14,
    			'id_parent' => 8,
    			'name' => 'Dice',
    			'active' => 1,
    			'position' => 4,
    			]);
    	$this->insert('category', [
    			'id' => 15,
    			'id_parent' => 8,
    			'name' => 'Logic',
    			'active' => 1,
    			'position' => 5,
    			]);
    	$this->insert('category', [
    			'id' => 16,
    			'id_parent' => 8,
    			'name' => 'Strategy',
    			'active' => 1,
    			'position' => 6,
    			]);
    	$this->insert('category', [
    			'id' => 17,
    			'id_parent' => 8,
    			'name' => 'Toy',
    			'active' => 1,
    			'position' => 7,
    			]);
    	$this->insert('category', [
    			'id' => 18,
    			'id_parent' => 8,
    			'name' => 'Other',
    			'active' => 1,
    			'position' => 8,
    			]);
    	return $this->insert('category', [
    			'id' => 19,
    			'id_parent' => 1,
    			'name' => 'Office',
    			'active' => 1,
    			'position' => 10,
    			]);

        
    }
}
