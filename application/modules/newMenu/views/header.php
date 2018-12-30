<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	
	<link href="/sac/assets/menu/css/themed-header.css" rel="stylesheet" type="text/css" media="screen" >
</head>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="navbar-header">
      	<a class="navbar-brand" href="<?php echo base_url();?>">SAC</a>
	</div>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
    <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item dropdown <?php echo strcmp($activeNavbarItem, 'Dijual') == 0 ? 'active' : null;?>">
				<a class="nav-link dropdown-toggle" href="<?php echo base_url();?>homepage" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">S1</a>
				<div class="dropdown-menu" aria-labelledby="dropdown04">
					<?php foreach ($classes as $key => $class): ?>
						<?php if ($class['grade'] == 1): ?>
							<a class="dropdown-item" href="<?= base_url().'kelas/attendance/'.$class['class_id'] ?>"><?= $class['name'] ?></a>
						<?php endif ?>
					<?php endforeach ?>
				</div>
			</li>
			<li class="nav-item dropdown <?php echo strcmp($activeNavbarItem, 'Dijual') == 0 ? 'active' : null;?>">
				<a class="nav-link dropdown-toggle" href="<?php echo base_url();?>homepage" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">S2</a>
				<div class="dropdown-menu" aria-labelledby="dropdown04">
					<?php foreach ($classes as $key => $class): ?>
						<?php if ($class['grade'] == 2): ?>
							<a class="dropdown-item" href="<?= base_url().'kelas/attendance/'.$class['class_id'] ?>"><?= $class['name'] ?></a>
						<?php endif ?>
					<?php endforeach ?>
				</div>
			</li>
			<!-- <li class="nav-item"><a class="nav-link" href="#">Page 3</a></li> -->
		</ul>
			<!-- <form class="form-inline my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search for location" aria-label="Search">
				<button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
			</form> -->

	</div>
	<div class="navbar-header">
		<a class="navbar-logout" href="<?php echo base_url().'logout';?>">
			<button class="btn btn-outline-danger">Log Out</button>
		</a>
	</div>
</nav>
</html>