<!-- datatable -->
<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/dataTables.bootstrap.js')?>"></script>
<script type="text/javascript">
	function edit_customer(id)
	{
		 //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo site_url('customer/edit_customer/')?>/" + id,
        type: "GET",        
        dataType: "JSON",
        success: function(data)
        {

            $('[name="id"]').val(data.id);
			$('[name="customer_name"]').val(data.customer_name);
			$('[name="contact_person"]').val(data.contact_person);
			$('[name="primary_phoneno"]').val(data.primary_phoneno);
			$('[name="secondary_phoneno"]').val(data.secondary_phoneno);
			$('[name="email_id"]').val(data.email_id);
			$('[name="address"]').val(data.address);
			$('[name="location"]').val(data.location);
			$('[name="pincode"]').val(data.pincode);
			$('[name="tin_no"]').val(data.tin_no);
			$('[name="cst"]').val(data.cst);
             
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Customer'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
	}
</script>