<!-- Deslogar -->
<?php 
 session_start();

// desloga e volta para o home
if (isset($_GET['logout'])) {
    $_SESSION['logged_in'] = false;
   session_destroy();
   header("Location: ../index.php"); }

   ?>