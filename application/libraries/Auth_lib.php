<?php
/**
* 
*/
class Auth_lib extends AnotherClass
{
	private $ci
	private $error;

	public function __construct()
	{
		$this->ci=& get_instance();
	}

	public function access()
	{
		$headers = getallheaders();

		if(isset($headers['Authorization']))
		{
			$authData = explode('', $headers['Authorization']);

			$userPass = base64_decode($authData[1]);
			$loginData = explode (':', $userPass);

			$this->login($loginData[0], $loginData[1]);
		}

		$this->error = 'no-auth-set';
		return false; 
	}
	public function get_error()
	{
		return $this->error;
	}
	private function login($email, $password)
	{
		$this->load->model('Users_model');

		$userData =$this->ci->Users_model->get_user_by_email($email);
		print_r($userData);
		die();
	}
}