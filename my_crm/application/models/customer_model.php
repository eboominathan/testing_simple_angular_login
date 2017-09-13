<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	Public function save_customer($data)
	{
		return $this->db->insert('customer_details',$data);
	}
	private function _get_datatables_query()
	{
		
		$columns = array('id','customer_name','address','email_id','primary_phoneno');

		$search_value = $_POST['search']['value'];
		$sql ="SELECT * FROM (`customer_details`) WHERE  `status` = 1";	

		if($_POST['search']['value']){ 
			$sql .=" AND( `customer_name` LIKE '%$search_value%' OR `address` LIKE '%$search_value%' OR `email_id` LIKE '%$search_value%' OR `primary_phoneno` LIKE '%$search_value%')";		
		} 		
		if(isset($_POST['order'])) {			
			$orde = $columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'];
			$sql .=" ORDER BY $orde";
		}else if(isset($this->orders)){
			$orders = $this->orders;	
			$orde = key($orders).' '.$orders[key($orders)];	
			$sql .=" ORDER BY $orde";
		}
		return $sql;
	}

	function get_datatables()
	{
		$sql = $this->_get_datatables_query();			
		if($_POST['length'] != -1)
			$limits = $_POST['start'].','.$_POST['length'];
			$sql .=" LIMIT $limits";		
			return $this->db->query($sql)->result();	
	}


	function count_filtered()
	{
		$sql = $this->_get_datatables_query();	
		return $this->db->query($sql)->num_rows();		
	}

	public function count_all()
	{
		$sql = $this->_get_datatables_query();			
		return $this->db->query($sql)->num_rows();
	}



	public function get_by_id($id)
	{
		$this->db->from('customer_details');
		$this->db->where('id',$id);
		return $this->db->get()->row();
	}

}

/* End of file  */
/* Location: ./application/models/ */