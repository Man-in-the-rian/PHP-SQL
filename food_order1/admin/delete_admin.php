<?php
        include("server/connect.php");
        session_start();
        if(isset($_GET['admin_id'])){

            $admin_id = $_GET['admin_id'];

            $sql = "DELETE FROM `tbl_admin` WHERE admin_id = '$admin_id'";
            $result = mysqli_query($conn, $sql);
            if($result){
                $_SESSION['success'] = "Admin Deleted Successfully";
                header("Location:manage_admin.php");
            }else{
                $_SESSION['error'] = "ไม่สามารถลบข้อมูลได้";
                header("Location:manage_admin.php");
            }

    }




?>