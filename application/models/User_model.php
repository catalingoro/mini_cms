<?php
class User_model extends CI_Model
{
	public function get_user_by_email(string $email)
	{
		$query = $this->db
		->select('*')
		->from('users')
		->where('email', $this->db->escape_str($email))
		->limit(1)
		->get();

if(null !==($result = $query->row()))
{
	return $result;
	}
	return false;
}
}