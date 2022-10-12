<?php
	$koneksi=mysqli_connect("localhost","root","","puskesmas") or die("Gagal Koneksi Database");
	echo "Sukses Koneksi database";
?>
<html>
	<body>
		<table border="3">
		<tr>
			<th>Kode Petugas</th>
			<th>Id Dokter</th>
		</tr>
		<?php
			$query = "select * from administrator dokter";
			$data = mysqli_query($koneksi,$query) or die("Gagal query:".$query);
		?>
		<?php while($v=mysqli_fetch_array($data)):;?>
		<tr>
			<td><?php echo $v["Kode_Petugas"];?></td>
			<td><?php echo $v["Id_Dokter"];?></td>
		</tr>
		<?php endwhile;?>
		</table>
	</body>
</html>