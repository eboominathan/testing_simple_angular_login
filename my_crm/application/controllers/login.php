<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model','login');
	}

	public function index()
	{
		$this->load->view('login');
	}
	public function check_login()
	{
	
		$data = jsonify();
		$result = $this->login->check_login($data);
		if($result){				
			$this->session->set_userdata( $result );
			$response['success'] = $result;
		}else{
			$this->session->sess_destroy();
			$response['error'] = 'Wrong User name or Password !';
		}
		echo json_encode($response);
	}
	Public function logout()
	{
		$this->session->unset_userdata('user_name');
		$this->session->sess_destroy();
		return true;
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */