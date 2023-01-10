<?php $conn = mysqli_connect(
    "localhost",
    'root',
    '',
    'book_order'
);
if(!$conn){
    echo "ไม่สามารถเชื่อมต่อกับฐานข้อมูลได้" . mysqli_connect_error();
}
?>