<!DOCTYPE html>
<html>
<head>
	<!-- <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script> -->
	<script type="text/javascript" src="../js/angular.min.js"></script>
</head>
<body>
	<div ng-app="">
		<h2>One Input</h2>
		<p>Name: <input type="text" ng-model="name"></p>
		<p>Hallo <span ng-bind="name"></span></p>
		<br>
		<h2>Kombnasi Nama</h2>
		<p>Nama depan: <input type="text" ng-model="fname"></p>
		<p>Nama belakang: <input type="text" ng-model="endname"></p>

		<p> <span ng-bind="'Hallo '+fname+' '+endname"></span></p>
	</div>

</body>
</html>