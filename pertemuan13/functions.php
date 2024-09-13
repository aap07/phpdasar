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

	// upload gambar
	$gambar = upload();
	if(!$gambar){
		return false;
	}

	$query = "INSERT INTO mahasiswa VALUES
			('','$nim','$nama','$email','$jurusan','$gambar')";
	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}

function upload(){
	global $conn;
	// untuk mendapatkan nama file yang diupload, kurung siku pertama adalah nama varaiabel yang dikirim dari form dimana typenya itu file
	// kurung siku kedua adalah extension atau properti yang dimiliki oleh file yang akan diupload
	// untuk menangkap file yang dikirm dari form, harus menggunakan yang namanya $_FILES
	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	//cek apakah ada gambar yg d'upload
	if ($error === 4) {
		echo "
			<script>
				alert('Pilih Gambar Terlebih Dahulu');
			</script>
		";
		return false;
	}


	//cek apakah yg d'upload gambar apa bukan
	// sesuaikan dengan extension yang dibutuhkan
	$ekstensiGambarValid = ['jpg','jpeg','png','svg','gif'];
	// explode pemisah kalimat/text, dimana yang berada didepan koma itu merupakan pemisah yang akan diexpolde ex: wibu.jpg => explode('.', "nama_file_yang_diupload") => wibu jpg/wibujpg
	$ekstensiGambar = explode('.', $namaFile);
	// memeriksa array terkahir dari $ekstensiGambar yang sudah dipecah dengan explode, kemudian seuluruh hurufnya dibuat menjadi lower case
	// "end" menunjukan/menandakan array terakhir dari sebuah file
	// ex: manchesterisblue.jpg => explode('.', manchesterisblue.jpg) => [manchesterisblue][jpg]
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "
			<script>
				alert('Upload File Dengan ekstensi (.jpg - .jpeg - .png)');
			</script>
		";
		return false;
	}
	//cek ukuran gambar
	// 1Mb = 1000 Kb
	// 1Kb = 1000 byte
	// 3Gb = 3000000 Kb
	if ($ukuranFile>2500000) {
		echo "
			<script>
				alert('Ukuran Gambar Terlalu Besar (maks:2,5Mb');
			</script>
		";
		return false;
	}
	//upload gambar
	//ganti nama gambar
	$namaFilebaru = uniqid();
	$namaFilebaru .= ".";
	$namaFilebaru .= $ekstensiGambar;
	// 'img/' link atau alamat folder kalian menyimpan poto
	move_uploaded_file($tmpName, 'img/' . $namaFilebaru);
	return $namaFilebaru;
}
function hapus($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
	return mysqli_affected_rows($conn);
}
function ubah($data){
	global $conn;
	$id = $data["id"];
	$nim = htmlspecialchars($data["nim"]);
	$nama = htmlspecialchars($data["nama"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$gambarLama = htmlspecialchars($data["gambarLama"]);

	//cek apa ganti gamabar
	if ($_FILES['gambar']['error']===4) {
		$gambar = $gambarLama;
	}else{
		$gambar = upload();
	}

	$query = "UPDATE mahasiswa SET nim='$nim', nama='$nama', email='$email', jurusan='$jurusan', gambar='$gambar' WHERE id = '$id'";
	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}
function cari($keyword){
	global $conn;
	$query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%' OR nim LIKE '%$keyword%' OR jurusan LIKE '%$keyword%'";
	return query($query);
}
?>