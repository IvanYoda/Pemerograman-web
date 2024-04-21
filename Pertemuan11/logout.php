<!-- Praktikum 1 Langkah 6 logout.php -->
<?php
if(session_status() === PHP_SESSION_NONE)
    session_start();

session_destroy();

header('location:index.php');
?>