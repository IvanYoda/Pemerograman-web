<?php
session_start(); // Mulai sesi

// Ambil data yang dikirimkan melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $barang = $_POST['barang'];
    $jumlah = $_POST['jumlah'];

    // Simpan data ke dalam variabel sesi
    $_SESSION['nama'] = $nama;
    $_SESSION['barang'] = $barang;
    $_SESSION['jumlah'] = $jumlah;

    // Daftar harga barang berdasarkan jenis barang
    $harga_barang = array(
        "Smartphone" => 1500000, // Harga smartphone
        "Laptop" => 5000000, // Harga laptop
        "Tablet" => 800000 // Harga tablet
    );

    // Hitung total harga berdasarkan barang yang dipilih dan jumlahnya
    $total_harga = $harga_barang[$barang] * $jumlah;
} else {
    // Jika metode permintaan bukan POST, redirect ke halaman sebelumnya
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pemesanan Barang Elektronik</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <div class="container">
        <div class="column">
            <h2>Konfirmasi Pemesanan Barang Elektronik</h2>
            <p>Nama: <?php echo $_SESSION['nama']; ?></p>
            <p>Barang: <?php echo isset($_SESSION['barang']) ? $_SESSION['barang'] : ''; ?></p>
            <p>Jumlah: <?php echo isset($_SESSION['jumlah']) ? $_SESSION['jumlah'] : ''; ?></p>
            <p>Total Harga: Rp <?php echo number_format($total_harga, 0, ',', '.'); ?></p>
        </div>
    </div>
    <div class="button-group">
        <a href="index.html">Kembali</a>
        <a href="payment.php">Pembayaran</a>
    </div>
</body>

</html>
