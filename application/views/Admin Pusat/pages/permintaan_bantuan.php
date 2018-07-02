	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style/Auth/login.css'); ?>">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<title>Admin Pusat | Permintaan Bantuan</title>
</head>
<body>

	<nav class="navbar navbar-expand-sm fixed-top">
		<div class="container">
			<a href="<?php echo site_url('admin-pusat/home'); ?>" class="navbar-brand">
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

				<!-- menu utama -->
				<div id="auth_menu">
					<ul class="navbar-nav ml-auto mr-4">
						<li class="nav-item">
							<a href="<?php echo site_url('admin-pusat/home'); ?>" class="nav-link">Dasbor</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo site_url('admin-pusat/permintaan-bantuan'); ?>" class="nav-link">Permintaan Bantuan</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo site_url('admin-pusat/artikel'); ?>" class="nav-link">Artikel</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo site_url('admin-pusat/admin-daerah'); ?>" class="nav-link">Admin Daerah</a>
						</li>
					</ul>
				</div>
				<!-- menu utama -->

				<!-- Profile Dropdown -->
				<ul class="navbar-nav navbar-toggler-right dropdown" id="dropdown_menu">
					<a class="navbar-right dropdown-toggle" role="button" href="" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-decoration: none; color: #000;" onmouseover="this.style.color='#fff'" onmouseleave="this.style.color='#000'">
					  	<img class="rounded-circle" style="width: 30px;" src="<?php echo base_url('assets/img/sample.jpg'); ?>">
					</a>

					<div class="dropdown-menu" aria-labelledby="dropdownMenu">
						<p class="dropdown-item dropdown-backdrop">
							<?php echo $this->session->userdata("nama_depan").$this->session->userdata("nama_belakang"); ?>
						</p>
					  	<hr>
					  	<a class="dropdown-item" href=""><i class="fa fa-user" style="margin-right: 5px;"></i> Profil</a>
					  	<a class="dropdown-item" href=""><i class="fa fa-home" style="margin-right: 5px;"></i> Beranda</a>
					  	<a class="dropdown-item" href=""><i class="fa fa-cog" style="margin-right: 5px;"></i> Pengaturan</a>
					  	<a class="dropdown-item" href="<?php echo site_url('logout'); ?>">Keluar</a>
					</div>
				</ul>
				<!-- End Profile Dropdown -->
			</div>
		</div>
	</nav>

	<div class="container">
		
	</div>

	
	

