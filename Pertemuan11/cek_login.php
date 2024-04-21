<!-- Praktikum 1. Struktur Folder dan File Paling Atas Langkah 5 cek_login.php -->
<?php
if (session_status() == PHP_SESSION_NONE)
    session_start();

include 'config/koneksi.php';
include 'fungsi/pesan_kilat.php';

include 'fungsi/anti_injection.php';

$username = antiinjection($koneksi, $_POST['username']);
$password = antiinjection($koneksi, $_POST['password']);

// query untuk mendapatkan informasi pengguna
$query = "SELECT username,level,salt, password as hashed_password FROM user WHERE username='$username'";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);
mysqli_close($koneksi);

$salt = $row['salt'];
$hashed_password = $row['hashed_password'];

if ($salt !== null && $hashed_password !== null) {
    $combined_password = $salt . $password;
    // Memeriksa apakah password yang dimasukkan sesuai dengan hashed password dalam database
    if (password_verify($combined_password, $hashed_password)) {
        $_SESSION['username'] = $row['username'];
        $_SESSION['level'] = $row['level'];
        header("location:index.php");
    } else {
        pesan('danger', "Login gagal. Password Anda Salah.");
        header("location:login.php");
    }
} else {
    pesan('warning', "Username tidak ditemukan.");
    header("location:login.php");
}

// Menghentikan kode selanjutnya
die();
?>