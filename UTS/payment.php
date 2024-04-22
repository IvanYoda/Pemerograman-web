<?php
session_start(); // Mulai sesi

// Daftar harga barang berdasarkan jenis barang
$harga_barang = array(
    "Smartphone" => 1500000, // Harga smartphone
    "Laptop" => 5000000, // Harga laptop
    "Tablet" => 800000 // Harga tablet
);

// Hitung total harga berdasarkan barang yang dipilih dan jumlahnya
$total_harga = isset($_SESSION['barang']) && isset($_SESSION['jumlah']) ? $harga_barang[$_SESSION['barang']] * $_SESSION['jumlah'] : 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pemesanan Barang Elektronik</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <div class="container">
        <img src="img/logo.png" alt="Logo" class="logo"> <!-- Tambahkan URL gambar logo di sini -->
        <h2>Konfirmasi Pemesanan Barang Elektronik</h2>
        <div class="order-details">
            <p><strong>Nama:</strong> <?php echo $_SESSION['nama']; ?></p>
            <p><strong>Barang:</strong> <?php echo isset($_SESSION['barang']) ? $_SESSION['barang'] : ''; ?></p>
            <p><strong>Jumlah:</strong> <?php echo isset($_SESSION['jumlah']) ? $_SESSION['jumlah'] : ''; ?></p>
        </div>
        <div class="total">
            <hr>
            <h3>Total Harga: Rp <?php echo number_format($total_harga, 0, ',', '.'); ?></h3>
        </div>
        <div class="buttons">
            <a href="index.html">Kembali ke Beranda</a>
        </div>
    </div>
</body>

</html>
