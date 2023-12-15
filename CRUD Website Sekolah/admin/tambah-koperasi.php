<?php include 'header.php' ?>

		<!-- content -->
		<div class="content">

			<div class="container">

				<div class="box">

					<div class="box-header">
						Tambah Data Koperasi
					</div>

					<div class="box-body">
						
						<form action="" method="POST" enctype="multipart/form-data">
							
							<div class="form-group">
								<label>Nama</label>
								<input type="text" name="nama" placeholder="Nama Alat" class="input-control" required>
							</div>

							<div class="form-group">
								<label>Harga</label>
								<input type="text" name="harga" placeholder="Harga Alat" class="input-control" required>
							</div>

							<div class="form-group">
								<label>Stock</label>
								<input type="text" name="stok" placeholder="Stok Hp" class="input-control" required>
							</div>

							<div class="form-group">
								<label>Gambar</label>
								<input type="file" name="gambar" class="input-control" required>
							</div>

							<button type="button" class="btn" onclick="window.location = 'koperasi.php'">Kembali</button>
							<input type="submit" name="submit" value="Simpan" class="btn btn-blue">
						</form>

						<?php

							if(isset($_POST['submit'])){

								// print_r($_FILES['gambar']);

								$nama 	= addslashes(ucwords($_POST['nama']));
								$harga 	= addslashes($_POST['harga']);
								$stok 	= ($_POST['stok']);

								$filename 	= $_FILES['gambar']['name'];
								$tmpname 	= $_FILES['gambar']['tmp_name'];
								$filesize 	= $_FILES['gambar']['size'];

								$formatfile = pathinfo($filename, PATHINFO_EXTENSION);
								$rename 	= 'koperasi'.time().'.'.$formatfile;

								$allowedtype = array('PNG', 'png', 'JPG', 'jpg', 'JPEG', 'jpeg', 'GIF', 'gif');

								if(!in_array($formatfile, $allowedtype)){

									echo '<div class="alert alert-error">Format file tidak diizinkan.</div>';

								}elseif($filesize > 5000000){

									echo '<div class="alert alert-error">Ukuran file tidak boleh lebih dari 5 MB.</div>';

								}else{

									move_uploaded_file($tmpname, "../uploads/koperasi/".$rename);

									$simpan = mysqli_query($conn, "INSERT INTO koperasi VALUES (
											null,
											'".$nama."',
											'".$harga."',
											'".$stok."',
											'".$rename."',
											null,
											null
									)");

									if($simpan){
										echo '<div class="alert alert-success">Simpan Berhasil</div>';
									}else{
										echo 'gagal simpan '.mysqli_error($conn);
									}

								}

							}

						?>

					</div>

				</div>

			</div>

		</div>

<?php include 'footer.php' ?>