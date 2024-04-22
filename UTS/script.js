$(document).ready(function () {
    $('#bookingForm').submit(function (e) {
        // Validasi input sebelum mengirimkan formulir
        var nama = $('#nama').val().trim();
        var barang = $('#barang').val().trim();
        var jumlah = $('#jumlah').val().trim();

        if (nama === '' || barang === '' || jumlah === '') {
            alert('Silakan lengkapi semua kolom.');
            e.preventDefault(); // Mencegah pengiriman formulir
        }
    });
});
