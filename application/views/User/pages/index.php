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
				<ul class="navbar-nav navbar-toggler-right dropdown" id="dropdown_menu">
				  
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
					<div class="input-group mb-3 sm-12 tombol-bantuan">
						
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
							 		<?php  
							 			$status = "active";
							 		?>
							 		<?php for($i=0; $i<$jumlah_artikel; $i++){ ?>
							 			<li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>" class="<?php echo $status; ?>"></li>
							 			<?php $status = ""; ?>
							 		<?php } ?>
						
							    	
							  	</ol>

							  	<div class="carousel-inner">
							  		<?php  
							  			$status = "active";
							  		?>
							  		<?php foreach($artikel->result() as $row){ ?>
							  			<?php  
							  				$string = $row->isi;
											$string = substr($string, 0, 100);
							  			?>
							  			<div class="carousel-item <?php echo $status; ?>">
								      		<img class="d-block w-100" src="<?php echo base_url('assets/img/merapi.jpg'); ?>" alt="First slide">
								      		<div class="carousel-caption d-none d-md-block">
												<a href="#" style="color: inherit;"><h5><?php echo $row->judul; ?></h5></a>
											    <p style="text-align: justify;"><?php echo $string." . . ."; ?></p>
											</div>
								    	</div>
								    	<?php $status = ""; ?>
							  		<?php } ?>
							    	
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
					<?php foreach($artikel->result() as $row){ ?>
						<?php 
							$string = $row->isi;
							$string = substr($string, 0, 100);
							
						?>
						<div class="card">
						  <div class="card-header">	
						  	<ul class="nav">
						  		<li class="nav-item">
						  			<a class="nav-link" tabindex="0" class="btn btn-lg btn-danger" role="button" data-toggle="popover" data-trigger="focus" title="BPBD DIY" data-content="Jalan Kenari No. 14A, Semaki, Umbulharjo YOGYAKARTA, 55166
									Telp. (0274)555836
									Fax. (0274)554206
									email: BPBD@jogjaprov.go.id">
						  				<img src="<?php echo base_url('assets/img/logo bnpb.png'); ?>" class="img-fluid rounded-circle">
						  			</a>
						  		</li>
						  		<li class="nav-item">
						  			<p><?php echo $row->tanggal_posting; ?></p>
						  		</li>
						  	</ul>
						  </div>
						  <div class="card-body">
						    <a href="<?php echo site_url('berita/'.$row->id_artikel); ?>"><h5 class="card-title"><?php echo $row->judul; ?></h5></a>
						    <p class="card-text"><?php echo $string."..."; ?></p>
						  </div>
						</div>
					<?php } ?>
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
				</div>

			</div>
		</div>
	</section>

	<script type="text/javascript">
		
		$(document).ready(function(){

			show_auth_menu();
			show_dropdown_menu();
			show_tombol_bantuan();

			function show_tombol_bantuan(){
				$.get("<?php echo site_url('user/show_tombol_bantuan'); ?>", function(data){
					$(".tombol-bantuan").html(data);
				});
			}

			function show_auth_menu(){
				$.get("<?php echo site_url('user/show_auth_menu'); ?>", function(data){
					$("#auth_menu").html(data);
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
