<?php
require_once('connect.php');

$data_query = mysqli_query($conn, "SELECT * FROM `user_roles_view`");


$data_roles = mysqli_query($conn, "SELECT * FROM `roles`")
?>