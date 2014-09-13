var app = angular.module('app', []);


app.controller('CategoriesController', function($scope, $http) {
	  $http({
	    method: 'GET',
	    url: '/index.php?r=script/categories'
	  }).success(function(data, status) {
	    $scope.categories = data;
	  }).error(function(data, status) {
	    console.log(data);
	    console.log(status);
	  });
});
