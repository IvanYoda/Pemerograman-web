<?php
/*kode program dibawah ini berfungsi untuk menjumlahkan dua variabel
$x dan $y, dan kemudian mencetak hasilnya.*/
$x = 75;
$y = 25;

function addition(){
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS ['y'];
}

addition();
echo $z;
?>