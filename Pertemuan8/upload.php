<!-- Prak 1 Upload File -->
<?php
/* 
//praktikum 1 soal 1.1 
    if(isset($_POST["submit"])){ 
        $targetDirectory = "uploads/"; //direktori tujuan untuk menyimpan file
        $targetFile = $targetDirectory.basename($_FILES["fileToUpload"]["name"]);
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)){
                echo "File berhasil diunggah";
            } else{
                echo "Gagal mengunggah file";
            }
    }
    

 */
//praktikum 1 soal 1.2 
/*
    if(isset($_POST["submit"])){
        $targetDirectory = "uploads/"; 
        $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        
        $allowedExtensions = array("jpg", "jpeg", "png", "gif");
        
        $maxFileSize = 5 * 1024 * 1024;
        
        if (in_array($fileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize){
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)){
                echo "File berhasil diunggah";
            } else {
                echo "Gagal mengunggah file";
            }
        } else {
            echo "Gagal mengunggah file. File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
        }
    }
   
*/

//praktikum 1 soal 1.3 
/* 
    if(isset($_POST["submit"])){
        $targetDirectory = "uploads/";
        $targetFile = $targetDirectory.basename($_FILES["fileToUpload"]["name"]);
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        
        $allowedExtensions = array("jpg", "pdf", "doc", "docx"); 
        
        $maxFileSize = 5*1024*1024;

        if (in_array($fileType, $allowedExtensions)&&$_FILES["fileToUpload"]["size"] <= $maxFileSize) {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)){
                echo "File berhasil diunggah <br><br>"; 
                echo '<img src="'.$targetFile.'"width="200" alt="Thumbnail">';
            } else {
                echo "Gagal mengunggah file";
            }
        } else {
            echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan";
        }
    }
    
*/

//praktikum 1 soal 1.4 

if (isset($_POST['submit'])) {
    $targetDirectory = "documents/";
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    $fileExtension = pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
    $fileType = strtolower($fileExtension);

    $allowedExtensions = array("txt", "pdf", "doc", "docx");

    $maxFileSize = 10 * 1024 * 1024;

    if (in_array($fileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "Dokumen berhasil diunggah.";
        } else {
            echo "Gagal mengunggah dokumen.";
        }
    } else {
        echo "Jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    }
}

?>