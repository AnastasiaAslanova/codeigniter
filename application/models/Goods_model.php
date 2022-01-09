<?php
class Goods_model extends CI_Model {
	const BOUGHT = 1;
	const NOTBUGHT = 0;

	public function __construct()
	{
		$this->load->database();
		parent::__construct();
	}

	public function set_goods()
	{
		$data = array(
			'name' => $this->input->post('name'),
			'status' => self::NOTBUGHT,
			'date' => date('Y-m-d H:i:s'),
			'id_category' => $this->input->post('category')
		);

		return $this->db->insert('goods', $data);
	}

	public function get_goods($id_category = null, $status = null){
		$this->db->select("goods.*,category.name category_name");
		if ($id_category != null){
			$this->db->where('id_category', $id_category);
		}
		if ($status != null){
			$this->db->where('status', $status);
		}
		$this->db->join('category', 'goods.id_category = category.id','left');
		$query = $this->db->get('goods');

		return $query->result_array();
	}

	public function delete_good($id){
		$this->db->where('id', $id);
		$this->db->delete('goods');
	}

	public function change_status(){
		$id = $this->input->post('good_id');
		$data = array('status'=> $this->input->post('checked'));
		$this->db->where('id',$id);
		return $this->db->update('goods',$data);

	}

}
