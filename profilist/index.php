<!DOCTYPE html>
<html>
<head>
<!-- <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script> -->
<script type="text/javascript" src="../js/angular.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
<link rel="stylesheet" href="../css/profilist.css">
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
<hr>
<h3>other layout preview</h3>
<div class="user row" ng-repeat="x in user">
	<div class="col-md-2"><img ng-src="{{x.Image}}" class="profimg img-responsive"></div>
	<div class="col-md-9">
		<p class="nama">Nama: {{x.Name}}</p>
		<p class="gelar">Gelar: {{ x.Gelar }}</p>
		<p class="detail">Detail: {{ x.Detail }}</p>
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