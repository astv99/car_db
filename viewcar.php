<?php
  require('header.php');
?>

  <main>
    <?php
      include 'db.php';
      $vin = $_GET['VIN'];
      $query = "SELECT * FROM inventory WHERE VIN='$vin'";

      if ($result = $mysqli->query($query)) {
        // successful; do nothing
      }
      else {
        echo "Error getting vehicle with VIN: $vin ".mysql_error()."<br />";
      }

      while ($result_arr = mysqli_fetch_assoc($result)) {
        $year = $result_arr['YEAR'];
        $make = $result_arr['MAKE'];
        $model = $result_arr['MODEL'];
        $trim = $result_arr['TRIM'];
        $color = $result_arr['EXT_COLOR'];
        $interior = $result_arr['INT_COLOR'];
        $mileage = $result_arr['MILEAGE'];
        $transmission = $result_arr['TRANSMISSION'];
        $price = $result_arr['ASKING_PRICE'];
      }

      echo "<p class='vehicle'>$year $make $model</p>";
      echo "<p><span class='car_attribute'>Asking Price</span>: $price</p>";
      echo "<p><span class='car_attribute'>Exterior Color</span>: $color</p>";
      echo "<p><span class='car_attribute'>Interior Color</span>: $interior</p>";

      $mysqli->close();
    ?>

    <br><a href="index.php"><button>Back</button></a>
  </main>

</body>
</html>