
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
            <th>Description</th>
            <th>Date Entered</th>
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
            <main>

              <?php
                if(isset($_SESSION['uid']))
                {
                  echo '<li class = "hpLink"><a href = "Add.php">Add Equpment</a></li> ';
                }
                else {
                echo '  <li class = "hpLink"><a href = "database.php">Login to Add Equipment </a></li>';
                }


               ?>
            <li class = "hpLink"><a href = "Remove.php">Remove Equipment </a></li>
          </ul>
        </section>
      </div>
    </main>

<?php
  require "footer.php"
 ?>
