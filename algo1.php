<?php

/*
    Algoritma HITUNG_GAJI_BERSIH_KARYAWAN
    { Untuk menghitung tunjangan dari karyawan dengan rumus:
        tunjangan = 20% * gaji pokok
        pajak = 15% * (gaji pokok + tunjangan)
        gaji bersih = gaji pokok + tunjangan + pajak
    }
*/

// DEKLARASI { mendefinsiikan seluruh variabel, konstanta dan fungsi }
$nama_karyawan = "";
$gaji_pokok = 0.0;
$tunjangan = 0.0;
$pajak = 0.0;
$gaji_bersih = 0.0;

// DESKRIPSI { algoritma atau proses algoritma }
// baca nama karyawan dan gaji pokok
$nama_karyawan = "stendy b. sakur";
$gaji_pokok = 2000000;

// hitung tunjangan
$tunjangan = 0.2 * $gaji_pokok;
$pajak = 0.15 * ($gaji_pokok + $tunjangan);
$gaji_bersih = $gaji_pokok + $tunjangan + $pajak;

// mencetak seluruh data
echo "Karyawan      : " . $nama_karyawan . "<br />";
echo "Gaji Pokok    : Rp. " . $gaji_pokok . "<br />";
echo "Tunjangan     : Rp. " . $tunjangan . "<br />";
echo "Pajak         : Rp. " . $pajak . "<br />";
echo "Gaji Bersih   : Rp. " . $gaji_bersih;


?>