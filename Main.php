


<link rel="stylesheet" href="style.css">
<?php
  require "header.php";
?>

    <main>

      <?php
        if(isset($_SESSION['uid']))
        {
          echo 'You are logged in';
        }
        else {

        echo 'You are logged out';
        }


       ?>

    <!--  <p>Logged out!</p>
      <p>Logged in!</p>-->
    </main>

<?php
  require "footer.php"
 ?>
