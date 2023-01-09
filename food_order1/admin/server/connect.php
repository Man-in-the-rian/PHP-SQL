<?php
    $conn = mysqli_connect(
        "localhost",
        "root",
        "",
        "food_order"
    );
if(!$conn){
    echo "ไม่สามารถเชื่อมต่อกับฐานข้อมูลได้".mysqli_errno($conn);
}

?>