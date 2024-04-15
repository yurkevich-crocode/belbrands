<?php

require_once('connect.php');



if(isset($_GET['id'])){
    $id =  $_GET['id'];
    $data_query = mysqli_query($conn, "DELETE FROM `users` WHERE `users`.`id` = '$id'");
}

?>