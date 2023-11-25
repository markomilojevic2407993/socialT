<?php

include '../model/baza.php';
include '../model/function.php';
// id	name	surname	nickname	imgProfil	email	pass
if (!isset($_POST['name']) || empty($_POST['name']) || strlen($_POST['name']) < 3) {
    exit('first name is wrong, must have 3 characters');
    header('Refresh: 3; URL=../layout/register.php');
}
if (!isset($_POST['surname']) || empty($_POST['surname']) || strlen($_POST['surname']) < 3) {
    exit('last name is wrong, must have 3 characters');
    header('Refresh: 3; URL=../layout/register.php');
}
if (!isset($_POST['nickname']) || empty($_POST['nickname']) || strlen($_POST['nickname']) < 3) {
    exit('nickname is wrong, must have 3 characters');
    header('Refresh: 3; URL=../layout/register.php');
}
if (!isset($_POST['email']) || empty($_POST['email']) || strlen($_POST['email']) < 3) {
    exit('email is wrong, must have 3 characters');
    header('Refresh: 3; URL=../layout/register.php');
}
if (!isset($_POST['pass']) || empty($_POST['pass']) || $_POST['pass'] !== $_POST['confirmPass']) {
    exit('password is wrong');
    header('Refresh: 3; URL=../layout/register.php');
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
