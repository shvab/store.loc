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
	<a href="{{ category.link }}" class="category">Accessories</a>
	<a href="{{ category.link }}" class="category">Graphics</a>
	<a href="{{ category.link }}" class="category">Internet</a>
	<a href="{{ category.link }}" class="category">Office</a>
	<a href="{{ category.link }}" class="category">Programming</a>
	<a href="{{ category.link }}" class="category">Sound & Video</a>
	<a href="{{ category.link }}" class="category">System Tools</a>
	<a href="{{ category.link }}" class="category has-children">Games</a>
	<a href="{{ category.link }}" class="category">OS</a>
	<a href="{{ category.link }}" class="category">Other</a>
	
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
