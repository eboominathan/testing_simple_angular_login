<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('customer_model','customer');
	}

	public function index()
	{
		$this->load->view('includes/leftmenu');
		$this->load->view('customer');
		$this->load->view('includes/footer');
		$this->load->view('includes/customer_footer');
	}
	Public function save_customer()
	{
		$data = jsonify();
		$datas = array(
			'customer_name' => $data->customer_name,
			'contact_person' => $data->contact_person,
			'primary_phoneno' => $data->primary_phoneno,
			'secondary_phoneno' => $data->secondary_phoneno,
			'email_id' => $data->email_id,
			'address' => $data->address,
			'location' => $data->location,
			'pincode' => $data->pincode,
			'tin_no' => $data->tin_no,
			'cst' => $data->cst
			);
		$result['status'] = $this->customer->save_customer($datas);
		echo json_encode($result);

		
	}
	public function view_customer()
	{
		$list = $this->customer->get_datatables();
		$data = array(); $i=1;
		$no = $_POST['start'];
		foreach ($list as $customer) {
			$no++;
			$row = array();
			$row[] = $i++;
			$row[] = $customer->customer_name;
			$row[] = $customer->address;		
			$row[] = $customer->email_id;		
			$row[] = $customer->primary_phoneno;		

			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary"  title="Edit" on-click="edit_customer('.$customer->id.')"><i class="glyphicon glyphicon-pencil"></i></a>
			<a class="btn btn-sm btn-danger" href="javascript:void()" title="Delete" onclick="delete_customer('."'".$customer->id."'".')"><i class="glyphicon glyphicon-trash"></i></a>';

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->customer->count_all(),
			"recordsFiltered" => $this->customer->count_filtered(),
			"data" => $data,
			);
		//output to json format
		echo json_encode($output);
	}
	public function edit_customer()
	{
		$get = jsonify();
		$data = $this->customer->get_by_id($get->id);	
		echo json_encode($data);
	}

}

/* End of file  */
/* Location: ./application/controllers/ */