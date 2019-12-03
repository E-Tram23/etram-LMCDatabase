<link rel="stylesheet" href="style.css">
<?php
  require "header.php";
?>

    <main>
      <div class="wrapper-main">
        <section class = "section-default">
          <form action="includes/Add-inc.php" method = "post">
            <input type="text" name ="room_name" placeholder = "Equipment name">
            <input type="text" name ="description" placeholder = "Description">
            <input type="number" name ="id" placeholder = "Barcode">
            <button type = "submit" name = "add-submit">Add Equipment </button>
          </form>
        </section>
      </div>
    </main>

<?php
  require "footer.php"
 ?>
