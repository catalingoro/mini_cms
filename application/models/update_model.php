<?php
	class update_model extends CI_Model{

		public function show_users(){
			$query = $this->db->get('users');
			$query_result = $query->result();
			return $query_result;
}

		public function show_users_id($data){
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('user_id', $data);
			$query = $this->db->get();
			$result = $query->result();
			return $result;
}

		public function update_user_id1($id,$data){
			$this->db->where('user_id', $id);
			$this->db->update('users', $data);
}
}
?>

	