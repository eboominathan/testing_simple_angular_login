Start right Content here -->
<div class="content-page" ng-controller="CustomerCtrl"> 
  <!-- Start content -->
  <div class="content">
   <div class="container">   
    <div class="row">
     <div class="col-lg-12">
      <div class="portlet">
        <div class="portlet-heading bg-custom">
          <h3 class="portlet-title">
            Customer Details
          </h3>
          <div class="portlet-widgets">
            <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
            <span class="divider"></span>
            <a data-toggle="collapse" data-parent="#accordion1" href="#tables"><i class="ion-minus-round"></i></a>
            <span class="divider"></span>
            <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
        <br>

        <div class="pad-left">
          <button class="btn btn-default waves-effect waves-light" ng-click="add_customer()" >Add Customer</button>         
        </div>

        <div id="tables" class="panel-collapse collapse in">
          <div class="portlet-body">
            <table id="table" class="table table-hover table-bordered table-responsive" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Sno</th>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Email</th>
                  <th>Phone no</th>                    
                  <th style="width:15%">Action</th>
                </tr>
              </thead>
              <tbody>
              </tbody>        
            </table> 
          </div>
        </div>
      </div>
    </div>    
  </div> <!-- End row -->
</div>
</div> <!-- container -->
</div> <!-- content -->


<!-- Modal Start  -->
<div class="modal fade" id="modal_form" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="color:#fff">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">{{title}}</h4>
      </div>   
      <br>
      <form class="form-horizontal"  id="new_form" name="form" novalidate>
        <div class="col-md-6">
        <input type="hidden" class="form-control"  name="id" id="id" >
          <div class="form-group" ng-class="{ 'has-error': form.customer_name.$dirty && form.customer_name.$error.required }">
            <label class="control-label col-md-3">Customer Name<span class="red">*</span></label>
            <div class="col-md-7">
              <input type="text" class="form-control"  name="customer_name" id="customer_name" ng-model="customer.customer_name" required>
              <span class="help-block" ng-show="form.customer_name.$dirty && form.customer_name.$error.required">Enter customer name</span>
            </div>
          </div> 
          <div class="form-group">
            <label class="control-label col-md-3">Contact Person</label>
            <div class="col-md-7">
              <input type="text" class="form-control"  name="contact_person" id="contact_person" ng-model="customer.contact_person">   
              <span class="help-block"></span>
            </div>
          </div>  
          <div class="form-group">
            <label class="control-label col-md-3">Primary Phone no</label>
            <div class="col-md-7">
              <input type="text" class="form-control" name="primary_phoneno" id="primary_phoneno" ng-model="customer.primary_phoneno" >   
              <span class="help-block"></span>
            </div>
          </div>                                                 
          <div class="form-group">
            <label class="control-label col-md-3">Secondary Phone no</label>
            <div class="col-md-7">
              <input type="text" class="form-control"  name="secondary_phoneno" id="secondary_phoneno" ng-model="customer.secondary_phoneno" >   
            </div>
          </div>    
          <div class="form-group">
            <label class="control-label col-md-3">Email Id</label>
            <div class="col-md-7">
              <input type="text" class="form-control"  name="email_id" id="email_id" ng-model="customer.email_id" >   
              <span class="help-block"></span>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">Address</label>
            <div class="col-md-7">
             <textarea class="form-control"  name="address" ng-model="customer.address"></textarea>
           </div>
         </div>                             
       </div>
       <div class="col-md-6">
         <div class="form-group">
          <label class="control-label col-md-3">Location</label>
          <div class="col-md-7">
            <input type="text" class="form-control"  name="location" ng-model="customer.location">
            <span class="help-block"></span>
          </div>
        </div> 
        <div class="form-group">
          <label class="control-label col-md-3">Pincode</label>
          <div class="col-md-7">
            <input type="text" class="form-control"  name="pincode" ng-model="customer.pincode">
          </div>
        </div>  
        <div class="form-group">
          <label class="control-label col-md-3">TIN NO</label>
          <div class="col-md-7">
            <input type="text" class="form-control"  name="tin_no" ng-model="customer.tin_no">
          </div>
        </div> 
        <div class="form-group">
          <label class="control-label col-md-3">CST NO</label>
          <div class="col-md-7">
            <input type="text" class="form-control"  name="cst" ng-model="customer.cst" >
          </div>
        </div> 
      </div>
      <div class="clearfix"></div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default waves-effect waves-light"  id="btnSave" ng-click="save_customer()" ng-disabled="form.$invalid" >{{btn_name}}</button>
        <button class="btn btn-danger waves-effect waves-light" data-dismiss="modal">Cancel</button>    
      </div>
    </form>
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal 