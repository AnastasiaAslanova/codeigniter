<?php

class Category extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('category_model');
	}

	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->helper('url');

		$data['title'] = 'Create new category';

		$this->form_validation->set_rules('category', 'Title', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('goods/category');
			$this->load->view('templates/footer');

		}
		else
		{
			$this->category_model->set_category();
			redirect('goods');
		}
	}

}
