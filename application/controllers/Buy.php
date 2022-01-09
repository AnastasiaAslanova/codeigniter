<?php

class Buy extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('category_model');
		$this->load->model('goods_model');
	}
	public function change_status(){
		$this->goods_model->change_status();

	}

	public function shopping_list(){
		$data['title'] = 'Shopping list';
		$data['goods'] = $this->goods_model->get_goods($this->input->get('id_category'), $this->input->get('status'));
		if ($this->input->is_ajax_request()) {
			$this->load->view('goods/list', $data);
		} else {
			$data['categories'] = $this->category_model->get_category();
			$this->load->view('templates/header', $data);
			$this->load->view('goods/filter', $data);
			$this->load->view('goods/list', $data);
			$this->load->view('goods/js');
			$this->load->view('templates/footer');
		}
	}

	public function delete($id){
		$this->goods_model->delete_good($id);
	}
}
