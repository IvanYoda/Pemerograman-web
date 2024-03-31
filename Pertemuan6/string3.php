<?php
/*kode program dibawah ini berfungsi untuk membalik setiap kata. */
$pesan = "Saya arek Malang";
# ubah variabel $pesan menjadi array dengan perintah explode
$pesanPerkata = explode(" ", $pesan);
# ubah setiap kata damal array menjadi kebalikannya
$pesanPerkata = array_map(fn($pesan) => strrev($pesan),$pesanPerkata);
# gabungkan kembali array menjadi string
$pesan = implode(" ",$pesanPerkata);

echo $pesan."<br>";
?>