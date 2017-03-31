<?php
class update_ctrl extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('update_model');
	}

	public function show_user_id() {
		$id = $this->uri->segment(3);
		$data['users'] = $this->update_model->show_users();
		$data['single_user'] = $this->update_model->show_user_id($id);
		$this->load->view('update_view', $data);
	}

	public function update_user_id1() {
		$id= $this->input->post('uid');
		$data = array(
			'User_Firstname' => $this->input->post('firstname'),
			'User_Lastname' => $this->input->post('lastname'),
			'User_Email' => $this->input->post('email'),
			'User_Password' => $this->input->post('password'),
			'Student_Admin' => $this->input->post('admin')
		);
		$this->update_model->update_user_id1($id,$data);
		$this->show_user_id();
	}
}
?>