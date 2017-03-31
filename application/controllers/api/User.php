<?php

class Users extends CI_Controller
{
	private $status = 0;
	public function __construct()

	{
		parent::__construct();
		$this->load->model('Users_model');
	}
	
	public function index()
	{
		switch($_SERVER['REQUEST_METHOD'])
		{
			case'GET':
			$this->auth->access();
			$status = $this->status;
			$output = $this->User_model->get();
			break;
			case'POST':
			$status = $this->status;
			$output = $this->user_create();
			break;
			default: 
				$status = 405;
				$output = 'Not allowed';
		}
		$this->io->out($status, $output)
		$this->ci->output
		     ->set_status_header($status);
		
		     ->set_content_type('application/jason')
		     ->set_output($userlist)
		     ->_display();
		     return $this->form_validation->error_array())

		     die();

	}

	private function user_create()
	
	{
$this->load->library('form_validation');
		if(count($_POST) > 0) $data = $_POST;
		else $data = json_decode(file_get_contents("php://input"));
		$this->form_validation->set_data(array($data));
		if($this->form_validation->run('create_user') === true);
		{
if($this->User_model->set($data)) !== false)
{
	$this->status = 200;
		return [
		'user_id' =>uid,
		];
}
		}
		$this->status = 400;
		return $this->form_validation->error_array();
	
	}
}
