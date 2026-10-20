<?php
// === LOGIKA PHP (Array memanjang ke kanan) ===
$kecamatan       = ["Moyudan", "Seyegan", "Godean", "Gamping", "Minggir"];
$luas            = ["27,62", "26,63", "26,84", "29,25", "27,27"];
$jumlah_penduduk = ["31497", "47129", "72028", "108675", "29886"];
?>

<!-- === TAMPILAN HTML === -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tabel Data Penduduk</title>
</head>
<body>

<table border="1">
    <tr>
        <th>Kecamatan</th>
        <th>Luas (Km2)</th>
        <th>Jumlah Penduduk</th>
    </tr>
    <?php foreach ($kecamatan as $i => $nama_kecamatan): ?>
    <tr>
        <td><?= $nama_kecamatan; ?></td>
        <td><?= $luas[$i]; ?></td>
        <td><?= $jumlah_penduduk[$i]; ?></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>