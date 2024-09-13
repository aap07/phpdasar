<?php
//koneksi database
// mysqli_connect("nama localhost","username","password","nama database");
$conn = mysqli_connect("localhost", "root", "", "phpmvc");
// untuk mengambil tabel apa yg akan d'gunakan
// $result = mysqli_query($conn, "SELECT * FROM peoples");
//ambil data dari oject result
//mysqli_fetch_row() => mengembalikan array numeric
// $row = mysqli_fetch_row($result);
// echo ("nama :" . $row[0]);
// var_dump($row[1]);
//mysqli_fetch_assoc() => mengembalikan array associative
// while ($row = mysqli_fetch_assoc($result)) {
//     // var_dump($row);
//     // var_dump($row["name"]);
//     echo ("nama :" . $row["name"]);
// }
//mysqli_fetch_array() => mengembalikan kedua array'a
//mysqli_fetch_object() =>
// var_dump($conn);

// buat sebuah function dengan nama query, dimana function query ini membawa parameter($query) tabel yang dikirim dari argument pada file lain yang memanggil atau menggunakan function query ini
function query($query)
{
    // Menggunakan variabel global '$conn' yang seharusnya telah didefinisikan di tempat lain dalam kode untuk menghubungkan ke database.
    global $conn;
    // Menjalankan query SQL yang diterima sebagai argumen ke database yang ditentukan dalam '$conn' dan menyimpan hasilnya dalam variabel '$result'.
    $result = mysqli_query($conn, $query);
    // Membuat sebuah array kosong '$rows' untuk menyimpan data yang diambil dari database.
    $rows = [];
    // Menggunakan loop while untuk mengambil setiap baris data dari hasil query dan menyimpannya dalam array '$rows'.
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    // Mengembalikan array '$rows' yang berisi hasil data dari query.
    return $rows;
}

