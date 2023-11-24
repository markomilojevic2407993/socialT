<?php

function existEmail($email)
{
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $existEmail = "SELECT id FROM 'email'=$email";
    $results = query($existEmail);
    if ($results->num_rows > 0) {
        return true;
    } else {
        return false;
    }
}
/*function setMessage($message)
{
    if (!empty($message)) {
        $_SESSION['message'] = $message;
    } else {
        $message = '';
    }
}
function displayMessage()
{
    if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
        echo "<a href='destroySession.php'>".'Login</a>';
    }
}*/
function validateUsers()
{
    $errors = [];
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $nickname = $_POST['nickname'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $confirmPass = $_POST['confirmPass'];
        if (strlen($name) < 3 || strlen($surname) < 3 || strlen($nickname) < 3) {
            $errors[] = 'You must enter more than 3 characters.';
        }
        if (strlen($name) > 20 || strlen($surname) > 20 || strlen($nickname) > 20) {
            $errors[] = 'You must enter last than 20 characters.';
        }
        if (existEmail($email)) {
            $errors[] = 'sorry your email is basa';
        }
    }
}
