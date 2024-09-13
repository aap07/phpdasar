<?php
$n = 10;
$first = 0;
$second = 1;
echo "Deret Fibonacci dari 0 sampai $n: ";
echo $first . " " . $second . " ";
for ($i = 2; $i < $n; $i++) {
  $third = $first + $second;
  echo $third . " ";
  $first = $second;
  $second = $third;
}
