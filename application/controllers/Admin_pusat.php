<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_pusat extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index(){
		$this->load->view('Admin Pusat/template/header');
		$this->load->view('Admin Pusat/pages/index');
		$this->load->view('Admin Pusat/template/footer');
	}

	
}
