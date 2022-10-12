<?php
	$koneksi=mysqli_connect("localhost","root","","puskesmas") or die("Gagal Koneksi Database");
	echo "Sukses Koneksi database";
?>
<html>
	<body>
		<table border="3">
		<tr>
			<th>ID Dokter</th>
			<th>Nama Dokter</th>
			<th>Spesialis</th>
			<th>Jadwal Kerja</th>
		</tr>
		<?php
			$query = "select * from dokter";
			$data = mysqli_query($koneksi,$query) or die("Gagal query:".$query);
		?>
		<?php while($v=mysqli_fetch_array($data)):;?>
		<tr>
			<td><?php echo $v["Id_Dokter"];?></td>
			<td><?php echo $v["Nama_Dokter"];?></td>
			<td><?php echo $v["Spesialis"];?></td>
			<td><?php echo $v["Jadwal_Kerja"];?></td>
		</tr>
		<?php endwhile;?>
		</table>
	</body>
</html>