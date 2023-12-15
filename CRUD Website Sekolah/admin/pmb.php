<?php include 'header.php' ?>

		<!-- content -->
		<div class="content">

			<div class="container">

				<div class="box">

					<div class="box-header">
						CRUD Penerimaan Mahasiswa Baru Dibuat Oleh Sirojuddin Munir Alwi (202151177)
					</div>

					<div class="box-body">
						
						<a href="tambah-pmb.php" class="text-green"><i class="fa fa-plus"></i>  Tambah</a>
						<a href="cetak.php" target="_blank" class="btn-cetak"><i class="fa fa-edit"></i>  Print</a>

						<?php
							if(isset($_GET['success'])){
								echo "<div class='alert alert-success'>".$_GET['success']."</div>";
							}
						?>

						
						<table class="table">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Tempat Lahir</th>
									<th>Tanggal Lahir</th>
									<th>Kelamin</th>
									<th>Agama</th>
									<th>Alamat</th>
									<th>Aksi</th>
								</tr>
							</thead>

							<tbody>
								<?php
								$no = 1;

									$where = " WHERE 1=1 ";
									if(isset($_GET['key'])){
										$where .= " AND jurusan LIKE '%".addslashes($_GET['key'])."%' ";
									}

									$pmb = mysqli_query($conn, "SELECT * FROM pmb $where ORDER BY id DESC");
									if(mysqli_num_rows($pmb) > 0){
										while($p = mysqli_fetch_array($pmb)){
								?>

								<tr>
									<td><?= $no++ ?></td>
									<td><?= $p['nama'] ?></td>
									<td><?= $p['tempat'] ?></td>
									<td><?= $p['tanggal'] ?></td>
									<td><?= $p['kelamin'] ?></td>
									<td><?= $p['agama'] ?></td>
									<td><?= $p['alamat'] ?></td>
									<td>
										<a href="edit-pmb.php?id=<?= $p['id'] ?>" title="Edit Data" class="text-green"><i class="fa fa-edit"></i></a> 
										<a href="hapus.php?idpmb=<?= $p['id'] ?>" onclick="return confirm('Yakin ingin hapus ?')" title="Hapus Data" class="text-red"><i class="fa fa-times"></i></a>
									</td>
								</tr>

							<?php }}else{ ?>
								<tr>
									<td colspan="5">Data tidak ada</td>
								</tr>
							<?php } ?>
							</tbody>
						</table>

					</div>

				</div>

			</div>

		</div>

<?php include 'footer.php' ?>