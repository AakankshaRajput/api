<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Category_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	public function save($data)
	{
		return $data=$this->db->insert('category',$data);
	}
	public function view()
	{
		 return $query = $this->db->get('category')->result();
   	}
   	public function category_form_insert($data)
   	{
   		
   		 return $this->db->insert('category',$data);
	}
	
	
}
