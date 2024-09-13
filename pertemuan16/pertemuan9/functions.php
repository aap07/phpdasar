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
// buat function, dmn function ini membawa parameter tabel dan perintah yg akan d'gunakan
function query($query)
{
    // panggil koneksi database
    global $conn;
    // pilih tabel apa dan perintah apa yg akan d'gunakan
    $result = mysqli_query($conn, $query);
    // inisiasikan variabel untuk menampung datanya dalam bentuk array
    $rows = [];
    // ambl smua data dr dalam tabel, dan masukan kedalam variabel yg sudah di inisiasikan
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    // kembalikan nilai variablenya agar bisa d'gunakan pada file lain
    return $rows;
}
