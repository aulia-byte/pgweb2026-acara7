<?php
$x = 100;
$y = 50;

if($x == 100 && $y == 50) {
    echo "Keluar Sini <br>";
}

echo "Program Selesai";

if ($x == 100 && $y == 50) {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

if ($x == 100 && $y == 50) {
  echo "Have a good morning!";
} elseif ($x == 100) {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

?>