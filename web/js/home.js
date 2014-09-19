app.controller('ContentController', function($scope, $http) {
	  $http({
	    method: 'GET',
	    url: '/index.php?r=script/products_home'
	  }).success(function(data, status) {
	    $scope.recomended = data.recomended;
	    $scope.new = data.new;
	    $scope.categories = data.categories;
	  }).error(function(data, status) {
	    console.log(data);
	    console.log(status);
	  });
});
