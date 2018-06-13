<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Institute extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Institute_model');
		$this->load->library('session');
		if(!$this->session->userdata('admin_name')==true)
    {
      redirect(base_url().'login/logout');
    }
		
	}
	public function index()
	{
		$data['institute']=$this->db->get('institute')->result();
		$this->load->view('institute/index',$data);

	}
	public function add()
	{
		$this->load->view('institute/institute_form');
	}

	
	
	
	public function institute_form()
	{
	
		$institute_name=$this->input->post('institute_name');
		$institute_val=substr($institute_name,0,6);
		//$institute_value=str_shuffle($institute_val).'/'.mt_rand(10000,99999);
		$institute_value= uniqid($institute_val).mt_rand(10000,99999);
		$data = array(
		'institute_id'=>str_replace(' ','',$institute_value),
        'institute_name'=>$this->input->post('institute_name'),
        'discount'=>$this->input->post('discount'),
        'category'=>$this->input->post('category'),
        'package'=>$this->input->post('package'),
        'payment'=>$this->input->post('payment'),
        'min_purchase'=>$this->input->post('min_purchase'),
        'current_date_inst'=>$this->input->post('current_date_inst'),
    	);
    	echo $package = $this->input->post('package');
		echo $count = count($this->input->post('package'));die();
    	$this->Institute_model->institute_form_insert($data,$package,$count);
    	$this->session->set_flashdata('message', 'Data Saved Successful!');
   	 	redirect(base_url().'institute');
	}
	public function edit($value)
	{

		
		$query['institute'] = $this->db->get_where('institute',array('ins_id'=>$value))->result();
		//print_r($query);die();
		$this->load->view('institute/edit',$query);
	}
	public function update()
	{
		$id=$this->input->post('id');
		$institute_name=$this->input->post('institute_name');
		$data = array(
		'institute_id'=>str_replace(' ','',$institute_value),
        'institute_name'=>$this->input->post('institute_name'),
        'discount'=>$this->input->post('discount'),
        'institute_id'=>$this->input->post('institute_id'),
        'category'=>$this->input->post('category'),
        'package'=>$this->input->post('package'),
        'payment'=>$this->input->post('payment'),
        'min_purchase'=>$this->input->post('min_purchase'),
        'current_date_inst'=>$this->input->post('current_date_inst'),
    	);
    	$this->Institute_model->institute_form_update($id,$data);
    	$this->session->set_flashdata('message', 'Data Udpdate Successfully!');
   	 	redirect(base_url().'institute');
    	
	}
	public function delete_row($value)
  		{
	  		$this->db->where('ins_id',$value);
	  		$this->db->delete('institute');
	  		$this->session->set_flashdata('delete', 'Data delete Successfully!');
   	 	redirect(base_url().'institute');
  		}

    public function discount()
        {
        	$this->load->view('institute/discount');
        }

    public function update_discount()
     {
     
     }
}
