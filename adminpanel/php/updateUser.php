<?php 

require_once("connect.php");

$id = $_POST['idUser'];
$name = $_POST['userName'];
$last = $_POST['userLastName'];
$role = $_POST['roleEdit'];
$email = $_POST['userEmail'];
$pass = $_POST['userPass'];


$data_push = mysqli_query($conn, "UPDATE `users` SET `name` = '$name', `email` = '$email', `password` = '$pass', `last_name` = '$last' WHERE `users`.`id` = '$id'");

if($role){
    $role_push = mysqli_query($conn, "UPDATE `role_users` SET `id_role`='$role' WHERE `id_user` = '$id'");
    header("Location: ../users.php");
}


if ($data_push) {
    header("Location: ../users.php");
} else {
    echo "Ошибка при добавлении записи в базу данных: " . mysqli_error($conn);
}




?>