<?php 

require_once("connect.php");

$id = $_POST['idBrand'];
$name = $_POST['nameEdit'];
$category = $_POST['categoryEdit'];
$history = $_POST['historyEdit'];
$date = $_POST['dateEdit'];
$file = $_FILES['editFile'];


if ($_FILES['editFile']['error'] === UPLOAD_ERR_OK) {
    $uploadDir = '../uploads/brands/'; 
    $randomString = bin2hex(random_bytes(5));
    $uniqueFilename = $randomString . '_' . $_FILES['editFile']['name'];
    $uploadedFile = $uploadDir . $uniqueFilename;

    if (move_uploaded_file($_FILES['editFile']['tmp_name'], $uploadedFile)) {

        $data_push = mysqli_query($conn, "UPDATE `brands` SET `name_brand` = '$name', `foundation` = '$date', `history` = '$history', `img_path` = '$uploadedFile' WHERE `brands`.`id` = '$id'");
        
        $category_push = mysqli_query($conn, "UPDATE `brand_category` SET `id_category`='$category' WHERE `id_brand` = '$id'");
        if ($data_push && $category_push) {
            header("Location: ../brands.php");
        } else {
            echo "Ошибка при добавлении записи в базу данных: " . mysqli_error($conn);
        }
    } else {
        echo "Ошибка при загрузке изображения.";
    }
}





?>