<?php  

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'my_database';


    // Create Connect
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check
    if(!$conn){
    die('เชื่อมต่อไม่สำเร็จ'. mysqli_connect_error());

    }
?>