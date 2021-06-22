<?php
	session_start();
	$doctors = [];

	$limit = 8; //limits number of queries per page
	$start = ($_SESSION['page'] - 1) * $limit;

	//1. Setup database connection
  	require 'connection.php';

	if(isset($_POST['query'])){
		$search = $_POST['query'];

		$sql = "SELECT doctor.`id`, doctor.`fname`, doctor.`lname`, doctor.`specialization`, doctor.`profile_pic`, doctor_hospitals.`hospital`, doctor_hospitals.`location` 
		FROM `doctor` 
		INNER JOIN `doctor_hospitals` ON doctor_hospitals.`doc_id` = doctor.`id`
		WHERE doctor.`verified` = 1 
		AND (doctor.`fname` LIKE '%" . $search . "%' 
		OR doctor.`lname` LIKE '%" . $search . "%'
		OR doctor_hospitals.`hospital` LIKE '%" . $search . "%'
		OR doctor_hospitals.`location` LIKE '%" . $search . "%') 
		LIMIT " . $start . ", " . $limit;
		
	}
	else{
		$sql = "SELECT doctor.`id`, doctor.`fname`, doctor.`lname`, doctor.`specialization`, doctor.`profile_pic`, doctor_hospitals.`hospital`, doctor_hospitals.`location` 
		FROM `doctor` 
		INNER JOIN `doctor_hospitals` ON doctor_hospitals.`doc_id` = doctor.`id`
		WHERE `verified` = 1 
		LIMIT " . $start . ", " . $limit;
	}

	$doctorResult = mysqli_query($conn, $sql);
	while ($doctorsRow = mysqli_fetch_assoc($doctorResult)) {
	array_push($doctors, $doctorsRow);
	}
	
	$rowcount = mysqli_num_rows($doctorResult);

	if($rowcount > 0){
		for ($index = 0; $index < count($doctors); $index++) {

			require 'connection.php';

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


			//III. Getting doctor's schedule
			$schedule = [];

			//SQL to get the doctor's schedule
			$getSchedule = "SELECT * FROM `doctor_schedule` WHERE `doc_id` = " . $doctors[$index]["id"] . " ORDER BY `day` ASC";

			//3. Execute SQL
			$schedResult = mysqli_query($conn, $getSchedule);
			while ($schedRow = mysqli_fetch_assoc($schedResult)) {
			array_push($schedule, $schedRow);
			}

			$scheduleData = "";

			//Set schedule data
			for($i = 0; $i < count($schedule); $i++){

			//Convert numbered day in database to word
			$days = [
			  0 => 'Sunday',
			  1 => 'Monday',
			  2 => 'Tuesday',
			  3 => 'Wednesday',
			  4 => 'Thursday',
			  5 => 'Friday',
			  6 => 'Saturday'
			];

			$scheduleData = $scheduleData . 
			'<tr>
			  <td>' . $days[$schedule[$i]["day"]] . '</td>
			  <td>' . $schedule[$i]["start_time"] . ' - ' . $schedule[$i]["end_time"] . '</td>
			</tr>
			';
			}

			//4. Closing Database Connection
			mysqli_close($conn);

			echo '
			<div class="col-sm-3">
			  <div class="card mb-4">
			    <img class="card-img-top" src="'. $pictureDirectory . '" alt="Card image cap">
			    <div class="card-body">
			      <h5 class="card-title">' . $doctors[$index]["fname"] .' ' . $doctors[$index]["lname"] . '</h5>
			      <p class="card-text">Medical Specialist: 
			      <br> 
			      ' . $specValue[0]["value"] . ' 
			      <br><br> Hospitals: 
			      <br> ' . $doctors[$index]["hospital"] . ', ' . $doctors[$index]["location"] . '</p>
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
			        <th>Date</th>
			        <th>Time</th>
			      </tr>
			    </thead>
			    <tbody>
			      ' . $scheduleData . '
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
			             <input type="date" name="appointDate" class="form-control pickDate" required>
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
	}
	
	else{
		echo '<h1>Nothing found!</h1>';
	}
?>