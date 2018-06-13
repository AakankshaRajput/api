<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Payment_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	public function save($data)
	{
		return $data=$this->db->insert('packages',$data);
	}
	public function view()
	{
		 return $query = $this->db->get('packages')->result();
   	}
   	public function payment_form_insert($data)
   	{
   		
   		 return $this->db->insert('packages',$data);
	}
	
	
	
}
