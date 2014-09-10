<?php
use yii\helpers\Html;
use app\assets\AppAsset;

/**
 * @var \yii\web\View $this
 * @var string $content
 */
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" ang-app="">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body ng-controller="mainController">
<?php $this->beginBody() ?>
<header class="clearfix">
	<div class="logo"><span class="logo-text">CentStore</span></div>
	<div class="search">
		<input type="text" ng-model="search">
		<button class="btn btn-success" ng-disabled="incomplete">
			<span class="glyphicon glyphicon-search"></span>
		</button>
	</div>
	<div class="action-bar">
		<button class="btn btn-primary">My products</button>
		<button class="btn btn-warning">Reports</button>
		<button class="btn btn-info">Settings</button>
		<button class="btn btn-default">Logout</button>
	</div>
</header>
<aside class="categories-menu" ng-repeat="category in categories">
	<!--  <a href="{{ category.link }}" class="category">{{ category.name }}</a> -->
	<ul>
	<li class="category"><a href="{{ category.link }}">Accessories</a></li>
	<li class="category"><a href="{{ category.link }}">Graphics</a></li>
	<li class="category"><a href="{{ category.link }}">Internet</a></li>
	<li class="category"><a href="{{ category.link }}">Office</a></li>
	<li class="category"><a href="{{ category.link }}">Programming</a></li>
	<li class="category"><a href="{{ category.link }}">Sound & Video</a></li>
	<li class="category"><a href="{{ category.link }}">System Tools</a></li>
	<li class="category has-children">
		<a href="{{ category.link }}">Games</a>
		<div class="glyphicon glyphicon-chevron-right"></div>
		<ul class="submenu">
			<li class="category"><a href="{{ category.link }}">Arcade</a></li>
			<li class="category"><a href="{{ category.link }}">Board</a></li>
			<li class="category"><a href="{{ category.link }}">Card</a></li>
			<li class="category"><a href="{{ category.link }}">Dice</a></li>
			<li class="category"><a href="{{ category.link }}">Logic</a></li>
			<li class="category"><a href="{{ category.link }}">Strategy</a></li>
			<li class="category"><a href="{{ category.link }}">Toy</a></li>
			<li class="category"><a href="{{ category.link }}">Other</a></li>
		</ul>
	<li class="category"><a href="{{ category.link }}">OS</a></li>
	<li class="category"><a href="{{ category.link }}">Other</a></li>
	</ul>
</aside>
<div class="content-wrapper">
<?= $content ?>
</div>
<footer>
	<a href="#">Created by <span class="author">Shvab Ostap</span></a>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
