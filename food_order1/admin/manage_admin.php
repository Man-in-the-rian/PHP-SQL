<?php 
    session_start();
    include("server/connect.php");

    $sql = "SELECT * FROM tbl_admin";
    $result = mysqli_query($conn, $sql);
    $count = 1
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
   <?php include("partials/menu.php"); ?>
    <!-- main-content start -->
    <div class="main-content">
        <div class="wrapper">
            
            <h2>Admin Page</h2>
            <br>
            <?php include("partials/success.php"); ?>
            <br><br>
            <a href="add_admin.php" class="btn-primary">Add Admin</a>
            <br><br>
            <table class="table_full">
                <tr>
                    <th>S.N.</th>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Actions</th>
                </tr>
                <?php while($row = mysqli_fetch_assoc($result)){?>                
                <tr>

                    <td><?php echo $count++ ?></td>
                    <td><?php echo $row['full_name']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td>
                        <a href="update_admin.php?admin_id=<?php echo $row['admin_id']; ?>" class="btn-secondary">Update Admin</a> 
                        <a href="delete_admin.php?admin_id=<?php echo $row['admin_id']; ?>" class="btn-danger">Delete Admin</a> 
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
    <!-- main-content end -->

   <?php include("partials/footer.php"); ?>
</body>
</html>