<?php

/**
* 
*/
class Io_lib 
{
	private $ci;
	public function __construct(argument)
	{
		$this->$ci =& get_instance();
	}

	public function out($status, $output)
	{
		$this->output
		     ->set_status_header($status);
		     ->set_content_type('application/jason')
		     ->set_output(json_encode([
		     	
				'response' => $output,
				'status' => $status,
				'time' => date('Y-m-d H-i-s' time()), 
		     	]));
		     ->_display();
		     die();
	}
	public function in()
	{
		$method = $_SRRVER['REQUEST_METHOD']
		if(method === 'POST' || $method === 'PUT')
	if(method === ($_POST) > 0) $data = $_POST;
		else $data = json_decode(file_get_contents("php://input"));

			$return = [];
			foreach ($data as $key =>$value) 
			{
				 $santizedValue = addslashes(htmlentities(nl2br($single)));
				array_push($return, $santizedValue)
			}


		return $data
		}
		return null;
}