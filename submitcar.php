<?php
  require('header.php');
?>

  <main>
    <?php
      $mysqli = new mysqli('localhost', 'root', '', 'cars');
      if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysql_connect_error());
        exit();
      } else {
        $mysqli->select_db("cars");
      }

      $Vin = $_POST['VIN'];
      $Year = $_POST['YEAR'];
      $Make = mysqli_real_escape_string($mysqli, $_POST['MAKE']);
      $Model = $_POST['MODEL'];
      $Trim = $_POST['TRIM'];
      $Ext_color = $_POST['EXT_COLOR'];
      $Int_color = $_POST['INT_COLOR'];
      $Asking_price = $_POST['ASKING_PRICE'];
      $Purchase_price = $_POST['PURCHASE_PRICE'];
      $Mileage = $_POST['MILEAGE'];
      $Transmission = $_POST['TRANSMISSION'];
      $Purchase_date = $_POST['PURCHASE_DATE'];

      $query = "INSERT INTO inventory (VIN, YEAR, MAKE, MODEL, TRIM, EXT_COLOR, INT_COLOR, 
        ASKING_PRICE, PURCHASE_PRICE, MILEAGE, TRANSMISSION, PURCHASE_DATE) 
        VALUES ('$Vin', '$Year', '$Make', '$Model', '$Trim', '$Ext_color', '$Int_color', 
        '$Asking_price', '$Purchase_price', '$Mileage', '$Transmission', '$Purchase_date')";

      if ($result = $mysqli->query($query)) {
        echo "<p>Successfully added $Make $Model to the database</p>";
      }
      else {
        echo "<p>Error entering $Vin into the database: ".mysqli_error($mysqli)."</p>";
      }

      $mysqli->close();
    ?>

    <br><br><a href="index.php"><button>Back</button></a>
  </main>
</body>
</html>