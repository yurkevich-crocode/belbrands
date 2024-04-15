<?php 

require_once("connect.php");

$id = $_POST['idEdit'];
$name = $_POST['nameEdit'];
$file = $_FILES['fileEdit'];


if ($_FILES['fileEdit']['error'] === UPLOAD_ERR_OK) {
    $uploadDir = '../uploads/category/'; 
    $randomString = bin2hex(random_bytes(5));
    $uniqueFilename = $randomString . '_' . $_FILES['fileEdit']['name'];
    $uploadedFile = $uploadDir . $uniqueFilename;



    if (move_uploaded_file($_FILES['fileEdit']['tmp_name'], $uploadedFile)) {

        $data_push = mysqli_query($conn, "UPDATE `category` SET `name_category`='$name',`img_path`='$uploadedFile' WHERE `category`.`id` = '$id'");
        
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