<?php
  require('header.php');
?>

  <h2>Edit Car</h2>

  <?php
    include 'db.php';
    $vin = $_GET['VIN'];
    $query = "SELECT * FROM inventory WHERE VIN='$vin'";

    if ($result = $mysqli->query($query)) {
      // successful; do nothing
    }
    else {
      echo "Error getting vehicle with VIN: $vin ".mysql_error()."<br>";
    }

    while ($result_arr = mysqli_fetch_assoc($result)) {
      $year = $result_arr['YEAR'];
      $make = $result_arr['MAKE'];
      $model = $result_arr['MODEL'];
      $price = $result_arr['ASKING_PRICE'];
    }

    $mysqli->close();
  ?>

  <main>
    <form id="editcar_form" action="editcar_submit.php" method="POST">
      Year: <input name="YEAR" type="text" value= "<?php echo "$year" ?>" /><br><br>
      Make: <input name="MAKE" type="text" value= "<?php echo "$make" ?>" /><br><br>
      Model: <input name="MODEL" type="text" value= "<?php echo "$model" ?>" /><br><br>
      Asking Price: <input name="ASKING_PRICE" type="text" value= "<?php echo "$price" ?>" /><br><br>
      <input name="VIN" type="hidden" value= "<?php echo "$vin" ?>" /><br><br>
      <input name="Submit1" type="submit" value="Submit" /><br><br>
    </form>

    <a href="index.php"><button>Back</button></a>
  </main>

</body>
</html>