<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>

   <?php include("partials/menu.php"); ?>
  
    <!-- main-content start -->
    <div class="main-content">
        <div class="wrapper ">
            <h1>Dashboard</h1>
            <br><br>
            <?php 
                if(isset($_SESSION['login'])){
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                } 

            ?>
            <br><br>
            <div class="col-4 ">
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
    <!-- main-content end -->

   <?php include("partials/footer.php"); ?>
</body>
</html>