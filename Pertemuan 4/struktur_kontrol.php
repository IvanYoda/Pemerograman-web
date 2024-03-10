<?php
// Praktikum 4

// Praktikum 4  langkah 2 (soal no 4.1)
    $nilaiNumerik = 92;

    if($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
        echo "Nilai huruf: A";
    } elseif($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
        echo "Nilai huruf: B";
    } elseif($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
        echo "Nilai huruf: C";
    } elseif($nilaiNumerik < 70) {
        echo "Nilai huruf: D";
    }

    echo "<br><br>";

// Praktikum 4  langkah 6 (soal no 4.2)
    $jarakSaatIni = 0;
    $jarakTarget = 500;
    $peningkatanHarian = 30;
    $hari = 0;

    while ($jarakSaatIni < $jarakTarget) {
        $jarakSaatIni += $peningkatanHarian;
        $hari++;
    }

    echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";
    echo "<br><br>";

// Praktikum 4  langkah 10 (soal no 4.3)
    $jumlahLahan = 10;
    $tanamanPerLahan = 5;
    $buahPerTanaman = 10;
    $jumlahBuah = 0;

    for ($i=1; $i <= $jumlahLahan ; $i++) { 
        $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
    }

    echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";
    echo "<br><br>";

// Praktikum 4  langkah 14 (soal no 4.4)
    $skorUjian = [85, 92, 78, 96, 88];
    $totalSkor = 0;

    foreach ($skorUjian as $skor) {
        $totalSkor += $skor;
    }

    echo "Total skor ujian adalah: $totalSkor";
    echo "<br><br>";

// Praktikum 4  langkah 18 (soal no 4.5)
    $nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

    foreach ($nilaiSiswa as $nilai) {
        if($nilai < 60) {
            echo "Nilai: $nilai (Tidak lulus) <br>";
            continue;
        }
        echo "Nilai: $nilai (Lulus) <br>";
    }
    echo "<br><br>";

// Praktikum 4 langkah 22 (soal no 4.6)
    $nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
    rsort($nilaiSiswa);
    array_splice($nilaiSiswa, 0, 2);
    array_splice($nilaiSiswa, -2);
    $nilaiTotal = 0;

    foreach ($nilaiSiswa as $nilai) {
        $nilaiTotal += $nilai;
    }

    echo "Total nilai dari 10 siswa dengan mengabaikan dua nilai tertinggi dan dua terendah adalah: $nilaiTotal";
    echo "<br> Nilai rata-rata dari nilai siswa tersebut adalah: " . $nilaiTotal / count($nilaiSiswa);
    echo "<br><br>";

// Praktikum 4 langkah 24 (soal no 4.7)
    $hargaProduk = 120000;
    $totalHarga = $hargaProduk;
    $hargaSetelahDiskon = 0;

    if($totalHarga > 100000) {
        echo "Anda mendapatkan diskon 20%";
        $hargaSetelahDiskon = $totalHarga - (($totalHarga * 20) / 100);
        echo "<br> Total belanjaan Anda adalah: Rp.{$hargaSetelahDiskon}";
    }
    echo "<br><br>";

// Praktikum 4 langkah 24 (soal no 4.8)
    $totalSkor = 501;

    echo "Total skor pemain adalah: $totalSkor";
    echo "<br>Apakah pemain mendapatkan hadiah tambahan?";

    if($totalSkor > 500) {
        echo " YA";
    } else {
        echo " TIDAK";
    }
    echo "<br><br>";

 ?>   