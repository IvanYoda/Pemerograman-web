<?php
/*kode program dibawah ini berfungsi untuk menampilkan pesan 
"Ini perulangan ke-{$indeks}" sebanyak 20 kali secara berurutan. */
function tampilAngka(int $jumlah, int $indeks = 1)
{
    echo "Ini perulangan ke-{$indeks}<br>";
    //panggil diri sendiri selama $indeks <= $jumlah
    if ($indeks < $jumlah) {
        tampilAngka($jumlah, $indeks + 1);
    }
}
tampilAngka(20);
