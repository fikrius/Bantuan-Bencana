	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style/Auth/login.css'); ?>">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<title>Login</title>
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

	<section id="login" style="min-height: 500px; margin-top: 75px;">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-8 col-xs-8 offset-lg-4 offset-md-4 offset-sm-2 offset-xs-2">
					<div class="card">
						<div class="card-header">
							Login
						</div>
						<form method="POST" action="<?php echo site_url('auth/auth_login'); ?>" class="form-login">
							<div class="form-group">
								<label for="username"><b>Username</b> </label>
								<input type="text" name="username" id="username" class="form-control" required>
							</div>
							<div class="form-group">
								<label for="password"><b>Password</b> </label>
								<input type="password" name="password" id="password" class="form-control" required>
							</div>
							<input type="checkbox" name="remember_me" id="remember_me">
							<span>Ingat Saya</span>
							<input type="submit" name="submit" id="submit" class="btn btn-block" value="Login">

							<a class="akun" href="<?php echo site_url('daftar'); ?>">Belum punya akun?</a>
						</form>
						<div class="notifikasi" style="margin-left: 1rem; margin-right: 1rem;">
			              <?php if($this->session->flashdata("login gagal") === "1"){ ?>
			                <div class="alert alert-danger" role="alert">
			                  1
			                </div>
			              <?php }else if($this->session->flashdata("login gagal") === "2"){ ?>
			              	<div class="alert alert-danger" role="alert">
			                  2
			                </div>
			              <?php }else if($this->session->flashdata("login gagal") === "3"){ ?>
			              	<div class="alert alert-danger" role="alert">
			                  3
			                </div>
			              <?php } ?>
			            </div>
					</div>
				</div>	
			</div>
		</div>
	</section>

