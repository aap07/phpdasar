<?php
//koneksi db
require 'functions.php';
$id = $_GET["id"];
// ini merupakan perintah SQL untuk menampilkan sebuah data, berdasarkan id yang dimiliki oleh masing2 tabel
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
// echo $msh["nama_kolom"];
// fungsi die adalah untuk menghentikan program
// die;
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
	<form action="" method="post">
		<ul>
			<li>
				<label for="nim">NIM :</label>
				<input type="hidden" name="id" value="<?= $mhs["id"]?>">
				<input type="text" name="nim" id="nim" required value="<?= $mhs["nim"]?>">
			</li>
			<li>
				<label for="nama">Nama :</label>
				<input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]?>">
			</li>
			<li>
				<label for="email">Email :</label>
				<input type="text" name="email" id="email" required value="<?= $mhs["email"]?>">
			</li>
			<li>
				<label for="jurusan">Jurusan :</label>
				<input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"]?>">
			</li>
			<li>
				<label for="gambar">Gambar :</label>
				<input type="text" name="gambar" id="gambar" required value="<?= $mhs["gambar"]?>">
			</li>
			<li>
				<button type="submit" name="submit">Ubah Data</button>
			</li>
		</ul>
	</form>
</body>
</html>