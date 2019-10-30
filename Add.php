<link rel="stylesheet" href="style.css">
<?php
  require "header.php";
?>

    <main>
      <div class="wrapper-main">
        <section class = "section-default">
          <form action="includes/Add-inc.php" method = "post">
            <input type="text" name ="Equipment_Name" placeholder = "Equipment name">
            <input type="number" name ="Equipment_Barcode" placeholder = "Barcode">
            <input type="date" name ="Date_Entered" placeholder = "Date Entered">
            <button type = "submit" name = "add-submit">Add Equipment </button>
          </form>
        </section>
      </div>
    </main>

<?php
  require "footer.php"
 ?>
