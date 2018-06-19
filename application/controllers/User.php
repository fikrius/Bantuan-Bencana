<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		//cek sudah login apa belum
		if(!isset($_SESSION['logged_in'])){
			redirect('login','refresh');
		}
	}

	public function index(){
		

		$this->load->view('User/template/header');
		$this->load->view('User/pages/index');
		$this->load->view('User/template/footer');
	}

	public function post(){
		$this->load->view('User/template/header');
		$this->load->view('User/pages/post');
		$this->load->view('User/template/footer');
	}

	public function bantuan(){
		$this->load->view('User/template/header');
		$this->load->view('User/pages/bantuan');
		$this->load->view('User/template/footer');
	}

}
