<?php
//cek apakah tidak ada data di $_GET
// isset, digunakan untuk mengecek apakah variable sdh d'bikin atau blm 
if ( !isset($_GET["nama"])||!isset($_GET["nim"])||!isset($_GET["jurusan"])||!isset($_GET["email"])||!isset($_GET["gambar"])) {
	//redirect
	header("Location: latihan1.php");
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Detail Mahasiswa</title>
</head>
<body>
	<h1>Detail Mahasiswa</h1>
	<ul>
		<li><img src="img/<?= $_GET["gambar"]; ?>"></li>
		<li>Nama : <?= $_GET["nama"]; ?></li>
 		<li>NIM : <?= $_GET["nim"]; ?></li>
		<li>Jurusan : <?= $_GET["jurusan"]; ?></li>
		<li>Email : <?= $_GET["email"]; ?></li>
	</ul>
	<a href="latihan1.php">Kembali ke Daftar Mahasiswa</a>
</body>
</html>