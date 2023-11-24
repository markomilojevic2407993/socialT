<?php

include '../model/baza.php';
include '../model/function.php';
// id	name	surname	nickname	imgProfil	email	pass
if (!isset($_POST['name']) || empty($_POST['name'])) {
    exit('first name is wrong');
}
if (!isset($_POST['surname']) || empty($_POST['surname'])) {
    exit('last name is wrong');
}
if (!isset($_POST['nickname']) || empty($_POST['nickname'])) {
    exit('nickname is wrong');
}
if (!isset($_POST['email']) || empty($_POST['email'])) {
    exit('email is wrong');
}
if (!isset($_POST['pass']) || empty($_POST['pass'])) {
    exit('password is wrong');
}

$name = $_POST['name'];
$surname = $_POST['surname'];
$nickname = $_POST['nickname'];
$email = $_POST['email'];
$pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
$confirmPass = $_POST['confirmPass'];

$sql = "INSERT INTO users (`name`, `surname`, `nickname`, `imgProfil`, `email`, `pass`) VALUES ('$name', '$surname', '$nickname', 'img/def.jpg', '$email', '$pass')";
confirm(query($sql));

// setMessage('You have successfully registered and can now log in.');
header('Location:../layout/index.php');
