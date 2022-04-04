<?php 
$nis = "123456789";
$nama = 'Fery';
$umur = 17;
$nilai = 90;
$status = TRUE;

echo "NIS  : " . $nis . "<br>";
echo "Nama : $nama <br>";
print "umur : " . $umur; print "<br>";
printf ("Nilai : %.3f<br>", $nilai);
if ($status)
    echo "Status : Aktif";
else
    echo "Status : Tidak Aktif";
    ?>