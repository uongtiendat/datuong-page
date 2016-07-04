// JavaScript Document

var app = angular.module("itemLoader", []);
app.controller("itemCtrl", function($scope) {
	$scope.items = ["ngu", "si", "dan"];
});

var app = angular.module("popupDetail", ['ngDialog']);
app.controller("popupCtrl", function($scope, ngDialog, $http) {
	$scope.clickToOpen = function(id) {
		ngDialog.open({
			template: '../app/workdetail.php?id=' + id,
			className: 'wrapper'
		});
	};
	$scope.clickToOpenNote = function(id) {
		ngDialog.open({
			template: '../app/notedetail.php?id=' + id,
			className: 'wrapper'
		});
	};
	$http.get("../database/notes.php").then( function (respone) {
		$scope.notes = respone.data;
	});
	$http.get("../database/works.php").then( function (respone) {
		$scope.works = respone.data;
	});
});
app.controller("getData", function($scope, $http, workid) {	
	var config = {
		params: {
			workid: $scope.works.id	
		}
	}
	$http.post("../database/works.php", config).then( function (respone) {
		$scope.works = respone.data;
	});
});