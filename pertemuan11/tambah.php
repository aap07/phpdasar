<?php
//koneksi db
require 'functions.php';
//cek apakah tombol submit sdh ditekan apa blm
if (isset($_POST["submit"])) {
	//cek berhasil atau tidak
	if (tambah($_POST) > 0) {
		echo "
			<script>
				alert('Data Berhasil Disimpan');
				document.location.href='index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('Data Gagal Disimpan');
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
	<title>Tambah Data Mahasiswa</title>
</head>

<body>
	<h1>Tambah Data Mahasiswa</h1>
	<!-- method="post" Atribut method digunakan untuk menentukan metode HTTP yang akan digunakan saat mengirimkan data formulir. Dalam kode ini, atribut method ditetapkan ke "post", yang berarti data formulir akan dikirimkan ke server menggunakan metode HTTP POST. Ini sering digunakan untuk mengirim data yang lebih besar dan kompleks, seperti formulir pengisian data. -->
	<form action="" method="post">
		<ul>
			<li>
				<label for="nim">NIM :</label>
				<input type="text" name="nisn" id="nisn" required>
			</li>
			<li>
				<label for="nama">Nama :</label>
				<input type="text" name="nama" id="nama" required>
			</li>
			<li>
				<label for="email">Email :</label>
				<input type="text" name="email" id="email" required>
			</li>
			<li>
				<label for="jurusan">Jurusan :</label>
				<input type="text" name="jurusan" id="jurusan" required>
			</li>
			<li>
				<label for="gambar">Gambar :</label>
				<input type="text" name="gambar" id="gambar" required>
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data</button>
			</li>
		</ul>
	</form>
</body>

</html>