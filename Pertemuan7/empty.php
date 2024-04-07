<?php
/*kode program dibawah ini berfungsi untuk membuat sebuah array kosong dengan. */
$myArray = array();
if (empty($myArray)){
    echo "Array tidak terdefinisi atau kosong.";
}else{
    echo "Array terdefinisi dan tidak kosong.";
}
/* kode program dibawah ini berfungsi untuk memeriksa sebuah variabel yang tidak terdefinisi.*/
if(empty($nonExistentVar)){
    echo "Variabel tidak terdefinisi atau kosong.";
}else{
    echo "Variabel terdefinisi dan tidak kosong.";
}
?>