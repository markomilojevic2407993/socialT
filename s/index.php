<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$_SESSION['user'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
    <p><?php echo $_SESSION['user']; ?></p>
    <div class="container">
        <ul class="nav">
            <li class="nav-item h4"><a class="nav-link text-danger" href="index.php">Home</a></li>
            <li class="nav-item h4"><a class="nav-link text-danger" href="register.php">Register</a></li>
            <li class="nav-item h4"><a class="nav-link text-danger" href="login.php">Login</a></li>
            <li class="nav-item h4"><a class="nav-link text-danger" href=""></a></li>
            <li class="nav-item h4"><a class="nav-link text-danger" href=""></a></li>
            
        </ul>
            <hr class="border-4">
    </div>
</body>
</html>