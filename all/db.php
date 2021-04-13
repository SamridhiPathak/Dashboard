<?php
  /*
  Author: Ravi
  Website: https://www.csdt.co.in/
  */


  $con = mysqli_connect("localhost","root","","csdt");
  // Check connection
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>