<?php
// $mahasiswa =[["Antonius Adi Pratomo", "1234567890", "Manajemen Informatika", "antoniusadipratomo@yahoo.com"],
// ["Antonius Adi Pratomo", "1234567890", "Manajemen Informatika", "antoniusadipratomo@yahoo.com"],["Antonius Adi Pratomo", "1234567890", "Manajemen Informatika", "antoniusadipratomo@yahoo.com"]];
$mahasiswa = [
		[
			"nama" => "Antonius Adi Pratomo",
			"nim" => "1234567890",
			"jurusan" => "Manajemen Informatika",
			"email" => "antoniusadipratomo@yahoo.com",
			"gambar" => "mhs1.png"
		],
		[
			"nama" => "Antonius Adi Pratomo",
			"nim" => "1234567890",
			"jurusan" => "Manajemen Informatika",
			"email" => "antoniusadipratomo@yahoo.com",
			"gambar" => "mhs2.png"
		],
		[
			"nama" => "Antonius Adi Pratomo",
			"nim" => "1234567890",
			"jurusan" => "Manajemen Informatika",
			"email" => "antoniusadipratomo@yahoo.com",
			"gambar" => "mhs3.png"
		]
	];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
	<?php foreach ($mahasiswa as $mhs) : ?>
		<ul>
			<li><img src="img/<?= $mhs["gambar"]; ?>"></li>
			<li>Nama : <?= $mhs["nama"]; ?></li>
			<li>NIM : <?= $mhs["nim"]; ?></li>
			<li>Jurusan : <?= $mhs["jurusan"]; ?></li>
			<li>Email : <?= $mhs["email"]; ?></li>
		</ul>
	<?php endforeach; ?>
</body>
</html>