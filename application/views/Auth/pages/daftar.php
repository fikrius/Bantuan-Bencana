	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style/Auth/daftar.css'); ?>">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<title>Daftar</title>
</head>
<body>

	<nav class="navbar navbar-expand-sm fixed-top">
		<div class="container">
			<a href="<?php echo site_url('home'); ?>" class="navbar-brand">
				<img src="<?php echo base_url('assets/img/logo bnpb.png'); ?>">
				Bantuan <span class="highlight">Bencana</span>
			</a>
			<button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="menu">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a href="<?php echo site_url('login'); ?>" class="nav-link">Login</a>
					</li><li class="nav-item">
						<a href="<?php echo site_url('daftar'); ?>" class="nav-link">Daftar</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<section class="register" style="min-height: 500px; margin-top: 50px;">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 offset-lg-2">
					<div class="card">
						<div class="card-header">
							Daftar
						</div>
						<form style="min-height: 30rem;" class="form-login" method="post" action="<?php echo site_url('auth/auth_daftar'); ?>" id="form-login">
							<div class="kiri" style="width: 47%; float: left;">
								<div class="form-group">
									<label for="username"><b>Username </b><sup>*</sup></label>
									<input type="text" name="username" id="username" class="form-control" required>
								</div>
								<div class="form-group">
									<label for="email"><b>Email </b><sup>*</sup></label>
									<input type="email" name="email" id="email" class="form-control" required>
								</div>
								<div class="form-group">
									<label for="password"><b>Password </b><sup>*</sup></label>
									<input type="password" name="password" id="password" class="form-control" required>
								</div>
								<div class="form-group">
									<label for="konfirmasi_password"><b>Konfirmasi Password </b><sup>*</sup></label>
									<input type="password" name="konfirmasi_password" id="konfirmasi_password" class="form-control" required>
								</div>
							</div>
							<div class="kanan" style="width: 47%; float: right;">
								<div class="form-group">
									<label for="nama_depan"><b>Nama Depan </b><sup>*</sup></label>
									<input type="text" name="nama_depan" id="nama_depan" class="form-control" required>
								</div>
								<div class="form-group">
									<label for="nama_belakang"><b>Nama Belakang </b><sup>*</sup></label>
									<input type="text" name="nama_belakang" id="nama_belakang" class="form-control" required>
								</div>
								<div class="form-group">
									<label for="tanggal_lahir"><b>Tanggal Lahir </b><sup>*</sup></label>
									<input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required>
								</div>
								<div class="form-group">
									<label for="alamat"><b>Alamat </b><sup>*</sup></label>
									<input type="text" name="alamat" id="alamat" class="form-control" required>
								</div>
							</div>
							<input type="submit" name="submit" id="submit" class="btn btn-block" value="Daftar">
							<div class="notifikasi">
				              <?php if($this->session->flashdata("berhasil") === "berhasil mendaftar"){ ?>
				                <div class="alert alert-success" role="alert">
				                  Berhasil Mendaftar
				                </div>
				              <?php }else if($this->session->flashdata("gagal") === "gagal mendaftar"){ ?>
				                <div class="alert alert-danger" role="alert">
				                  Gagal Mendaftar
				                </div>
				              <?php }else if($this->session->flashdata("gagal") === "email terdaftar"){ ?>
				                <div class="alert alert-danger" role="alert">
				                  Email Sudah Terdaftar
				                </div>
				              <?php }else if($this->session->flashdata("gagal") === "username terdaftar"){ ?>
				                <div class="alert alert-danger" role="alert">
				                  Username Sudah Terdaftar
				                </div>
				              <?php }else if($this->session->flashdata("gagal") === "konfirmasi tidak cocok"){ ?>
				                <div class="alert alert-danger" role="alert">
				                  Konfirmasi Password Salah
				                </div>
				              <?php } ?>
				            </div>
						</form>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</section>
