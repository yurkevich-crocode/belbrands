<?php
require_once('connect.php');

$data_query = mysqli_query($conn, "SELECT * FROM `brand_with_category`");

$categories = mysqli_query($conn,  "SELECT * FROM `category`");

?>