<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Payment_model');
		$this->load->library('session');
		if(!$this->session->userdata('admin_name')==true)
	    {
	      redirect(base_url().'login/logout');
	    }
		
	}
	public function index()
	{
		
		$data['query'] = $this->Payment_model->view(); 
		$this->load->view('package/index',$data);
	}
	public function view()
	{
		$this->load->view('payment', $data);
	}
	public function add()
	{

    	$this->load->view('package/payment_form');
	}
	public function payment_form()
	{
		 $data = array(
		'uid'=>$this->input->post('uid'),
		'name'=>$this->input->post('name'),
		'fordrinks'=>$this->input->post('fordrinks'),
        'forfood'=>$this->input->post('forfood'),
        'forpackages'=>$this->input->post('forpackages'),
        'updated_at'=>$this->input->post('updated_at')
    	);
		 $this->Payment_model->payment_form_insert($data);
 		$this->session->set_flashdata('message', 'Data Saved Successful!');
   	 	redirect(base_url().'payment');
   	 	
	}
	public function delete_row($value)
	{
		$this->db->where('institute', $value);
		$this->db->delete('payment');
		$this->index();
	}
	public function checkValue()
	{
		$str= $_REQUEST['q'];
		$response=$this->db->get_where('customer',array('uid'=>$str))->result();
		//print_r($response);
			if($response)
			{
				echo 'Correct Account';
			}
			else{
				echo 'Account Does`t Exit!';
			}
	}
	public function userValue()
	{
		$str= $_REQUEST['q'];
		$response=$this->db->get_where('customer',array('uid'=>$str))->result();
		//print_r($response);
			if($response)
			{
				echo '<span style="color:red;">Already exist</span>';
			}
			else{
				echo '<span style="color:green;">User id Available</span>';
			}
	}


	public function checkName()
	{
		$str= $_REQUEST['p'];
		$response=$this->db->get_where('customer',array('name'=>$str))->result();
		//print_r($response);die();
			if($response)
			{
				echo 'Correct Account';
			}
			else{
				echo 'Account Does`t Exit!';
			}
	}

	public function userName()
	{
		$str= $_REQUEST['p'];
		$response=$this->db->get_where('customer',array('name'=>$str))->result();
		//print_r($response);
			if($response)
			{
				echo '<span style="color:red;">Already exist</span>';
			}
			else{
				echo '<span style="color:green;">User id Available</span>';
			}
	}



}

    	
    	
		

	