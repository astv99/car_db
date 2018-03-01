<?php
  require('header.php');
?>
  
  <h2>Current Inventory</h2>

  <main class="index">
    <?php
      include 'db.php';
      $query = "SELECT * FROM inventory";

      if ($result = $mysqli->query($query)) {
        // MySQL query successful; do nothing
      }
      else {
        echo "Error getting cars from the database: ".mysqli_error($mysqli)."<br />";
      }

      echo "<table id='grid'><tr>";
      echo "<th>&nbsp;Year</th>";
      echo "<th>&nbsp;Make</th>";
      echo "<th>&nbsp;Model</th>";
      echo "<th>&nbsp;Trim</th>";
      echo "<th>&nbsp;Asking Price</th>";
      echo "<th>&nbsp;Edit/Delete</th>";
      echo "</tr>\n";

      while ($result_arr = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$result_arr['YEAR']."</td>";
        echo "<td>".$result_arr['MAKE']."</td>";
        echo "<td><a href=\"viewcar.php?VIN=".$result_arr['VIN']."\">".$result_arr['MODEL']."</a>"."</td>";
        echo "<td>".$result_arr['TRIM']."</td>";
        echo "<td>".$result_arr['ASKING_PRICE']."</td>";
        echo "<td><a href=\"editcar.php?VIN=".$result_arr['VIN']."\">edit</a> / 
          <a href=\"deletecar.php?VIN=".$result_arr['VIN']."\">delete</a></td>";
        echo "</tr>\n";
      }

      echo "</table>";
      $mysqli->close();
    ?>

    <br><a href="addcar.php"><button class="addCarBtn">Add New Car</button></a>

  </main>

</body>
</html>