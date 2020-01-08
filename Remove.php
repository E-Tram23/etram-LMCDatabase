<link rel="stylesheet" href="style.css">
<?php
  require "header.php";

    include_once 'includes/config-inc.php';
?>
<main>
  <div class="wrapper-main">
    <section class = "section-default">
    <table class="w3-table-all w3-hoverable">
      <tr>
        <th>Name</th>
        <th>Barcode</th>
        <th>Description</th>
        <th>Date Entered</th>
        <th> Remove </th>
      </tr>
        <?php
            $sql = "SELECT room_name,id,description,Date_Entered FROM web_equipment";
            $result = mysqli_query($conn,$sql);
            $resultChecker = mysqli_num_rows($result);
            if($resultChecker>0)
            {
              while($row = mysqli_fetch_assoc($result))
              {
                echo "<tr><td>" . $row["room_name"] . "</td><td>" . $row["id"]."</td><td>" . $row["description"]."</td><td>" .
                $row["Date_Entered"] . "</td><td><a href=delete.php?ID=" .$row['id']. "> Delete</a> </td></tr>";
              }
              echo "</table>";
            }
            else
            {
              echo "Database is empty.";
            }
            $conn->close();
         ?>
     </table>
    </main>

<?php
  require "footer.php"
 ?>
