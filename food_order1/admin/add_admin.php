<?php session_start(); ?>
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
        <div class="wrapper">
            
            <h2>Add Admin</h2>
            <br>
            <?php include("partials/error.php"); ?>
            <br><br>
            <form action="" method="post">
                <label for="full_name">Full Name:</label>
                <input type="text" name="full_name" placeholder="Full Name" required><br>
                <label for="username">Username:</label>
                <input type="text" name="username" placeholder="Full Name" required><br>
                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="Full Name" required><br><br>
                <input type="submit" name="submit" value="Add Admin" class="btn-secondary">


            </form>
            
        </div>
    </div>
    <!-- main-content end -->

   <?php include("partials/footer.php"); ?>
</body>
</html>

<?php 
    include("server/connect.php");
    
    if(isset($_POST['submit'])){

        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        
        $sql = "SELECT * FROM `tbl_admin` WHERE full_name = '$full_name'";
        $result = mysqli_query($conn,$sql);
        $check = mysqli_fetch_assoc($result);
        if(count($check['full_name']) == 0){
            $sql = "INSERT INTO `tbl_admin`(`full_name`, `username`, `password`) VALUES('$full_name','$username','$password')";
            $result = mysqli_query($conn,$sql);
            if($result){
                $_SESSION['success'] = "Admin Added Successfully";
                header("Location:manage_admin.php");
            }else{
                $_SESSION['error'] = "Faild to Add Admin";
                header("Location:add_admin.php");
            }
        }else{
            $_SESSION['error'] = "มีชื่อผู้ใช้งานซ้ำ";
                header("Location:add_admin.php");
        }
    }
    
    
    ?>