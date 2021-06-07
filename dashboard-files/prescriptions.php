<link rel="stylesheet" type="text/css" href="dashboard-files/dashboardCSS/prescription.css">

<!--Getting prescriptions from SQL Database-->
<?php 
  session_start();
  $prescriptions = [];
  $userID = $_SESSION['userID'];

  //1. Setup Database connection
  $servername = "localhost";
  $db_username = "root"; //xampp default
  $db_password = "";  //xampp default
  $database = "medicaide";

  $conn = mysqli_connect($servername, $db_username, $db_password, $database); 

  //2. SQL Statements
  $sql = "SELECT * FROM `prescription` WHERE `pat_id`=" . $userID;

  //3. Execute SQL
  $result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    array_push($prescriptions, $row);
  }

  //.4 Closing Database Connection
  mysqli_close($conn);

?>

<div class="PrespHeader">
  <h1>Your Prescriptions</h1>
</div> 

<div class="container">
  <div class="card-deck text-light wow animate__animated animate__bounceIn" align="center">
  
  <?php
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];

    //Displaying prescriptions
    for ($index = 0; $index < count($prescriptions); $index++) {
      $prespNo = $index + 1;

      //Finding doctor name of each prescription

      //1. Setup Database connection
      $servername = "localhost";
      $db_username = "root"; //xampp default
      $db_password = "";  //xampp default
      $database = "medicaide";

      $conn = mysqli_connect($servername, $db_username, $db_password, $database); 

      //2. Select SQL
      $sql = 'SELECT `fname`, `lname` FROM `doctor` WHERE id=' . $prescriptions[$index]["doc_id"];

      //3. Execute SQL
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);

      //4. Set doctor name
      $docFname = $row["fname"];
      $docLname = $row["lname"];

      //5. Closing Database Connection
      mysqli_close($conn);

      //Print the prescriptions
      echo '

      <div class="card crdimg w-25 d-inline-block" style="background-image: url(img/PrescriptionCard.png);">
        <div class="card-body cb1">
          <h5 class="card-title">Prescription #' . $prespNo . ' 
          <br> Prescribed On: ' . $prescriptions[$index]["issuedOn"] . ' 
          <br><br> Prescribed to: <br>' . $fname . ' ' . $lname . '</h5>
          <p class="list">
            <li>' . $prescriptions[$index]["data"] . '
            <br><b> ' . $prescriptions[$index]["dose"] . ' </b>
            <br><i>' . $prescriptions[$index]["repeatBy"] . '</i> </li>
          </p>
          <p class="doctorName">
            Prescribed by: ' . $docFname . ' ' . $docLname . '
          </p>
        </div>
      </div>

      ';
    }
  ?>

  </div>
</div>