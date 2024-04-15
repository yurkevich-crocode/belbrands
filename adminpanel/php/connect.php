<?php
$host = 'localhost';
$dbname = 'belbrands';
$user = 'root';
$password = 'root';

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Ошибка подключения: " . mysqli_connect_error());
}

?>
