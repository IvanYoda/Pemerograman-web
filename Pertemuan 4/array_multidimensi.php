<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Multidimensi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .student-container {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
            border: 1px solid #ccc; 
            padding: 10px; 
        }
        .student-avatar {
            width: 100px;
            height: 130px; 
            object-fit: cover; 
            margin-right: 20px;
        }
        .student-details {
            display: flex;
            flex-direction: column;
            margin: 10px 0;
        }
        .student-details p {
            margin: 0;
        }
        .symbol {
            font-size: 10px;
            color: #333;
        }
    </style>
</head>
<body>
    <h2>Data Mahasiswa array multidimensi</h2>

    <?php
    // Array multidimensi untuk data mahasiswa
    $mahasiswa = array(
        array("Nama" => "Suparno", "NIM" => "223344", "Jurusan" => "Teknik Sipil", "Email" => "Suparno@gmail.com", "Avatar" => "Pertemuan 4/1.JPG"),
        array("Nama" => "Joko wihoho", "NIM" => "234234", "Jurusan" => "Teknik Informatika", "Email" => "Joko_wihoho@gmail.com", "Avatar" => "Pertemuan 4/2.jpeg"),
        array("Nama" => "Edi jakar", "NIM" => "243423", "Jurusan" => "Teknik Listrik", "Email" => "Edi_jakar@gmail.com", "Avatar" => "Pertemuan 4/3.jpeg"),
        array("Nama" => "Solikhin", "NIM" => "432432", "Jurusan" => "Teknik Kimia", "Email" => "Solikhin@gmail.com", "Avatar" => "Pertemuan 4/4.jpeg"),
        array("Nama" => "Cak Imin", "NIM" => "343224", "Jurusan" => "Teknik Informatika", "Email" => "Cak_Imin@gmail.com", "Avatar" => "Pertemuan 4/5.jpg")
    );

    // Loop melalui array untuk menampilkan data mahasiswa
    foreach ($mahasiswa as $datamhs) {
        echo '<div class="student-container">';
        echo '<img src="' . $datamhs["Avatar"] . '" alt="Avatar" class="student-avatar">';
        echo '<div class="student-details">';
        echo '<p><span class="symbol">◉</span> Nama: ' . $datamhs["Nama"] . '</p>';
        echo '<p><span class="symbol">◉</span> NIM: ' . $datamhs["NIM"] . '</p>';
        echo '<p><span class="symbol">◉</span> Jurusan: ' . $datamhs["Jurusan"] . '</p>';
        echo '<p><span class="symbol">◉</span> Email: ' . $datamhs["Email"] . '</p>';
        echo '</div>';
        echo '</div>';
    }
    ?>

</body>
</html>