<?php
$bintang = 10;
for ($i = 1; $i <= $bintang; $i++) {
    for ($j = $bintang; $j >= $i; $j -= 1) {
        echo "&nbsp";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo "*";
    }
    echo "<br>";
}
for ($i = 1; $i <= $bintang; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "&nbsp";
    }
    for ($k = $bintang; $k >= $i; $k -= 1) {
        echo "*";
    }
    echo "<br>";
}
