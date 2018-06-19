	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style/User/post.css');?>">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<title>Berita</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
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

				<!-- auth menu -->
				<div id="auth_menu">
					
				</div>
				<!-- auth menu -->

				<!-- Profile Dropdown -->
				<ul class="navbar-nav navbar-toggler-right dropdown">
				  <a class="navbar-right dropdown-toggle" role="button" href="" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-decoration: none; color: #000;" onmouseover="this.style.color='#fff'" onmouseleave="this.style.color='#000'">
				  	<img class="rounded-circle" style="width: 30px;" src="<?php echo base_url('assets/img/sample.jpg'); ?>">
				  </a>

				  <div class="dropdown-menu" aria-labelledby="dropdownMenu">
				  	<p class="dropdown-item dropdown-backdrop"><?php echo $this->session->userdata("nama_depan")." ".$this->session->userdata("nama_belakang"); ?></p>
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
				<div class="col-md-9">
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
						    <a href=""><h5 class="card-title text-center">Judul Postingan</h5></a>
						    <img class="img-thumbnail mx-auto d-block mb-4" src="<?php echo base_url('assets/img/merapi.jpg'); ?>">
						    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					  	</div>
					  	
					  	<div id="balas">
					  		
					  	</div>

						<div class="form-balas ml-5 mb-3" style="display: none;">
						  	<form method="post" action="">
						  		<div class="form-group">
						  			<label for="nama">Nama :</label>
						  			<input class="form-control" type="text" name="nama" id="nama">
						  		</div>
						  		<div class="form-group">
						  			<label for="komentar">Komentar :</label>
						  			<textarea class="form-control" id="komentar" name="komentar"></textarea>
						  		</div>
						  		<input class="btn btn-success" type="submit" name="submit" value="Kirim Komentar">
						  	</form>
						</div>
					</div>

					<div class="reply">
						<!-- Reply Card 1 -->
						<div class="card">
						  <div class="card-header">	
						  	<ul class="nav">
						  		<li class="nav-item">
						  			<a href="" class="nav-link">
						  				<img src="<?php echo base_url('assets/img/sample.jpg'); ?>" class="img-fluid rounded-circle">
						  			</a>
						  		</li>
						  		<li class="nav-item">
						  			<p>Andi, 10 menit yang lalu</p>
						  		</li>
						  	</ul>
						  </div>
						  <div class="card-body">
						    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sedUt enim ad minim...</p>
						  </div>
						</div>

						<!-- Reply Card 2 -->
						<div class="card">
						  <div class="card-header">	
						  	<ul class="nav">
						  		<li class="nav-item">
						  			<a href="" class="nav-link">
						  				<img src="<?php echo base_url('assets/img/sample.jpg'); ?>" class="img-fluid rounded-circle">
						  			</a>
						  		</li>
						  		<li class="nav-item">
						  			<p>Andi, 10 menit yang lalu</p>
						  		</li>
						  	</ul>
						  </div>
						  <div class="card-body">
						    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sedUt enim ad minim...</p>
						  </div>
						</div>
					</div>

					<div class="load-more">
						<a href="" class="btn btn-load-more">Tampilkan Komentar Lebih Banyak</a>
					</div>

					<div class="sign-in">
						
					</div>
				</div>
			</div>
		</div>
	</section>

	<script>
		
		$(document).ready(function(){
			show_balas_komentar();
			show_auth_menu();

			function show_balas_komentar(){
				$.get("<?php echo site_url('user/show_balas_komentar'); ?>", function(data){
					var sukses = $("#balas").html(data);
					if(sukses){
						$('#btn-balas').click(function(){
							$('.form-balas').toggle();
						});
					}
				});
			}

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
		});

	</script>