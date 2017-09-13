var MYCRM = angular.module('MYCRM');
MYCRM
.controller('CustomerCtrl', ['$scope','$http','$compile', function ($scope,$http,$compile) {

	$scope.title = 'Add Customer';
	$scope.btn_name = 'Submit';
	$scope.customer = {};
	$scope.customer.customer_name ='';
	$scope.customer.contact_person ='';
	$scope.customer.primary_phoneno ='';
	$scope.customer.secondary_phoneno ='';
	$scope.customer.email_id ='';
	$scope.customer.address ='';
	$scope.customer.location ='';
	$scope.customer.pincode ='';
	$scope.customer.tin_no ='';
	$scope.customer.cst ='';




	var table = $('#table').DataTable({ 

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
        	"url": "customer/view_customer",
        	"type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ -1 ], //last column
            "orderable": false, //set not orderable
        },
        ],
        retrieve: true,
      //   createdRow: function(row, data, dataIndex) {
      //   $compile(angular.element(row).contents())($scope);
      // }    	

    });


	$scope.init = function(){
		$scope.title = 'Add Customer';
		$scope.btn_name = 'Submit';
		$scope.customer = {};
		$scope.customer.customer_name ='';
		$scope.customer.contact_person ='';
		$scope.customer.primary_phoneno ='';
		$scope.customer.secondary_phoneno ='';
		$scope.customer.email_id ='';
		$scope.customer.address ='';
		$scope.customer.location ='';
		$scope.customer.pincode ='';
		$scope.customer.tin_no ='';
		$scope.customer.cst ='';
		//console.log($scope.customer.customer_name);
		$('form')[0].reset();
	};

	// Add Modal 
	$scope.add_customer = function(){	
		$scope.init();			
		$('#modal_form').modal('show');
	};

// Edit Modal 
	$scope.edit_customer = function(){
	console.log('id');	
		// $scope.init();			
		// $('#modal_form').modal('show');
	};

	$scope.save_customer = function (){
		var data  = $scope.customer;
		console.log(data);
		return false;
		$http.post('customer/save_customer', data).then(
			function handleSuccess(res) {

				if(res.data.status){								
					$.Notification.notify('success','top right', ' Success !', 'Customer addedd Successfully !'); 
				}else{

					$.Notification.notify('error','top right', ' Warning !','Please try again !'); 
				}
			},
			function handleError(res) {
				$.Notification.notify('error','top right', ' Warning !','Please try again !'); 
			});
		$scope.init();
		$('#modal_form').modal('hide');
		// console.log($scope.customer);
	};
	
}])
