<?php include("connect.php"); session_start();

    if(isset($_GET['book_id'])){
        $book_id = $_GET['book_id'];

        $sql = "SELECT * FROM tbl_book WHERE book_id = '$book_id'" ;
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $description=  $row['description'];
       
    }

   
?>
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
            <?php include("partials/error.php");   ?>
            <br><br>
                <form action="" method="post">
                    <label for="title">Title:</label>
                    <input type="text" name="title" value="<?php echo $row['title']; ?>" required><br>
                    <label for="description" >Description:</label><br>
                    <textarea cols="30"  name="description"><?php echo  $description; ?></textarea><br>
                    <label for="price">Price:</label>
                    <input type="text" name="price" value="<?php echo  $row['price']; ?>" required><br><br>
                    <input type="submit" name="submit" value="Update" class="btn btn-primary">




                </form>
        </div>
    </div>
    <?php include("partials/footer.php"); ?>
</body>
</html>

<?php 
    

    if (isset($_POST['submit'])) {

        $title = $_POST['title'];
        $description = $_POST['description'];
        $price = $_POST['price'];

        $sql = "UPDATE `tbl_book` SET `title`='$title',`description`=' $description',`price`='$price' WHERE book_id = '$book_id'";
        $result = mysqli_query($conn, $sql);

        if($result){
            $_SESSION['success'] = "<div class='alert alert-success' role='alert'>แก้ไขข้อมูลสำเร็จ</div>";
            header("Location:manage_book.php");
        }else{
            $_SESSION['error'] = "<div class='alert alert-success' role='alert'>ไม่สามารถแก้ไขข้อมูลได้</div>";
            header("Location:update_admin.php");
        }
        
    }
?>