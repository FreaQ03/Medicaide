<?php
  session_start();

  $email = $_POST['email'];
  $password = md5($_POST['password']); //MD5 encrytion

  //1. Setup database connection
  require 'connection.php';

  //2. SELECT SQL
  $sql = "
    SELECT 
      * 
    FROM 
      `patient` 
    WHERE 
      `email`='".$email."'
      AND
      `password`='".$password."'
  ";

  //3. Execute SQL
  $result = mysqli_query($conn, $sql);
  $count = mysqli_num_rows($result);
  if ($count > 0) {
    //user found
    $row = mysqli_fetch_array($result);

    $_SESSION['isLogin'] = true;

    $_SESSION['fname'] = $row['fname'];
    $_SESSION['lname'] = $row['lname'];
    $_SESSION['userID'] = $row['id'];
    $_SESSION['verified'] = $row['verified'];

    $_SESSION['userType'] = "patient";

    header('Location: ../dashboard.php');
  } else {
    //invalid credentials
    $_SESSION['isLogin'] = false;
    header('Location: ../login.php?credentials=false');
  }

  //.4 Closing Database Connection
  mysqli_close($conn);

?>