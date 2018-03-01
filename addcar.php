<?php
  require('header.php');
?>

  <h2>Add Car</h2>

  <main>
    <form id="addcar_form" action="submitcar.php" method="POST">
      VIN: <input name="VIN" type="text" value= "" /><br><br>
      Year: <input name="YEAR" type="text" value= "" /><br><br>
      Make: <input name="MAKE" type="text" value= "" /><br><br>
      Model: <input name="MODEL" type="text" value= "" /><br><br>
      Trim: <input name="TRIM" type="text" value= "" /><br><br>
      Exterior Color: <input name="EXT_COLOR" type="text" value= "" /><br><br>
      Interior Color: <input name="INT_COLOR" type="text" value= "" /><br><br>
      Mileage: <input name="MILEAGE" type="text" value= "" /><br><br>
      Transmission: <input name="TRANSMISSION" type="text" value= "" /><br><br>
      Asking Price: <input name="ASKING_PRICE" type="text" value= "" /><br><br>
      Purchase Price: <input name="PURCHASE_PRICE" type="text" value= "" /><br><br>
      Purchase Date: <input name="PURCHASE_DATE" type="text" value= "" /><br><br>
      <input name="VIN" type="hidden" value= "" /><br><br>
      <input name="Submit1" type="submit" value="Submit" /><br><br>
    </form>

    <a href="index.php"><button>Back</button></a>
  </main>

</body>
</html>