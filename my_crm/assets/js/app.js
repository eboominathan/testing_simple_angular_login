var MYCRM = angular.module('MYCRM', ['ngRoute','oc.lazyLoad','ngStorage']);

MYCRM.config(['$routeProvider', function ($routeProvider) {

	$routeProvider
	.when('/', {
		templateUrl: 'login',
		controller: 'LoginCtrl',
		resolve :{
			loadAsset: ['$ocLazyLoad',function($ocLazyLoad){
				return $ocLazyLoad.load(
					[
					'assets/js/controllers/LoginCtrl.js',				
					'assets/css/ladda-themeless.min.css'					
					]
					)
			}]
		}
	})
	.when('/home', {
		templateUrl: 'home',
		controller: 'HomeCtrl',
		resolve :{
			loadAsset: ['$ocLazyLoad',function($ocLazyLoad){
				return $ocLazyLoad.load(
					[
					'assets/js/controllers/HomeCtrl.js'					
					])
			}]
		}
	})
	.when('/customer', {
		templateUrl: 'customer',
		controller: 'CustomerCtrl',
		resolve :{
			loadAsset: ['$ocLazyLoad',function($ocLazyLoad){
				return $ocLazyLoad.load(
					[
					'assets/js/controllers/CustomerCtrl.js'									
					])
			}]
		}
	})
	.when('/logout', {
		templateUrl: 'login/logout',
		controller: 'LogoutCtrl',
		resolve :{
			loadAsset: ['$ocLazyLoad',function($ocLazyLoad){
				return $ocLazyLoad.load(['assets/js/controllers/LogoutCtrl.js'])
			}]
		}
	})
	 .otherwise({ redirectTo: '/' });
	
}])
.run(['$rootScope', '$location',function($rootScope, $location){

        $rootScope.$on('$locationChangeStart', function (event, next, current) {
            // redirect to login page if not logged in and trying to access a restricted page
            var restrictedPage = $.inArray($location.path(), ['/']) === -1;
            if (restrictedPage && !localStorage.getItem('user') ) {
                $location.path('/');
                $.Notification.notify('error','top right','Sorry !','Please login to continue !');
            }       
        });
}])

