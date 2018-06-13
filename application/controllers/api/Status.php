<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}

	public function status_disable()
	{
		
		$email = $this->input->post('email');
		$sql="select * from user where mobile='$email' OR email='$email' OR adhar_no='$email'";
		$data=$this->db->query($sql)->result(); 
		if($data)
		{
			$this->db->where('mobile',$email);
			$get=$this->db->update('user',array('status'=> 1));
		}
	    if($data)
		{
		    $array = array('status' =>true,'message'=> 'Disable Account');
		}
		else{
			$array = array('status' =>false,'message'=> 'Account Does not exist!' );
		}
		echo  json_encode($array);
	}
	

}
