<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Customer_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function save($data)
	{
		return $data=$this->db->insert('customer',$data);
	}
	public function listing($data)
	{
		$this->db->where('mobile',$data['mobile']);
		$this->db->where('uid',$data['uid']);
		$this->db->where('email',$data['email']);
		return $data=$this->db->get('customer')->result();
	
	}
	public function balance_chenge($uid,$bal)
	{
		$this->db->set('balance', $bal);
		$this->db->where('institute', $uid);
		$this->db->update('customer');
				
	}
	public function balance_check($uid)
	{
		$this->db->where('uid',$uid);
		return $this->db->get('customer')->result();
	}
	
	public function banned($uid)
	{
		$where = "uid='$uid' OR mobile='$uid' OR email='$uid'";
        if($this->db->where($where)){
        	$val= array('block'=>1);
        	if($this->db->update('customer',$val))
        	{$this->db->where($where);
        	 return $this->db->get('customer')->result();   
        	}
        }
        else return null;

	
	}
	public function listValue($uid)
	{
		$this->db->where('instituteId',$uid);
		return $this->db->get('customer')->result();
	}
	
	
}
/*SELECT sum(`forfood`),SUM(fordrinks), SUM(`forpackages`) FROM `payment` where `created_at` BETWEEN '2018-04-29 11:50:44' AND '2018-05-29 11:50:44' 



SELECT sum(`forfood`),SUM(fordrinks), SUM(`forpackages`) FROM `payment` where `created_at` BETWEEN '2018-04-29 11:50:44' AND '2018-05-29 11:50:44' GROUP BY(`institute`) extract (year_Month from created_at)
*/