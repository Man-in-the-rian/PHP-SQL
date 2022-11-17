<?php 
    require("connection.php");
    session_start();
    
    if(isset($_POST['submit_login'])){
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);

        $sql = "SELECT * FROM user WHERE username = '$username' AND  password = '$password'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
       

        if($row['status'] == 'A'){
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "ล็อกอิน สำเร็จ";
            header("Location:admin_page.php");

        }elseif($row['status'] == 'U'){
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "ล็อกอิน สำเร็จ";
            header("Location:user_page.php");
        }else{
            $_SESSION['error'] = "ชื่อกับรหัสผ่านไม่ตรงกัน";
            header("Location:login.php");
        }
    }
?>