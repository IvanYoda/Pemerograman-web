<?php
/*kode program ini berfungsi untuk menampilkan pesan perkenalan yang disesuaikan dengan nilai parameter yang diberikan. */
function perkenalan($nama, $salam="Assalamualaikum")
{
    echo $salam . ",  ";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";
    echo "Senang berkenalan dengan anda.<br/>";
}
//memanggil fungsi yang sudah di buat
perkenalan("ivan", "hallo");
echo "<hr>";
$saya = "elok";
$ucapanSalam = "Selamat pagi";
perkenalan($saya, $ucapanSalam);
