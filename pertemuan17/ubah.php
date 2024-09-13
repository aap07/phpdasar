<?php
session_start();
//cek session
if ( !isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}
//koneksi db
require 'functions.php';
$id = $_GET["id"];
//query berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
//cek apakah tombol submit sdh ditekan apa blm
if (isset($_POST["submit"])) {
	//cek berhasil atau tidak
	if (ubah($_POST) > 0) {
		echo "
			<script>
				alert('Data Berhasil Diubah');
				document.location.href='index.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('Data Gagal Diubah');
				document.location.href='index.php';
			</script>
		";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ubah Data Mahasiswa</title>
</head>
<body>
	<h1>Ubah Data Mahasiswa</h1>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $mhs["id"]?>">
		<input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]?>">
		<ul>
			<li>
				<label for="nim">NIM :</label>
				<input type="text" name="nim" id="nim" required value="<?= $mhs["nim"]?>" autocomplete="off">
			</li>
			<li>
				<label for="nama">Nama :</label>
				<input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]?>" autocomplete="off">
			</li>
			<li>
				<label for="email">Email :</label>
				<input type="text" name="email" id="email" required value="<?= $mhs["email"]?>" autocomplete="off">
			</li>
			<li>
				<label for="jurusan">Jurusan :</label>
				<input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"]?>" autocomplete="off">
			</li>
			<li>
				<label for="gambar">Gambar :</label>
				<img src="img/<?= $mhs["gambar"]?>" width="40">
				<input type="file" name="gambar" id="gambar">
			</li>
			<li>
				<button type="submit" name="submit">Ubah Data</button>
			</li>
		</ul>
	</form>
</body>
</html>