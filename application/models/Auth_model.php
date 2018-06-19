<?php  

class Auth_model extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function auth_login($table, $where){
		$this->db->get_where($table, $where);
		return $this->db->affected_rows();
	}

	public function auth_daftar($table, $data){
		$this->db->insert($table, $data);
		return $this->db->affected_rows();
	}

	public function cek_username($table, $where){
		$this->db->get_where($table, $where);
		return $this->db->affected_rows();
	}

	public function cek_email($table, $where){
		$this->db->get_where($table, $where);
		return $this->db->affected_rows();
	}

	//daftar akun mayarakat => level otomatis 2
	public function insert_users($table, $data){
		$this->db->insert($table, $data);
		return $this->db->affected_rows();
	}

	//get username
	public function get_username($table, $where){
		return $this->db->get_where($table, $where);
	}

	//get username
	public function get_password($table, $where){
		return $this->db->get_where($table, $where);
	}

}