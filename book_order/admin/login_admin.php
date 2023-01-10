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
    <!-- main-content start -->
    <div class="main-content">
        <div class="wrapper">
            
            <h2>Login Admin</h2>
            <br>
            <?php if(isset($_SESSION['error'])){
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                 }
 ?>
            <br>
            <form action="" method="post">
                <label for="username">Username:</label>
                <input type="text" name="username" placeholder="Userame" required><br>
                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="Password" required><br><br>
                <input type="submit" name="submit" value="Login" class="btn btn-primary">


            </form>
            
        </div>
    </div>
    <!-- main-content end -->

   <?php include("partials/footer.php"); ?>
</body>
</html>

<?php 
    

        if (isset($_POST['submit'])) {

            $username = $_POST['username'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM `tbl_admin` WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($conn, $sql);
            if($result){
                $_SESSION['username'] = $username;
                $_SESSION['login'] = "<div class='alert alert-success' role='alert'>Admin Login Successfully</div>";
                header("Location:index.php");
            }else{
                $_SESSION['error'] = "<div class='alert alert-danger' role='alert'>ชื่อหรือรหัสไม่ตรงกัน</div>";
                header("Location:login_admin.php");
            }
        }

?>