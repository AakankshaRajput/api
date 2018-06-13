<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filter extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->helper('url');
		$this->load->library('session');
  
	    if(!$this->session->userdata('admin_name')==true)
	    {
	      redirect(base_url().'login/logout');
	    }
		
	}
	public function index()  
	{
		$date=$_REQUEST['single'];
		$val['query']=$this->User_model->filterday($date);
		$this->load->view('customer/index',$val);
	}
	public function singleMonth()
	{
		$first= $_REQUEST['first_day'];
		$second=$_REQUEST['last_data']; 
		$val['query']=$this->User_model->filterdmonth($first,$second);
		$this->load->view('customer/index',$val);
	}
}
