<!-- Praktikum 2 Multi Upload File -->
<html>

<head>
    <title>Multiupload Dokumen</title>
</head>

<body>
    <!-- praktikum 2 soal 2.1 
        <h2>Unggah Dokumen</h2>
        <form action="proses_upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="files[]" multiple="multiple" accept=".pdf, .doc, .docx">
            <input type="submit" value="Unggah">
         -->
    <!-- praktikum 2 soal 2.2 -->
    <h2>Unggah Dokumen</h2>
    <form action="proses_upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple="multiple" accept=" .jpg, .jpeg, .png">
        <input type="submit" value="Unggah">
    </form>
</body>

</html>