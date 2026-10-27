<?php
$Siswa = array("Aulia", "Daffa", "Azhar", "Eli" ,"Ela", "Alex");
$skorTes =67; 

if ($skorTes >= 80) {
    $kelas = "Kelas Unggulan";
} elseif ($skorTes >= 75) {
    $kelas = "Kelas Reguler (A)";
} elseif ($skorTes >= 60) {
    $kelas = "Kelas Reguler (B)";
} else {
    $kelas = "Kelas Reguler (C)";
}

echo "Skor Tes Kelas: $skorTes <br>";
echo "$Siswa[5] masuk ke: $kelas";
?>