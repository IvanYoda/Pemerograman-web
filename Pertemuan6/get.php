<?php
/*kode program dibawah ini berfungsi untuk menampilkan pesan salam melalui parameter yang dikirim melalui URL. */
$nama = @$_GET['nama']; //tanda @ agar tidak ada peringatan eror ketika key-nya kosong
$usia = @$_GET['usia']; //tanda @ agar tidak ada peringatan eror ketika key-nya kosong

echo "Halo {$nama}! Apakah benar anda berusia {$usia} tahun?";

?>