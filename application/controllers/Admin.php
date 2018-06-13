<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
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
	public function change_password()
	{
    	$this->load->view('admin/change_password');
	}
	function change()
  {
    $new=$this->input->post('password');
    $old=$this->input->post('old_password');
    $data=$this->db->get_where('admin',array('password'=>$old))->result();
    $val=$data[0]->password;
    if($val)
    {
      $this->db->where('admin_id',$data[0]->admin_id);
      $this->db->update('admin',array('password'=>$new));
    }
    $this->change_password();
  }
	
}
