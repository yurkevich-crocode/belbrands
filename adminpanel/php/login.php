<?php
require_once('connect.php');

$email = $_POST['email'];
$password = $_POST['password'];



if($conn){
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' AND password='$password'");
    if($sql->num_rows > 0){
        session_start();
        $role = mysqli_query($conn, "SELECT * FROM user_roles_view WHERE user_email = '$email'");
        $curRole = mysqli_fetch_all($role);
        foreach($curRole as $userRole){
            $_SESSION['role'] = $userRole[6];
        }
        $_SESSION['email'] = $email;
        if($_SESSION['role'] != "Пользователь"){
            header("Location: ../brands.php");
        }
        else{
            echo "<script>alert('Пользователю вход запрещен!!!');</script>";
            echo "<script>window.location.href='../index.php';</script>";
        }
    }
    else{
        echo "<script>alert('Неверная эл.почта или пароль');</script>";
    echo "<script>window.location.href='../index.php';</script>";
    }
}

?>