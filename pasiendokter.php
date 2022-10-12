<?php
	$koneksi=mysqli_connect("localhost","root","","puskesmas") or die("Gagal Koneksi Database");
	echo "Sukses Koneksi database";
?>
<html>
	<body>
		<table border="3">
		<tr>
			<th>No Pendaftaran</th>
			<th>Id Dokter</th>
		</tr>
		<?php
			$query = "select * from pasien dokter";
			$data = mysqli_query($koneksi,$query) or die("Gagal query:".$query);
		?>
		<?php while($v=mysqli_fetch_array($data)):;?>
		<tr>
			<td><?php echo $v["No_Pendaftaran"];?></td>
			<td><?php echo $v["Id_Dokter"];?></td>
		</tr>
		<?php endwhile;?>
		</table>
	</body>
</html>