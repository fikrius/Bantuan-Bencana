<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style/User/setting.css');?>">
<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
	<nav class="navbar navbar-expand-sm fixed-top">
		<div class="container">
			<a href="<?php echo site_url('home'); ?>" class="navbar-brand">Forum <span class="highlight">UII</span></a>
			<button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="menu">
				<!-- Access Dropdown -->
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a href="<?php echo site_url('login'); ?>" class="nav-link">Login</a>
					</li><li class="nav-item">
						<a href="<?php echo site_url('register'); ?>" class="nav-link">Register</a>
					</li>
				</ul>
				<!-- End Access Dropdown -->

				<!-- Profile Dropdown -->
				<ul class="navbar-nav navbar-toggler-right dropdown">
				  <a class="navbar-right dropdown-toggle" role="button" href="" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-decoration: none; color: #000;" onmouseover="this.style.color='#fff'" onmouseleave="this.style.color='#000'">
				  	<img class="rounded-circle" style="width: 30px;" src="<?php echo base_url('assets/img/sample.jpg'); ?>">
				  </a>

				  <div class="dropdown-menu" aria-labelledby="dropdownMenu">
				  	<p class="dropdown-item dropdown-backdrop">Fikri Ahmadi</p>
				  	<hr>
				  	<a class="dropdown-item" href="<?php echo site_url('author/fikrius'); ?>"><i class="fa fa-user" style="margin-right: 5px;"></i> Profile</a>
				  	<a class="dropdown-item" href="<?php echo site_url('home'); ?>"><i class="fa fa-home" style="margin-right: 5px;"></i> Dashboard</a>
				  	<a class="dropdown-item" href="<?php echo site_url('setting'); ?>"><i class="fa fa-cog" style="margin-right: 5px;"></i> Setting</a>
				  	<a class="dropdown-item" href="<?php echo site_url('logout'); ?>">Logout</a>
				  </div>
				</ul>
				<!-- End Profile Dropdown -->
			</div>
		</div>
	</nav>
	<div class="container" style="min-height: 70rem; margin-top: 75px;">
		<div class="row">
			<div class="col-md-3">
				<div class="card">
				  <div class="card-header">
				    Setting
				  </div>
				  <div class="card-body">
				  	<ul class="card-title card-side active">
				  		<a href="">Profile</a>
				  	</ul>
				  	<ul class="card-title card-side">
				  		<a href="">Password</a>
				  	</ul>
				  </div>
				</div>
			</div>
			<div class="col-md-9 main">
				<div class="card">
				  <div class="card-header">
				    Profile
				  </div>
				  <div class="card-body">
				    <form>
				  		<div class="form-group">
					  		<div class="col-md-6 col-md-offset-3 foto">
					  			<img class="rounded-circle" style="width: 100px;" src="<?php echo base_url('assets/img/sample.jpg'); ?>">
					  		</div>
				  		</div>
				    	<div class="form-group">
				    		<label for="Name">Nama</label>
				    		<input type="text" class="form-control">
				    	</div>
				    	<div class="form-group">
				    		<label for="Name">Username</label>
				    		<input type="text" class="form-control">
				    	</div>
				    	<div class="form-group">
				    		<label for="Name">Email</label>
				    		<input type="text" class="form-control">
				    	</div>
				    	<div class="form-group">
				    		<button type="submit" class="btn btn-primary">Sumbit</button>
				    	</div>
				    </form>
				  </div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>