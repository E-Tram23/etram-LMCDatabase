<?php

if(isset($_POST['add-submit']))
{
    require 'config-inc.php';

    $name = $_POST['Equipment_Name'];
    $barcode = $_POST['Equipment_Barcode'];
    $date_ent = $_POST['Date_Entered'];

    if(empty($name)||empty($barcode)||empty($date_ent))//Add more error handelers
    {
      header("Location: ../Add.php?error=emptyfields&Equipment_Name=".$name."&Equipment_Barcode=".$barcode);
      exit();
    }
    else
    {
      $sql = "INSERT INTO equipment (Equipment_Name, Equipment_Barcode, Date_Entered, Date_Out, Date_In) VALUES (?,?,?,?,?)";
      $stmt = mysqli_stmt_init($conn);
      if(!mysqli_stmt_prepare($stmt,$sql))
      {
        header("Location: ../Add.php?error=sqlerror");
        exit();
      }
      else
      {
        //Still need to add functionality for Date in and date out for check in and check out
        mysqli_stmt_bind_param($stmt,"sisss",$name,$barcode,$date_ent,$date_ent,$date_ent);
        mysqli_stmt_execute($stmt);
        header("Location: ../Add.php?add=success");
        exit();
      }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else
{
  header("Location: ../Add.php");
  exit();
}
