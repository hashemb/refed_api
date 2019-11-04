<?php
$conne = mysqli_connect("localhost", "root", "" ,"refed");
mysqli_query($conne, 'SET NAMES "utf8" COLLATE "utf8_general_ci"' );
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>