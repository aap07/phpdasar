<?php
//koneksi database
$conn = mysqli_connect("localhost","root","","phpdasar");
function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
	}
function tambah($data){
	global $conn;
	$nim = htmlspecialchars($data["nim"]);
	$nama = htmlspecialchars($data["nama"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$gambar = htmlspecialchars($data["gambar"]);

	$query = "INSERT INTO mahasiswa VALUES
			('','$nim','$nama','$email','$jurusan','$gambar')";
	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}
function hapus($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
	return mysqli_affected_rows($conn);
}

// $data adalah data yang dikirimkan dari form input yang memanggil fungsi ubah
// sedangkan ex:[]
function ubah($data){
	global $conn;
	$id = $data["id"];
	$nim = htmlspecialchars($data["nim"]);
	$nama = htmlspecialchars($data["nama"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$gambar = htmlspecialchars($data["gambar"]);

	// kita akan membuat perintah SQL untuk merubah data berdasarkan id yang d'inginkan
	// $query = "UPDATE mahasiswa SET nim='$nim', nama='$nama', email='$email', jurusan='$jurusan', gambar='$gambar' WHERE id = '$id'";
	// mysqli_query($conn,$query);

	$test = mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
	echo $test["nama"];
	die;


	return mysqli_affected_rows($conn);
}
?>