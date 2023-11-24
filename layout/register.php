<?php

?>
<?php include 'header.php'; ?>
<div class="container">

    <form action="../controller/registration.php" method="post">
        <input type="text" name="name" placeholder="first name" required size="60"><br>
        <input type="text" name="surname" placeholder="last name" required size="60"><br>
        <input type="text" name="nickname" placeholder="nickname" size="60"><br>
        <input type="text" name="email" placeholder="nekimail@gmail.com" size="60" required><br>
        <input type="text" name="pass" placeholder="password">
        <input type="text" name="confirmPass" placeholder="Confirm_password"><hr>
        <button class="btn btn-lg btn-success h1" type="submit">submit</button>

    </form>

</div>
<?php include 'footer.php'; ?>