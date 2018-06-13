<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Customer_model');
	}
	public function index()
	{
		if($data)
		{
		$array = array('status' =>true,'message'=>$data);
		}
		else{
			$array = array('status' =>false,'message'=>'Wrong Credential!' );
		}
		echo json_encode($array);

	}
	public function add_customer_api()
	{
		//print_r($_REQUEST); die();
		////{uid,email,name,10 digit mobile number,balance,category,instituteId}
		$user_date = date("Y-m-d");
		$data=array(
		'uid'=> $this->input->post('uid'),
		'email'=> $this->input->post('email'),
		'name'=> $this->input->post('name'),
		'mobile'=> $this->input->post('mobile'),
		'customer_date'=> $user_date,
		'balance'=> $this->input->post('balance'),
		'category'=> $this->input->post('category'),
		'instituteId'=> $this->input->post('instituteId'),
		);
		$getList=$this->Customer_model->listing($data);
		if($getList[0]->email== $this->input->post('email') OR $getList[0]->mobile== $this->input->post('mobile') OR $getList[0]->uid== $this->input->post('uid'))
		{
			 $array = array('status' =>false,'message'=>'Record Already Exit');
		}
		else{
			$value=$this->Customer_model->save($data);
			$array = array('status' =>true,'message'=>'Record Save Successfull!' );
			
		}
		echo json_encode($array);
		

	}
	public function balance_update()
	{
		$uid=$this->input->post('uid');
		$balance= $this->input->post('balance');
		$this->db->where('uid',$uid);
		$data=$this->db->update('customer',array('balance'=>$balance));
		if($data){
			$array = array('status' =>true,'message'=>'Records Save Successfull!' );
		}
		else{
			$array = array('status' =>false,'message'=>'User Does` not! Exit' );
		}
		echo json_encode($array);

	}
	
	public function block()
	{
		$uid= $this->input->post('uid');
		
		$value=$this->Customer_model->banned($uid);

		if($value){
			
			$array = array('status' =>true,'message'=>$value[0]->uid);	 
		}
		else{
		$array = array('status' =>false,'message'=>'User Does` Not Exit');	
		}
		echo json_encode($array);
	}
	public function allUser()
	{
		$uid= $this->input->post('uid');
		$value=$this->Customer_model->listValue($uid);
		if($value==true){
			
			$array = array('status' =>true,'message'=>$value, );	 
		}
		else{
		$array = array('status' =>false,'message'=>'User Does` Not Exit');	
		}
		echo json_encode($array);

	}
	public function food()
	{
		
		
       $data=count($_REQUEST);

		for($i=0;$i< $data;$i++){
			$data=array(
			"uid" =>$this->input->post('uid'),
			"fordrinks" =>$this->input->post('fordrinks'),
			"forfood" =>$this->input->post('forfood'),
			"forpackages" =>$this->input->post('forpackage'),
			"created_at" =>$this->input->post('created_at')
			);
		$val=$this->db->Insert('packages',$data);

		}
		if($val){
			
			$array = array('status' =>true,'message'=>'Records Save Successfull!', );	 
		}
		else{
		$array = array('status' =>false,'message'=>'User Does` Not Exit');	
		}
		echo json_encode($array);
	}
	public function login()
	{
		$user=$this->input->post('institute_id');
		$pass=$this->input->post('password');
		$value=$this->db->query("select * from institute where institute_id='$user' And password='$pass'")->result();
		if($value)
		{
		$array = array('status' =>true,'message'=>$value);
		}
		else{
			$array = array('status' =>false,'message'=>'Wrong Credential!' );
		}
		echo json_encode($array);

	}
	public function paymentRecords()
	{
		
		/*$data='[{"uid":123456789012,"fordrinks":15,"forfood":35,"forpackages":90,"created_at":1527850896675},
		{"uid":123456789019,"fordrinks":35,"forfood":65,"forpackages":120,"created_at":1527850896699}]';*/
		 $val=json_decode($_REQUEST['array'],true);
		foreach ($val as $key => $value) 
		{
		   $data=$this->db->insert('packages', $value);
		}

		if($data)
		{
		    $array = array('status' =>true,'message'=>'Data saved Successfull');
		}
		else{
			$array = array('status' =>false,'message'=> 'Account Does not exist!' );
		}
		echo  json_encode($array);

	}
	
	
}
