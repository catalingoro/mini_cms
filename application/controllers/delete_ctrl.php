<?php
class delete_ctrl extends CI_Controller{
public function __construct(){
		parent::__construct();
		$this->load->model('delete_model');
}

public function show_user_id() {
		$id = $this->uri->segment(3);
		$data['users'] = $this->delete_model->show_users();
		$data['single_users'] = $this->delete_model->show_users_id($id);
		$this->load->view('delete_view', $data);
}

public function delete_users_id() {
		$id = $this->uri->segment(3);
		$this->delete_model->delete_users_id($id);
		$this->show_users_id();
}
}
?>