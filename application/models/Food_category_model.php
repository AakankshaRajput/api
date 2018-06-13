<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Food_category_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	public function save($data)
	{
		return $data=$this->db->insert('food_discount',$data);
	}
	public function view()
	{
		 return $query = $this->db->get('food_discount')->result();
   	}
   	public function food_category_form_insert($data)
   	{
   		
   		 return $this->db->insert('food_discount',$data);
	}
	
	
}
