<?php
// Praktikum 3
// Praktikum 3 langkah 2
    $a = 10;
    $b = 5;

    $hasilTambah = $a + $b;
    $hasilKurang = $a - $b;
    $hasilKali = $a * $b;
    $hasilBagi = $a / $b;
    $sisaBagi = $a % $b;
    $pangkat = $a ** $b;

// Praktikum 3 (soal no 3.1) 
    echo "Hasil penjumlahan $a dan $b adalah $hasilTambah <br>";
    echo "Hasil pengurangan $a dan $b adalah $hasilKurang <br>";
    echo "Hasil perkalian $a dan $b adalah $hasilKali <br>";
    echo "Hasil pembagian $a dan $b adalah $hasilBagi <br>";
    echo "Sisa pembagian $a dan $b adalah $sisaBagi <br>";
    echo "Hasil pangkat $a pangkat $b adalah $pangkat <br>";
    echo "<br>";

// Praktikum 3 langkah 5
    $hasilSama = $a == $b;
    $hasilTidakSama = $a != $b;
    $hasilLebihKecil = $a < $b;
    $hasilLebihBesar = $a > $b;
    $hasilLebihKecilSama = $a <= $b;
    $hasilLebihBesarSama = $a >= $b;

// Praktikum 3 (soal no 3.2)
    echo "Apakah $a sama dengan $b?" . ($hasilSama ? "Ya" : "Tidak") . "<br>";
    echo "Apakah $a tidak sama dengan $b?" . ($hasilTidakSama ? "Ya" : "Tidak") . "<br>";
    echo "Apakah $a lebih kecil dari $b?" . ($hasilLebihKecil ? "Ya" : "Tidak") . "<br>";
    echo "Apakah $a lebih besar dari $b?" . ($hasilLebihBesar ? "Ya" : "Tidak") . "<br>";
    echo "Apakah $a lebih kecil atau sama dengan $b?" . ($hasilLebihKecilSama ? "Ya" : "Tidak") . "<br>";
    echo "Apakah $a lebih besar atau sama dengan $b?" . ($hasilLebihBesarSama ? "Ya" : "Tidak") . "<br>";
    echo "<br>";

// Praktikum 3 langkah 8
    $hasilAnd = $a && $b;
    $hasilOr = $a || $b;
    $hasilNotA = !$a;
    $hasilNotB = !$b;

//Praktikum 3 (soal no 3.3)
    echo "Hasil AND antara $a dan $b adalah " . ($hasilAnd ? "True" : "False") . "<br>";
    echo "Hasil OR antara $a dan $b adalah " . ($hasilOr ? "True" : "False") . "<br>";
    echo "Hasil NOT dari $a adalah " . ($hasilNotA ? "True" : "False") . "<br>";
    echo "Hasil NOT dari $b adalah " . ($hasilNotB ? "True" : "False") . "<br>";
    echo "<br>";

// Praktikum 3 langkah 11
    $penjumlahan = $a += $b;
    $pengurangan = $a -= $b;
    $perkalian = $a *= $b;
    $pembagian = $a /= $b;
    $modulo = $a %= $b;

// Praktikum 3 (soal no 3.4)
    echo "Hasil penjumlahan adalah $penjumlahan <br>";
    echo "Hasil pengurangan adalah $pengurangan <br>";
    echo "Hasil perkalian adalah $perkalian <br>";
    echo "Hasil pembagian adalah $pembagian <br>";
    echo "Sisa pembagian adalah $modulo <br>";
    echo "<br>";

// Praktikum 3 langkah 13
    $hasilIdentik = $a === $b;
    $hasilTidakIdentik = $a !== $b;

// Praktikum 3 (soal no 3.5) 
    echo "Apakah A identik dengan B?" . ($hasilIdentik ? "Ya" : "Tidak") . "<br>";
    echo "Apakah A tidak identik dengan B?" . ($hasilTidakIdentik ? "Ya" : "Tidak") . "<br>";
    echo "<br>";

// Praktikum 3 Soal Cerita
// Praktikum 3 (soal no 3.6)
    $totalKursi = 45;
    $kursiDitempati = 28;
    $kursiKosong = $totalKursi - $kursiDitempati;
    $persentaseKosong = ($kursiKosong / $totalKursi) * 100;

    echo "Presentase kursi kosong = {$persentaseKosong} <br>";
    echo "<br>"
?>