<link rel="stylesheet" type="text/css" href="dashboard-files/dashboardCSS/search.css">

<!--Getting doctors from databsae-->
<?php

  session_start();
  $doctors = [];

  //1. Setup Database connection
  $servername = "localhost";
  $db_username = "root"; //xampp default
  $db_password = "";  //xampp default
  $database = "medicaide";

  $conn = mysqli_connect($servername, $db_username, $db_password, $database);

  //2. SQL Statements
  $selectDoctors = "SELECT * FROM `doctor`";

  //3. Execute SQL
  $doctorResult = mysqli_query($conn, $selectDoctors);
  while ($doctorsRow = mysqli_fetch_assoc($doctorResult)) {
    array_push($doctors, $doctorsRow);
  }

?>


<!--search button------------->
<div id="PatientSearch">
	
	<div class="BookingHeader">
		<h1>Book an Appointment</h1> 
		<p>Search for your desired nearby Doctor. These are certified Doctors for your ailment. <br> Check their availability details and book an appointment. Your schedule will be updated in you calendar as well.</p> 
	</div>
	
	
	
	

  <!--Google Maps----------------------------->
<div class="map-wrapper">

  <iframe class="googlemap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7724.218866917946!2d121.0139724976897!3d14.535732494615596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c93a386baf7f%3A0xba1f27fb436114e3!2sMagallanes%2C%20Makati%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1622886943473!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  
<div class="searchBar">
    <div class="input-group ">
        <input type="search" class="form-control rounded" placeholder="Search for nearby Doctors" aria-label="Search"
         aria-describedby="search-addon" />
       <button type="button" class="btn btn-outline-primary search-btn"><i class="fas fa-search fa-2x"></i></button>
    </div>
  </div>

<div id="text-above-cards" class="nearestDoc d-block" align="left"> 
    <p>Recommended Nearest Doctor</p>
  </div>

  <br><br><br><br>

<!--Cards-->
<div class="row mx-5">
  <div class="col-sm-3">
    <div class="card">
      <img class="card-img-top" src="img/DocCardImg.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Name of Doctor</h5>
        <p class="card-text">Medical Specialist: Cardiologist <br> Hospital: St. Lukes Medical Center</p>
        <p class="card-text"><small class="text-muted"><button type="button" class="btn btn-outline-primary bookNow" data-toggle="modal" data-target="#myModal">Book Now</button></small></p>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <img class="card-img-top" src="img/DocCardImg.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Name of Doctor</h5>
        <p class="card-text">Medical Specialist: Cardiologist <br> Hospital: St. Lukes Medical Center</p>
        <p class="card-text"><small class="text-muted"><button type="button" class="btn btn-outline-primary bookNow" data-toggle="modal" data-target="#modalForm">Book Now</button></small></p>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <img class="card-img-top" src="img/DocCardImg.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Name of Doctor</h5>
        <p class="card-text">Medical Specialist: Cardiologist <br> Hospital: St. Lukes Medical Center</p>
        <p class="card-text"><small class="text-muted"><button type="button" class="btn btn-outline-primary bookNow" data-toggle="modal" data-target="#myModal">Book Now</button></small></p>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <img class="card-img-top" src="img/DocCardImg.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Name of Doctor</h5>
        <p class="card-text">Medical Specialist: Cardiologist <br> Hospital: St. Lukes Medical Center</p>
        <p class="card-text"><small class="text-muted"><button type="button" class="btn btn-outline-primary bookNow" data-toggle="modal" data-target="#myModal">Book Now</button></small></p>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <img class="card-img-top" src="img/DocCardImg.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Name of Doctor</h5>
        <p class="card-text">Medical Specialist: Cardiologist <br> Hospital: St. Lukes Medical Center</p>
        <p class="card-text"><small class="text-muted"><button type="button" class="btn btn-outline-primary bookNow" data-toggle="modal" data-target="#myModal">Book Now</button></small></p>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <img class="card-img-top" src="img/DocCardImg.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Name of Doctor</h5>
        <p class="card-text">Medical Specialist: Cardiologist <br> Hospital: St. Lukes Medical Center</p>
        <p class="card-text"><small class="text-muted"><button type="button" class="btn btn-outline-primary bookNow" data-toggle="modal" data-target="#myModal">Book Now</button></small></p>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <img class="card-img-top" src="img/DocCardImg.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Name of Doctor</h5>
        <p class="card-text">Medical Specialist: Cardiologist <br> Hospital: St. Lukes Medical Center</p>
        <p class="card-text"><small class="text-muted"><button type="button" class="btn btn-outline-primary bookNow" data-toggle="modal" data-target="#myModal">Book Now</button></small></p>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <img class="card-img-top" src="img/DocCardImg.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Name of Doctor</h5>
        <p class="card-text">Medical Specialist: Cardiologist <br> Hospital: St. Lukes Medical Center</p>
        <p class="card-text"><small class="text-muted"><button type="button" class="btn btn-outline-primary bookNow" data-toggle="modal" data-target="#myModal">Book Now</button></small></p>
      </div>
    </div>
  </div>
</div>

      <!-- The Modal Schedule-->
<div class="modal" id="myModal" >
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
        <button type="button" class="btn btn-outline-danger PatientBooking" data-dismiss="modal">Book an Appointment</button>
      </div>

    </div>
  </div>
</div>

<!-- The Modal Form------------------>

   <div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Appointment Schedule</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5 modalDateForm">
           Pick a date:
           <input type="date" class="form-control pickDate" required>
        </div>

        <div class="md-form mb-4 modalTimeForm">
            Pick a time:<br>
            <input type="time" name="time" value="22:00" />
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="button" class="btn btn-primary SetAppoint">Set Appointment Schedule</button>
      </div>
    </div>
  </div>
</div>







<br><br><br>

<!--pagination------------------>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>


</div>
</div>


