<?php include 'header.php' ?>

		<!-- content -->
		<div class="content">

			<div class="container">

				<div class="box">

					<div class="box-header">
						CRUD Koperasi Dibuat Oleh Muhammad Ulil Ilmi Maulana (202151144)
					</div>

					<div class="box-body">
						
						<a href="tambah-koperasi.php" class="text-green"><i class="fa fa-plus"></i>  Tambah</a>

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
            						<th>Harga</th>
            						<th>Stock</th>
            						<th>Gambar</th>
            						<th>Opsi</th>
								</tr>
							</thead>

							<tbody>
								<?php
								$no = 1;

									$where = " WHERE 1=1 ";
									if(isset($_GET['key'])){
										$where .= " AND nama LIKE '%".addslashes($_GET['key'])."%' ";
									}

									$koperasi = mysqli_query($conn, "SELECT * FROM koperasi $where ORDER BY id DESC");
									if(mysqli_num_rows($koperasi) > 0){
										while($p = mysqli_fetch_array($koperasi)){
								?>

								<tr>
									<td><?= $no++ ?></td>
									<td><?= $p['nama'] ?></td>
									<td><?= $p['harga'] ?></td>
									<td><?= $p['stok'] ?></td>
									<td><img src="../uploads/koperasi/<?= $p['gambar'] ?>" width="100px"></td>
									<td>
										<a href="edit-koperasi.php?id=<?= $p['id'] ?>" title="Edit Data" class="text-green"><i class="fa fa-edit"></i></a> 
										<a href="hapus.php?idkoperasi=<?= $p['id'] ?>" onclick="return confirm('Yakin ingin hapus ?')" title="Hapus Data" class="text-red"><i class="fa fa-times"></i></a>
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