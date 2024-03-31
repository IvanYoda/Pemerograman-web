<!-- kode program dibawah ini berfungsi untuk menampilkan tanggal hari ini 
    dalam beberapa format yang berbeda.-->
<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <h3>date</h3>
    <?php
    echo "today is" . date("y/m/d") . "<br>";
    echo "today is" . date("y.m.d") . "<br>";
    echo "today is" . date("y-m-d") . "<br>";
    echo "today is" . date("1") . "<br>";
    ?>

</body>

</html>