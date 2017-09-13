<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('user_name')){
			redirect('/');
		}
	}

	public function index()
	{
		$this->load->view('includes/leftmenu');
		$this->load->view('home');
		$this->load->view('includes/footer');
		$this->load->view('includes/home_footer');
	}
	public function about()
	{
		$this->load->view('about');
	}
	public function contact()
	{
		$this->load->view('contact');
	}

}

/* End of file  */
/* Location: ./application/controllers/ */