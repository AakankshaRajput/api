<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
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
    	$data['query'] = $this->db->get('customer')->result(); 
    	//print_r($data); die(); 
		$this->load->view('customer/index',$data);

	}
	public function add()
	{

    	$this->load->view('user/user_form');
	}
	public function user_form()
	{ 
		$pass = mt_rand(11111,99999);
		$user = $this->input->post('user_name');
		$user_val = substr($user,0,5);
		$user_value = $user_val.'-'.mt_rand(10000,99999);
		$user_date = date("Y-m-d");
		 $data = array(
		'institute'=>$this->input->post('institute'),
        'email'=>$this->input->post('email'),
        'adhar_no'=>$this->input->post('adhar_no'),
        'mobile'=>$this->input->post('mobile'),
        'user_name'=>$this->input->post('user_name'),
        'password'=>$pass,
        'cur_date_user'=>$user_date,
        'balance'=>'0',
        'token'=>$user_value,
        'ip_address'=>$_SERVER['REMOTE_ADDR'],
         );
     	$this->User_model->user_form_insert($data);
   	 	redirect(base_url().'user');
  	}
  	public function discount($id)
  	{
       $first_second = date('Y-01-m 00:00:00');
       $last_second  = date('Y-t-m 12:59:59'); 

      $sql="SELECT institute_id, sum(`forfood`) as food,SUM(fordrinks) as  drink, SUM(`forpackages`) as pack FROM `payment` where `institute_id`='$id' BETWEEN '$first_second' AND '$last_second' GROUP BY(`institute_id`)";
      $query['data']=$this->db->query($sql)->result();
      $query['customer']=$this->db->get_where('customer',array('instituteId'=>$id))->result();
      $query['institute']=$this->db->get_where('institute',array('institute_id'=>$id))->result();
     
           $query['id']=$id;
            $this->load->view('food_category/food_index',$query);

  	}	

  	public function update()
  	{
  		$package=$this->input->post('package');
        $fordrinks_discount=$this->input->post('fordrinks_discount');
        $forfood_discount=$this->input->post('forfood_discount');
        $forpackages_discount=$this->input->post('forpackages_discount');
        $user_id=$this->input->post('user_id');
        $data=$fordrinks_discount+$forfood_discount+$forpackages_discount;
        $select="select * from user where institute='$user_id'";
        $getVal=$this->db->query($select)->result();
         $total=$getVal[0]->balance+$data;
       
        $this->db->where('institute',$user_id);
        $val=$this->db->update('user',array('balance'=>$total));
        $this->index();


  	}
  	public function delete_row($value)
  	{
  		$this->db->where('user_id',$value);
  		$this->db->delete('user');
  		//$this->session->flush('message','Data Deleted');
  		$this->index();

  	}

}