<?php
use yii\helpers\Html;
use yii\helpers\Url;
use app\assets\AppAsset;

/**
 * @var \yii\web\View $this
 * @var string $content
 */
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= Html::encode('LiStore ' . $this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<header class="clearfix">
	<div class="logo"><span class="logo-text"><?php var_dump(Yii::$app->user->isGuest); ?></span></div>
	<div class="search">
		<input type="text" name="search">
		<button class="btn btn-success">
			<span class="glyphicon glyphicon-search"></span>
		</button>
	</div>
	<div class="action-bar">
		 <?php if (Yii::$app->user->isGuest): ?>
   		<a class="btn btn-info" href="<?php echo Url::toRoute('site/registration')?>">Registration</a>
		<a class="btn btn-default" href="<?php echo Url::toRoute('site/login')?>">Login</a>
		<?php else: ?>
		<a class="btn btn-primary" href="<?php echo Url::toRoute('product/index')?>">My products</a>
		<a class="btn btn-warning" href="<?php echo Url::toRoute('report/index')?>">Reports</a>
		<a class="btn btn-info" href="<?php echo Url::toRoute('site/settings')?>">Settings</a>
		<a class="btn btn-default" href="<?php echo Url::toRoute('site/logout')?>">Logout</a>
		<?php endif; ?>
	</div>
</header>
<aside class="categories-menu">
	<ul>
	<?php
	foreach (Yii::$app->params['categories'] as $category){
		$class = ($category['hasChildren'])?  ' has-children': '';
		echo '<li class="category'.$class.'">'.
				'<a href="'. Url::toRoute(['category/index','id' => $category['id']]).'">'. $category['name'] .'</a>';
		if($category['hasChildren']){
			echo '<div class="glyphicon glyphicon-chevron-right"></div>'.
				'<ul class="submenu">';
			foreach ($category['children'] as $cat){
					echo '<li class="category"><a href="'.Url::toRoute(['category/index','id' => $cat['id']]).'">'.$cat['name'].'</a></li>';
			}
			echo '</ul>';
		} 
				
	} 
	?>
	</ul>
</aside>
<div class="content-wrapper">
<?= $content ?>
</div>
<footer>
	<a href="ua.linkedin.com/pub/ostap-shvab/41/553/3a5/">Created by <span class="author">Shvab Ostap</span></a>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
