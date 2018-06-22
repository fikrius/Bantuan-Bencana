<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');

		//variabel untuk menampung kode html
		$output = "";
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
						<a href='.site_url("login").' class="nav-link">Login</a>
					</li><li class="nav-item">
						<a href='.site_url("daftar").' class="nav-link">Daftar</a>
					</li>
				</ul>
			';
		}
	}

	//notifikasi di navbar, kanan navnar-brand
	public function show_notif(){

	}

	//button minta bantuan
	public function show_tombol_bantuan(){
		//cek session sudah ada apa belum
		if(isset($_SESSION['logged_in'])){
			echo '
				<a class="btn btn-success" name="btn-bantuan" id="btn-bantuan" href='.site_url('bantuan').'>Minta Bantuan</a>
			';
		}
	}

	//menu dropdown di navbar paling kanan
	public function show_dropdown_menu(){
		//cek session login sudah ada apa belum
		if(isset($_SESSION['logged_in'])){
			echo '
			<a class="navbar-right dropdown-toggle" role="button" href="" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-decoration: none; color: #000;" onmouseover='."this.style.color='#fff'".' onmouseleave='."this.style.color='#000'".'>
				  	<img class="rounded-circle" style="width: 30px;" src='.base_url('assets/img/sample.jpg').'>
				  </a>

			<div class="dropdown-menu" aria-labelledby="dropdownMenu">
				<p class="dropdown-item dropdown-backdrop">'.$this->session->userdata("nama_depan")." ".$this->session->userdata("nama_belakang").'</p>
			  	<hr>
			  	<a class="dropdown-item" href='.site_url("author/fikrius").'><i class="fa fa-user" style="margin-right: 5px;"></i> Profil</a>
			  	<a class="dropdown-item" href='.site_url("home").'><i class="fa fa-home" style="margin-right: 5px;"></i> Beranda</a>
			  	<a class="dropdown-item" href='.site_url("setting").'><i class="fa fa-cog" style="margin-right: 5px;"></i> Pengaturan</a>
			  	<a class="dropdown-item" href='.site_url("logout").'>Keluar</a>
			</div>
			';
		}
	}

	//menu login di halaman post paling bawah
	public function show_link_login(){
		//cek session login sudah ada apa belum
		if(!isset($_SESSION['logged_in'])){
			echo '
				<a class="sign-in-link" href='.site_url("login").'>Login</a><span> untuk dapat berkomentar</span>
			';
		}
	}

	//tampil balas komentar di view post
	public function show_balas_komentar(){
		//cek session login sudah ada apa belum
		if(isset($_SESSION['logged_in'])){
			echo '
				<hr>
				<button id="btn-balas" class="btn btn-secondary" style="margin-bottom: 1rem;">
		  			<i class="fa fa-reply"></i>
		  			Balas
		  		</button>
			';
		}
	}

}
