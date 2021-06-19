<?php

  //1. Setup Database connection
  $servername = "localhost";
  $db_username = "root"; //xampp default
  $db_password = "root";  //xampp default
  $database = "medicaide";

  $conn = mysqli_connect($servername, $db_username, $db_password, $database);

?>