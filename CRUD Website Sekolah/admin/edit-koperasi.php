<?php include 'header.php' ?>

<?php
	$koperasi 	= mysqli_query($conn, "SELECT * FROM koperasi WHERE id = '".$_GET['id']."' ");

	if(mysqli_num_rows($koperasi) == 0){
		echo "<script>window.location='koperasi.php'</script>";
	}

	$p 			= mysqli_fetch_object($koperasi);
?>

		<!-- content -->
		<div class="content">

			<div class="container">

				<div class="box">

					<div class="box-header">
						Edit Data Koperasi
					</div>

					<div class="box-body">
						
						<form action="" method="POST" enctype="multipart/form-data">
							
							<div class="form-group">
								<label>Nama</label>
								<input type="text" name="nama" placeholder="Nama Alat" value="<?= $p->nama ?>" class="input-control" required>
							</div>

							<div class="form-group">
								<label>Harga</label>
								<input type="text" name="harga" placeholder="Harga Alat" value="<?= $p->harga ?>"
								class="input-control" required>
							</div>

							<div class="form-group">
								<label>Stock</label>
								<input type="text" name="stok" placeholder="Stok Alat" value="<?= $p->stok ?>"
								class="input-control" required>
							</div>

							<div class="form-group">
								<label>Gambar</label>
								<img src="../uploads/koperasi/<?= $p->gambar ?>" width="200px" class="image">
								<input type="hidden" name="gambar2" value="<?= $p->gambar ?>">
								<input type="file" name="gambar" class="input-control">
							</div>

							<button type="button" class="btn" onclick="window.location = 'koperasi.php'">Kembali</button>
							<input type="submit" name="submit" value="Simpan" class="btn btn-blue">

						</form>

						<?php

							if(isset($_POST['submit'])){

								$nama 	= addslashes(ucwords($_POST['nama']));
								$harga 	= addslashes($_POST['harga']);
								$stok 	= ($_POST['stok']);
								$currdate = date('Y-m-d H:i:s');

								if($_FILES['gambar']['name'] != ''){

									// echo 'user ganti gambar';

									$filename 	= $_FILES['gambar']['name'];
									$tmpname 	= $_FILES['gambar']['tmp_name'];
									$filesize 	= $_FILES['gambar']['size'];

									$formatfile = pathinfo($filename, PATHINFO_EXTENSION);
									$rename 	= 'koperasi'.time().'.'.$formatfile;

									$allowedtype = array('PNG', 'png', 'JPG', 'jpg', 'JPEG', 'jpeg', 'GIF', 'gif');

									if(!in_array($formatfile, $allowedtype)){

										echo '<div class="alert alert-error">Format file tidak diizinkan.</div>';

										return false;

									}elseif($filesize > 5000000){

										echo '<div class="alert alert-error">Ukuran file tidak boleh lebih dari 5 MB.</div>';

										return false;

									}else{

										if(file_exists("../uploads/koperasi/".$_POST['gambar2'])){

											unlink("../uploads/koperasi/".$_POST['gambar2']);

										}

										move_uploaded_file($tmpname, "../uploads/koperasi/".$rename);

									}

								}else{

									// echo 'user tidak ganti gambar';

									$rename 	= $_POST['gambar2'];

								}

								$update = mysqli_query($conn, "UPDATE koperasi SET
										nama = '".$nama."',
										harga = '".$harga."',
										stok = '".$stok."',
										gambar = '".$rename."',
										updated_at = '".$currdate."'
										WHERE id = '".$_GET['id']."'
									");


								if($update){
									echo "<script>window.location='koperasi.php?success=Edit Data Berhasil'</script>";
								}else{
									echo 'gagal edit '.mysqli_error($conn);
								}

							}

						?>

					</div>

				</div>

			</div>

		</div>

<?php include 'footer.php' ?>