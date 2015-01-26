<!DOCTYPE html>
<html>
<head>
<!-- <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script> -->
<script type="text/javascript" src="../js/angular.min.js"></script>
</head>
<body>
<div ng-app="" ng-controller="userController"> 

<table>
  <tr ng-repeat="x in user">
    <td>{{ x.Name }}</td>
    <td>{{ x.Gelar }}</td>
    <td>{{ x.Detail }}</td>
  </tr>
</table>
</div>

<script>
function userController($scope,$http) {
    var site = "http://localhost";
    var page = "getuser.php";
    $http.get(page)
    .success(function(response) {$scope.user = response;});
}
</script>
</body>
</html>