<div ng-controller='LoginCtrl'>
	<div class="wrapper-page">
		<div class=" card-box">
			<div class="panel-heading"> 
				<h3 class="text-center"> Sign in to <strong class="text-custom">CRM</strong> </h3>
			</div> 
			<div class="panel-body">
			
				 <form class="form-horizontal m-t-20" id="form" method="post" id="login_form" novalidate ng-submit="check_login()">                
              <div class="form-group" ng-class="{ 'has-error': form.user_name.$dirty && form.user_name.$error.required }">
                <div class="col-xs-12">
                    <input class="form-control" type="text" required placeholder="User name" name="user_name" id="user_name" ng-model="user.user_name">
                    <span class="help-block" ng-show="form.user_name.$dirty && form.user_name.$error.required">Username is required</span>
                </div>
            </div>
            <div class="form-group" ng-class="{ 'has-error': form.user_password.$dirty && form.user_password.$error.required }">
                <div class="col-xs-12">
                    <input class="form-control" type="user_password" required placeholder="Password" name="user_password" id="user_password" ng-model="user.user_password">
                    <span class="help-block" ng-show="form.user_password.$dirty && form.user_password.$error.required">Password is required</span>
                </div>
            </div>          
              
              <div class="form-group text-center m-t-40">
                <div class="col-xs-12">

                 <section class="progress-demo">
                   <button type="submit" class="btn btn-primary btn-block ladda-button" data-style="expand-right"  id="signin" ng-disabled="form.$invalid">Log In</button>                   
                 </section>
               </div>
             </div>


          <!--  <div class="form-group m-t-20 m-b-0">
              <div class="col-sm-12">
                <a href="#" class="text-dark"><i class="fa fa-lock m-r-5"></i> Forgot your user_password?</a>
              </div>
            </div>
                 <div class="form-group m-t-20 m-b-0">
                  <div class="col-sm-12 text-center">
                    <h4><b>Sign in with</b></h4>
                  </div>
                </div>

               <div class="form-group m-b-0 text-center">
                  <div class="col-sm-12">
                  <section class="progress-demo">

                   <a href="<?=$facebook_login_url?>" type="button" class="btn btn-facebook ladda-button" data-style="expand-right"><i class="fa fa-facebook m-r-5"></i> Facebook</a>                                  
                 
                   <a href="#" type="button" class="btn btn-twitter ladda-button" data-style="expand-right"><i class="fa fa-twitter m-r-5"></i> Twitter</a>  
               
                   <a href="<?=$google_login_url?>" type="button" class="btn btn-googleplus ladda-button" data-style="expand-right"><i class="fa fa-googleplus m-r-5"></i> Google+</a>                   
                 </section>
                 </div>
               </div> -->
             </form>            
			</div>   
		</div>                              
	</div>
</div>
	<script src="<?php  echo base_url();?>assets/js/spin.min.js"></script>
	<script src="<?php  echo base_url();?>assets/js/ladda.min.js"></script>
	<script src="<?php  echo base_url();?>assets/js/ladda.jquery.min.js"></script>
	<script src="<?php  echo base_url();?>assets/js/ladda_init.js"></script>
