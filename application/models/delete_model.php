<?php
class delete_model extends CI_Model{

public function show_users(){
		$query = $this->db->get('users');
		$query_result = $query->result();
		return $query_result;
}

public function show_user_id($data){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('users_id', $data);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
}

public function delete_user_id($id){
		$this->db->where('user_id', $id);
		$this->db->delete('users');
}
}
?> 