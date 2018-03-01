<?php
  require('header.php');
?>

  <main>
    <?php
      include 'db.php';
      $vin = $_GET['VIN'];
      $query = "DELETE FROM inventory WHERE VIN='$vin'";

      //echo "$query<br />";
      if ($result = $mysqli->query($query)) {
        echo "Vehicle with VIN $vin has been deleted.";
      } else {
        echo "Error: vehicle with VIN $vin cannot be found".mysql_error()."<br />";
      }

      $mysqli->close();
    ?>

    <br><br><a href="index.php"><button>Back</button></a>
  </main>

</body>
</html>