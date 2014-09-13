<?php

use yii\db\Schema;

class m140911_184851_test_data extends \yii\db\Migration
{
    public function up()
    {
    	$time = time();
    	
    	$this->insert('user', [
    			'id' => 1,
    			'lastname' => 'Shvab',
    			'firstname' => 'Ostap',
    			'email' => 'shvabuk@gmail.com',
    			'passwd' => '',
    			'last_passwd_gen' => $time,
    			'active' => 1,
    			]);
    	
    	$this->insert('product', [
    			'id' => 1,
    			'id_category' => 1,
    			'name' => 'Screener',
    			'home_link' => 'www.google.com',
    			'report_link' => 'shvabuk@gmail.com',
    			'requirements' => 'Need python',
    			'short_description' => 'Creat window screenshot every minute',
    			'description' => 'Creat window screenshot every minute <br> For strating type in command line: <quote>python screener.py</quote>',
    			'installation' => 'Don`t need',
    			'stars' => 1,
    			'price' => Null,
    			'author' => 'Shvab Ostap',
    			'id_publisher' => 1,
    			'active' => 1,
    			'position' => 1,
    			]);
    	$this->insert('product', [
    			'id' => 2,
    			'id_category' => 2,
    			'name' => 'Screener',
    			'home_link' => 'www.google.com',
    			'report_link' => 'shvabuk@gmail.com',
    			'requirements' => 'Need python',
    			'short_description' => 'Creat window screenshot every minute',
    			'description' => 'Creat window screenshot every minute <br> For strating type in command line: <quote>python screener.py</quote>',
    			'installation' => 'Don`t need',
    			'stars' => 5,
    			'price' => 0.01,
    			'author' => 'Shvab Ostap',
    			'id_publisher' => 1,
    			'active' => 1,
    			'position' => 1,
    			]);
    	$this->insert('product', [
    			'id' => 3,
    			'id_category' => 3,
    			'name' => 'Screener',
    			'home_link' => 'www.google.com',
    			'report_link' => 'shvabuk@gmail.com',
    			'requirements' => 'Need python',
    			'short_description' => 'Creat window screenshot every minute',
    			'description' => 'Creat window screenshot every minute <br> For strating type in command line: <quote>python screener.py</quote>',
    			'installation' => 'Don`t need',
    			'stars' => 1,
    			'price' => Null,
    			'author' => 'Shvab Ostap',
    			'id_publisher' => 1,
    			'active' => 1,
    			'position' => 1,
    			]);
    	$this->insert('product', [
    			'id' => 4,
    			'id_category' => 4,
    			'name' => 'Screener',
    			'home_link' => 'www.google.com',
    			'report_link' => 'shvabuk@gmail.com',
    			'requirements' => 'Need python',
    			'short_description' => 'Creat window screenshot every minute',
    			'description' => 'Creat window screenshot every minute <br> For strating type in command line: <quote>python screener.py</quote>',
    			'installation' => 'Don`t need',
    			'stars' => 1,
    			'price' => Null,
    			'author' => 'Shvab Ostap',
    			'id_publisher' => 1,
    			'active' => 1,
    			'position' => 1,
    			]);
    	$this->insert('product', [
    			'id' => 5,
    			'id_category' => 5,
    			'name' => 'Screener',
    			'home_link' => 'www.google.com',
    			'report_link' => 'shvabuk@gmail.com',
    			'requirements' => 'Need python',
    			'short_description' => 'Creat window screenshot every minute',
    			'description' => 'Creat window screenshot every minute <br> For strating type in command line: <quote>python screener.py</quote>',
    			'installation' => 'Don`t need',
    			'stars' => 1,
    			'price' => Null,
    			'author' => 'Shvab Ostap',
    			'id_publisher' => 1,
    			'active' => 1,
    			'position' => 1,
    			]);
    	$this->insert('product', [
    			'id' => 6,
    			'id_category' => 6,
    			'name' => 'Screener',
    			'home_link' => 'www.google.com',
    			'report_link' => 'shvabuk@gmail.com',
    			'requirements' => 'Need python',
    			'short_description' => 'Creat window screenshot every minute',
    			'description' => 'Creat window screenshot every minute <br> For strating type in command line: <quote>python screener.py</quote>',
    			'installation' => 'Don`t need',
    			'stars' => 1,
    			'price' => Null,
    			'author' => 'Shvab Ostap',
    			'id_publisher' => 1,
    			'active' => 1,
    			'position' => 1,
    			]);
    	$this->insert('product', [
    			'id' => 7,
    			'id_category' => 7,
    			'name' => 'Screener',
    			'home_link' => 'www.google.com',
    			'report_link' => 'shvabuk@gmail.com',
    			'requirements' => 'Need python',
    			'short_description' => 'Creat window screenshot every minute',
    			'description' => 'Creat window screenshot every minute <br> For strating type in command line: <quote>python screener.py</quote>',
    			'installation' => 'Don`t need',
    			'stars' => 1,
    			'price' => Null,
    			'author' => 'Shvab Ostap',
    			'id_publisher' => 1,
    			'active' => 1,
    			'position' => 1,
    			]);
    	$this->insert('product', [
    			'id' => 8,
    			'id_category' => 8,
    			'name' => 'Screener',
    			'home_link' => 'www.google.com',
    			'report_link' => 'shvabuk@gmail.com',
    			'requirements' => 'Need python',
    			'short_description' => 'Creat window screenshot every minute',
    			'description' => 'Creat window screenshot every minute <br> For strating type in command line: <quote>python screener.py</quote>',
    			'installation' => 'Don`t need',
    			'stars' => 0,
    			'price' => Null,
    			'author' => 'Shvab Ostap',
    			'id_publisher' => 1,
    			'active' => 1,
    			'position' => 1,
    			]);
    	$this->insert('product', [
    			'id' => 9,
    			'id_category' => 9,
    			'name' => 'Athena',
    			'home_link' => 'athena.google.com',
    			'report_link' => 'heracles@gmail.com',
    			'requirements' => 'Any computer',
    			'short_description' => 'Operation system for Kids',
    			'description' => 'Operation system for Kids',
    			'installation' => 'Just follow the instructions',
    			'stars' => 10,
    			'price' => Null,
    			'author' => 'Heracles & Iolaus',
    			'id_publisher' => 1,
    			'active' => 1,
    			'position' => 1,
    			]);
    	$this->insert('product', [
    			'id' => 10,
    			'id_category' => 10,
    			'name' => 'Screener',
    			'home_link' => 'www.google.com',
    			'report_link' => 'shvabuk@gmail.com',
    			'requirements' => 'Need python',
    			'short_description' => 'Creat window screenshot every minute',
    			'description' => 'Creat window screenshot every minute <br> For strating type in command line: <quote>python screener.py</quote>',
    			'installation' => 'Don`t need',
    			'stars' => 2,
    			'price' => Null,
    			'author' => 'Shvab Ostap',
    			'id_publisher' => 1,
    			'active' => 1,
    			'position' => 1,
    			]);
    	$this->insert('product', [
    			'id' => 11,
    			'id_category' => 11,
    			'name' => 'Screener',
    			'home_link' => 'www.google.com',
    			'report_link' => 'shvabuk@gmail.com',
    			'requirements' => 'Need python',
    			'short_description' => 'Creat window screenshot every minute',
    			'description' => 'Creat window screenshot every minute <br> For strating type in command line: <quote>python screener.py</quote>',
    			'installation' => 'Don`t need',
    			'stars' => 9,
    			'price' => Null,
    			'author' => 'Shvab Ostap',
    			'id_publisher' => 1,
    			'active' => 1,
    			'position' => 1,
    			]);
    	$this->insert('product', [
    			'id' => 12,
    			'id_category' => 12,
    			'name' => 'Screener',
    			'home_link' => 'www.google.com',
    			'report_link' => 'shvabuk@gmail.com',
    			'requirements' => 'Need python',
    			'short_description' => 'Creat window screenshot every minute',
    			'description' => 'Creat window screenshot every minute <br> For strating type in command line: <quote>python screener.py</quote>',
    			'installation' => 'Don`t need',
    			'stars' => 5,
    			'price' => Null,
    			'author' => 'Shvab Ostap',
    			'id_publisher' => 1,
    			'active' => 1,
    			'position' => 1,
    			]);
    	$this->insert('product', [
    			'id' => 13,
    			'id_category' => 13,
    			'name' => 'Screener',
    			'home_link' => 'www.google.com',
    			'report_link' => 'shvabuk@gmail.com',
    			'requirements' => 'Need python',
    			'short_description' => 'Creat window screenshot every minute',
    			'description' => 'Creat window screenshot every minute <br> For strating type in command line: <quote>python screener.py</quote>',
    			'installation' => 'Don`t need',
    			'stars' => 7,
    			'price' => Null,
    			'author' => 'Shvab Ostap',
    			'id_publisher' => 1,
    			'active' => 1,
    			'position' => 1,
    			]);
    	$this->insert('product', [
    			'id' => 14,
    			'id_category' => 14,
    			'name' => 'Screener',
    			'home_link' => 'www.google.com',
    			'report_link' => 'shvabuk@gmail.com',
    			'requirements' => 'Need python',
    			'short_description' => 'Creat window screenshot every minute',
    			'description' => 'Creat window screenshot every minute <br> For strating type in command line: <quote>python screener.py</quote>',
    			'installation' => 'Don`t need',
    			'stars' => 1,
    			'price' => Null,
    			'author' => 'Shvab Ostap',
    			'id_publisher' => 1,
    			'active' => 1,
    			'position' => 1,
    			]);
    	$this->insert('product', [
    			'id' => 15,
    			'id_category' => 15,
    			'name' => 'Screener',
    			'home_link' => 'www.google.com',
    			'report_link' => 'shvabuk@gmail.com',
    			'requirements' => 'Need python',
    			'short_description' => 'Creat window screenshot every minute',
    			'description' => 'Creat window screenshot every minute <br> For strating type in command line: <quote>python screener.py</quote>',
    			'installation' => 'Don`t need',
    			'stars' => 8,
    			'price' => Null,
    			'author' => 'Shvab Ostap',
    			'id_publisher' => 1,
    			'active' => 1,
    			'position' => 1,
    			]);
    	$this->insert('product', [
    			'id' => 16,
    			'id_category' => 16,
    			'name' => 'Screener',
    			'home_link' => 'www.google.com',
    			'report_link' => 'shvabuk@gmail.com',
    			'requirements' => 'Need python',
    			'short_description' => 'Creat window screenshot every minute',
    			'description' => 'Creat window screenshot every minute <br> For strating type in command line: <quote>python screener.py</quote>',
    			'installation' => 'Don`t need',
    			'stars' => 5,
    			'price' => Null,
    			'author' => 'Shvab Ostap',
    			'id_publisher' => 1,
    			'active' => 1,
    			'position' => 1,
    			]);
    	$this->insert('product', [
    			'id' => 17,
    			'id_category' => 17,
    			'name' => 'Screener',
    			'home_link' => 'www.google.com',
    			'report_link' => 'shvabuk@gmail.com',
    			'requirements' => 'Need python',
    			'short_description' => 'Creat window screenshot every minute',
    			'description' => 'Creat window screenshot every minute <br> For strating type in command line: <quote>python screener.py</quote>',
    			'installation' => 'Don`t need',
    			'stars' => 9,
    			'price' => Null,
    			'author' => 'Shvab Ostap',
    			'id_publisher' => 1,
    			'active' => 1,
    			'position' => 1,
    			]);
    	$this->insert('product', [
    			'id' => 18,
    			'id_category' => 18,
    			'name' => 'Screener',
    			'home_link' => 'www.google.com',
    			'report_link' => 'shvabuk@gmail.com',
    			'requirements' => 'Need python',
    			'short_description' => 'Creat window screenshot every minute',
    			'description' => 'Creat window screenshot every minute <br> For strating type in command line: <quote>python screener.py</quote>',
    			'installation' => 'Don`t need',
    			'stars' => 8,
    			'price' => Null,
    			'author' => 'Shvab Ostap',
    			'id_publisher' => 1,
    			'active' => 1,
    			'position' => 1,
    			]);
    	
    	for ($i = 1; $i <= 18; $i++){
	    	$this->insert('product_os', [
    			'id' => $i,
    			'id_product' => $i,
    			'id_os' => 1,
    			'os_version' => '',
    			'id_os_bit' => 1,
    			]);
    	}
    	
    	$this->insert('product_tag', [
    			'id' => 1,
    			'id_product' => 1,
    			'tag' => 'Screener',
    			]);
    	$this->insert('product_tag', [
    			'id' => 2,
    			'id_product' => 1,
    			'tag' => 'python',
    			]);
    	$this->insert('product_tag', [
    			'id' => 3,
    			'id_product' => 9,
    			'tag' => 'Shield',
    			]);
    	$this->insert('product_tag', [
    			'id' => 4,
    			'id_product' => 9,
    			'tag' => 'Pray',
    			]);
    	$this->insert('product_tag', [
    			'id' => 5,
    			'id_product' => 9,
    			'tag' => 'Hope',
    			]);
    	
    	
    	
    }

    public function down()
    {
        $this->truncateTable('user');
        $this->truncateTable('product');
        $this->truncateTable('product_os');
        $this->truncateTable('product_tag');

        return false;
    }
}


