<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->library('session');
		if(!$this->session->userdata('admin_name')==true)
	    {
	      redirect(base_url().'login/logout');
	    }
		
	}
	public function index()
	{
		$data['user']=$this->User_model->count_all();
        $data['balance']=$this->User_model->balance_all();
        $data['institute_all']=$this->User_model->institute_all();
        $data['customer_all_data']=$this->User_model->customer_all_balance();
        $data['customer_all_institute']=$this->User_model->customer_all_institute();
        $data['customer_all_customer']=$this->User_model->customer_all_customer(); 


		//print_r($data['customer_all_data']); die();
		$this->load->view('admin/index',$data);

	}
}