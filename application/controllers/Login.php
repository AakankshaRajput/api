<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->database();
		$this->load->library('session');
		

	}
	
	public function index()
	{		
		 $admin_name = $this->input->post('admin_name');
		$password = $this->input->post('password');
		$admin = $this->User_model->admin_login($admin_name,$password);
		if($admin == 1)
		{
			$user=$this->db->get('admin')->result();
			foreach ($user as $key) 
			{
				$data1 = array(
				                'admin_id' => $key->admin_id,
				                'admin_name' => $key->admin_name,
				                'login_in'=>true,
				               );
			}
				$this->session->set_userdata($data1);
				redirect(base_url().'dashboard');				
		}
		else{
			redirect(base_url().'login/welcome');
	
		}
		
	}
	public function welcome()
	{
		$this->load->view('login/login');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url().'login/welcome');
	}
	
	



}
