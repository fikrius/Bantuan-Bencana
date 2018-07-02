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
					<?php foreach($postingan->result() as $row){ ?>
						<?php  
							$data = date_create($row->tanggal_posting);
							$new_date = date_format($data, "D, d F Y");
							$time = date_format($data, "H:i:sa");
						?>
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
						  				<p><?php echo $new_date." | ".$time; ?></p>
						  			</li>
						  		</ul>
						  	</div>
						  	<div class="card-body">
							    <a href=""><h5 class="card-title text-center"><?php echo $row->judul; ?></h5></a>
							    <img class="img-thumbnail mx-auto d-block mb-4" src="<?php echo base_url('assets/img/postingan/'.$row->nama_foto); ?>">
							    <p class="card-text"><?php echo $row->isi; ?></p>
						  	</div>
						  	
						  	<div id="balas">
						  		
						  	</div>

							<div class="form-balas ml-5 mb-3" style="display: none;">
							  	<form id="form-komentar">
							  		<div class="form-group" hidden>
							  			<label for="id_artikel">id artikel :</label>
							  			<input class="form-control" type="text" name="id_artikel" id="id_artikel" value="<?php echo $row->id_artikel ?>">
							  		</div>
							  		<div class="form-group" hidden>
							  			<label for="id_users">id users :</label>
							  			<input type="text" name="id_users" id="id_users" value="<?php echo $this->session->userdata('id_users'); ?>">
							  		</div>
							  		<div class="form-group" hidden>
							  			<?php date_default_timezone_set("Asia/Jakarta"); ?>
							  			<label for="tanggal_komentar">tanggal komentar :</label>
							  			<input class="form-control" type="text" name="tanggal_komentar" id="tanggal_komentar" value="">
							  		</div>
							  		<div class="form-group">
							  			<label for="komentar">Komentar :</label>
							  			<textarea class="form-control" id="komentar" name="komentar" required></textarea>
							  		</div>
							  		<input class="btn btn-success" type="submit" name="submit" value="Kirim Komentar" id="submit">
							  		<div class="alert alert-danger mt-3 text-center" id="notifikasi_gagal" role="alert" hidden>
					                </div>
					                <div class="alert alert-success mt-3 text-center" id="notifikasi_sukses" role="alert" hidden>
					                </div>
							  	</form>
							</div>
						</div>
					<?php } ?>

					<?php foreach($komentar->result() as $row){ ?>
					<?php  
						$data = date_create($row->tanggal_komentar);
						$new_date = date_format($data, "D, d F Y");
						$time = date_format($data, "H:i:sa");
						if($row->foto === NULL){
							$foto = "male.png";
						}else{
							$foto = $row->foto;
						}
					?>
					<div id="reply">
						<div id="field_komentar">
							<div class="card ml-5">
							  <div class="card-header">	
							  	<ul class="nav">
							  		<li class="nav-item">
							  			<a class="nav-link" tabindex="0" class="btn btn-lg btn-danger" role="button" data-toggle="popover" data-trigger="focus" title="<?php echo $row->nama_depan; ?>" data-content="<?php echo $row->alamat; ?>">
							  				<img src="<?php echo base_url('assets/img/foto_profil/'.$foto); ?>" class="img-fluid rounded-circle">
							  			</a>
							  		</li>
							  		<li class="nav-item">
							  			<p><?php echo $new_date." | ".$time; ?></p>
							  		</li>
							  	</ul>
							  </div>
							  <div class="card-body">
							    <p class="card-text"><?php echo $row->komentar; ?></p>
							  </div>
							</div>
						</div>
					</div>
					<?php } ?>

					<div id="komen">
						
					</div>

					<div class="load-more" hidden>
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
			show_link_login();
			show_dropdown_menu();
			

			$("#tanggal").click(function(){
				$("#tanggal_komentar").val("<?php echo date('Y-m-d').' '.date('H:i:s'); ?>");
			});

			$("#submit").on("click", function(e){
				var field_komentar = $("#komentar").val();
				var field_form = $("#form-komentar");

				$("#tanggal_komentar").val("<?php echo date('Y-m-d').' '.date('H:i:s'); ?>");
				
				if(field_komentar != ""){
					e.preventDefault();
					$.ajax({
						url: "<?php echo site_url('user/kirim_komentar'); ?>",
						type: "POST",
						dataType: "JSON",
						data: field_form.serialize(),
						success: function(data){
							if(data.tipe_notifikasi == "sukses"){
								$("#notifikasi_sukses").attr("hidden", false);
								$("#notifikasi_sukses").html(data.notifikasi);
								$("#komentar").val("");
							}else{
								$("#notifikasi_gagal").attr("hidden", false);
								$("#notifikasi_gagal").html(data.notifikasi);
								$("#komentar").val("");
							}

							setTimeout(function(){
								$("#notifikasi_sukses").attr("hidden", true);
								$("#notifikasi_gagal").attr("hidden", true);
								location.reload();
							}, 2000);
						}
					});
				}
			});

			function load_komentar(dummy = "yes"){
				$.ajax({
					url: "<?php echo site_url('user/get_komentar'); ?>",
					method: "post",
					dataType: "json",
					data: {dummy:dummy},
					success: function(data){
						if(data.tipe_notifikasi == "ada"){
							$(".load-more").attr("hidden", false);
							$("#komen").html(data.komentar);
						}else{
							$("#komen").html(data.komentar);
						}
					}
				});
			}

			load_komentar();

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