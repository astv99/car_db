<?php
  $mysqli = new mysqli('localhost', 'root', '', 'cars');
  if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysql_connect_error());
    exit();
  }

  $mysqli->select_db("cars");
?>