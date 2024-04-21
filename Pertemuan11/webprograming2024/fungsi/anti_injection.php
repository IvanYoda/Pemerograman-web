<!-- Praktikum 2 Folder Fungsi Langkah 2 anti_injection.php -->
<?php
    // Fungsi antiinjection() untuk mencegah serangan SQL injection
    function antiinjection($koneksi, $data){
        $filter_sql =  mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars($data, ENT_QUOTES))));
        return $filter_sql;
    }
?>