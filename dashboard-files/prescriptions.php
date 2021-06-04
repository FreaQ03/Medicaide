<!--Getting prescriptions from SQL Database-->
<?php 
  session_start();
  $prescriptions = [];

  //1. Setup Database connection
  $servername = "localhost";
  $db_username = "root"; //xampp default
  $db_password = "";  //xampp default
  $database = "medicaide";

  $conn = mysqli_connect($servername, $db_username, $db_password, $database); 

  //2. SELECT SQL
  $sql = "SELECT * FROM `prescription`";

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
    //Displaying prescriptions
    for ($index = 0; $index < count($prescriptions); $index++) {
      $prespNo = $index + 1;
      $fname = $_SESSION['fname'];
      $lname = $_SESSION['lname'];

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
            Prescribed by: NAME
          </p>
        </div>
      </div>

      ';
    }
  ?>

  </div>
</div>






<!--
<div class="PrespHeader">
  <h1>Your Prescriptions</h1>
</div> 

<div class="container">
    <div class="card-deck text-light wow animate__animated animate__bounceIn" align="center">
      <div class="card crdimg w-25 d-inline-block" style="background-image: url(img/PrescriptionCard.png);">
        <div class="card-body cb1">
          <h5 class="card-title">Prescription <br> DATE <br> NAME</h5>
          <p class="list">
          	<li>Push one of EPI <br><b> 100mg </b><br><i>Once A Day</i> </li>
          	<li>Push one of EPI <br><b> 100mg </b><br><i>Once A Day</i></li>
          	<li>Push one of EPI <br><b> 100mg </b><br><i>Once A Day</i></li>
          </p>
          <p class="doctorName">
          	Prescribed by: NAME
          </p>
        </div>
      </div>
      <div class="card crdimg w-25 d-inline-block" style="background-image: url(img/PrescriptionCard.png);">
        <div class="card-body cb1">
          <h5 class="card-title">Prescription <br> DATE <br> NAME</h5>
          <p class="list">
          	<li>Push one of EPI <br><b> 100mg </b><br><i>Once A Day</i> </li>
          	<li>Push one of EPI <br><b> 100mg </b><br><i>Once A Day</i></li>
          	<li>Push one of EPI <br><b> 100mg </b><br><i>Once A Day</i></li>
          </p>
          <p class="doctorName">
          	Prescribed by: NAME
          </p>
        </div>
      </div>
      <div class="card crdimg w-25 d-inline-block" style="background-image: url(img/PrescriptionCard.png);">
        <div class="card-body cb1">
          <h5 class="card-title">Prescription <br> DATE <br> NAME</h5>
          <p class="list">
          	<li>Push one of EPI <br><b> 100mg </b><br><i>Once A Day</i> </li>
          	<li>Push one of EPI <br><b> 100mg </b><br><i>Once A Day</i></li>
          	<li>Push one of EPI <br><b> 100mg </b><br><i>Once A Day</i></li>
          </p>
          <p class="doctorName">
          	Prescribed by: NAME
          </p>
        </div>
      </div>
       <div class="card-deck text-light mt-5 wow animate__animated animate__bounceIn" align="center">
      <div class="card crdimg4 crdimg w-25 d-inline-block" style="background-image: url(img/PrescriptionCard.png);">
        <div class="card-body cb1">
          <h5 class="card-title">Prescription <br> DATE <br> NAME</h5>
          <p class="list">
          	<li>Push one of EPI <br><b> 100mg </b><br><i>Once A Day</i> </li>
          	<li>Push one of EPI <br><b> 100mg </b><br><i>Once A Day</i></li>
          	<li>Push one of EPI <br><b> 100mg </b><br><i>Once A Day</i></li>
          </p>
           <p class="doctorName">
          	Prescribed by: NAME
          </p>
        </div>
      </div>
     <div class="card crdimg w-25 d-inline-block" style="background-image: url(img/PrescriptionCard.png);">
        <div class="card-body cb1">
          <h5 class="card-title">Prescription <br> DATE <br> NAME</h5>
          <p class="list">
          	<li>Push one of EPI <br><b> 100mg </b><br><i>Once A Day</i> </li>
          	<li>Push one of EPI <br><b> 100mg </b><br><i>Once A Day</i></li>
          	<li>Push one of EPI <br><b> 100mg </b><br><i>Once A Day</i></li>
          </p>
          <p class="doctorName">
          	Prescribed by: NAME
          </p>
        </div>
      </div>
      <div class="card crdimg w-25 d-inline-block" style="background-image: url(img/PrescriptionCard.png);">
        <div class="card-body cb1">
          <h5 class="card-title">Prescription <br> DATE <br> NAME</h5>
          <p class="list">
          	<li>Push one of EPI <br><b> 100mg </b><br><i>Once A Day</i> </li>
          	<li>Push one of EPI <br><b> 100mg </b><br><i>Once A Day</i></li>
          	<li>Push one of EPI <br><b> 100mg </b><br><i>Once A Day</i></li>
          </p>
          <p class="doctorName">
          	Prescribed by: NAME
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
    -->