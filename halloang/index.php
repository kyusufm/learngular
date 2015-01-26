<!DOCTYPE html>
<html>
<head>
<!-- <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script> -->
<script type="text/javascript" src="../js/angular.min.js"></script>
</head>
<body>
<div ng-app="">
 	<p>Name: <input type="text" ng-model="name"></p>
 	 <p>Hallo <span ng-bind="name"></span></p>
</div>
</body>
</html>