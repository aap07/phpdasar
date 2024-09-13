<?php
//koneksi db
require 'functions.php';
// membuat variabel baru untuk menampung data yang dikirim dari file sebelumnya/file lain
$id = $_GET["id"];
if (hapus($id)>0) {
	echo "
		<script>
			alert('Data Berhasil Dihapus');
			document.location.href='index.php';
		</script>
	";
}else{
	echo "
		<script>
			alert('Data Gagal Dihapus');
			document.location.href='index.php';
		</script>
	";
}
?>