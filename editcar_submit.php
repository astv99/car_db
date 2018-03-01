<?php
  require('header.php');
?>

  <main>
    <?php
      $vin = $_REQUEST['VIN'] ;
      $year = $_REQUEST['YEAR'];
      $make = $_REQUEST['MAKE'] ;
      $model = $_REQUEST['MODEL'] ;
      $price = $_REQUEST['ASKING_PRICE'];

      // echo $vin." ".$make." ".$model." ".$price;

      $query = "UPDATE INVENTORY SET YEAR='$year', MAKE='$make', MODEL='$model', ASKING_PRICE='$price' 
        WHERE VIN='$vin'";

      include 'db.php';
      /* check connection */
      if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
      }

      if ($result = $mysqli->query($query)) {
        echo "<br><p>Successfully updated $year $make $model.</p>";
      } else {
        echo "Error updating: ".mysql_error()."<br>";
      }
      $mysqli->close();

      //echo "<script>window.history.go(-1);</script>";
      //window.history.go(-1);
    ?>

    <br /><br /><a href="index.php"><button>Back</button></a>
  </main>

</body>
</html>