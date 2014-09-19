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
<html lang="<?= Yii::$app->language ?>" ng-app="app">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<header class="clearfix">
	<div class="logo"><span class="logo-text">BoycottStore</span></div>
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
<aside class="categories-menu" ng-controller="CategoriesController">
	<ul>
	<li class="category" ng-repeat="category in categories" ng-class="{'has-children' : category.hasChildren}" >
		<a href="/category/{{ category.id }}">{{ category.name }}</a>
		<div class="glyphicon glyphicon-chevron-right" ng-if="category.hasChildren"></div>
		<ul class="submenu" ng-if="category.hasChildren">
			<li class="category" ng-repeat="cat in category.children"><a href="/category/{{ cat.id }}">{{ cat.name }}</a></li>
		</ul>
	</li>
	</ul>
</aside>
<div class="content-wrapper" ng-controller="ContentController">
<?= $content ?>
</div>
<footer>
	<a href="ua.linkedin.com/pub/ostap-shvab/41/553/3a5/">Created by <span class="author">Shvab Ostap</span></a>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
