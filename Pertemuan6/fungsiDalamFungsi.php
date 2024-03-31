<?php
/*kode program dibawah ini berfungsi untuk memanggil dua fungsi PHP yaitu fungsi hitungUmur dan perkenalan yang dimana setiap fungsi nya berbeda. */
function hitungUmur($thn_lahir, $Thn_sekarang)
{
    $umur = $Thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan($nama, $salam = "Assalamualaikum")
{
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";

    //memanggil fungsi lain
    echo "saya berusia" . hitungUmur(2004, 2023) . " tahun<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}

//memanggil fungsi perkenalan
perkenalan("ivan");
