 <?php
if(isset($_POST['add-submit']))
{
    require 'config-inc.php';
    $name = $_POST['room_name'];
    $barcode = $_POST['id'];
    //$date_ent = $_POST['Date_Entered'];
    $description = $_POST ['description'];
    $string_blank = "test";
    $date = new DateTime();
    $date_ent = $date->format('Y-m-d H:i:s');
    $int_blank = 4;
    if(empty($name)||empty($barcode))//Add more error handelers
    {
      header("Location: ../Add.php?error=emptyfields&room_name=".$name."&id=".$barcode);
      exit();
    }
    else
    {
      $sql = "INSERT INTO web_equipment (room_name,id,disabled,area_id,sort_key,description,capacity,room_admin_email,custom_html,checked_out,Date_Entered,Date_Out) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
      $stmt = mysqli_stmt_init($conn);
      if(!mysqli_stmt_prepare($stmt,$sql))
      {
        header("Location: ../Add.php?error=sqlerror");
        exit();
      }
      else
      {
        //Still need to add functionality for Date in and date out for check in and check out
        mysqli_stmt_bind_param($stmt,"siiississsss",$name,$barcode,$int_blank,$int_blank,$int_blank,$description,$int_blank,$string_blank,$string_blank,$date_ent,$date_ent,$date_ent);
        mysqli_stmt_execute($stmt);
        header("Location: ../Add.php?add=success!!!!!");
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
?>                                                                                                                 
