<?php
$mahasiswa =[["Antonius Adi Pratomo", "1234567890", "Manajemen Informatika", "antoniusadipratomo@yahoo.com"],
["Antonius Adi Pratomo", "1234567890", "Manajemen Informatika", "antoniusadipratomo@yahoo.com"],["Antonius Adi Pratomo", "1234567890", "Manajemen Informatika", "antoniusadipratomo@yahoo.com"]];

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
			<li>Nama : <?= $mhs[0]; ?></li>
			<li>NIM : <?= $mhs[1]; ?></li>
			<li>Jurusan : <?= $mhs[2]; ?></li>
			<li>Email : <?= $mhs[3]; ?></li>
	<!-- 		<?php foreach ($mahasiswa as $mhs) : ?>
					<li><?= $mhs; ?></li>
				<?php endforeach; ?> -->
		</ul>
	<?php endforeach; ?>
</body>
</html>