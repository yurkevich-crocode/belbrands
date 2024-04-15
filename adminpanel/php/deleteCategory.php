<?php
require_once('connect.php');



if(isset($_GET['id'])){
    $id =  $_GET['id'];
    $data_query = mysqli_query($conn, "DELETE FROM `category` WHERE `category`.`id` = '$id'");
}
?>