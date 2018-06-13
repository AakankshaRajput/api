<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	public function save($data)
	{
		return $data=$this->db->insert('user',$data);
	}

	public function view()
	{
		 return $query = $this->db->get('user')->result();
   	}

   	
   	public function customer_form_insert($data)
   	{
   		//print_r($data); die();
   		 return $this->db->insert('customer',$data);
	}
	public function filterday($value)
	{
		return $this->db->get_where('customer',array('customer_date	'=>$value))->result();
	}
	public function filterdmonth($value,$data)
	{
		$this->db->where('customer_date BETWEEN "'. date('Y-m-d', strtotime($value)). '" and "'. date('Y-m-d', strtotime($data)).'"');
		return $this->db->get('customer')->result();
	}
	
	/*login admin*/
	public function admin_login($user_email,$user_pass)
	{
	return	$data=$this->db->get_where('admin',array('admin_name'=> $user_email,'password'=>$user_pass,))->num_rows();	
	}




	/*dashboard*/
	public function count_all()
    {
        return $this->db->query("SELECT * FROM customer")->result();
    }
    public function balance_all()
    {
        return $this->db->query("SELECT sum(balance) as bal FROM customer")->row();
    }
    public function institute_all()
    {
        return $this->db->query("SELECT * FROM `institute`")->result();
    }
    public function customer_all_balance()
    {
        return $this->db->query('SELECT SUM(`balance`)  as bal FROM customer GROUP BY EXTRACT(YEAR_MONTH FROM created_at)')->result();
    }
    public function customer_all_institute()
    {
        return $this->db->query('SELECT count(YEAR(`created_at`)) as year_val, MONTH(`created_at`) as month_val ,COUNT(*) as total FROM institute GROUP BY YEAR(`created_at`), MONTH(`created_at`)')->result();
    }
    public function customer_all_customer()
    {
        return $this->db->query('SELECT COUNT(`customer_id`) as users FROM customer GROUP BY EXTRACT(YEAR_MONTH FROM `created_at`)')->result();
    }
	
}
