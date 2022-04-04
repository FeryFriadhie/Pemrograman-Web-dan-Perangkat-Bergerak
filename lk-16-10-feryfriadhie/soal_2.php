<?php
$nis = "0043128213";
$nama = "Fery Friadhie";
$nilaiMatematika = 85;
$nilaiBahasaIndonesia = 90;
$nilaiBahasaInggris = 88;

$jumlahNilai = $nilaiMatematika + $nilaiBahasaIndonesia + $nilaiBahasaInggris;
$ratarataNilai = $jumlahNilai / 3;

echo "
    <h2>Perolehan Hasil Penilaian Semester Genap</h2><br>
    NIS : $nis<br>
    Nama : $nama<br>
    Nilai Matematika : $nilaiMatematika <br>
    Nilai B. Indonesia : $nilaiBahasaIndonesia<br>
    Nilai B. Ingrris : $nilaiBahasaInggris<br>
    Jumlah Nilai : $jumlahNilai<br>
    Rata-Rata Nilai : $ratarataNilai <br>";

?>
