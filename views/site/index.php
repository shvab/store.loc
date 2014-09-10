<?php
/**
 * @var yii\web\View $this
 */
$this->title = 'CentStore';
?>
<section class="recomended-products clearfix">
	<h2>Recomended</h2>
	<div class="product-wrapper" ng-repeat="product in recomended">
<!-- 		<a href="{{ product.link }}" class="product">
			<div class="product-image-hover">
				<div class="product-publisher">{{ product.publisher }}</div>
			</div>
			<div class="product-image" style="background-image: {{ product.titleImage }};"></div>
			<div class="product-name">{{ product.name }}</div>
			<div class="product-stars {{ product.stars }}" ></div>
			<div class="product-price">{{ product.price }}</div>
		</a> -->
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
</section>
<section class="new-products clearfix">
	<h2>New</h2>
	<div class="product-wrapper" ng-repeat="product in new">
<!--		<a href="{{ product.link }}" class="product">
			<div class="product-image-hover"></div>
			<div class="product-image" style="background-image: {{ product.titleImage }};"></div>
			<div class="product-name">{{ product.name }}</div>
			<div class="product-stars {{ product.stars }}" ></div>
			<div class="product-price">{{ product.price }}</div>
			<div class="product-publisher">{{ product.publisher }}</div>
		</a> -->
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
<section class="clearfix" ng-repeat="category in categories">
	<h2>{{ category.name }}</h2>
	<div class="product-wrapper" ng-repeat="product in category.products">
<!--		<a href="{{ product.link }}" class="product">
			<div class="product-image-hover"></div>
			<div class="product-image" style="background-image: /img/{{ product.titleImage }};"></div>
			<div class="product-name">{{ product.name }}</div>
			<div class="product-stars {{ product.stars }}" ></div>
			<div class="product-price">{{ product.price }}</div>
			<div class="product-publisher">{{ product.publisher }}</div>
		</a> -->
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