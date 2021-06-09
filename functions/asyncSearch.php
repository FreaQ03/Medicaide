<?php
	session_start();
	$doctors = [];

	$limit = 8; //limits number of queries per page
	$start = ($_SESSION['page'] - 1) * $limit;

	//1. Setup Database connection
	$servername = "localhost";
	$db_username = "root"; //xampp default
	$db_password = "";  //xampp default
	$database = "medicaide";

	$conn = mysqli_connect($servername, $db_username, $db_password, $database);

	$output = '';

	if(isset($_POST['query'])){
		$search = $_POST['query'];

		//2. SQL Statement
		$sql = "SELECT * FROM `doctor` WHERE `fname` LIKE '%" . $search . "%' OR `lname` LIKE '%" . $search . "%'";

	}
	else{
		$sql = "SELECT * FROM `doctor`";
	}

	$doctorResult = mysqli_query($conn, $sql);
	while ($doctorsRow = mysqli_fetch_assoc($doctorResult)) {
	array_push($doctors, $doctorsRow);
	}
	
	$rowcount = mysqli_num_rows($doctorResult);

	if($rowcount > 0){
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
			             <input type="date" class="form-control pickDate" required>
			          </div>

			          <div class="md-form mb-4 modalTimeForm">
			              Pick a time:<br>
			              <input type="time" name="time" value="22:00" />
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
	}
	
	else{
		echo '<h1>Nothing found!</h1>';
	}
?>