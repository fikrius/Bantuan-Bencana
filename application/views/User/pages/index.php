	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style/User/index.css');?>">
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

				<!-- Auth menu -->
				<div id="auth_menu">
					
				</div>
				<!-- End auth menu -->

				<!-- Profile Dropdown -->
				<ul class="navbar-nav navbar-toggler-right dropdown">
				  <a class="navbar-right dropdown-toggle" role="button" href="" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-decoration: none; color: #000;" onmouseover="this.style.color='#fff'" onmouseleave="this.style.color='#000'">
				  	<img class="rounded-circle" style="width: 30px;" src="<?php echo base_url('assets/img/sample.jpg'); ?>">
				  </a>

				  <div class="dropdown-menu" aria-labelledby="dropdownMenu" id="dropdown_menu">
				  	<p class="dropdown-item dropdown-backdrop"><?php echo $this->session->userdata("nama_depan")." ".$this->session->userdata("nama_belakang"); ?></p>
				  	<hr>
				  	<a class="dropdown-item" href="<?php echo site_url("author/fikrius"); ?>"><i class="fa fa-user" style="margin-right: 5px;"></i> Profil</a>
				  	<a class="dropdown-item" href="<?php echo site_url("home"); ?>"><i class="fa fa-home" style="margin-right: 5px;"></i> Beranda</a>
				  	<a class="dropdown-item" href="<?php echo site_url("setting"); ?>"><i class="fa fa-cog" style="margin-right: 5px;"></i> Pengaturan</a>
				  	<a class="dropdown-item" href="<?php echo site_url("logout"); ?>">Keluar</a>
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
					  		<input class="form-control text-center" type="search" name="cari-berita" id="cari-berita" placeholder="Cari Berita">
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
					<!-- Baris slideshow berita terpopuler dan space iklan -->
					<div class="row">
						<!-- Slideshow berita terpopuler -->
						<div class="col-md-12">
							<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							 	<ol class="carousel-indicators">
							    	<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							    	<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							    	<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
							  	</ol>

							  	<div class="carousel-inner">
							    	<div class="carousel-item active">
							      		<img class="d-block w-100" src="<?php echo base_url('assets/img/merapi.jpg'); ?>" alt="First slide">
							      		<div class="carousel-caption d-none d-md-block">
											<a href="#" style="color: inherit;"><h5>Status Gunung Merapi</h5></a>
										    <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										    tempor incididunt ut labore et dolore magna aliqua. Ut</p>
										</div>
							    	</div>

							    	<div class="carousel-item">
							      		<img class="d-block w-100" src="<?php echo base_url('assets/img/merapi.jpg'); ?>" alt="Second slide">
							      		<div class="carousel-caption d-none d-md-block">
											<a href="#" style="color: inherit;"><h5>Status Gunung Merapi</h5></a>
										    <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										    tempor incididunt ut labore et dolore magna aliqua. Ut</p>
										</div>
							    	</div>

							    	<div class="carousel-item">
							      		<img class="d-block w-100" src="<?php echo base_url('assets/img/merapi.jpg'); ?>" alt="Third slide">
							      		<div class="carousel-caption d-none d-md-block">
											<a href="#" style="color: inherit;"><h5>Status Gunung Merapi</h5></a>
										    <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										    tempor incididunt ut labore et dolore magna aliqua. Ut</p>
										</div>
							    	</div>
							  	</div>

							  	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							    	<span class="sr-only">Previous</span>
							  	</a>

							  	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
							    	<span class="sr-only">Next</span>
							  	</a>
							</div>
						</div>
					</div>

					<!-- Card 1 -->
					<div class="card">
					  <div class="card-header">	
					  	<ul class="nav">
					  		<li class="nav-item">
					  			<a href="" class="nav-link">
					  				<img src="<?php echo base_url('assets/img/logo bnpb.png'); ?>" class="img-fluid rounded-circle">
					  			</a>
					  		</li>
					  		<li class="nav-item">
					  			<p>10 menit yang lalu</p>
					  		</li>
					  	</ul>
					  </div>
					  <div class="card-body">
					    <a href="<?php echo site_url('berita/judul-berita'); ?>"><h5 class="card-title">Judul Postingan</h5></a>
					    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sedUt enim ad minim...</p>
					  </div>
					</div>

					<!-- Card 2 -->
					<div class="card">
					  <div class="card-header">	
					  	<ul class="nav">
					  		<li class="nav-item">
					  			<a href="" class="nav-link">
					  				<img src="<?php echo base_url('assets/img/logo bnpb.png'); ?>" class="img-fluid rounded-circle">
					  			</a>
					  		</li>
					  		<li class="nav-item">
					  			<p>15 menit yang lalu</p>
					  		</li>
					  	</ul>
					  </div>
					  <div class="card-body">
					    <a href=""><h5 class="card-title">Judul Postingan 2</h5></a>
					    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sedUt enim ad minim...</p>
					  </div>
					</div>

					<!-- Card 2 -->
					<div class="card">
					  <div class="card-header">	
					  	<ul class="nav">
					  		<li class="nav-item">
					  			<a href="" class="nav-link">
					  				<img src="<?php echo base_url('assets/img/logo bnpb.png'); ?>" class="img-fluid rounded-circle">
					  			</a>
					  		</li>
					  		<li class="nav-item">
					  			<p>3 hari yang lalu</p>
					  		</li>
					  	</ul>
					  </div>
					  <div class="card-body">
					    <a href=""><h5 class="card-title">Judul Postingan 3</h5></a>
					    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sedUt enim ad minim...</p>
					  </div>
					</div>
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

	<script type="text/javascript">
		
		$(document).ready(function(){

			show_auth_menu();

			function show_auth_menu(){
				$.get("<?php echo site_url('user/show_auth_menu'); ?>", function(data){
					$("#auth_menu").html(data);
				});
			}

		});

	</script>
