<?php

if (isset($_POST['login-submit'])){

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
$check_uid = "user";
$check_pwd = " ";

  if(empty($uid)|| empty($pwd))
  {
    header("Location: ../Main.php?error=emptyfields");
    exit();
  }
  else {
      if($uid != $check_uid || $pwd != $check_pwd)
      {
        header("Location: ../Main.php?error=wrongusernameorpwd");
        exit();
      }
      else {
        session_start();
        $_SESSION['uid'] = $uid;
        header("Location: ../Main.php?login=success");
        exit();
      }
  }

}
else {

  header("Location: ../Main.php"); //Redirects user if they did not hit submit
  exit();
}



 ?>
