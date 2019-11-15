<link rel="stylesheet" href="style.css">
<?php
  require "header.php";
  include_once 'includes/config-inc.php'
?>
  <main>


 <h2><i class="fa fa-bed w3-margin-right"></i>Login</h2>
</div>
<div class="w3-container w3-white w3-padding-16">
  <form action="includes/login.inc.php" method = "post">
    <div class="w3-row-padding" style="margin:0 -16px;">
      <div class="w3-half w3-margin-bottom">
        <label> Username</label>
        <input class="w3-input w3-border" type="text" placeholder="Username" name="uid" required>

      </div>
      <div class="w3-half">
        <label> Password</label>
        <input class="w3-input w3-border" type="text" placeholder="Password" name="pwd" required>

         <button type = "submit" name = "login-submit">Login</button>
      </div>
    </div>
  </form>
     </div>

  </main>
