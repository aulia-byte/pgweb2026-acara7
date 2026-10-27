<?php
// 1. While Loop
$i = 150; 
while ($i < 170) {
    echo $i . "<br>";
    $i = $i + 2;
}

echo "<br>";

// 2. For Loop
for ($x = 1329; $x < 1340; $x++) {
    echo "Nomor keberuntungan hari ini: $x <br>";
}

echo "<br>";

// 3. Foreach Loop
$colors = array("ungu", "biru", "pink", "kuning", "merah", "hijau");

foreach ($colors as $value) {
    echo "Kertas Warna $value <br>";
}
?>
