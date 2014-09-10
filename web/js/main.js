function mainController($scope) {
	$scope.categories = [
{id:1, link:'Hege',  name:"Pege" , products:[
    {titleImage: "test.jpg",
    name: "name",
	stars: "10",
	prise: "Free",
	author: "Paul Smith"},
	{titleImage: "test.jpg",
    name: "name",
	stars: "10",
	prise: "Free",
	author: "Paul Smith"},
	{titleImage: "test.jpg",
    name: "name",
	stars: "10",
	prise: "Free",
	author: "Paul Smith"},
	{titleImage: "test.jpg",
    name: "name",
	stars: "10",
	prise: "Free",
	author: "Paul Smith"},
]},
{id:2, link:'Kim',   name:"Pim" , products:[
    {titleImage: "test.jpg",
        name: "name",
    	stars: "10",
    	prise: "Free",
    	author: "Paul Smith"},
    	{titleImage: "test.jpg",
        name: "name",
    	stars: "10",
    	prise: "Free",
    	author: "Paul Smith"},
    	{titleImage: "test.jpg",
        name: "name",
    	stars: "10",
    	prise: "Free",
    	author: "Paul Smith"},
    	{titleImage: "test.jpg",
        name: "name",
    	stars: "10",
    	prise: "Free",
    	author: "Paul Smith"},
                                            ]},
{id:3, link:'Sal',   name:"Smith" , products:[
      {titleImage: "test.jpg",
    	    name: "name",
    		stars: "10",
    		prise: "Free",
    		author: "Paul Smith"},
    		{titleImage: "test.jpg",
    	    name: "name",
    		stars: "10",
    		prise: "Free",
    		author: "Paul Smith"},
    		{titleImage: "test.jpg",
    	    name: "name",
    		stars: "10",
    		prise: "Free",
    		author: "Paul Smith"},
    		{titleImage: "test.jpg",
    	    name: "name",
    		stars: "10",
    		prise: "Free",
    		author: "Paul Smith"},
                                            	]},
{id:4, link:'Jack',  name:"Jones" , products:[
      {titleImage: "test.jpg",
    	    name: "name",
    		stars: "10",
    		prise: "Free",
    		author: "Paul Smith"},
    		{titleImage: "test.jpg",
    	    name: "name",
    		stars: "10",
    		prise: "Free",
    		author: "Paul Smith"},
    		{titleImage: "test.jpg",
    	    name: "name",
    		stars: "10",
    		prise: "Free",
    		author: "Paul Smith"},
    		{titleImage: "test.jpg",
    	    name: "name",
    		stars: "10",
    		prise: "Free",
    		author: "Paul Smith"},
    	]},
	                     ];
$scope.incomplete = false;
$scope.search = '';	
	
$scope.$watch('search', function() {$scope.test();});

$scope.test = function() {
  $scope.incomplete = false;
  if (!$scope.search.length) {
       $scope.incomplete = true;
  }
};

}