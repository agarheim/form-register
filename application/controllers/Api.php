<?php declare(strict_types=1);
defined('BASEPATH') OR exit('No direct script access allowed');

class Api  extends CI_Controller
{   //private $a;
	public function index(array $arr = NULL)
	{  $key = implode('-', str_split(substr(strtolower(md5(microtime().rand(1000, 9999))), 0, 30), 6));
		http_response_code();
		header('Status: 200 OK');
		echo json_encode(array('apikey' => $key, 'test' =>$arr));
		//$this->load->view('welcome_message');
	}
}
