<?php
// Praktikum 2

// Praktikum 2 langkah 2
    $a = 10;
    $b = 5;
    $c = $a + 5;
    $d = $b + (10 * 5);
    $e = $d - $c;

    echo "Variabel a: {$a} <br>";
    echo "Variabel b: {$b} <br>";
    echo "Variabel c: {$c} <br>";
    echo "Variabel d: {$d} <br>";
    echo "Variabel e: {$e} <br>";

    var_dump($e);

// Praktikum 2 langkah 5
    $nilaiMatematika = 5.1;
    $nilaiIPA = 6.7;
    $nilaiBahasaIndonesia = 9.3;

    $rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3;

    echo "Matematika: {$nilaiMatematika} <br>";
    echo "IPA: {$nilaiIPA} <br>";
    echo "Bahasa Indoenesia {$nilaiBahasaIndonesia} <br>";
    echo "Rata-rata {$rataRata} <br>";

    var_dump($rataRata);

// Praktikum 2 langkah 8
    $apakahSiswaLulus = true;
    $apakahsiswaSudahUjian = false;

    var_dump($apakahSiswaLulus);
    echo "<br>";
    var_dump($apakahsiswaSudahUjian);

// Praktikum 2 langkah 11
    $namaDepan = "Ibnu";
    $namaBelakang = "Jakaria";

    $namaLengkap = "{$namaDepan} {$namaBelakang}";
    $namaLengkap2 = $namaDepan . ' ' . $namaBelakang;

    echo "Nama Depan: {$namaDepan} <br>";
    echo "Nama Belakang: {$namaBelakang} <br>";

    echo $namaLengkap;

// Praktikum 2 langkah 14    
    $listMahasiwa = ["Wahid Abdullah", "Elmo bachtiar", "Lendis Fabri"];
    echo $listMahasiwa[0];
?>