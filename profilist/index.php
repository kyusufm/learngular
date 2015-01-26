<!DOCTYPE html>
<html>
<head>
<!-- <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script> -->
<script type="text/javascript" src="../js/angular.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="../css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="../js/bootstrap.min.js"></script>
</head>
<body>
<div ng-app="" ng-controller="userController"> 
<h2> Get Data from MySQL database using $scope</h2>
<table class="table">
  <tr ng-repeat="x in user">
    <td>{{ x.Name }}</td>
    <td>{{ x.Gelar }}</td>
    <td>{{ x.Detail }}</td>
  </tr>
</table>
<div ng-app="test" ng-controller="userController">
<h3>other layout preview</h3>
<div class="user row" ng-repeat="x in user">
	<div class="col-md-3"><img ng-src="{{x.Image}}" class="img-responsive"></div>
	<div class="col-md-9">
		<p class="nama">{{x.Name}}</p>
		<p class="gelar">{{ x.Gelar }}</p>
		<p class="detail">{{ x.Detail }}</p>
	</div>
	<hr>
</div>
<script>
function userController($scope,$http) {
    // var site = "http://localhost";
    var page = "getuser.php";
    $http.get(page)
    .success(function(response) {$scope.user = response;});
}
</script>
</body>
</html>