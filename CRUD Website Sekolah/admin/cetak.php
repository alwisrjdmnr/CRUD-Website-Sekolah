<?php 
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cetak Peserta</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script>
		window.print();
	</script>
</head>
<body>

	<h2>Laporan Calon Mahasiswa</h2><br><br>
	<table class="table" border="1">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Tempat Lahir</th>
						<th>Tanggal Lahir</th>
						<th>Kelamin</th>
						<th>Agama</th>
						<th>Alamat</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$no = 1;
						$peserta = mysqli_query($conn, "SELECT * FROM pmb");
						while($row = mysqli_fetch_array($peserta)){
					?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row['nama'] ?></td>
						<td><?php echo $row['tempat'].', '.$row['tanggal'] ?></td>
						<td><?php echo $row['tanggal'] ?></td>
						<td><?php echo $row['kelamin'] ?></td>
						<td><?php echo $row['agama'] ?></td>
						<td><?php echo $row['alamat'] ?></td>
					<?php } ?>
				</tbody>
			</table>

</body>
</html>