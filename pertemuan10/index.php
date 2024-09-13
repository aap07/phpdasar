<?php
//koneksi db
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<title>Halaman Admin</title>
</head>

<body>
	<h1>Daftar Mahasiswa</h1>
	<a href="test.php">Tambah Data Mahasiswa</a>
	<br><br>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No. </th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>
		<?php $i = 1; ?>
		<?php foreach ($mahasiswa as $row) : ?>
			<tr>
				<td>
					<a href="" class="btn btn-outline-primary"></a>
					<a href=""></a>
				</td>
				<td><?= $i ?></td>
				<td>
					<a href="">Ubah</a>
					<!-- ketika ada link/href yang terdapat '?' disertai dengan variable maka method yg d'gunakan adalah GET, jika method yg digunakan adalah GET maka untuk menangkapnya menggunakan $_GET. Dan sebaliknya, jika method yang digunakan adalah POST maka untuk menangkapnya menggunakan $_POST -->
					<a href="hapus.php?id= <?= $row["id"]; ?>" onclick="return confirm('Yakin Akan Menghapus Data');">Hapus</a>
				</td>
				<td>
					<img src="img/<?= $row["gambar"]; ?>" width="50">
				</td>
				<td><?= $row["nim"]; ?></td>
				<td><?= $row["nama"]; ?></td>
				<td><?= $row["email"]; ?></td>
				<td><?= $row["jurusan"]; ?></td>
			</tr>
			<?php $i++; ?>
		<?php endforeach; ?>
	</table>
</body>

</html>