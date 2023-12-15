<?php
	session_start();
	include '../koneksi.php';
	date_default_timezone_set("Asia/Jakarta");

	$identitas = mysqli_query($conn, "SELECT * FROM user ORDER BY id DESC LIMIT 1");
	$d = mysqli_fetch_object($identitas);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Aplikasi CRUD | Kelompok 4</title>
		<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
		<script>
	      tinymce.init({
	        selector: '#keterangan'
	      });
	    </script>
	</head>

	<body class="bg-light">

		<!-- navbar -->
		<div class="navbar">

			<div class="container">

				<!-- navbar brand -->
				<h2 class="nav-brand float-left"><a href="index.php">Kelompok 4</a></h2>

				<!-- navbar menu -->
				<ul class="nav-menu float-left">
					<li><a href="index.php">Dashboard</a></li>
					<li><a href="jurusan.php">Program Studi</a></li>
					<li><a href="galeri.php">Galeri</a></li>
					<li><a href="informasi.php">Informasi</a></li>
					<li><a href="koperasi.php">Koperasi</a></li>
					<li>
						<a href="#">PMB <i class="fa fa-caret-down"></i></a>
						<!-- sub menu -->
						<ul class="dropdown">
							<li><a href="infopmb.php">Info Tentang PMB</a></li>
							<li><a href="pmb.php">Penerimaan Mahasiswa Baru</a></li>
						</ul>
					</li>
					<li><a href="logout.php">Keluar</a></li>
				</ul>
			</div>
		</div>
