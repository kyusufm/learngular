/*AngularJS app
**DeArchitect
**by
**Yusuf K. Muhammad
**@kyusufm or kyusufm@gmail.com*/

var app = angular.module('DeArchitect',['ngRoute']);

/*Routes Config*/
app.config(['$routeProvider','$locationProvider', function ($routeProvider,$locationProvider){
	$routeProvider
	// main page
	.when("/", {templateUrl: "part/home.html", controller: "PageCtrl"})
	// other pages
	.when("/about",{templateUrl: "part/about.html", controller: "PageCtrl"})
	.when("/blog", {templateUrl: "part/blog.html", controller: "BlogCtrl"})
	.otherwise("/404", {templateUrl: "part/404.html", controller: "PageCtrl"});
	$locationProvider.html5Mode(true);
}]);

app.controller('BlogCtrl', function(){
	console.log("Blog Controller runs");
	// replace a href #skills with /ho
	//
});

app.controller('PageCtrl', function(){
	console.log("Page Controller runs");
	//You can put any other function here
});