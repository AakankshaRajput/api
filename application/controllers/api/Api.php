<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}
	public function index()
	{
		$data = array(
			'adhar_no' => $_POST['adhar_no'],'user_name' => $_POST['user_name'],'password' => $_POST['password'],'mobile' => $_POST['mobile'],'email' => $_POST['email'],'token' => $_POST['token'],'ip_address' => $_POST['ip_address']
			 );
		$id=$this->User_model->save($data);
		if($id==1)
		{
		$array = array('status' =>true,'message'=>'Data inserted!');
		}
		else{
			$array = array('status' =>false,'message'=>'Wrong Credential!' );
		}
		echo json_encode($array);
	}
	public function login()
	{
		$user = $_POST['user_name'];
		$pass = $_POST['password']; 
		$value=$this->db->query("select * from user where user_name='$user' And password='$pass'")->result();
		if($value)
		{
		$array = array('status' =>true,'message'=>$value);
		}
		else{
			$array = array('status' =>false,'message'=>'Wrong Credential!' );
		}
		echo json_encode($array);
	}
	public function balance_add()
	{
		$user_id = $this->input->post('user_id');
		$balance = $this->input->post('balance');
		$this->db->where('user_id',$user_id);
		$value = $this->db->update('user',array('balance' => $balance, ));
		if($value)
		{
		$array = array('status' =>true,'message'=>'Balance Addedd successfull');
		}
		else{
			$array = array('status' =>false,'message'=>'Wrong Credential!' );
		}
		echo json_encode($array);
	}
	public function package()
	{
		$user_id = $this->input->post('user_id');
		$fordrinks = $this->input->post('fordrinks');
		$forfood = $this->input->post('forfood');
		$forpackages = $this->input->post('forpackages');
		$data  = array('user_id' => $user_id, 'fordrinks' => $fordrinks,'forfood' => $forfood,'forpackages' => $forpackages,);
		$value =$this->db->insert('payment',$data);
		if($value)
		{
		$array = array('status' =>true,'message'=>'Package Addedd successfull');
		}
		else{
			$array = array('status' =>false,'message'=>'Wrong Credential!' );
		}
		echo json_encode($array);
	}
	
	
}
