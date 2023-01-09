<?php session_start(); include("server/connect.php"); ?>
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
    <!-- main-content start -->
    <div class="main-content">
        <div class="wrapper">
            
            <h2>Login Admin</h2>
            <br>
            <?php include("partials/error.php"); ?>
            <br><br>
            <form action="" method="post">
                <label for="full_name">Full Name:</label>
                <input type="text" name="full_name" placeholder="Full Name" required><br>
                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="Password" required><br><br>
                <input type="submit" name="submit" value="Login" class="btn-secondary">


            </form>
            
        </div>
    </div>
    <!-- main-content end -->

   <?php include("partials/footer.php"); ?>
</body>
</html>

<?php 
    

        if (isset($_POST['submit'])) {

            $full_name = $_POST['full_name'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM `tbl_admin` WHERE full_name = '$full_name' AND password = '$password'";
            $result = mysqli_query($conn, $sql);
            if($result){
                $_SESSION['full_name'] = $full_name;
                $_SESSION['login'] = "Admin Login Successfully";
                header("Location:index.php");
            }else{
                $_SESSION['error'] = "ไม่สามารถเข้าสู่ระบบได้เนื่องจาก ชื่อหรือรหัสผ่านไม่ตรงกัน";
                header("Location:login.php");
            }
        }

?>