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
			<div class="product-author">{{ product.author }}</div>
		</div>
		<div class="product-name">{{ product.name }}</div>
		<div class="product-stars-wrapper"><div class="product-stars product-stars-{{ product.stars }}"></div></div>
		<div class="product-price" ng-if="!product.price">Price: Free</div>
		<div class="product-price" ng-if="product.price">Price: {{ product.price }}</div>
	</a>
	</div>
</section>
<section class="new-products clearfix">
	<h2>New</h2>
	<div class="product-wrapper" ng-repeat="product in new">
	<a href="/product/{{ product.id }}" class="product">
		<div class="product-image" style="background-image:url('/img/users/{{ product.id_publisher }}/{{ product.id }}_220.jpg');" ng-if="product.image"></div>
		<div class="product-image" style="background-image:url('/img/none.png');" ng-if="!product.image"></div>
		<div class="product-image-hover">
			<div class="product-author">{{ product.author }}</div>
		</div>
		<div class="product-name">{{ product.name }}</div>
		<div class="product-stars-wrapper"><div class="product-stars product-stars-{{ product.stars }}"></div></div>
		<div class="product-price" ng-if="!product.price">Price: Free</div>
		<div class="product-price" ng-if="product.price">Price: {{ product.price }}</div>
	</a>
	</div>
</section>
<section class="clearfix" ng-repeat="(catName, category) in categories">
	<h2>{{ catName }}</h2>
	<div class="product-wrapper" ng-repeat="product in category">
	<a href="/product/{{ product.id }}" class="product">
		<div class="product-image" style="background-image:url('/img/users/{{ product.id_publisher }}/{{ product.id }}_220.jpg');" ng-if="product.image"></div>
		<div class="product-image" style="background-image:url('/img/none.png');" ng-if="!product.image"></div>
		<div class="product-image-hover">
			<div class="product-author">{{ product.author }}</div>
		</div>
		<div class="product-name">{{ product.name }}</div>
		<div class="product-stars-wrapper"><div class="product-stars product-stars-{{ product.stars }}"></div></div>
		<div class="product-price" ng-if="!product.price">Price: Free</div>
		<div class="product-price" ng-if="product.price">Price: {{ product.price }}</div>
	</a>
	</div>
</section>