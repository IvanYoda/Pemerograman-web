<!--kode program dibawah ini berfungsi untuk digunakan membuat formulir sederhana dengan memasukkan 
nama dan email.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Input PHP</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $nama = htmlspecialchars($nama, ENT_QUOTES, 'UTF-8');
        $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');

        // Pengecekan alamat email yang valid
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Nama: " . $nama . "<br>";
            echo "Email: " . $email;
        } else {
            echo "Alamat email tidak valid!";
        }
    }
    ?>
    <h2>Form Input PHP</h2>
    <form method="post" action="">
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama" required> <br>

        <label for="email">Email : </label>
        <input type="email" name="email" id="email" required><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>