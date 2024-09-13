<?php
	// Menggunakan 'require' untuk mengimpor atau menghubungkan file 'functions.php' yang berisi definisi fungsi-fungsi yang akan digunakan.
	require 'functions.php';
	// Menggunakan fungsi 'query' (yang ada di dalam file 'functions.php') untuk mengambil data dari tabel 'nama_tabel' dalam database. Hasilnya disimpan dalam variabel '$data'.
	$data = query("SELECT * FROM nama_tabel");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Halaman Admin</title>
</head>

<body>
	<h1>Daftar Tabel</h1>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No. </th>
			<th>Kolom 1</th>
			<th>Kolom 2</th>
			<th>Kolom 3</th>
		</tr>

		<!-- Baris ini menginisialisasi variabel $i dengan nilai 1. Ini mungkin digunakan untuk menghitung nomor baris dalam tabel. -->
		<?php $i = 1; ?>
		<!-- Memulai loop foreach untuk mengiterasi melalui setiap elemen dalam array $data. Setiap elemen akan disimpan dalam variabel $row. -->
		<?php foreach ($data as $row) : ?>
			<tr>
				<!-- Mencetak nilai variabel $i di dalam sel tabel. Ini mungkin digunakan untuk menampilkan nomor baris. -->
				<td><?=  $i; ?></td>
				<!-- Mencetak nilai dari "kolom1" dalam array $row di dalam sel tabel. -->
				<td><?= $row["kolom1"]; ?></td>
				<!-- Mencetak nilai dari "kolom2" dalam array $row di dalam sel tabel. -->
				<td><?= $row["kolom2"]; ?></td>
				<!-- Mencetak nilai dari "kolom3" dalam array $row di dalam sel tabel. -->
				<td><?= $row["kolom3"]; ?></td>
			</tr>
			<!-- Menambahkan 1 ke variabel $i, mungkin untuk menghitung nomor baris berikutnya. -->
			<?php $i++; ?>
			<!-- Mengakhiri loop foreach yang telah dimulai sebelumnya. -->
		<?php endforeach; ?>
		
	</table>
</body>

</html>