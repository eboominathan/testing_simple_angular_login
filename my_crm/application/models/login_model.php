<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	Public function check_login($data)
	{
		$where = array('user_name' => $data->user_name,'user_password' => $data->user_password );
		return $this->db
					->select('user_name,user_email,user_profile_pic')
					->get_where('users',$where)
					->row_array();
	}

}

/* End of file  */
/* Location: ./application/models/ */