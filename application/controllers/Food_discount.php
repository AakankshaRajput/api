<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Food_discount extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Food_model');
		$this->load->library('session');
		if(!$this->session->userdata('admin_name')==true)
    {
      redirect(base_url().'login/logout');
    }
		
	}
	public function index()
	{
		
		$data['query'] = $this->Food_model->view(); 
		$this->load->view('food_discount/index',$data);
	}
	public function view()
	{
		$this->load->view('food_discount', $data);
	}
	public function add()
	{

    	$this->load->view('food_discount/food_form');
	}
	public function food_form()
	{
		$data = array(
		
        'food_discount'=>$this->input->post('food_discount'),
        'food_name'=>$this->input->post('food_name'),
        'user_id'=>$this->input->post('user_id'),
        'institute_id'=>$this->input->post('institute_id'),
        'category_id'=>$this->input->post('category_id'),
    	);
    	$this->Food_model->food_form_insert($data);
    	$this->session->set_flashdata('message', 'Data Saved Successful!');
   	 	redirect(base_url().'food_discount');
	}
}