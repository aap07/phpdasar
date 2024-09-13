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

	// buat sebuah function dengan nama tambah, dimana function query ini membawa parameter($data) data yang dikirim dari argument pada file lain yang memanggil atau menggunakan function query ini
	function tambah($data){
		// Menggunakan variabel global '$conn' yang seharusnya telah didefinisikan di tempat lain dalam kode untuk menghubungkan ke database.
		global $conn;
		// Mengambil dan membersihkan data dari array '$data' menggunakan fungsi 'htmlspecialchars', yang membantu mencegah serangan injeksi SQL atau HTML.
		$nisn = htmlspecialchars($data["nisn"]);
		// $nama = htmlspecialchars($data["nama"]);
		// $email = htmlspecialchars($data["email"]);	
		// $jurusan = htmlspecialchars($data["jurusan"]);	
		// $gambar = htmlspecialchars($data["gambar"]);	
		// Menyiapkan query SQL untuk memasukkan data ke dalam tabel 'nama_tabel'.
		$query = "INSERT INTO nama_tabel VALUES
				('','$form1','$form2','$form3')";
		// Menjalankan query SQL ke database menggunakan variabel koneksi '$conn' dan query yang telah disiapkan.
		mysqli_query($conn, $query);
		// Mengembalikan jumlah baris yang terpengaruh oleh operasi query, yang dapat digunakan untuk memeriksa apakah data telah berhasil dimasukkan.
		return mysqli_affected_rows($conn);
	}
	

// membuat function hapus, yg dimana function ini bisa d'panggil oleh file lain
function hapus($id){
	global $conn;
	// ini merupakan codingan untuk menghapus data, dengan menggunakan fungsi dari SQL
	// dmn where itu biasanya mengarah kpd kolom dari id sebuah tabel yang akan dihapus
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
	return mysqli_affected_rows($conn);
}
?>