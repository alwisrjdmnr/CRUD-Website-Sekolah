<?php 

	include '../koneksi.php';

	if(isset($_GET['idpengguna'])){

		$delete = mysqli_query($conn, "DELETE FROM pengguna WHERE id = '".$_GET['idpengguna']."' ");
		echo "<script>window.location = 'pengguna.php'</script>";

	}

	if(isset($_GET['idjurusan'])){

		$jurusan = mysqli_query($conn, "SELECT gambar FROM jurusan WHERE id = '".$_GET['idjurusan']."' ");

		if(mysqli_num_rows($jurusan) > 0){

			$p = mysqli_fetch_object($jurusan);

			if(file_exists("../uploads/jurusan/".$p->gambar)){

				unlink("../uploads/jurusan/".$p->gambar);

			}

		}

		$delete = mysqli_query($conn, "DELETE FROM jurusan WHERE id = '".$_GET['idjurusan']."' ");
		echo "<script>window.location = 'jurusan.php'</script>";

	}

	if(isset($_GET['idgaleri'])){

		$galeri = mysqli_query($conn, "SELECT foto FROM galeri WHERE id = '".$_GET['idgaleri']."' ");

		if(mysqli_num_rows($galeri) > 0){

			$p = mysqli_fetch_object($galeri);

			if(file_exists("../uploads/galeri/".$p->foto)){

				unlink("../uploads/galeri/".$p->foto);

			}

		}

		$delete = mysqli_query($conn, "DELETE FROM galeri WHERE id = '".$_GET['idgaleri']."' ");
		echo "<script>window.location = 'galeri.php'</script>";

	}

	if(isset($_GET['idinformasi'])){

		$informasi = mysqli_query($conn, "SELECT gambar FROM informasi WHERE id = '".$_GET['idinformasi']."' ");

		if(mysqli_num_rows($informasi) > 0){

			$p = mysqli_fetch_object($informasi);

			if(file_exists("../uploads/informasi/".$p->gambar)){

				unlink("../uploads/informasi/".$p->gambar);

			}

		}

		$delete = mysqli_query($conn, "DELETE FROM informasi WHERE id = '".$_GET['idinformasi']."' ");
		echo "<script>window.location = 'informasi.php'</script>";

	}


	if(isset($_GET['idkoperasi'])){

		$koperasi = mysqli_query($conn, "SELECT gambar FROM koperasi WHERE id = '".$_GET['idkoperasi']."' ");

		if(mysqli_num_rows($koperasi) > 0){

			$p = mysqli_fetch_object($koperasi);

			if(file_exists("../uploads/koperasi/".$p->gambar)){

				unlink("../uploads/koperasi/".$p->gambar);

			}

		}

		$delete = mysqli_query($conn, "DELETE FROM koperasi WHERE id = '".$_GET['idkoperasi']."' ");
		echo "<script>window.location = 'koperasi.php'</script>";

	}

		$delete = mysqli_query($conn, "DELETE FROM pmb WHERE id = '".$_GET['idpmb']."' ");
		echo "<script>window.location = 'pmb.php'</script>";

?>