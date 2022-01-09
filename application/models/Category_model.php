<?php
class Category_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
		parent::__construct();
	}

	public function get_category(){
		$query = $this->db->get('category');
		return $query->result_array();
	}

	public function set_category(){
		$data = array(
			'name' => $this->input->post('category')
		);

		return $this->db->insert('category', $data);
	}

}
