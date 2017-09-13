var MYCRM = angular.module('MYCRM');
MYCRM.controller('LogoutCtrl', ['$scope','$http','$location','$localStorage', function ($scope,$http,$location,$localStorage) {		

		$http.get('login/logout').then(function (){
			window.localStorage.removeItem('user');
			$location.path('/');			
			});	
	
}])