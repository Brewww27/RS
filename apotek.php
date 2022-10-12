<?php
	$koneksi=mysqli_connect("localhost","root","","puskesmas") or die("Gagal Koneksi Database");
	echo "Sukses Koneksi database";
?>
<html>
	<body>
		<table border="3">
		<tr>
			<th>Kode Obat</th>
			<th>Nama Obat</th>
			<th>Harga</th>
		</tr>
		<?php
			$query = "select * from apotek";
			$data = mysqli_query($koneksi,$query) or die("Gagal query:".$query);
		?>
		<?php while($v=mysqli_fetch_array($data)):;?>
		<tr>
			<td><?php echo $v["Kode_Obat"];?></td>
			<td><?php echo $v["Nama_Obat"];?></td>
			<td><?php echo $v["Harga"];?></td>
		</tr>
		<?php endwhile;?>
		</table>
	</body>
</html>