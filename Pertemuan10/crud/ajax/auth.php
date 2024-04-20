<!-- Praktikum 06 Tampilan CRUD dengan Ajax -->

<?php
session_start();
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>