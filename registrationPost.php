<?php
  session_start();

  //INSERTING USER DATA INTO DATABASE
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $password = md5($_POST['password']); //MD5 encryption
  $birthday = $_POST['birthday'];
  $sex = $_POST['sex'];
  $userType = $_POST['role'];

  //Make first name and last name first letter capitalized
  $first_name = ucfirst($first_name);
  $last_name = ucfirst($last_name);

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
        $_SESSION['isLogin'] = true;
        $_SESSION['fname'] = $first_name;
        $_SESSION['lname'] = $last_name;
        header('Location: dashboard.php');
        
        //CREATION OF USER JOURNAL IF USER IS A PATIENT
        if($userType == "patient") {
          $userDetails = [];

          //1. SELECT ID SQL CODE
          $selectSQL = "SELECT * FROM `patient` WHERE `email`= '".$email."'";

          //2. Execute Select Query
          $result = mysqli_query($conn, $selectSQL);
          while ($row = mysqli_fetch_assoc($result)) {
            array_push($userDetails, $row);
          }

          //3. Insert SQL code
          $createJournal = 'INSERT INTO `journal` (
            `pat_id`
          ) VALUES (
            '.$userDetails[0]["id"].'
          )';

          //4. Execute Insert Query
          if (mysqli_query($conn, $createJournal)) {
            header('Location: dashboard.php');
          } 

          else {
            echo mysqli_error($conn);
          }

          //Set session variable for userID
          $_SESSION['userID'] = $userDetails[0]["id"];
        }
      } 

      else {
        echo mysqli_error($conn);
        print_r($_REQUEST);
      }
  }

  //Closing Database Connection
  mysqli_close($conn);
?>