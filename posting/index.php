<!DOCTYPE html>
<html>
<head>
<!-- <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script> -->
<script type="text/javascript" src="../js/angular.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
<link rel="stylesheet" href="../css/nemkard.css">

<!-- Latest compiled and minified JavaScript -->
<script type="text/javascript" src="../js/jquery-2.1.3.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/nemkard.js"></script>
</head>
<body>
<div ng-app="nemkard" ng-controller="MainCtrl">
  {{test}}
  <div ng-repeat="post in posts">
    {{post.title}} - upvotes: {{post.upvote}}
  </div>
</div>
</body>
</html>