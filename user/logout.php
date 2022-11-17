<?php 
    session_start();
   if(session_destroy()){
    header("Location:user_page.php");
   }
    
?>