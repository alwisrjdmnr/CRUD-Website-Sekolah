<?php include 'header.php'?>

		<!-- content -->
		<div class="content">

			<div class="container">

				<div class="box">

					<div class="box-header">
						Formulir Pendaftaran Mahasiswa Baru
					</div>

					<div class="box-body">
						
						<form action="" method="POST" enctype="multipart/form-data">

							<div class="form-group">
								<label>Nama Lengkap</label>
								<input type="text" name="nama" placeholder="Nama Lengkap" class="input-control" required>
							</div>

							<div class="form-group">
								<label>Tempat Lahir</label>
								<input type="text" name="tempat" placeholder="Tempat Lahir" class="input-control" required>
							</div>

							<div class="form-group">
								<label>Tanggal Lahir</label>
								<input type="date" name="tanggal" class="input-control" required>
							</div>

							<div class="form-group">
								<label>Jenis Kelamin</label>
								<select type="text" name="kelamin" class="input-control" required>
									<option value="">--Pilih--</option>
									<option value="Laki-laki">Laki - Laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
							</div>

							<div class="form-group">
								<label>Agama</label>
								<select type="text" name="agama" class="input-control" required>
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
								<textarea class="input-control" name="alamat" placeholder="Alamat" id="keterangan"></textarea>
							</div>

							<button type="button" class="btn" onclick="window.location = 'pmb.php'">Kembali</button>
							<input type="submit" name="submit" class="btn btn-blue" value="Daftar Sekarang">
						</form>

						<?php

							if(isset($_POST['submit'])){

								// print_r($_FILES['gambar']);

								$nama = addslashes(ucwords($_POST['nama']));
								$tempat = addslashes($_POST['tempat']);
								$tanggal = ($_POST['tanggal']);
								$kelamin = ($_POST['kelamin']);
								$agama 	= ($_POST['agama']);
								$alamat	= ($_POST['alamat']);

									$simpan = mysqli_query($conn, "INSERT INTO pmb VALUES (
											null,
											'".$nama."',
											'".$tempat."',
											'".$tanggal."',
											'".$kelamin."',
											'".$agama."',
											'".$alamat."',
											null,
											null
									)");

									if($simpan){
										echo '<div class="alert alert-success">Simpan Berhasil</div>';
									}else{
										echo 'gagal simpan '.mysqli_error($conn);
									}


							}

						?>	

					</div>

				</div>

			</div>

		</div>

<?php include 'footer.php' ?>