<?php

use GuzzleHttp\Client;

class Formsend_model  extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('form_validation','pagination'));
	}

	public function sendDataPassangers()
	 {
		 $name = $this->input->post('name');
		 $email = $this->input->post('email');
		 $date = $this->input->post('date');
		 $color = $this->input->post('color');
		 $data = array('id' =>NULL, 'name' => $name, 'date_birth' => $date ,'email' => $email, 'favorite_color' => $color);

		 if ( $this->db->insert('users', $data))
		 {
	         $err = "<p class='danger'>Data added!</p>";
		 }
		 else
		 {
			 $err =  "Request failed!";
		 }
		 return  $err;
	 }

	public function getDataPassangers($id = FALSE)
	{
//		$sql = $this->db->get('users', 10, 20);
//		//$query = $this->db->query($sql);
//
//		$config['base_url'] = '/form';
//		$config['per_page'] = 5;
//		$config['total_rows'] = round($this->get_total()/$config['per_page']);
//		$this->pagination->initialize($config);
//
//
//		return  $this->pagination->create_links();
	}
	public function get_current_page_records($limit, $start)
	{
		$this->db->limit($limit, $start);
		$query = $this->db->get("users");

		if ($query->num_rows() > 0)
		{
			foreach ($query->result() as $row)
			{
				$data[] = $row;
			}

			return $data;
		}

		return false;
	}

	public function get_total()
	{
		return $this->db->count_all("users");
	}
}
