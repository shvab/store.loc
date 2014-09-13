app.controller('ContentController', function($scope, $http) {
	  /*$http({
	    method: 'GET',
	    url: '/index.php?r=script/homeProducts'
	  }).success(function(data, status) {
	    $scope.recomended = data.recomended;
	    $scope.new = data.new;
	    $scope.categories = data.categories;
	  }).error(function(data, status) {
	    console.log(data);
	    console.log(status);
	  });*/
	$scope.recomended = [{'id': 1, 'image': false, 'publisher' :'Shvab Ostap', 'id_publisher' : 1, 'name' : 'Screener', 'rating' : 10, 'price': null},
	                     {'id': 2, 'image': true, 'publisher' :'Shvab Ostap', 'id_publisher' : 1, 'name' : 'Screener', 'rating' : 4, 'price': 0.01}];
	$scope.new = [{'id': 3, 'image': false, 'publisher' :'Shvab Ostap', 'id_publisher' : 1, 'name' : 'Screener', 'rating' : 10, 'price': null},
	                     {'id': 4, 'image': true, 'publisher' :'Shvab Ostap', 'id_publisher' : 1, 'name' : 'Screener', 'rating' : 4, 'price': 0.01}];
	
});
