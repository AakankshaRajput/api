<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Category_model');
		$this->load->library('session');
    	if(!$this->session->userdata('admin_name')==true)
      	{
        	redirect(base_url().'login/logout');
      	}
	}
	public function index()
	{
		
		$data['query'] = $this->Category_model->view(); 
		$this->load->view('category/index',$data);
	}
	public function view()
	{
		$this->load->view('category', $data);
	}
	public function add()
	{

    	$this->load->view('category/category_form');
	}
	public function category_form()
	{
		$data = array(
		
        'category_name'=>$this->input->post('category_name'),
        'fordrinks'=>$this->input->post('fordrinks'),
        'forfood'=>$this->input->post('forfood'),
        'forpackages'=>$this->input->post('forpackages'),
        
    	);
    	
    	$this->Category_model->category_form_insert($data);
    	$this->session->set_flashdata('message', 'Data Saved Successful!');
   	 	redirect(base_url().'category');
	}
}