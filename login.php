<?php 
    session_start();
    include('server.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
        <h2>Ligin</h2>
    </div>

    <form action="login_db.php" method="post">
        <?php  if(isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>

        <div class="input_group">
            <label for="username">Username</label>
            <input type="text" name="username" required>
        </div>
        <div class="input_group">
            <label for="password">Password</label>
            <input type="password" class="" name="password" required>
        </div>
        <div class="input_group">
            <button type="submit" name="login_user" class="btn">Login</button>
        </div>
        <p> Not yet a member?<a href="register.php">Register</a></p>
    </form>
</body>
</html>