angular.module('nemkard',[])
.controller('MainCtrl',[
	'$scope',
	function($scope){
		$scope.test = 'Hulala';
		$scope.posts = [
		{title: 'Post 1', upvote: 4},
		{title: 'Post 2', upvote: 3},
		{title: 'Post 3', upvote: 4},
		{title: 'Post 4', upvote: 5},
		{title: 'Post 5', upvote: 2},
		{title: 'Post 6', upvote: 3}
		];
	}]);