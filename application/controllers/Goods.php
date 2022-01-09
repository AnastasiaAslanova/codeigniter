<?php

class Goods extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('goods_model');
		$this->load->model('category_model');
		$this->load->helper('url');
	}

	public function create()
	{
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('form_validation');

		$data['title'] = 'Shopping list';


		$this->form_validation->set_rules('name', 'Title', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$data['categories'] = $this->category_model->get_category();
			$this->load->view('templates/header', $data);
			$this->load->view('goods/goods', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			$this->goods_model->set_goods();
			redirect('list');
		}
	}
}
