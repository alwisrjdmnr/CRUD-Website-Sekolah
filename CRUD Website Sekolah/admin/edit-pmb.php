<?php include 'header.php' ?>

<?php
	$pmb	= mysqli_query($conn, "SELECT * FROM pmb WHERE id = '".$_GET['id']."' ");

	if(mysqli_num_rows($pmb) == 0){
		echo "<script>window.location='pmb.php'</script>";
	}

	$p 			= mysqli_fetch_object($pmb);
?>

		<!-- content -->
		<div class="content">

			<div class="container">

				<div class="box">

					<div class="box-header">
						Edit Data Penerimaan Mahasiswa Baru
					</div>

					<div class="box-body">
						
						<form action="" method="POST" enctype="multipart/form-data">
							
							<div class="form-group">
								<label>Nama Lengkap</label>
								<input type="text" name="nama" placeholder="Nama Lengkap" value="<?= $p->nama ?>"
								 class="input-control" required>
							</div>

							<div class="form-group">
								<label>Tempat Lahir</label>
								<input type="text" name="tempat" placeholder="Tempat Lahir" value="<?= $p->tempat ?>"
								 class="input-control" required>
							</div>

							<div class="form-group">
								<label>Tanggal Lahir</label>
								<input type="date" name="tanggal" value="<?= $p->tanggal?>"
								 class="input-control" required>
							</div>

							<div class="form-group">
								<label>Jenis Kelamin</label>
								<select type="text" name="kelamin" value="<?= $p->kelamin ?>"
								 class="input-control" required>
									<option value="">--Pilih--</option>
									<option value="Laki-laki">Laki - Laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
							</div>

							<div class="form-group">
								<label>Agama</label>
								<select type="text" name="agama" value="<?= $p->agama ?>"
								 class="input-control" required>
									<option value="">--Pilih--</option>
									<option value="Islam">Islam</option>
									<option value="Kristen">Kristen</option>
									<option value="Hindu">Hindu</option>
									<option value="Buddha">Buddha</option>
									<option value="Katolik">Katolik</option>
									<option value="Khonghucu">Khonghucu</option>
								</select> 
							</div>

							<div class="form-group">
								<label>Alamat Lengkap</label>
								<textarea class="input-control" name="alamat" value="<?= $p->alamat ?>"
								 placeholder="Alamat" id="keterangan"></textarea>
							</div>
							<button type="button" class="btn" onclick="window.location = 'pmb.php'">Kembali</button>
							<input type="submit" name="submit" value="Simpan" class="btn btn-blue">

						</form>

						<?php

							if(isset($_POST['submit'])){

								$nama = addslashes(ucwords($_POST['nama']));
								$tempat = addslashes($_POST['tempat']);
								$tanggal = ($_POST['tanggal']);
								$kelamin = ($_POST['kelamin']);
								$agama 	= ($_POST['agama']);
								$alamat	= ($_POST['alamat']);
								$currdate = date('Y-m-d H:i:s');

								$update = mysqli_query($conn, "UPDATE pmb SET

										nama = '".$nama."',
										tempat = '".$tempat."',
										tanggal = '".$tanggal."',
										kelamin = '".$kelamin."',
										agama = '".$agama."',
										alamat = '".$alamat."',
										updated_at = '".$currdate."'
										WHERE id = '".$_GET['id']."'
									");


								if($update){
									echo "<script>window.location='pmb.php?success=Edit Data Berhasil'</script>";
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