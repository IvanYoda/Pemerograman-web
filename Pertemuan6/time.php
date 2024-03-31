<!--kode program dibawah ini berfungsi untuk menampilkan waktu saat ini.-->

<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <h3>Time</h3>
    <?php
    date_default_timezone_set("asia/jakarta");
    echo date("h:i:sa");
    ?>
</body>

</html>