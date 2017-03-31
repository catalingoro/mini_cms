<?php 	

/**
* 
*/
class Users_model extends CI_Model
{
	
	public function get()
	{
		$query = $this->db->get('users');
		return $query->result();
	}
	public function set()
	{
		$email = trim(strip_tags($data['email']));
		$password = password_hash($data['email'] PASSWORD_DEFAULT);
		$name = trim(strip_tags($data['email']));
		$query = $this->db->insert('users', [
		'email' => $email,
		'password' => $password,
		'name' => $name,
		
		]);
		if($query === true)
		{
			return $this->db->insert_id();
		}
		return false;
	}

}



 ?>