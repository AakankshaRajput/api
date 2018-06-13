<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Customer_model');
		$this->load->model('User_model');
		$this->load->library('session');
  
    if(!$this->session->userdata('admin_name')==true)
    {
      redirect(base_url().'login/logout');
    }
	}
	public function index()
	{
    	$data['query'] = $this->db->order_by('uid','DESC')->get('customer')->result(); 
		  $this->load->view('customer/index',$data);

	}
	public function add()
	{

    	$this->load->view('customer/customer_form');
	}
	public function customer_form()
	{ 
		
		$user = $this->input->post('user_name');
		$user_date = date("Y-m-d");
		 $data = array(
		'uid' =>$this->input->post('uid'),
		'name'=>$this->input->post('name'),
		'mobile'=>$this->input->post('mobile'),
		'email'=>$this->input->post('email'),
		'instituteId'=>$this->input->post('instituteId'),
        'balance'=>$this->input->post('balance'),
        'category'=>$this->input->post('category'),
        'customer_date'=>$user_date,
    	);

     	$this->User_model->customer_form_insert($data);
     $this->session->set_flashdata('message', 'Data Saved Successful!');
   	 	redirect(base_url().'customer');

  	}
  	public function discount($id)
  	{
       $first_second = date('Y-01-m 00:00:00');
       $last_second  = date('Y-t-m 12:59:59'); 

      $sql="SELECT SUM(`forfood`) as food, SUM(fordrinks) as drink, SUM(`forpackages`) as pack FROM `packages` where `uid`='$id' GROUP BY YEAR('$first_second'), MONTH('$last_second')";
      $query['data']=$this->db->query($sql)->result();
      //print_r($query['data']); die();
      $query['customer']=$this->db->get_where('customer',array('uid'=>$id))->result();
           $query['id']=$id;
            $this->load->view('food_category/food_index',$query);

  	}	

  	public function update()
  	{
  		$package=$this->input->post('package');
        $fordrinks_discount=$this->input->post('fordrinks_discount');
        $forfood_discount=$this->input->post('forfood_discount');
        $forpackages_discount=$this->input->post('forpackages_discount');
        $user_id=$this->input->post('instituteId');
        $data=$fordrinks_discount+$forfood_discount+$forpackages_discount;
        $select="select * from customer where uid='$user_id'";
        $getVal=$this->db->query($select)->result();
        $total=$getVal[0]->balance+$data;
         //print_r($total); die();
       
        $this->db->where('uid',$user_id);
        $val=$this->db->update('customer',array('balance'=>$total));
        $this->index();


  	}

  	public function delete_row($value)
  	{
  		$this->db->where('customer_id',$value);
  		$this->db->delete('customer');
  		$this->index();
  	}

	
}
