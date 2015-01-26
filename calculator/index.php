<!DOCTYPE html>
<html>
<head>
<!-- <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script> -->
<script type="text/javascript" src="../js/angular.min.js"></script>
</head>
<body>
<div ng-app="">
 	<p>Angka Pertama: <input type="number" ng-model="angka1"></p>
 	<p>Angka kedua: <input type="number" ng-model="angka2"></p>
 	 <p>Hasil Penjumlahan <span ng-bind="angka1 + angka2"></span></p>
 	 <p>Hasil Pembagian <span ng-bind="angka1/angka2"></span></p>
 	 <p>Hasil Pengurangan <span ng-bind="angka1-angka2"></span></p>
 	 <p>Hasil Perkalian <span ng-bind="angka1*angka2"></span></p>
</div>
</body>
</html>