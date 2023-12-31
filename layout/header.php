<?php

include '../model/init.php';

// Provera da li je sesija već pokrenuta
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Provera da li postoji korisnik u sesiji
if (isset($_SESSION['user'])) {
    // Korisnik je prijavljen, možete koristiti $_SESSION['user']
    $user = $_SESSION['user'];
    echo "Dobrodošli, {$user['nickname']}!";
} else {
    // Korisnik nije prijavljen, možete prikazati prijavu/registraciju ili nešto drugo
    echo "Niste prijavljeni. '<a href='login.php'>' Login '</a>'";
}
?>

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social T</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <ul class="nav">
            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="register.php">Registration</a></li>
            <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
        </ul>

    </div>
    <hr>
   
