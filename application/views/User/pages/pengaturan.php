	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style/User/pengaturan.css');?>">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<title>Pengaturan</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
</head>
<body>

	<nav class="navbar navbar-expand-sm fixed-top">
		<div class="container">
			<a href="<?php echo site_url('home'); ?>" class="navbar-brand">
				<img src="<?php echo base_url('assets/img/logo bnpb.png'); ?>">
				MEDICAL<span class="highlight">L</span>
			</a>
			<button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="menu">
				<!-- Notif -->
				<ul class="nav navbar-nav mr-auto" id="notif">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
			       		<sup>
			       			<span class="badge badge-danger">12</span>
			       		</sup>
		       			<span>
		       				<i style="color: #fff;" class="fa fa-envelope"></i>
		       			</span>
			       	</a>
			      	<li class="dropdown">
			      		<div class="dropdown-menu">
							<a class="dropdown-item" href="#">
								<strong>Bantuan Diterima</strong><br />
							    <small><em>Bantuan sedang dikirim ke lokasi</em></small>
							</a>
						    <div class="dropdown-divider"></div>
						</div>
			      	</li>
			    </ul>
				<!-- End Notif -->

				<!-- auth menu -->
				<div id="auth_menu">
					
				</div>
				<!-- auth menu -->

				<!-- Profile Dropdown -->
				<ul class="navbar-nav navbar-toggler-right dropdown" id="dropdown_menu">
				 
				</ul>
				<!-- End Profile Dropdown -->
			</div>
		</div>
	</nav>

	<section class="container-wrap" style="min-height: 70rem; margin-top: 75px;"> 
		<div class="container">	
			<div class="row">
				<div class="col-md-9">
						<!-- Card 1 -->
						<div class="card">
						  	<div class="card-header">	
						  		<ul class="nav">
						  			<li class="nav-item">
					  					<img src="<?php echo base_url('assets/img/foto_profil/'.$_SESSION['foto']); ?>" class="img-fluid rounded-circle">
						  			</li>
						  			<li class="nav-item">
						  				<p>Pengaturan</p>
						  			</li>
						  		</ul>
						  	</div>
						  	<?php date_default_timezone_set("Asia/Jakarta"); ?>
							<div class="form-balas m-5">
							  	<form id="form-edit" method="post" action="user/update_pengaturan" enctype="multipart/form-data">
							  		<div class="form-group" hidden>
							  			<label for="id_users">id users :</label>
							  			<input class="form-control" type="text" name="id_users" id="id_users" value="<?php echo $this->session->userdata('id_users'); ?>">
							  		</div>
							  		<div class="form-group">
							  			<label for="email">Email :</label>
							  			<input class="form-control" type="email" name="email" id="email" value="<?php echo $this->session->userdata('email'); ?>" required disabled>
							  		</div>
							  		<div class="form-group">
							  			<label for="username">Username :</label>
							  			<input class="form-control" type="text" name="username" id="username" value="<?php echo $this->session->userdata('username'); ?>" required disabled>
							  		</div>
							  		<div class="form-group">
							  			<label for="nama_depan">Nama Depan :</label>
							  			<input class="form-control" type="text" name="nama_depan" id="nama_depan" value="<?php echo $this->session->userdata('nama_depan'); ?>" required disabled>
							  		</div>
							  		<div class="form-group">
							  			<label for="nama_belakang">Nama Belakang :</label>
							  			<input class="form-control" type="text" name="nama_belakang" id="nama_belakang" value="<?php echo $this->session->userdata('nama_belakang'); ?>" required disabled>
							  		</div>
							  		<div class="form-group">
							  			<label for="password">Password Baru:</label>
							  			<input class="form-control" type="password" name="password" id="password" value="" required disabled>
							  		</div>
							  		<div class="form-group">
							  			<label for="tanggal_lahir">Tanggal Lahir :</label>
							  			<input class="form-control" type="date" name="tanggal_lahir" id="tanggal_lahir" value="<?php echo $this->session->userdata('tanggal_lahir'); ?>" required disabled>
							  		</div>
							  		<div class="form-group">
							  			<label for="alamat">Alamat :</label>
							  			<input class="form-control" type="text" name="alamat" id="alamat" value="<?php echo $this->session->userdata('alamat'); ?>" required disabled>
							  		</div>
							  		<div class="form-group">
							  			<label for="foto">Foto Profil :</label>
							  			<input class="form-control" type="file" name="foto" id="foto" value="<?php echo $this->session->userdata('foto'); ?>" required disabled>
							  		</div>
							  		<input class="btn btn-success" type="submit" name="submit" value="Ubah Data" id="submit" hidden>
							  		<button class="btn btn-success" id="edit">Edit</button>
							  		<button class="btn btn-danger" id="batal" hidden>Batal</button>
							  		<?php if($this->session->flashdata("sukses") === "sukses"){ ?>
							  			<div class="alert alert-success mt-3 text-center" id="notifikasi_sukses" role="alert">
					                		Edit sukses
					                	</div>
							  		<?php } ?>
							  	</form>
							</div>
						</div>
				</div>
			</div>
		</div>
	</section>

	<script>
		
		$(document).ready(function(){
			show_auth_menu();
			show_link_login();
			show_dropdown_menu();

			$("#edit").click(function(){
				$("#email").attr("disabled", false);
				$("#username").attr("disabled", false);
				$("#nama_depan").attr("disabled", false);
				$("#nama_belakang").attr("disabled", false);
				$("#password").attr("disabled", false);
				$("#tanggal_lahir").attr("disabled", false);
				$("#alamat").attr("disabled", false);
				$("#foto").attr("disabled", false);
				$("#submit").attr("hidden", false);
				$("#batal").attr("hidden", false);
				$(this).attr("hidden", true);
			});

			$("#batal").click(function(e){
				e.preventDefault();
				$("#email").attr("disabled", true);
				$("#username").attr("disabled", true);
				$("#nama_depan").attr("disabled", true);
				$("#nama_belakang").attr("disabled", true);
				$("#password").attr("disabled", true);
				$("#tanggal_lahir").attr("disabled", true);
				$("#alamat").attr("disabled", true);
				$("#foto").attr("disabled", true);
				$("#submit").attr("hidden", true);
				$("#edit").attr("hidden", false);
				$(this).attr("hidden", true);
			});

			function show_auth_menu(){
				$.get("<?php echo site_url('user/show_auth_menu'); ?>", function(data){
					$("#auth_menu").html(data);
				});
			}

			function show_link_login(){
				$.get("<?php echo site_url('user/show_link_login'); ?>", function(data){
					$(".sign-in").html(data);
				});
			}

			function show_dropdown_menu(){
				$.get("<?php echo site_url('user/show_dropdown_menu'); ?>", function(data){
					$("#dropdown_menu").html(data);
				});
			}

			//popover everywhere
			$(function(){
			  $('[data-toggle="popover"]').popover()
			});
			

		});

	</script>