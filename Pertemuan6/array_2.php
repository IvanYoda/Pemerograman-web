<!--kode dibawah berfungsi untuk menampilkan informasi seorang dosen.-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $Dosen = [
        'nama' => 'Elon nur Hamdana',
        'domisili' => 'Malang',
        'jenis_kelamin' => 'perempuan'
    ];
    echo "Nama : {$Dosen['nama']}<br>";
    echo "Domisili : {$Dosen['domisili']}<br>";
    echo "Jenis Kelamin : {$Dosen['jenis_kelamin']}<br>";
    ?>
</body>

</html>