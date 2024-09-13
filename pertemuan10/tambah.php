<?php
// Mengimpor (require) file 'functions.php' yang berisi definisi fungsi-fungsi yang akan digunakan dalam kode ini.
require 'functions.php';
// Memeriksa apakah tombol submit dengan nama "submit" telah ditekan pada form.
if (isset($_POST["submit"])) {
	// // Jika tombol submit telah ditekan, kode di bawah akan dijalankan.
	// // Memanggil fungsi 'tambah' dengan mengirimkan data dari form ($_POST) sebagai argumen. Fungsi 'tambah' digunakan untuk memasukkan data nama_tabel ke dalam database.
	// if (tambah($_POST) > 0) {
	// 	// Jika fungsi 'tambah' berhasil memasukkan data (kembalikan nilai > 0), maka tampilkan pesan sukses dan alihkan pengguna ke halaman 'index.php'.
	// 	echo "
	// 		<script>
	// 			alert('Data Berhasil Disimpan');
	// 			document.location.href='index.php';
	// 		</script>
	// 	";
	} else {
		// // Jika fungsi 'tambah' gagal memasukkan data (kembalikan nilai <= 0), maka tampilkan pesan gagal dan alihkan pengguna kembali ke halaman 'index.php'.
		// echo "
		// 	<script>
		// 		alert('Data Gagal Disimpan');
		// 		document.location.href='index.php';
		// 	</script>
		// ";
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
	<form action="" method="post">

	</form>
</body>
</html>