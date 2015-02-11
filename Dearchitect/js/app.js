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
	.otherwise("/", {templateUrl: "part/home.html", controller: "PageCtrl"});
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

	//skill progressbarjs
	var skill = new ProgressBar.Circle('#skill1', {
	    color: '#FCB03C',
	    text: {
	        value: '3dsMax',
	        className: 'progressbar-text',
	        autoStyle: true
	    }
	});
	var circle = new ProgressBar.Circle('#skill2', {
	    color: '#FCB03C',
	    text: {
	        value: 'Text',
	        className: 'progressbar-text',
	        autoStyle: true
	    }
	});
	var skill3 = new ProgressBar.Circle('#skill3', {
	    color: '#FCB03C',
	    text: {
	        value: 'AutoCad',
	        className: 'progressbar-text',
	        autoStyle: true
	    }
	});
	var skill4 = new ProgressBar.Circle('#skill4', {
	    color: '#FCB03C',
	    text: {
	        value: 'Photoshop',
	        className: 'progressbar-text',
	        autoStyle: true
	    }
	});
	circle.animate(0.8);
	skill.animate(0.9);
	skill3.animate(0.5);
	skill4.animate(0.6);
});

