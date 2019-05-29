var app = angular.module('angularTable', ['angularUtils.directives.dirPagination']);

app.controller('listdata',function($scope, $http){
	$scope.products = []; //declare an empty array
	$http.get(pluginsbaseUrl + "/admin/includes/list.php").success(function(response){ 
		$scope.products = response;  //ajax request to fetch data into $scope.data
		//console.log(response);
	});
	
	$scope.sort = function(keyname){
		$scope.sortBy = keyname;   //set the sortBy to the param passed
		$scope.reverse = !$scope.reverse; //if true make it false and vice versa
	}
});