<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('formsend_model');
		// load form and url helpers
		$this->load->helper(array('form'));
		// load form_validation library
		$this->load->library(array('form_validation','pagination'));

	}

	public function form($id = FALSE)
	{
		if(!$this->input->is_ajax_request()){
			// init params
			$params = array();
			$limit_per_page = 5;
			$start_index = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
			$total_records = $this->formsend_model->get_total();

			if ($total_records > 0)
			{
				// get current page records
				$params["results"] = $this->formsend_model->get_current_page_records($limit_per_page, $start_index);

				$config['base_url'] = base_url() . 'form';
				$config['total_rows'] = $total_records;
				$config['per_page'] = $limit_per_page;
				$config["uri_segment"] = 3;

				$this->pagination->initialize($config);

				// build paging links
				$params["links"] = $this->pagination->create_links();
			}
			$r['params'] = $params;
			$r['r'] = $this->formsend_model->getDataPassangers($id);
			$this->form_validation->set_rules('name', 'name', 'trim|required|min_length[5]');
			$this->form_validation->set_rules('date', 'date', 'trim|required');
			$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
			$this->form_validation->set_rules('color', 'color', 'trim|required');
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('form_show',$r);
			}
			else
			{
				$this->formsend_model->sendDataPassangers($id);
				$this->load->view('formsuccess');
			}

		}
		else{
            echo $this->formsend_model->sendDataPassangers();
		}

	}
	public function pagin($id = FALSE)
	{
		echo $id;
	}

}
