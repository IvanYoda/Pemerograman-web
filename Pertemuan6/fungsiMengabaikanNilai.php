<?php
/*kode program dibawah ini berfungsi untuk menghitung umur 
berdasarkan tahun lahir dan tahun sekarang. */
function hitungUmur($thn_lahir, $Thn_sekarang)
{
    $umur = $Thn_sekarang - $thn_lahir;
    return $umur;
}
echo "umur saya adalah " . hitungUmur(2004, 2023) . " tahun";
