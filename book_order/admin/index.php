<?php include("connect.php"); 
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <?php include("partials/menu.php"); ?>
    <!-- Main Content -->
    <div class="main-content">
        <div class="wrapper">
            <br>
            <h2>Dashboard</h2>
            <?php
            if(isset($_SESSION['login'])){
                echo $_SESSION['login'];
                 unset($_SESSION['login']);
            }
 ?>
            <br>
            <div class="col-4">
                5
                <br>
                Category
            </div>
            <div class="col-4">
                5
                <br>
                Category
            </div>
            <div class="col-4">
                5
                <br>
                Category
            </div>
            <div class="col-4">
                5
                <br>
                Category
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <?php include("partials/footer.php"); ?>
</body>
</html>