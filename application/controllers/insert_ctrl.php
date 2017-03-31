<?php

class insert_ctrl extends CI_Controller {

public function __construct() {
		parent::__construct();
		$this->load->model('insert_model');
}
 public function index() {

			$this->load->library('form_validation');

			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

			$this->form_validation->set_rules('firstname', 'Firstname', 'required|min_length[5]|max_length[20]');

			$this->form_validation->set_rules('lastname', 'Lastname', 'required|min_length[5]|max_length[10]');

			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

			$this->form_validation->set_rules('password', 'Password', 'required|regex_match[/^[0-9]{10}$/]');

			$this->form_validation->set_rules('admin', 'Admin', 'required|min_length[4]|max_length[12]');

if ($this->form_validation->run() == FALSE) {
$this->load->view('insert_view');
} else {

$data = array(
			'User_Firstname' => $this->input->post('firstname'),
			'User_Lastname' => $this->input->post('lastname'),
			'User_Email' => $this->input->post('email'),
			'User_Password' => $this->input->post('password'),
			'User_Admin' => $this->input->post('admin')
);

	$this->create_model->form_insert($data);
	$data['message'] = 'Data Inserted Successfully';

	$this->load->view('insert_view', $data);
}
}
}

?>