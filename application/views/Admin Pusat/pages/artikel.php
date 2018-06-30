	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style/Admin Pusat/artikel.css'); ?>">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<title>Admin Pusat | Artikel</title>
</head>
<body>

	<nav class="navbar navbar-expand-sm fixed-top">
		<div class="container">
			<a href="<?php echo site_url('admin-pusat/home'); ?>" class="navbar-brand">
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

				<!-- menu utama -->
				<div id="auth_menu">
					<ul class="navbar-nav ml-auto">
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
							<a href="<?php echo site_url('admin-pusat/video-sosialisasi'); ?>" class="nav-link">Video Sosialisasi</a>
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

	<div class="container-wrap" style="min-height: 900px; margin-top: 5rem;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="text-center">Daftar Artikel</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table table-hover" id="list_artikel">
						<thead class="text-center">
							<th>No</th>
							<th>Judul</th>
							<th>Tanggal Posting</th>
							<th>Aksi</th>
						</thead>

						<tbody>
							<?php $no = 1; ?>
							<?php foreach($list_artikel->result() as $row){ ?>
								<tr>
									<td><?php echo $no; ?></td>
									<td><?php echo $row->judul; ?></td>
									<td class="text-center"><?php echo $row->tanggal_posting; ?></td>
									<td class="text-center">
										<a class="btn btn-danger" href="">Hapus</a> | 
										<a class="btn btn-primary" href="">Ubah</a>
									</td>
								</tr>
								<?php $no++; ?>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					<a class="btn btn-success" href="<?php echo site_url('admin-pusat/tulis_artikel'); ?>">Tulis Artikel</a>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		
		$(document).ready(function(){
		    $('#list_artikel').DataTable();
		});

	</script>

	
	

