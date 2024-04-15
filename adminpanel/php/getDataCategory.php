<?php
require_once('connect.php');

$categoriesList = mysqli_query($conn,  "SELECT * FROM `category`");

?>