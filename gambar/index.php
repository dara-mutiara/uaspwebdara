<?php
 include'db.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dara 1900018195</title>
</head>
<body background="dara1.jpg">
	<center>
	<h2> silakan Masukan file</h2>
	<a href="data.php">file</a>

	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="Nama"></td>
			</tr>
			<tr>
				<td>File</td>
				<td>:</td>
				<td><input type="file" name="gambar"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="kirim" value="kirim"></td>
			</tr>
		</table>
	</form>

	<?php
	if(isset($_POST['kirim'])){
		$nama = $_POST['Nama'];
	 	$nama_file = $_FILES['gambar']['name'];
	 	$source = $_FILES['gambar']['tmp_name'];
	 	$folder = './uploads/';

	 	move_uploaded_file($source, $folder.$nama_file);
	 	$insert = mysqli_query($conn , "INSERT INTO tb_gambar VALUES (
	 		NULL,
	 		'$nama',
	 		'$nama_file')");
	 }
	?>

	</center>
</body>
</html>