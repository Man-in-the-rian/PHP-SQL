<?php
    include("connect.php");
     session_start();

    if(isset($_GET['book_id'])){
        $book_id = $_GET['book_id'];

        $sql = "DELETE FROM `tbl_book` WHERE  book_id = '$book_id'" ;
        $result = mysqli_query($conn, $sql);


       if ($result){
            $_SESSION['success'] = "<div class='alert alert-success' role='alert'>ลบข้อมูลสำเร็จ</div>";
            header("Location:manage_book.php");
        }else{
            $_SESSION['error'] = "<div class='alert alert-danger' role='alert'>ไม่สามารถลบข้อมูลได้</div>";
            header("Location:manage_book.php");
        }
        
    }





?>