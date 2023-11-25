<?php

include '../model/init.php';
if (!isset($_POST['nickname']) || empty($_POST['nickname'])) {
    exit('Login is not corect');
}
if (!isset($_POST['pass']) || empty($_POST['pass'])) {
    exit('Password is not corect');
}

$nickname = $_POST['nickname'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM users WHERE nickname='$nickname'";
$user = query($sql);
// $result = $user->fetch_assoc();

if ($user->num_rows > 0) {
    $result = $user->fetch_assoc();

    $passH = $result['pass'];
    if (password_verify($pass, $passH)) {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
            $_SESSION['user'] = $result;
        }
        header('Location:../layout/index.php');
    } else {
        exit('passwor is not corect');
    }
}
