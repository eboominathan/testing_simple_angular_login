<!DOCTYPE html>
<html ng-app="MYCRM">
<head>
	<title>MY CRM</title>
</head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>

	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url();?>assets/css/core.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url();?>assets/css/components.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url();?>assets/css/icons.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url();?>assets/css/pages.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url();?>assets/css/ladda-themeless.min.css" rel="stylesheet" type="text/css" />
	
	<div ng-view></div>



	<script>
		var resizefunc = [];
	</script>

	<!-- jQuery  -->
	<script src="<?php  echo base_url();?>assets/js/jquery.min.js"></script>
	<script src="<?php  echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?php  echo base_url();?>assets/js/detect.js"></script>
	<script src="<?php  echo base_url();?>assets/js/fastclick.js"></script>
	<script src="<?php  echo base_url();?>assets/js/jquery.slimscroll.js"></script>
	<script src="<?php  echo base_url();?>assets/js/jquery.blockUI.js"></script>
	<script src="<?php  echo base_url();?>assets/js/waves.js"></script>
	<script src="<?php  echo base_url();?>assets/js/wow.min.js"></script>
	<script src="<?php  echo base_url();?>assets/js/jquery.nicescroll.js"></script>
	<script src="<?php  echo base_url();?>assets/js/jquery.scrollTo.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/notify.js"></script>
	<script src="<?php echo base_url();?>assets/js/notify-metro.js"></script>
	<script src="<?php  echo base_url();?>assets/js/jquery.core.js"></script>
	<script src="<?php  echo base_url();?>assets/js/jquery.app.js"></script>

	

	<!-- Angular  -->
	<script src="<?php echo base_url(); ?>bower_components/angular/angular.js"></script>
	<script src="<?php echo base_url(); ?>bower_components/angular-route/angular-route.js"></script>
	<script src="<?php echo base_url(); ?>bower_components/ngstorage/ngstorage.js"></script>
	<script src="<?php echo base_url(); ?>bower_components/oclazyload/dist/ocLazyLoad.js"></script>	
	<script src="<?php echo base_url(); ?>assets/js/app.js"></script>	
</body>
</html>