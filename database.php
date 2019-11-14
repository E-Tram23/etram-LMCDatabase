
<link rel="stylesheet" href="style.css">
<?php
  require "header.php";
  include_once 'includes/config-inc.php'
?>

    <main>
      <div class="wrapper-main">
        <section class = "section-default">
        <table class="w3-table-all w3-hoverable">
          <tr>
            <th>Name</th>
            <th>Barcode</th>
            <th>Date Entered</th>
          </tr>
            <?php
                $sql = "SELECT Equipment_Name,Equipment_Barcode,Date_Entered FROM equipment";
                $result = mysqli_query($conn,$sql);
                $resultChecker = mysqli_num_rows($result);
                if($resultChecker>0)
                {
                  while($row = mysqli_fetch_assoc($result))
                  {
                    echo "<tr><td>" . $row["Equipment_Name"] . "</td><td>" . $row["Equipment_Barcode"]."</td><td>" .
                    $row["Date_Entered"] . "</td></tr>";
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
          <ul>
            <li class = "hpLink"><a href = "Add.php">Add Equpment</a></li>        <!--For Navigation -->
            <li class = "hpLink"><a href = "Remove.php">Remove Equipment </a></li>
          </ul>
        </section>
      </div>
    </main>

<?php
  require "footer.php"
 ?>