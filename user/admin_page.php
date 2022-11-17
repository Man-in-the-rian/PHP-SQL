<?php session_start();

    if(isset($_SESSION['username'])): ?>
        <p> Welcome  <strong> <?php echo $_SESSION['username'] ?></strong></p>
        <a href="logout.php?id = '1'">Logout</a>
        <?php endif ?>

  


