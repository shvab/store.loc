<?php
/**
 * @var yii\web\View $this
 */
?>
<section class="recomended-products clearfix">
	<h2>Recomended</h2>
	<div class="product-wrapper" ng-repeat="product in recomended">
	<a href="/product/{{ product.id }}" class="product">
		<div class="product-image" style="background-image:url('/img/users/{{ product.id_publisher }}/{{ product.id }}_220.jpg');" ng-if="product.image"></div>
		<div class="product-image" style="background-image:url('/img/none.png');" ng-if="!product.image"></div>
		<div class="product-image-hover">
			<div class="product-publisher">{{ product.publisher }}</div>
		</div>
		<div class="product-name">{{ product.name }}</div>
		<div class="product-stars-wrapper"><div class="product-stars product-stars-{{ product.rating }}"></div></div>
		<div class="product-price" ng-if="!product.price">Price: Free</div>
		<div class="product-price" ng-if="product.price">Price: {{ product.price }}</div>
	</a>
	</div>
</section>
<section class="recomended-products clearfix">
	<h2>New</h2>
	<div class="product-wrapper" ng-repeat="product in new">
	<a href="/product/{{ product.id }}" class="product">
		<div class="product-image" style="background-image:url('/img/users/{{ product.id_publisher }}/{{ product.id }}_220.jpg');" ng-if="product.image"></div>
		<div class="product-image" style="background-image:url('/img/none.png');" ng-if="!product.image"></div>
		<div class="product-image-hover">
			<div class="product-publisher">{{ product.publisher }}</div>
		</div>
		<div class="product-name">{{ product.name }}</div>
		<div class="product-stars-wrapper"><div class="product-stars product-stars-{{ product.rating }}"></div></div>
		<div class="product-price" ng-if="!product.price">Price: Free</div>
		<div class="product-price" ng-if="product.price">Price: {{ product.price }}</div>
	</a>
	</div>
</section>
<!-- <section class="new-products clearfix">
	<h2>New</h2>
	<div class="product-wrapper" ng-repeat="product in new">
		<a href="{{ product.link }}" class="product">
			<div class="product-image" style="background-image:url('/img/none.png');"></div>
			<div class="product-image-hover">
				<div class="product-publisher">Shvab Ostap</div>
			</div>
			<div class="product-name">Screener</div>
			<div class="product-stars-wrapper"><div class="product-stars product-stars-10"></div></div>
			<div class="product-price">Price: Free</div>
		</a>
	</div>
		
	</div>
</section>
<section class="clearfix" ng-repeat="category in categories">
	<h2>{{ category.name }}</h2>
	<div class="product-wrapper" ng-repeat="product in recomended">
		<a href="{{ product.link }}" class="product">
			<div class="product-image" style="background-image:url('/img/none.png');"></div>
			<div class="product-image-hover">
				<div class="product-publisher">Shvab Ostap</div>
			</div>
			<div class="product-name">Screener</div>
			<div class="product-stars-wrapper"><div class="product-stars product-stars-10"></div></div>
			<div class="product-price">Price: Free</div>
		</a>
	</div>
</section>
 -->