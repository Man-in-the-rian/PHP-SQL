<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="header">
        <a href="#">Home</a>
        <?php if(!isset($_SESSION['username'])): ?>
        <a href="login.php">Login</a>
        <?php endif ?>
    </div>
   

    <?php if(isset($_SESSION['username'])): ?>
        <p> Welcome  <strong> <?php echo $_SESSION['username'] ?></strong></p>
        <a href="logout.php?id = '1'">Logout</a>
        <?php endif ?>

</body>
</html>
