<!DOCTYPE html>
<html>
<head>
	<!-- agar responsif -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>DASHBOARD</title>
	<!-- link -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="Font-Awesome/css/css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="dist/css/admin.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.css">
	
	
</head>
<body>

	<div class="wrapper">
		<!-- mulai navbar -->
		<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">MEMBERSHIP</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
			<li><a href="#"><span class="glyphicon glyphicon-user"></span> Daftar</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			</ul>
		</div>
	</nav> -->







		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  			<a class="navbar-brand" href="#">MEMBERSHIP</a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".sidebar-collapse" aria-controls="avbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
  			</button>
		</nav>
		<!-- akhir navbar -->
		<!-- mulai menu -->
		<aside class="sidebar sidebar-collapse">
			<div class="menu">
				<ul class="menu-konten">
					<li>
						<a href="index.php"><span>Transaksi</span></a>
					</li>
					<li>
						<a href="index.php?page=promo"><span>Promo</span></a>
					</li>
					<li>
						<a href="index.php?page=pegawai"><span>Manajemen ADMIN</span></a>
					</li>
					<li>
						<a href="index.php?page=toko"><span>Manajemen Toko</span></a>
					</li>
				</ul>
			</div>
		</aside>
		<!-- akhir menu -->
		<!-- isi konten -->
		<section class="konten">
			<div class="inner">
				<?php
					include 'content.php';
				 ?>
			</div>
		</section>
		<!-- akhir konten -->

	</div>


	<!-- import JS -->
	<script type="text/javascript" src="dist/js/jquery-3.2.1.slim.min.js"></script>
	<script type="text/javascript" src="dist/js/admin.js"></script>
	<script type="text/javascript" src="bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>