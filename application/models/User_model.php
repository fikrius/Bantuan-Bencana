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
		return $this->db->get_where("artikel", $where);
	}

	public function kirim_komentar($data){
		return $this->db->insert("komentar", $data);
	}

	public function load_komentar(){
		return $this->db->get("komentar");
	}

	public function get_komentar($id_artikel){
		$query = $this->db->query("
			SELECT k.id_komentar, a.id_artikel, u.id_users, k.komentar, k.tanggal_komentar, u.foto, u.nama_depan, u.nama_belakang FROM komentar k JOIN users u ON k.id_users = u.id_users JOIN artikel a ON k.id_artikel = a.id_artikel WHERE a.id_artikel = '$id_artikel' ORDER BY k.tanggal_komentar DESC 
		");
		return $query;
	}
}