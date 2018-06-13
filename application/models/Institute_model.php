<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Institute_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	public function listing($value)
	{
		//
	}
	public function institute_form_insert($data)
   	{
   		 return $this->db->insert('institute',$data);
   	}
	
	public function institute_form_update($value,$query)
	{
	$this->db->where('ins_id',$value);
	$this->db->update('institute',$query);
	}
}
