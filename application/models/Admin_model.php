<?php  

class Admin_model extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function upload_artikel($data){
		$this->db->insert('artikel', $data);
		return $this->db->affected_rows();
	}

	//upload file
	public function upload_file_artikel($data){
		$query = $this->db->insert("artikel", $data);
		return $query;
	}

	public function get_list_artikel(){
		return $this->db->query("SELECT * FROM artikel ORDER BY tanggal_posting DESC");
	}

	public function hapus_artikel($where){
		return $this->db->delete("artikel", $where);
	}


	

}