<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		if(!$this->session->userdata('admin_name')==true)
	    {
	      redirect(base_url().'login/logout');
	    }
	}
	public function index()  
	{
		$this->load->view('admin/index');
	}
}
