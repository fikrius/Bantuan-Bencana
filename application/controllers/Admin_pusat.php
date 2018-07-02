<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_pusat extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('session');
		$this->load->model('admin_model');

		if(!isset($_SESSION['logged_in_admin_pusat'])){
			redirect('login','refresh');
		}
	}

	public function index(){
		$this->load->view('Admin Pusat/template/header');
		$this->load->view('Admin Pusat/pages/index');
		$this->load->view('Admin Pusat/template/footer');
	}

	public function permintaan_bantuan(){
		$this->load->view('Admin Pusat/template/header');
		$this->load->view('Admin Pusat/pages/permintaan_bantuan');
		$this->load->view('Admin Pusat/template/footer');
	}

	public function artikel(){
		$data['list_artikel'] = $this->admin_model->get_list_artikel();

		$this->load->view('Admin Pusat/template/header');
		$this->load->view('Admin Pusat/pages/artikel', $data);
		$this->load->view('Admin Pusat/template/footer');
	}

	public function tulis_artikel(){
		$this->load->view('Admin Pusat/template/header');
		$this->load->view('Admin Pusat/pages/tulis_artikel');
		$this->load->view('Admin Pusat/template/footer');
	}

	public function do_upload(){

		if(isset($_POST["submit"])){

			$nama_foto = $this->pindah_gambar();
			if(!$nama_foto){
				echo "<script>
					alert('Gambar gagal diupload');
				</script>";
				redirect('admin-pusat/tulis_artikel','refresh');
				return false;
			}

			$judul = htmlspecialchars($this->input->post("judul"));
			$isi = htmlspecialchars($this->input->post("isi"));
			$kategori = $this->input->post("kategori");
			$tanggal_posting = $this->input->post("tanggal_posting");

			$data = array(
					"judul" => $judul,
					"isi" => nl2br($isi),
					"kategori" => $kategori,
					"tanggal_posting" => $tanggal_posting,
					"nama_foto" => $nama_foto
			);

			//upload nama file ke database
			$upload = $this->admin_model->upload_file_artikel($data);
			if($upload === 0){
				echo "<script>
					alert('Data gagal diupload');
					document.location.href = 'admin-pusat/tulis_artikel';
				</script>";
				return false;
				
			}else{
				$this->session->set_flashdata("sukses", "sukses");
				redirect("admin-pusat/tulis_artikel");
			}
		}

	}

	// memindahkan file ke direktori server
	public function pindah_gambar(){
		
		$namaFile =  $_FILES["foto"]["name"];
		$tmp_name = $_FILES["foto"]["tmp_name"];
		$size = $_FILES["foto"]["size"];
		$error = $_FILES["foto"]["error"];

		// cek user upload file atau tidak
		if($error === 4){
			echo "<script>
				alert('You must upload file');
			</script>";
			return FALSE;
		}

		//cek yang diupload gambar atau bukan
		$ekstensiValid = ["jpg", "jpeg", "png"];
		$ekstensiGambar = explode(".", $namaFile);
		$ekstensiGambar = strtolower(end($ekstensiGambar));

		if(!in_array($ekstensiGambar, $ekstensiValid)){
			echo "<script>
				alert('Invalid image extension');
			</script>";
			return false;
		}

		//cek ukuran melebihi ukuran maks atau tidak
		$maxSize = 1000000;
		if($size > $maxSize){
			echo "<script>
				alert('Your image is too big');
			</script>";
			return false;
		}

		//memberi nama unik ke nama file
		$namaFileBaru = $namaFile.uniqid();
		$namaFileBaru .= ".";
		$namaFileBaru .= $ekstensiGambar;

		//pindahkan image ke direktori
		move_uploaded_file($tmp_name, "assets/img/postingan/".$namaFileBaru);

		return $namaFileBaru;

	}

	public function hapus_artikel(){
		$id_artikel = $this->uri->segment(2);
		print_r($id_artikel);
		$where = array(
			'id_artikel' => $id_artikel
		);
		$result = $this->admin_model->hapus_artikel($where);
		if($result){
			echo "
				<script>
					alert('Artikel berhasil dihapus');
				</script>
			";
		}else{
			echo "
				<script>
					Artikel gagal dihapus!
				</script>
			";
		}
		redirect('admin-pusat/artikel','refresh');
	}

	
	
}
