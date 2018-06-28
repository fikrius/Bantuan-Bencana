<?php  

class User_model extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function get_artikel(){
		return $this->db->query('SELECT * FROM artikel ORDER BY id_artikel DESC'); 
	}

	public function get_jumlah_artikel(){
		$query = $this->db->get("artikel");
		return $query->num_rows();
	} 

	public function show_post($where){
		$this->db->get_where("artikel", $where);
		$this->db->order_by("id_artikel", "DESC");
		return $this->db->get();
	}

}