<?php


// explode adalah memecah sebuah kalimat/sebuah data berdasarkan tanda pemisah yang ingin digunakan, dimana tanda pemisahnya adalah sebuah tanda baca ( . , - _ ) dan sysmbol serta spasi
// nama_file.pdf
// [nama_poto].[jpg]
$angka = "manchesterisblue.jpg";
echo "tanpa explode";
echo "<br>";
echo $angka;
echo "<br>";
echo "<br>";
echo "<br>";

$angka_baru = explode(".", $angka);
echo "dengan explode ";
echo "<br>";
print_r($angka_baru);
