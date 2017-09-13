var MYCRM = angular.module('MYCRM');
MYCRM.controller('LoginCtrl', ['$scope','$http','$location','$localStorage', function ($scope,$http,$location,$localStorage) {

	$scope.user={};
	$scope.check_login = function () {	

		if(angular.isUndefined($scope.user.user_name)){
			$.Notification.notify('error','top right', ' Warning !','Enter username'); 
			return false;
		}if(angular.isUndefined($scope.user.user_password )){
			$.Notification.notify('error','top right', ' Warning !','Enter password'); 
			return false;
		}		

		var data = $scope.user;
		$http.post('login/check_login', data).then(
			function handleSuccess(res) {

				if(res.data.success){
					localStorage.setItem('user',res.data.success.user_name);													
					$location.path('/home');				

				}else if(res.data.error){
					window.localStorage.removeItem('user');
					$.Notification.notify('error','top right', ' Warning !', res.data.error); 
				}
			});	

		return false;  
	};

	$scope.title = 'Login Page';
	
}])