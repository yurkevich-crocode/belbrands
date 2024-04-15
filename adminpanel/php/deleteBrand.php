<?php
require_once('connect.php');



if(isset($_GET['id'])){
    $id =  $_GET['id'];

    $data_query = mysqli_query($conn, "DELETE FROM `brands` WHERE `brands`.`id` = '$id'");

    if($data_query){
        $file_query = mysqli_query($conn, "SELECT `img_path` FROM `brands` WHERE `brands`.`id` = '$id'");
        $fileRow = mysqli_fetch_assoc($file_query);

        if ($fileRow) {
            $imagePath = $fileRow['img_path'];
            if (file_exists($imagePath)) {
                unlink($imagePath);
                echo "Запись и связанный файл успешно удалены.";
            } else {
                echo "Файл не существует или не может быть удален.";
            }
        } else {
            echo "Файл не найден в базе данных.";
        }
    } else {
        echo "Ошибка при удалении записи: " . mysqli_error($conn);
    }
}

?>