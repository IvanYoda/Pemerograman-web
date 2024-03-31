<?php
/*kode program dibawah ini berfungsi untuk menampilkan teks, menghitung panjang karakter, panjang kata, 
dan mengubah format teks menjadi huruf kapital dan huruf kecil. */
$loremIpsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
Sed nec libero ac arcu gravida hendrerit. Fusce sodales justo id justo 
efficitur, sed iaculis turpis feugiat. Etiam auctor eget justo sit amet condimentum. 
Integer laoreet libero vel ligula fermentum, ut vestibulum purus suscipit. 
Aliquam a nunc et quam vehicula dapibus in at metus. Donec ut erat ut justo commodo vulputate. 
Sed vel bibendum ligula. Nulla facilisi.";

echo "<p>{$loremIpsum}</p>";
echo "panjang karakter: " . strlen($loremIpsum) . "<br>";
echo "panjang kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";
