<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Food_category extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Food_category_model');
		$this->load->library('session');
		if($this->session->user_date('login_ind')==false)
		{
			redirect(base_url().'login/welcome');
		}
	}
	public function index()
	{
		
		$data['query'] = $this->Food_category_model->view(); 
		$this->load->view('food_category/index',$data);
	}
	public function view()
	{
		$this->load->view('food_category', $data);
	}
	public function add()
	{

    	$this->load->view('food_category/food_category_form');
	}
	public function food_category_form()
	{
		///...code
	}
}
