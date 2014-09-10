<?php

use yii\db\Schema;

class m140910_074454_create extends \yii\db\Migration
{
    public function up()
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
    	$this->insert('category', [
    			'id' => 19,
    			'id_parent' => 1,
    			'name' => 'Office',
    			'active' => 1,
    			'position' => 10,
    			]);
    	
    	
    	
    	$this->createTable('product', [
    			'id' => Schema::TYPE_PK,
    			'id_category' => Schema::TYPE_INTEGER . ' NOT NULL',
    			'name' => Schema::TYPE_STRING . ' NOT NULL',
    			'home_link' => Schema::TYPE_STRING,
    			'report_link' => Schema::TYPE_STRING . ' NOT NULL',
    			'requirements' => Schema::TYPE_STRING,
    			'short_description' => Schema::TYPE_STRING,
    			'description' => Schema::TYPE_TEXT,
    			'installation' => Schema::TYPE_TEXT,
    			'stars' => Schema::TYPE_SMALLINT,
    			'price'  => Schema::TYPE_FLOAT,
    			'author' => Schema::TYPE_STRING . ' NOT NULL',
    			'id_publisher' => Schema::TYPE_INTEGER . ' NOT NULL',
    			'active' => Schema::TYPE_SMALLINT . ' NOT NULL',
    			'date_add' => Schema::TYPE_TIMESTAMP,
    			'date_upd' => Schema::TYPE_TIMESTAMP,
    			'position' => Schema::TYPE_INTEGER . ' NOT NULL',
    			]);
    	
    	$this->createTable('product_report', [
    			'id' => Schema::TYPE_PK,
    			'type' => Schema::TYPE_STRING . ' NOT NULL',
    			'id_product' => Schema::TYPE_INTEGER . ' NOT NULL',
    			'content' => Schema::TYPE_TEXT,
    			'date_add' => Schema::TYPE_TIMESTAMP,
    			'date_read' => 'TIMESTAMP NULL DEFAULT NULL',
    			'date_solve' => 'TIMESTAMP NULL DEFAULT NULL',
    			]);
    	
    	$this->createTable('product_rating', [
    			'id' => Schema::TYPE_PK,
    			'id_product' => Schema::TYPE_INTEGER . ' NOT NULL',
    			'id_user' => Schema::TYPE_INTEGER . ' NOT NULL',
    			'like' => Schema::TYPE_SMALLINT,
    			'unlike' => Schema::TYPE_SMALLINT,
    			]);
    	
    	$this->createTable('product_os', [
    			'id' => Schema::TYPE_PK,
    			'id_product' => Schema::TYPE_INTEGER . ' NOT NULL',
    			'id_os' =>Schema::TYPE_INTEGER . ' NOT NULL',
    			'os_version' => Schema::TYPE_STRING,
    			'id_os_bit' =>Schema::TYPE_INTEGER . ' NOT NULL',
    			]);
    	
    	$this->createTable('os', [
    			'id' => Schema::TYPE_PK,
    			'name' => Schema::TYPE_STRING . ' NOT NULL',
    			]);
    	$this->insert('os', ['id' => 1, 'name' => 'Any']);
    	$this->insert('os', ['id' => 2, 'name' => 'CentOS']);
    	$this->insert('os', ['id' => 3, 'name' => 'RHEL']);
    	$this->insert('os', ['id' => 4, 'name' => 'Fedora']);
    	
    	$this->createTable('os_bit', [
    			'id' => Schema::TYPE_PK,
    			'name' => Schema::TYPE_STRING . ' NOT NULL',
    			]);
    	$this->insert('os_bit', ['id' => 1, 'name' => '32 & 64']);
    	$this->insert('os_bit', ['id' => 2, 'name' => '32']);
    	$this->insert('os_bit', ['id' => 3, 'name' => '64']);
    	
    	$this->createTable('product_tag', [
    			'id' => Schema::TYPE_PK,
    			'id_product' => Schema::TYPE_INTEGER . ' NOT NULL',
    			'tag' => Schema::TYPE_STRING . ' NOT NULL',
    			]);
    	
    	$this->createTable('product_comment', [
    			'id' => Schema::TYPE_PK,
    			'id_product' => Schema::TYPE_INTEGER . ' NOT NULL',
    			'content' => Schema::TYPE_TEXT . ' NOT NULL',
    			'publisher' => Schema::TYPE_INTEGER . ' NOT NULL',
    			'active' => Schema::TYPE_SMALLINT . ' NOT NULL',
    			'date_add' => Schema::TYPE_DATETIME,
    			'date_upd' => Schema::TYPE_DATETIME,
    			'position' => Schema::TYPE_INTEGER . ' NOT NULL',
    			]);
    	
    	$this->createTable('product_comment_rating', [
    			'id' => Schema::TYPE_PK,
    			'id_product_comment' => Schema::TYPE_INTEGER . ' NOT NULL',
    			'id_user' => Schema::TYPE_INTEGER . ' NOT NULL',
    			'like' => Schema::TYPE_SMALLINT,
    			'unlike' => Schema::TYPE_SMALLINT,
    			]);
    	
    }

    public function down()
    {
    	$this->dropTable('category');
		$this->dropTable('product');
		$this->dropTable('product_report');
		$this->dropTable('product_rating');
		$this->dropTable('product_os');
		$this->dropTable('os');
		$this->dropTable('os_bit');
		$this->dropTable('product_tag');
		$this->dropTable('product_comment');
		return $this->dropTable('product_comment_rating');
    }
}
