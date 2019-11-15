<!DOCTYPE html>
<?php
  session_start();
 ?>
<html>
  <head>
    <meta charset = "utf-8">
    <meta name = "description" content = "description in search result.">
    <meta name = viewport content= "width=device-width, initial-scale = 1"
    <link rel="stylesheet" href="style.css">
    <title></title>

  </head>
  <body>

      <header>
        <!-- Navbar (sit on top)
        <div class="w3-top">
          <div class="w3-bar w3-white w3-card" id="myNavbar">
            <a href="Main.php" class="w3-bar-item w3-button w3-wide">Home</a>

            <div class="w3-right w3-hide-small">
              <a href="database.php" class="w3-bar-item w3-button"Database</a>
              <a href="CreateAccount.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> Create Account</a>
            </div>

            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
              <i class="fa fa-bars"></i>
            </a>
          </div>
        -->
        <nav >
          <a href="#">

            <img src="images/TopLogo.png" alt = "logo">
          </a>
            <div class = "topper">
              <ul>
                <li><a href = "Main.php">Home</a></li>        <!--For Navigation -->
                <li><a href = "database.php">Equipment Database</a></li>
                <?php
                  if(isset($_SESSION['uid']))
                  {
                    echo ' <li><a href = "logout.inc.php">Logout </a></li>';
                  }
                  else {
                  echo '<li><a href = "login.php">Login </a></li>';
                  }

                 ?>
              </ul>
              </div>
              <!--<a href="CreateAccount.php">Create Account</a> Maybe for adding an account -->
              <form action = "includes/logout.php" method="post"> <!--Maybe Logging out for the future -->
              </form>
            </div>
        <nav>
      </header>
