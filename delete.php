<?php
  require "header.php";

    include_once 'includes/config-inc.php';

    // sql to delete a record
  $sql = "DELETE FROM web_equipment WHERE id='$_GET[ID]'";

  if ($conn->query($sql) === TRUE) {
      header("refresh:1; url = Remove.php");
  } else {
      echo "Error deleting record: " . $conn->error;
  }

  $conn->close();
  ?>

?>
