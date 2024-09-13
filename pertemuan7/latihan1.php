<?php
// variable scope
// $x = 10;

// function tampilX(){
// 	global $x;
// 	echo $x;
// }
// tampilX();

//superglobals
// variabel yang dimiliki oleh php, variabelnya adalah variabel spesial, merupakan array associative
// variabel scope, merupakan lingkup dari sebuah variabel didalam php 
//$_GET
//$_POST
//$_REQUEST
//$_SESSION
//$_COOKIE
//$_SERVER
//$_ENV
//array associative
$mahasiswa = [
	[
		"nama" => "Antonius Adi Pratomo",
		"nim" => "1234567890",
		"jurusan" => "Manajemen Informatika",
		"email" => "antoniusadipratomo@yahoo.com",
		"gambar" => "mhs1.png"
	],
	[
		"nama" => "Antonius Adi Pratomo 1",
		"nim" => "1234567890",
		"jurusan" => "Manajemen Informatika",
		"email" => "antoniusadipratomo@yahoo.com",
		"gambar" => "mhs2.png"
	],
	[
		"nama" => "Antonius Adi Pratomo 2",
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
	<title>GET</title>
</head>

<body>
	<h1>Daftar Mahasiswa</h1>
	<ul>
		<?php foreach ($mahasiswa as $mhs) : ?>
			<li>
				<a href="latihan2.php?nama=<?= $mhs["nama"]; ?> & nim=<?= $mhs["nim"]; ?> & jurusan=<?= $mhs["jurusan"]; ?> & email=<?= $mhs["email"]; ?> & gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
			</li>
		<?php endforeach; ?>
	</ul>
</body>

</html>