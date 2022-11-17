<?php 

    $conn = mysqli_connect(
        "localhost",
        "root",
        "",
        "my_database"
    );
    if(!$conn){
        echo "<script> alert('ไม่สามารถเชื่อมฐานข้อมูลได้'); </script>";
    }
?>