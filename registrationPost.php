<?php
  session_start();

  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $password = md5($_POST['password']); //MD5 encryption
  $birthday = $_POST['birthday'];
  $sex = $_POST['sex'];
  $userType = $_POST['userType'];

  //1. Setup Database connection
  $servername = "localhost";
  $db_username = "root"; //xampp default
  $db_password = "";  //xampp default
  $database = "medicaide";

  $conn = mysqli_connect($servername, $db_username, $db_password, $database);

  //2. Insert SQL
  $sql = "INSERT INTO `".$userType."`(
          `fname`,
          `lname`, 
          `sex`,
          `email`, 
          `password`,
          `birthday`
        ) VALUES (
          '".$first_name."',
          '".$last_name."',
          '".$sex."',
          '".$email."',
          '".$password."',
          '".$birthday."'
        )";

  $exist = "
      SELECT 
        * 
      FROM 
        `".$userType."` 
      WHERE 
        `email`='".$email."'
    ";

  //3. Execute SQL

  $result = mysqli_query($conn, $exist);
  $count = mysqli_num_rows($result);

  if ($count > 0) {
    //existing email

    header('Location: register.php?origemail=false');
  } 
  else {
    //original email
      if (mysqli_query($conn, $sql)) {
      echo "Added";
      $_SESSION['email'] = $email;
      $_SESSION['password'] = $password;
      $_SESSION['isLogin'] = true;
      header('Location: index.php');
      } 

      else {
      echo mysqli_error($conn);
      print_r($_REQUEST);
      print_r($_SESSION['userType']);
      }
  }

  //.4 Closing Database Connection
  mysqli_close($conn);
  

?>