<?php include("connect.php"); session_start();?>
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
    <?php include("partials/menu.php"); ?>
    <!-- Main Content -->
    <div class="main-content">
        <div class="wrapper">
            <br>
            <h2>Add Book</h2>
            <br>
            <?php include("partials/error.php"); ?>
            <br><br>
                <form action="" method="post">
                    <label for="title">Title:</label>
                    <input type="text" name="title" placeholder="Title" required><br>
                    <label for="description">Description:</label><br>
                    <textarea cols="30" rows="3" name="description"></textarea><br>
                    <label for="price">Price:</label>
                    <input type="text" name="price" placeholder="Price" required><br><br>
                    <input type="submit" name="submit" value="Add Book" class="btn btn-primary">




                </form>
        </div>
    </div>
    <?php include("partials/footer.php"); ?>
</body>
</html>

<?php

    if(isset($_POST['submit'])){
        $title = $_POST['title'];
        $description = $_POST['description'];
        $price = $_POST['price'];

        $sql = "SELECT * FROM `tbl_book` WHERE title = '$title'";
        $result = mysqli_query($conn, $sql);
        $check = mysqli_fetch_assoc($result);

        if(count($check['title']) == 0){
            $sql = "INSERT INTO `tbl_book`(`title`, `description`, `price`) VALUES ('$title','$description','$price')";
            $result = mysqli_query($conn, $sql);
            $_SESSION['success'] = "<div class='alert alert-success' role='alert'>เพิ่มหนังสือสำเร็จ</div>";
            header("Location:manage_book.php");        
        }else{
            $_SESSION['error'] = "<div class='alert alert-danger' role='alert'>ไม่สามารถเพิ่มชื่อหนังสือได้ เนื่องจากมีอยู่ในระบบแล้ว</div>";
            header("Location:add_book.php"); 
        }
    }

?>