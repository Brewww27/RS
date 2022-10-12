<?php
	$koneksi=mysqli_connect("localhost","root","","puskesmas") or die("Gagal Koneksi Database");
	echo "Sukses Koneksi database";
?>
<html>
	<body>
		<table border="3">
		<tr>
			<th>No Pendaftaran</th>
			<th>Nama Pasien</th>
			<th>Umur</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
		</tr>
		<?php
			$query = "select * from pasien";
			$data = mysqli_query($koneksi,$query) or die("Gagal query:".$query);
		?>
		<?php while($v=mysqli_fetch_array($data)):;?>
		<tr>
			<td><?php echo $v["No_Pendaftaran"];?></td>
			<td><?php echo $v["Nama_Pasien"];?></td>
			<td><?php echo $v["Umur"];?></td>
			<td><?php echo $v["Jenis_Kelamin"];?></td>
			<td><?php echo $v["Alamat"];?></td>
		</tr>
		<?php endwhile;?>
		</table>
	</body>
</html>