<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('user_model');
		//variabel untuk menampung kode html
		$output = "";

		if(isset($_SESSION["logged_in_admin_pusat"])){
			redirect('admin-pusat/home','refresh');
		}
	}

	public function index(){
		$data['artikel'] = $this->user_model->get_artikel();
		$data['jumlah_artikel'] = $this->user_model->get_jumlah_artikel();

		$this->load->view('User/template/header');
		$this->load->view('User/pages/index', $data);
		$this->load->view('User/template/footer');
	}

	public function post(){
		$id_artikel = $this->uri->segment(2);

		$where = array(
			'id_artikel' => $id_artikel
		);
		$data['postingan'] = $this->user_model->show_post($where);
		$data['komentar'] = $this->user_model->get_komentar($id_artikel);

		$this->load->view('User/template/header');
		$this->load->view('User/pages/post', $data);
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

	public function kirim_komentar(){
		$output = "";
		$tipe_notifikasi = "";

		$id_artikel = $this->input->post("id_artikel");
		$id_users = $this->input->post("id_users");
		$tanggal_komentar = $this->input->post("tanggal_komentar");
		$komentar = htmlspecialchars($this->input->post("komentar"));

		//insert ke db komentar
		$data_komentar = array(
			'komentar' => $komentar,
			'tanggal_komentar' => $tanggal_komentar,
			'id_users' => $id_users,
			'id_artikel' => $id_artikel
		);

		$result = $this->user_model->kirim_komentar($data_komentar);
		if($result){
			$output .= "Komentar berhasil dikirim";
			$tipe_notifikasi .= "sukses";
		}else{
			$output .= "Komentar gagal dikirim";
			$tipe_notifikasi .= "gagal";
		}

		$data_output = array(
			'notifikasi' => $output,
			'tipe_notifikasi' => $tipe_notifikasi
		);
		echo json_encode($data_output);
	}

	public function get_komentar(){
		$output = "";
		$tipe_notifikasi = "";
		$id_artikel = $this->uri->segment(2);
		
		if(isset($_POST["dummy"])){
			$hasil = $this->user_model->get_komentar($id_artikel);
			// $count = $this->user_model->get_komentar($id_artikel)->num_rows();
			if($hasil){
				foreach($hasil->result() as $row){
					if($row->foto === NULL){
						$foto = "male.png";
					}else{
						$foto = $row->foto;
					}
					$tipe_notifikasi = "ada";
					$output .= '
						<div class="card">
						  <div class="card-header">	
						  	<ul class="nav">
						  		<li class="nav-item">
						  			<a class="nav-link" tabindex="0" class="btn btn-lg btn-danger" role="button" data-toggle="popover" data-trigger="focus" title='.$row->nama_depan.' data-content="Jombor, Sleman">
						  				<img src='.base_url("assets/img/postingan/".$row->$foto).' class="img-fluid rounded-circle">
						  			</a>
						  		</li>
						  		<li class="nav-item">
						  			<p>'.$row->tanggal_komentar.'</p>
						  		</li>
						  	</ul>
						  </div>
						  <div class="card-body">
						    <p class="card-text">'.$row->komentar.'</p>
						  </div>
						</div>
					';
				}
			}else{
				$tipe_notifikasi = "tidak ada";
				$output .= '
					<h5 class="text-center mt-4">Tidak Ada Komentar hehe</h5>
				';
			}
			$data_output = array(
				'komentar' => $output,
				'tipe_notifikasi' => $tipe_notifikasi
			);
			echo json_encode($data_output);
		}
		
	}

}
