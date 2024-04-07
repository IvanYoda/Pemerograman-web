<?php
/*fungsi dari kode program dibawah ini untuk menjalankan pencocokan pola dan penggantian 
teks berdasarkan pola yang ditentukan. */

$pattern = '/[a-z]/';
$text = 'This is a sample text.';
if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan !";
} else {
    echo "Tidak ada huruf kecil !";
}

$pattern = '/[0-9]+/';
$text = 'There are 123 apples.';

if (preg_match($pattern, $text, $matches)) {
    echo "Cocokan : " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}

$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like apple pie.';
$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text;

$pattern = '/go{2,3}d/';
$text = 'god is good';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokan : " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}
