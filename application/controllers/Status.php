<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->library('session');
		if($this->session->user_date('login_ind')==false)
		{
			redirect(base_url().'login/welcome');
		}
	}

	

}
