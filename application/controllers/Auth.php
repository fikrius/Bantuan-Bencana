<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('auth_model');
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function login(){
		//cek kalau sudah login, tidak bisa masuk ke halaman login
		if($this->session->userdata('logged_in') === TRUE){
			redirect('home','refresh');
		}

		$this->load->view('Auth/template/header');
		$this->load->view('Auth/pages/login');
		$this->load->view('Auth/template/footer');
	}

	public function daftar(){
		//cek kalau sudah login, tidak bisa masuk ke halaman daftar
		if($this->session->userdata('logged_in') === TRUE){
			redirect('home','refresh');
		}

		$this->load->view('Auth/template/header');
		$this->load->view('Auth/pages/daftar');
		$this->load->view('Auth/template/footer');
	}

	public function auth_login(){
		$username = htmlspecialchars($this->input->post('username'));
		$password = htmlspecialchars($this->input->post('password'));

		//login level
		//0 = admin pusat
		//1 = admin daerah
		//2 = masyarakat

		if(isset($_POST['submit'])){
			//cek username ada tidak di database
			$cek_username = array(
				'username' => $username
			);
			$hc_username = $this->auth_model->get_username('users', $cek_username)->num_rows();
			$results = $this->auth_model->get_username('users', $cek_username)->row_array();
			$db_password = $results['password'];
			$level = $results['level'];

			if($hc_username > 0){
				if($level === "0"){

				}else if($level === "1"){

				}else if($level === "2"){
					//cek password
					if(password_verify($password, $db_password)){
						$data_session = array(
							'id_users' => $results['id_users'],
							'level' => $results['level'],
							'email' => $results['email'],
							'username' => $results['username'],
							'nama_depan' => $results['nama_depan'],
							'nama_belakang' => $results['nama_belakang'],
							'password' => $results['password'],
							'tanggal_lahir' => $results['tanggal_lahir'],
							'aktivitas_terakhir' => $results['aktivitas_terakhir'],
							'foto' => $results['foto'],
							'logged_in' => TRUE
						);

						$this->session->set_userdata($data_session);
						
						redirect(site_url('home'),'refresh');
					}else{
						$this->session->set_flashdata('login gagal', '1');
						redirect(site_url('login'),'refresh');
					}	
				}else{
					$this->session->set_flashdata('login gagal', '2');
					redirect(site_url('login'),'refresh');
				}
			}else{
				$this->session->set_flashdata('login gagal', '3');
				redirect(site_url('login'),'refresh');
			}
		}
	}

	//daftar untuk masyarakat
	//versi 1 : without ajax
	public function auth_daftar(){
		$username = htmlspecialchars($this->input->post('username'));
		$email = htmlspecialchars($this->input->post('email'));
		$password = htmlspecialchars($this->input->post('password'));
		$konfirmasi_password = htmlspecialchars($this->input->post('konfirmasi_password'));
		$nama_depan = htmlspecialchars($this->input->post('nama_depan'));
		$nama_belakang = htmlspecialchars($this->input->post('nama_belakang'));
		$tanggal_lahir = htmlspecialchars($this->input->post('tanggal_lahir'));
		$alamat = htmlspecialchars($this->input->post('alamat'));

		//variabel untuk mengulang hashing sebanyak 2^10, bebas sesuka hati
		$options = array(
			'cost' => 10
		);

		//hashing password into bcrypt
		$password_hash = password_hash($password, PASSWORD_DEFAULT);

		$data = array(
			'id_users' => NULL,
			'level' => 2,
			'email' => $email,
			'username' => $username,
			'nama_depan' => $nama_depan,
			'nama_belakang' => $nama_belakang,
			'password' => $password_hash,
			'id_wilayah' => NULL,
			'status' => 1,
			'tanggal_lahir' => $tanggal_lahir,
			'aktivitas_terakhir' => NULL,
			'alamat' => $alamat,
			'foto' => NULL
		);

		//cek tombol submit ditekan
		if(isset($_POST['submit'])){
			//cek konfirmasi password
			if($password === $konfirmasi_password){
				//cek username sudah terdaftar belum
				$cek_username = array(
					'username' => $username
				);
				//hc = hasil cek
				$hc_username = $this->auth_model->cek_username('users', $cek_username);
				if($hc_username === 0){
					//cek email sudah terdaftar belum
					$cek_email = array(
						'email' => $email
					);
					$hc_email = $this->auth_model->cek_email('users', $cek_email);
					if($hc_email === 0){
						$insert_users = $this->auth_model->insert_users('users', $data);
						if($insert_users > 0){
							$this->session->set_flashdata('berhasil', 'berhasil mendaftar');
							redirect('daftar','refresh');
						}else{
							$this->session->set_flashdata('gagal', 'gagal mendaftar');
							redirect('daftar','refresh');
						}
					}else{
						$this->session->set_flashdata('gagal', 'email terdaftar');
						redirect('daftar','refresh');
					}
				}else{
					$this->session->set_flashdata('gagal', 'username terdaftar');
					redirect('daftar','refresh');
				}
			}else{
				$this->session->set_flashdata('gagal', 'konfirmasi tidak cocok');
				redirect('daftar','refresh');
			}
		}
	}

	//daftar untuk masyarakat
	//versi 2, (AJAX, still failed)
	public function auth_daftar2(){
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$konfirmasi_password = $this->input->post('konfirmasi_password');
		$nama_depan = $this->input->post('nama_depan');
		$nama_belakang = $this->input->post('nama_belakang');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$alamat = $this->input->post('alamat');

		$data_input = array(
			'id_users' => NULL,
			'level' => 2,
			'email' => $email,
			'username' => $username,
			'nama_depan' => $nama_depan,
			'nama_belakang' => $nama_belakang,
			'password' => $password,
			'id_wilayah' => NULL,
			'status' => 1,
			'tanggal_lahir' => $tanggal_lahir,
			'aktivitas_terakhir' => NULL,
			'alamat' => $alamat,
			'foto' => NULL
		);

		$where_username = array(
			'username' => $username
		);

		$where_email = array(
			'email' => $email
		);

		//cek username
		$hc_username = $this->auth_model->cek_username('users', $where_username);
		if($hc_username === 0){
			$output['msg'] = '<div class="alert alert-danger" role="alert">Username sudah terdaftar</div>';
		}else if($hc_username > 0){
			//cek email
			$hc_email = $this->auth_model->cek_email('users', $where_email);
			if($hc_email === 0){
				$output['msg'] = '<div class="alert alert-danger" role="alert">Email sudah terdaftar</div>
					';
			}else if($hc_email > 0){
				//insert data 
				$insert = $this->auth_model->insert_users('users', $data_input);
				if($insert){
					$output['msg'] = '<div class="alert alert-danger" role="alert">Registrasi berhasil</div>
					';
				}else{
					$output['msg'] = '<div class="alert alert-danger" role="alert">Registrasi gagal</div>
					';
				}
			}
		}

		//set page header as json format
        // $this->output->set_content_type('application/json')->set_output(json_encode($output));
        echo json_encode($output);
	}

	//insert data ke database user (AJAX, still failed)
	public function insert_users(){
		$username = htmlspecialchars($this->input->post('username'));
		$email = htmlspecialchars($this->input->post('email'));
		$password = htmlspecialchars($this->input->post('password'));
		$konfirmasi_password = htmlspecialchars($this->input->post('konfirmasi_password'));
		$nama_depan = htmlspecialchars($this->input->post('nama_depan'));
		$nama_belakang = htmlspecialchars($this->input->post('nama_belakang'));
		$tanggal_lahir = htmlspecialchars($this->input->post('tanggal_lahir'));
		$alamat = htmlspecialchars($this->input->post('alamat'));

		$data_input = array(
			'username' => $username,
			'email' => $email,
			'password' => $password,
			'nama_depan' => $nama_depan,
			'nama_belakang' => $nama_belakang,
			'tanggal_lahir' => $tanggal_lahir,
			'alamat' => $alamat
		);
		//insert data
		$result = $this->auth_model->insert_users('users', $data_input);
		$data = array(
			'insert' => $result
		);
		echo json_encode($data);
	}

	//go back to the previous page (for example : from post click sign in button)
	//this will be redirect to post, not to home
	public function go_back(){
		header("Location: {$_SERVER['HTTP_REFERER']}");
		exit;
	}

	//logout
	public function logout(){
		$this->session->sess_destroy();
		redirect('home','refresh');
	}

}
