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
    			'home_link' => 'https://github.com/shvab/screener',
    			'report_link' => 'shvabuk@gmail.com',
    			'requirements' => 'Need python',
    			'short_description' => 'Create window screenshot every minute',
    			'description' => 'Create window screenshot every minute <br> For strating type in command line: <quote>python screener.py</quote>',
    			'installation' => 'Don`t need',
    			'stars' => 1,
    			'price' => Null,
    			'author' => 'Shvab Ostap',
    			'id_publisher' => 1,
    			'active' => 1,
    			'position' => 0,
    			]);
    	$this->insert('product', [
    			'id' => 3,
    			'id_category' => 3,
    			'name' => 'GIMP',
    			'home_link' => 'http://www.gimp.org/',
    			'report_link' => 'http://www.gimp.org/bugs/',
    			'requirements' => 'http://www.gimp.org/docs/',
    			'short_description' => 'GIMP is the GNU Image Manipulation Program.',
    			'description' => 'GIMP is the GNU Image Manipulation Program. It is a freely distributed piece of software for such tasks as photo retouching, image composition and image authoring. It works on many operating systems, in many languages.',
    			'installation' => 'http://www.gimp.org/downloads/',
    			'stars' => 10,
    			'price' => Null,
    			'author' => 'Community',
    			'id_publisher' => 1,
    			'active' => 1,
    			'position' => 0,
    			]);
    	$this->insert('product', [
    			'id' => 4,
    			'id_category' => 4,
    			'name' => 'Chrome',
    			'home_link' => 'http://www.google.com.ua/aclk?sa=l&ai=C7BAvjOgaVOyFHILUywO8l4HYAqjN7dAFsN3Lz8oByZb0CQgAEAFQ3sWP3vz_____AWClrqOG_CKgAaawg_YDyAEBqgQZT9AwS3a0GaT_pBHLe8z4T5kQL9Iwh3-7gYAHws_8CYgHAZAHAqgHpr4b&sig=AOD64_1kxBnc8rRldMHVD6Spz4n1W9NDeA&rct=j&q=&ved=0CBwQ0Qw&adurl=http://clickserve.dartsearch.net/link/click%3Flid%3D43700005322081673%26ds_s_kwgid%3D58700000331001036%26ds_e_adid%3D54339304152%26ds_e_matchtype%3Dsearch%26ds_e_device%3Dc%26ds_url_v%3D2',
    			'report_link' => 'somebody@gmail.com',
    			'requirements' => '',
    			'short_description' => 'веб-переглядач',
    			'description' => 'Налаштовуйте свій веб-переглядач. Персоналізуйте свій веб-переглядач Chrome, установлюючи веб-програми, теми та розширення.',
    			'installation' => 'Follow instructions',
    			'stars' => 1,
    			'price' => Null,
    			'author' => 'Google',
    			'id_publisher' => 1,
    			'active' => 1,
    			'position' => 0,
    			]);
    	$this->insert('product', [
    			'id' => 5,
    			'id_category' => 5,
    			'name' => 'silence',
    			'home_link' => '',
    			'report_link' => '',
    			'requirements' => '',
    			'short_description' => '...',
    			'description' => '..................................................................',
    			'installation' => '',
    			'stars' => 1,
    			'price' => Null,
    			'author' => '',
    			'id_publisher' => 1,
    			'active' => 1,
    			'position' => 0,
    			]);
    	$this->insert('product', [
    			'id' => 6,
    			'id_category' => 6,
    			'name' => 'Аліса в задзеркаллі',
    			'home_link' => 'http://uk.wikipedia.org/wiki/%D0%90%D0%BB%D1%96%D1%81%D0%B0_%D0%B2_%D0%97%D0%B0%D0%B4%D0%B7%D0%B5%D1%80%D0%BA%D0%B0%D0%BB%D0%BB%D1%96',
    			'report_link' => '',
    			'requirements' => '',
    			'short_description' => 'все навпаки',
    			'description' => 'все навпаки, усе не так',
    			'installation' => '',
    			'stars' => 1,
    			'price' => Null,
    			'author' => '',
    			'id_publisher' => 1,
    			'active' => 1,
    			'position' => 0,
    			]);
    	$this->insert('product', [
    			'id' => 7,
    			'id_category' => 7,
    			'name' => 'VLC media player',
    			'home_link' => 'http://www.videolan.org/vlc/',
    			'report_link' => 'http://www.videolan.org/support/#bugs',
    			'requirements' => '',
    			'short_description' => 'VLC — бесплатный и свободный кросс-платформенный медиаплеер',
    			'description' => 'VLC — бесплатный и свободный кросс-платформенный медиаплеер и медиаплатформа с открытым исходным кодом. VLC воспроизводит множество мультимедийных файлов, а также DVD, Audio CD, VCD и сетевые трансляции.',
    			'installation' => 'Follow instructions',
    			'stars' => 1,
    			'price' => Null,
    			'author' => 'Community',
    			'id_publisher' => 1,
    			'active' => 1,
    			'position' => 0,
    			]);
    	$this->insert('product', [
    			'id' => 8,
    			'id_category' => 8,
    			'name' => 'антишизофренізатор',
    			'home_link' => 'www.google.com',
    			'report_link' => 'doctor@gmail.com',
    			'requirements' => 'чистий розум',
    			'short_description' => 'тест на шизофренію',
    			'description' => 'визначає схильність інтелекту до шизофренії',
    			'installation' => 'Don`t need',
    			'stars' => 0,
    			'price' => Null,
    			'author' => 'Doctor',
    			'id_publisher' => 1,
    			'active' => 1,
    			'position' => 0,
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
    			'position' => 0,
    			]);
    	$this->insert('product', [
    			'id' => 10,
    			'id_category' => 10,
    			'name' => 'Lady Madonna',
    			'home_link' => 'https://ru.wikipedia.org/wiki/Lady_Madonna',
    			'report_link' => '',
    			'requirements' => 'Graduate',
    			'short_description' => 'Other secret',
    			'description' => 'Other secret',
    			'installation' => 'Just follow the instructions',
    			'stars' => 1,
    			'price' => Null,
    			'author' => 'Beatles',
    			'id_publisher' => 1,
    			'active' => 1,
    			'position' => 0,
    			]);
    	$this->insert('product', [
    			'id' => 11,
    			'id_category' => 11,
    			'name' => 'Аліса в країні див',
    			'home_link' => 'http://uk.wikipedia.org/wiki/%D0%90%D0%BB%D1%96%D1%81%D0%B0_%D0%B2_%D0%9A%D1%80%D0%B0%D1%97%D0%BD%D1%96_%D1%87%D1%83%D0%B4%D0%B5%D1%81',
    			'report_link' => 'ідіот@мейл.кудась',
    			'requirements' => 'бути дитиною',
    			'short_description' => 'Я вже не та Аліса що колись.',
    			'description' => 'Після стількох чудес, я вже не та Аліса що колись. А ти?',
    			'installation' => 'Don`t need',
    			'stars' => 0,
    			'price' => 100500.00,
    			'author' => 'Льюїс Керрол',
    			'id_publisher' => 1,
    			'active' => 1,
    			'position' => 0,
    			]);
    	$this->insert('product', [
    			'id' => 12,
    			'id_category' => 12,
    			'name' => 'Монополія',
    			'home_link' => '',
    			'report_link' => '',
    			'requirements' => 'стіл',
    			'short_description' => 'настільна гра економістів',
    			'description' => 'настільна гра економістів',
    			'installation' => 'Don`t need',
    			'stars' => 5,
    			'price' => Null,
    			'author' => 'Дід Пихто',
    			'id_publisher' => 1,
    			'active' => 1,
    			'position' => 0,
    			]);
    	$this->insert('product', [
    			'id' => 13,
    			'id_category' => 13,
    			'name' => 'Дурак',
    			'home_link' => '',
    			'report_link' => '',
    			'requirements' => 'колода карт',
    			'short_description' => 'гра в карти',
    			'description' => 'цікаво що в Україні це найпоширеніша гра в карти',
    			'installation' => 'Don`t need',
    			'stars' => 7,
    			'price' => Null,
    			'author' => 'Хтось',
    			'id_publisher' => 1,
    			'active' => 1,
    			'position' => 0,
    			]);
    	$this->insert('product', [
    			'id' => 14,
    			'id_category' => 14,
    			'name' => 'Монетка',
    			'home_link' => '',
    			'report_link' => '',
    			'requirements' => 'Монетка',
    			'short_description' => 'Гра з ймовірністю 50 на 50',
    			'description' => 'Гра з ймовірністю 50 на 50',
    			'installation' => 'Don`t need',
    			'stars' => 1,
    			'price' => Null,
    			'author' => 'Shvab Ostap',
    			'id_publisher' => 1,
    			'active' => 1,
    			'position' => 0,
    			]);
    	$this->insert('product', [
    			'id' => 15,
    			'id_category' => 15,
    			'name' => 'Пазли',
    			'home_link' => 'Мозок',
    			'report_link' => 'Собі',
    			'requirements' => 'Уява',
    			'short_description' => 'Скласти всі частинки',
    			'description' => 'Гра де треба скласти всі частинки, а тих що не вистачає уявити собі в голові',
    			'installation' => 'Don`t need',
    			'stars' => 8,
    			'price' => Null,
    			'author' => 'Інтелект',
    			'id_publisher' => 1,
    			'active' => 1,
    			'position' => 0,
    			]);
    	$this->insert('product', [
    			'id' => 16,
    			'id_category' => 16,
    			'name' => 'Шахи',
    			'home_link' => '',
    			'report_link' => 'Не має',
    			'requirements' => 'Можна грати усно',
    			'short_description' => 'Creat window screenshot every minute',
    			'description' => '	Давай зіграєм в добру гру,<br>
									Я підіграю: ти будеш гуру!<br>
									Ми станем шахами, а дошка – стінами.<br>
									Ти будеш чорними, а я...<br>
									Ти будеш чорними, а я – білими...<br>
									Зваж, небо кольору мокко –<br>
									Тільки б не збігло там наше молоко.<br>
									Усе, зберись! Нам треба стати цілими!<br>
									Ти граєш чорними, а я...<br>
									Ти граєш чорними, а я – білими...<br>
									<br>
									Приспів:<br>
									Все, без спроб!<br>
									Почалось! Де ставити Stop?<br>
									Хто дасть 100 %,<br>
									Що все це не просто,<br>
									Або просто так?..<br>
									<br>	
									Не з тих фігур, не радила б,<br>
									Але не слухай, просто зваж на правила.<br>
									Твій хід, стратег, кажи свій план на вічність і..<br>
									Хто п\'є із повної, а хто...<br>
									Хто п\'є із повної, а хто з надпитої?<br>
									Чекай, не пий, розбав іще:<br>
									В когось з водою, а в нас з брудним, але з дощем.<br>
									О, маєш, знову нічия! Ми квити, і...<br>
									Ти п\'єш з щербленої, а я...<br>
									Ти п\'єш з щербленої, а я з надбитої...<br>
									<br>
									Приспів.',
    			'installation' => 'Don`t need',
    			'stars' => 10,
    			'price' => Null,
    			'author' => 'Якийсь індус',
    			'id_publisher' => 1,
    			'active' => 1,
    			'position' => 0,
    			]);
    	$this->insert('product', [
    			'id' => 17,
    			'id_category' => 17,
    			'name' => 'Man',
    			'home_link' => 'http://en.wikipedia.org/wiki/Manipulation',
    			'report_link' => 'manipulator@somebody.com',
    			'requirements' => 'Thread',
    			'short_description' => 'Game of crazy people',
    			'description' => 'Game of crazy people',
    			'installation' => 'Don`t need',
    			'stars' => 0,
    			'price' => Null,
    			'author' => 'Somebody',
    			'id_publisher' => 1,
    			'active' => 1,
    			'position' => 0,
    			]);
    	$this->insert('product', [
    			'id' => 18,
    			'id_category' => 18,
    			'name' => 'Excitement',
    			'home_link' => 'http://www.thesaurus.com/browse/excitement',
    			'report_link' => '',
    			'requirements' => '',
    			'short_description' => 'Driving force of patients',
    			'description' => 'Driving force of patients',
    			'installation' => 'Don`t need',
    			'stars' => 0,
    			'price' => Null,
    			'author' => 'Somebody',
    			'id_publisher' => 1,
    			'active' => 1,
    			'position' => 0,
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


