<?php

require_once("connect.php");

$name = $_POST['name'];
$category = $_POST['category'];
$history = $_POST['history'];
$date = $_POST['date'];
$file = $_FILES['fileIMG'];



if ($_FILES['fileIMG']['error'] === UPLOAD_ERR_OK) {
    $uploadDir = '../uploads/brands/'; 
    $randomString = bin2hex(random_bytes(5));
    $uniqueFilename = $randomString . '_' . $_FILES['fileIMG']['name'];
    $uploadedFile = $uploadDir . $uniqueFilename;

    if (move_uploaded_file($_FILES['fileIMG']['tmp_name'], $uploadedFile)) {
        $data_push = mysqli_query($conn, "INSERT INTO `brands`(`id`, `name_brand`, `foundation`, `history`, `img_path`) VALUES (NULL,'$name','$date','$history','$uploadedFile')");
        
        if ($data_push) {
            $lastInsertedId = mysqli_insert_id($conn);
            $category_push = mysqli_query($conn, "INSERT INTO `brand_category`(`id_category`, `id_brand`) VALUES ('$category','$lastInsertedId')");

            header("Location: ../brands.php");
        } else {
            echo "Ошибка при добавлении записи в базу данных: " . mysqli_error($conn);
        }
    } else {
        echo "Ошибка при загрузке изображения.";
    }
}



?>