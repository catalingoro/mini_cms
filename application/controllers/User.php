<?php

class User  extends CI_Controller
{
	public function index()
	{
		echo '<pre>';
		print_r($this);
	}

	public function login()
	{
		$this->load->model('User_model');
		if(isset($_POST['email'])&& isset($_POST['password']))
		{
			$email = $_POST['email'];
			$password = $_POST['email'];
			$user = $this->User_model->get_user_by_email('email');
			if(isset($user->password) && $user->password === $password)
			{
				echo 'NICE';
				return;
			}
			else
			{
				echo 'Username or password is wrong'
			}
		}

		$this->load->view('user_login_view');
		

	}
}