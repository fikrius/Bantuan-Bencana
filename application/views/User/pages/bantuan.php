	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style/User/bantuan.css');?>">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<title>Bantuan Bencana</title>

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
				<!-- Notif -->
				<ul class="nav navbar-nav mr-auto">
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

				<!-- Auth Dropdown -->
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a href="<?php echo site_url('login'); ?>" class="nav-link">Login</a>
					</li><li class="nav-item">
						<a href="<?php echo site_url('daftar'); ?>" class="nav-link">Daftar</a>
					</li>
				</ul>
				<!-- End auth Dropdown -->

				<!-- Profile Dropdown -->
				<ul class="navbar-nav navbar-toggler-right dropdown">
				  <a class="navbar-right dropdown-toggle" role="button" href="" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-decoration: none; color: #000;" onmouseover="this.style.color='#fff'" onmouseleave="this.style.color='#000'">
				  	<img class="rounded-circle" style="width: 30px;" src="<?php echo base_url('assets/img/sample.jpg'); ?>">
				  </a>

				  <div class="dropdown-menu" aria-labelledby="dropdownMenu">
				  	<p class="dropdown-item dropdown-backdrop">Fikri Ahmadi</p>
				  	<hr>
				  	<a class="dropdown-item" href="<?php echo site_url('author/fikrius'); ?>"><i class="fa fa-user" style="margin-right: 5px;"></i> Profil</a>
				  	<a class="dropdown-item" href="<?php echo site_url('home'); ?>"><i class="fa fa-home" style="margin-right: 5px;"></i> Beranda</a>
				  	<a class="dropdown-item" href="<?php echo site_url('setting'); ?>"><i class="fa fa-cog" style="margin-right: 5px;"></i> Pengaturan</a>
				  	<a class="dropdown-item" href="<?php echo site_url('logout'); ?>">Keluar</a>
				  </div>
				</ul>
				<!-- End Profile Dropdown -->
			</div>
		</div>
	</nav>

	<section class="container-wrap" style="min-height: 70rem; margin-top: 75px;">
		<div class="container">	
			<div class="row">
				<div class="col-md-3">
					<div class="input-group mb-3 search-thread">
					  <form method="" action="" id="form-cari-berita" style="width: 100%;">
					  	<div class="form-group">
					  		<input class="form-control text-center" type="text" name="cari-berita" id="cari-berita" placeholder="Cari Berita">
					  		<input type="hidden" name="btn-cari-berita" id="btn-cari-berita">
					  	</div>
					  </form>
					</div>
					<div class="input-group mb-3 sm-12">
						<a class="btn btn-success" name="btn-bantuan" id="btn-bantuan" href="<?php echo site_url('bantuan'); ?>">Minta Bantuan</a>
					</div>
					<div class="sidebar-line">
						<hr>
					</div>

					<!-- Video Sosialisasi -->
					<div class="list-group category">
			    	  <h4>Video Sosialisasi</h4>
					  <a href="#" class="list-group-item list-group-item-action">Definisi Bencana</a>
					  <a href="#" class="list-group-item list-group-item-action">Potensi Ancaman Bencana</a>
					  <a href="#" class="list-group-item list-group-item-action">Sistem Penanggulangan Bencana</a>
					  <a href="#" class="list-group-item list-group-item-action disabled">Siaga Bencana</a>
					</div>
				</div>

				<div class="col-md-6 main-content">
					<h2>Formulir Pengajuan Bantuan</h2>
					<form method="" action="" id="form-bantuan">
					   	<label for="jenis_bencana">Jenis Bencana</label>
						<select class="custom-select mb-4" id="jenis_bencana">
							<option value="gempa bumi">Gempa Bumi</option>
							<option value="tanah longsor">Tanah Longsor</option>
							<option id="lainnya">Lainnya...</option>
						</select>
						<input type="submit" name="kirim" id="kirim" value="Kirim" class="btn btn-success">
					</form>
				</div>

				<div class="col-md-3 iklan" style="margin-top: 1rem;">
					<div class="iklan-satu">
						<a href="#">
							<img style="width: 100%;" src="<?php echo base_url('assets/img/iklan/infografis banjir jkt.jpg'); ?>">
						</a>
					</div>
					<hr>
					<div class="iklan-dua" style="margin-top: 1rem;">
						<a href="#">
							<img style="width: 100%;" src="<?php echo base_url('assets/img/iklan/minion.gif'); ?>">
						</a>
					</div>
					<hr>
					<div class="iklan-dua" style="margin-top: 1rem;">
						<a href="#">
							<img style="width: 100%;" src="<?php echo base_url('assets/img/iklan/madya.jpg'); ?>">
						</a>
					</div>
					<hr>
					<div class="iklan-tiga" style="margin-top: 1rem;">
						<a href="#">
							<img style="width: 100%;" src="<?php echo base_url('assets/img/iklan/tangguh award.jpg'); ?>">
						</a>
					</div>
				</div>

			</div>
		</div>
	</section>
