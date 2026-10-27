<?php

$kecamatan       = ["Moyudan", "Seyegan", "Godean", "Gamping", "Minggir"];
$luas            = ["27,62", "26,63", "26,84", "29,25", "27,27"];
$jumlah_penduduk = ["31497", "47129", "72028", "108675", "29886"];
?>

<table border="1">
    <tr>
        <th>Kecamatan</th>
        <th>Luas (Km2)</th>
        <th>Jumlah Penduduk</th>
    </tr>
    <tr>
        <td><?= $kecamatan[0]; ?></td>
        <td><?= $luas[0]; ?></td>
        <td><?= $jumlah_penduduk[0]; ?></td>
    </tr>
    <tr>
        <td><?= $kecamatan[1]; ?></td>
        <td><?= $luas[1]; ?></td>
        <td><?= $jumlah_penduduk[1]; ?></td>
    </tr>
    <tr>
        <td><?= $kecamatan[2]; ?></td>
        <td><?= $luas[2]; ?></td>
        <td><?= $jumlah_penduduk[2]; ?></td>
    </tr>
    <tr>
        <td><?= $kecamatan[3]; ?></td>
        <td><?= $luas[3]; ?></td>
        <td><?= $jumlah_penduduk[3]; ?></td>
    </tr>
    <tr>
        <td><?= $kecamatan[4]; ?></td>
        <td><?= $luas[4]; ?></td>
        <td><?= $jumlah_penduduk[4]; ?></td>
    </tr>
</table>