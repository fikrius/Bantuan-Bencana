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

	//menu login, register di navbar. kiri dropdown menu
	public function show_auth_menu(){
		//cek session login sudah ada apa belum 
		if(!isset($_SESSION['logged_in'])){
			echo '
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a href="<?php echo site_url('."login".'); ?>" class="nav-link">Login</a>
					</li><li class="nav-item">
						<a href="<?php echo site_url('."daftar".'); ?>" class="nav-link">Daftar</a>
					</li>
				</ul>
			';
		}
	}

	//notifikasi di navbar, kanan navnar-brand
	public function show_notif(){

	}

	//menu dropdown di navbar paling kanan
	public function show_dropdown_menu(){

	}

	//menu login di halaman post paling bawah
	public function show_link_login(){
		//cek session login sudah ada apa belum
		if(!isset($_SESSION['logged_in'])){
			echo '
				<a class="sign-in-link" href="<?php echo site_url('."login".'); ?>">Login</a><span> untuk dapat berkomentar</span>
			';
		}
	}

}
