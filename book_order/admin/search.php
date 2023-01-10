<?php 
    include("connect.php"); 
    session_start();

    if(isset($_POST['submit'])){
        $search = $_POST['search'];
        $sql = "SELECT * FROM tbl_book WHERE book_id = '$search' OR title = '$search' OR price = '$search'";
        $result = mysqli_query($conn, $sql);
        
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
            <h2>Book</h2>
            <br>
            
            <a href="add_book.php" class="btn btn-primary">Add Book</a>
            <br><br>
            <form action="" method="post">
                <input type="text" name="search" required>
                <input type="submit" value="Search" name="submit">
            </form>
            <br>
            <?php if($check = mysqli_num_rows($result) > 0){ ?>
            <table class='table_full'>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>description</th>
                    <th>price</th>
                    <th>Actions</th>
                </tr>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['book_id'];?></td>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['description'];?></td>
                    <td><?php echo $row['price'];?></td>
                    <td>
                       <a href="update_book.php?book_id=<?php echo $row['book_id']; ?> " class="btn btn-secondary">Update</a> 
                       <a onclick="return confirm('Confirm?')" href="delete_book.php?book_id=<?php echo $row['book_id']; ?>" class="btn btn-danger">Delete</a> 
                    </td>
                </tr>
                <?php } ?>

            </table>
            
            <?php }else{
                $_SESSION['error'] = "<div class='alert alert-danger '  role='alert'>ไม่มีข้อมูลอยู่ในระบบ</div>";
            } ?>
            <td><?php 

                if(isset($_SESSION['error'])){
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                }

            ; ?></td>
        </div>
    </div>
    <?php include("partials/footer.php"); ?>
</body>
</html>