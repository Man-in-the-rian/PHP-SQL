<?php 
    require ("connection.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form action="login_db.php" method="post">
        <h2>Login</h2>
        <div class="from-control">
            <?php  if(isset($_SESSION['error'])): ?>
            <div class="error">
                <h3>
                <?php
                echo $_SESSION['error'];
                unset($_SESSION['error']);
                ?>
                </h3>
            </div>
             <?php endif ?>
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" value="Sign in" name="submit_login">
        </div>
    </form>
</body>
</html>