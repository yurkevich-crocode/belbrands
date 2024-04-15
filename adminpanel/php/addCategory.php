<?php

require_once("connect.php");

$name = $_POST['nameAdd'];
$file = $_FILES['fileAdd'];



if ($_FILES['fileAdd']['error'] === UPLOAD_ERR_OK) {
    $uploadDir = '../uploads/category/'; 
    $randomString = bin2hex(random_bytes(5));
    $uniqueFilename = $randomString . '_' . $_FILES['fileAdd']['name'];
    $uploadedFile = $uploadDir . $uniqueFilename;


    if (move_uploaded_file($_FILES['fileAdd']['tmp_name'], $uploadedFile)) {
        $data_push = mysqli_query($conn, "INSERT INTO `category`(`id`, `name_category`, `img_path`) VALUES (NULL,'$name','$uploadedFile')");
        
    
        if ($data_push) {
            header("Location: ../category.php");
        } else {
            echo "Ошибка при добавлении записи в базу данных: " . mysqli_error($conn);
        }
    } else {
        echo "Ошибка при загрузке изображения.";
    }
}



?>