<?php  

class User_model extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function get_artikel(){
		return $this->db->get('artikel'); 
	}

	public function show_post($where){
		return $this->db->get_where("artikel", $where);
	}

}