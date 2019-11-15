<link rel="stylesheet" href="style.css">
<?php
  require "header.php";
  include_once 'includes/config-inc.php'
?>
  <main>
    <?php
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../LMC_Proj/Main.php");
     ?>
  </main>
