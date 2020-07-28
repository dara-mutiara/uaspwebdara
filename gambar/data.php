<?php
	include'db.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Data </title>
</head>
<body background="dara1.jpg">
	<center>
	<h2> Data Gambar </h2>
	<a href="index.php">Tambah</a>

	<table border="1">
		<tr>
			<td>No</td>
			<td>Nama</td>
			<td>Gambar</td>
			<td>Aksi</td>
		</tr>
		<?php
		$query = mysqli_query($conn, 'SELECT * FROM tb_gambar');
		while($row = mysqli_fetch_array($query)){
		?>

		<tr>
			<td><? php echo $row ['id_gambar'] ?> </td>
			<td><? php echo $row ['nama'] ?> </td>
			<td><img src="uploads/<?php echo $row ['file'] ?>" width="100px" height="100px"> </td>
			<td>
				<a href="">edit</a> |
				<a href="">Hapus </a>
			</td>
		</tr>
	<?php } ?>

	</table>
</center>
</body>
</html>