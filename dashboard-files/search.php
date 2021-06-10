<link rel="stylesheet" type="text/css" href="dashboard-files/dashboardCSS/search.css">

<!--Getting doctors from databsae-->
<?php

  session_start();
  $limit = 8; //limits number of queries per page
  $start = ($_SESSION['page'] - 1) * $limit;

  $previous = $_SESSION['page'] - 1; //variable for previous button
  $next = $_SESSION['page'] + 1; //variable for next button

  $doctors = [];
  $doctorCount = [];

  //1. Setup Database connection
  $servername = "localhost";
  $db_username = "root"; //xampp default
  $db_password = "";  //xampp default
  $database = "medicaide";

  $conn = mysqli_connect($servername, $db_username, $db_password, $database);

  //2. SQL Statements
  $selectDoctors = "SELECT * FROM `doctor` LIMIT " . $start . ", " . $limit;

  $checkCount = "SELECT count(`id`) AS `id` FROM `doctor`"; //selects only the count of doctors in database

  //3. Execute SQL
  $doctorResult = mysqli_query($conn, $selectDoctors);
  while ($doctorsRow = mysqli_fetch_assoc($doctorResult)) {
    array_push($doctors, $doctorsRow);
  }

  $countResult = mysqli_query($conn, $checkCount);
  while ($countRow = mysqli_fetch_assoc($countResult)) {
    array_push($doctorCount, $countRow);
  }

  $total = $doctorCount[0]['id']; //Sets total number of doctors in database

  $pages = ceil( $total / $limit ); //Sets how many pages should be created. Automatically rounds up decimal values.

  //4. Closing Database Connection
  mysqli_close($conn);

?>


<!--search button-->
<div class="container-fluid" id="PatientSearch">
	
	<div class="BookingHeader">
		<h1>Book an Appointment</h1> 
		<p>Search for your desired nearby Doctor. These are certified Doctors for your ailment. <br> Check their availability details and book an appointment. Your schedule will be updated in you calendar as well.</p> 
	</div>
	

<!--Google Maps-->
<div class="map-wrapper">

  <iframe class="googlemap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7724.218866917946!2d121.0139724976897!3d14.535732494615596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c93a386baf7f%3A0xba1f27fb436114e3!2sMagallanes%2C%20Makati%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1622886943473!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  
<div class="searchBar">
  <div class="input-group ">
      <input type="text" id="doctorSearch" class="form-control rounded" placeholder="Search for nearby Doctors" aria-label="Search" aria-describedby="search-addon" />
     <button type="button" class="btn btn-outline-primary search-btn"><i class="fas fa-search fa-2x"></i></button>
  </div>
</div>

<div id="text-above-cards" class="nearestDoc d-block" align="left"> 
    <p>Recommended Nearest Doctor</p>
  </div>

  <br><br><br><br>

<!--Cards-->
<div class="row mx-5" id="doctorList">
  
    <?php
    for ($index = 0; $index < count($doctors); $index++) {

      $conn = mysqli_connect($servername, $db_username, $db_password, $database);


      //I. Setting profile picture directory
      $pictureDirectory = "icons/img_placeholder.png";

      if(!empty($doctors[$index]["profile_pic"])){
        $pictureDirectory = $doctors[$index]["profile_pic"];
      }


      //II. Setting specialization
      $specialization = $doctors[$index]["specialization"];
      $specValue = [];

      //SQL to compare specialization ID from the database
      $compareSpecialization = "SELECT * FROM `specialization` WHERE `id` = " . $specialization;

      //3. Execute SQL
      $specResult = mysqli_query($conn, $compareSpecialization);
      while ($specRow = mysqli_fetch_assoc($specResult)) {
        array_push($specValue, $specRow);
      }

      //4. Closing Database Connection
      mysqli_close($conn);

      echo '
        <div class="col-sm-3">
          <div class="card mb-4">
            <img class="card-img-top" src="'. $pictureDirectory . '" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">' . $doctors[$index]["fname"] .' ' . $doctors[$index]["lname"] . '</h5>
              <p class="card-text">Medical Specialist: <br> ' . $specValue[0]["value"] . ' <br><br> Hospitals: <br> St. Lukes Medical Center</p>
              <p class="card-text"><small class="text-muted"><button type="button" class="btn btn-outline-primary bookNow" data-toggle="modal" data-target="#myModal' . $index . '">Book Now</button></small></p>
            </div>
          </div>
        </div>

        <!-- Modal Schedule -->
        <div class="modal fade" id="myModal' . $index . '" >
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Doctor Schedule</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                  <table class="table table-striped">
            <thead>
              <tr>
                <th>Time</th>
                <th>Date</th>
                <th>Contact</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>8:00am-1:00pm</td>
                <td>Monday</td>
                <td><i>john@example.com</i></td>
              </tr>
              <tr>
                <td>8:00am-1:00pm</td>
                <td>Tueday</td>
                <td><i>091919191919</i></td>
              </tr>
              <tr>
                <td>8:00am-1:00pm</td>
                <td>Wedneday</td>
                <td></td>
              </tr>
            </tbody>
          </table>
          </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger PatientBooking" data-toggle="modal" data-target="#modalForm' . $index . '" data-dismiss="modal">Book an Appointment</button>
              </div>

            </div>
          </div>
        </div>

        <!-- Modal Form -->

        <div class="modal fade" id="modalForm' . $index . '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Appointment Schedule</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="functions/createAppointment.php" method="post">
              <div class="modal-body mx-3">
                  <div class="md-form mb-5 modalDateForm">
                     Pick a date:
                     <input type="date" name="appointDate"class="form-control pickDate" required>
                  </div>

                  <div class="md-form mb-4 modalTimeForm">
                      Pick a time:<br>
                      <input type="time" name="time" value="09:00" step="1800" />
                      <input type="hidden" name="docID" value="' . $doctors[$index]["id"] . '" />
                  </div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                  <input type="submit" class="btn btn-primary SetAppoint" value="Set appointment schedule">
                </div>
              </form>
            </div>
          </div>
        </div>
      ';
    }

    ?>  
</div>












<br><br><br>

<!--pagination-->
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item <?php if($_SESSION['page']==1){echo 'disabled';} ?>">
      <a class="page-link" href="dashboard.php?page=<?php echo $previous; ?>" tabindex="-1">Previous</a>
    </li>
    <?php
      for($i = 1; $i <= $pages; $i++){
        echo '<li class="page-item"><a class="page-link" href="dashboard.php?page=' . $i . '">' . $i . '</a></li>';
      }
    ?>
    <li class="page-item <?php if($_SESSION['page']==$pages){echo 'disabled';} ?>">
      <a class="page-link" href="dashboard.php?page=<?php echo $next; ?>">Next</a>
    </li>
  </ul>
</nav>


</div>
</div>


