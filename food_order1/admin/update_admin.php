<?php 
    session_start(); 
    include("server/connect.php");

    if (isset($_GET['admin_id'])) {

        $admin_id = $_GET['admin_id'];

        $sql = "SELECT * FROM `tbl_admin` WHERE admin_id = '$admin_id'";
        $result = mysqli_query($conn, $sql);
        $check = mysqli_fetch_assoc($result);
    }


?>
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
            
            <h2>Update Admin</h2>
            <br>
            <?php include("partials/error.php"); ?>
            <br><br>
            <form action="" method="post">
                <label for="full_name">Full Name:</label>
                <input type="text" name="full_name" value="<?php echo $check['full_name']; ?>" required><br>
                <label for="username">Username:</label>
                <input type="text" name="username" value="<?php echo $check['username']; ?>" required><br><br>
                <input type="submit" name="submit" value="Update Admin" class="btn-secondary">


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
        $username = $_POST['username'];

        $sql = "UPDATE `tbl_admin` SET `full_name`='$full_name',`username`='$username' WHERE admin_id = $admin_id";
        $result = mysqli_query($conn, $sql);

        if($result){
            $_SESSION['success'] = "Admin Update Successfully";
            header("Location:manage_admin.php");
        }else{
            $_SESSION['error'] = "Faild to Update Admin";
            header("Location:update_admin.php");
        }
        
    }
?>