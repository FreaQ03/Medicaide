<doctype html>
	<head>
		<!-- Add the evo-calendar.css for styling -->
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/evo-calendar@1.1.2/evo-calendar/css/evo-calendar.min.css"/>

		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/evo-calendar@1.1.3/evo-calendar/css/evo-calendar.royal-navy.min.css"/>
		
		
	</head>

	<body>
		<div id="calendar"></div>
		


		<!-- Add jQuery library (required) -->
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>

		<!-- Add the evo-calendar.js for.. obviously, functionality! -->
		<script src="https://cdn.jsdelivr.net/npm/evo-calendar@1.1.2/evo-calendar/js/evo-calendar.min.js"></script>

		<script>
			$("#calendar").evoCalendar({
		  	theme: 'Royal Navy',

			  	calendarEvents: [
			      {
			        id: 'bHay68s', // Event's ID (required)
			        name: "New Year", // Event name (required)
			        date: "January/1/2020", // Event date (required)
			        type: "holiday", // Event type (required)
			        everyYear: true // Same event every year (optional)
			      },
			      {
			        name: "Vacation Leave",
			        badge: "02/13 - 02/15", // Event badge (optional)
			        date: ["February/13/2020", "February/15/2020"], // Date range
			        description: "Vacation leave for 3 days.", // Event description (optional)
			        type: "event",
			        color: "#63d867" // Event custom color (optional)
			      }
			    ],

			    todayHighlight: true,
			});
		</script>

		<?php

			session_start();
			$userID = $_SESSION['userID'];

			//II. Find accepted appointment requests from database
  			$accepted = [];
  			$prescriptions = [];

  			//1. Setup database connection
  			require '../../functions/connection.php';

  			if($_SESSION['userType'] == 'patient'){
  				//Select SQL
				$selectAccepted = "
				SELECT 
				  	appointment.`id`, appointment.`doc_id`, appointment.`appoint_date`, appointment.`appoint_time`, doctor.`fname`, doctor.`lname`
				FROM 
				  	`appointment` 
				INNER JOIN `doctor` ON appointment.`doc_id` = doctor.`id`
				WHERE 
					`pat_id` = " . $userID . "
					AND
					`accepted` = 1
				";

				//Select Prescriptions
				$selectPrescriptions = "SELECT prescription.`issuedOn`, prescription.`data`, prescription.`repeatUntil`, doctor.`fname`, doctor.`lname` 
				FROM `prescription` 
				INNER JOIN `doctor` ON prescription.`doc_id` = doctor.`id`
				WHERE `pat_id`=" . $userID;

				//3. Execute SQL
				$result = mysqli_query($conn, $selectPrescriptions);
				while ($row = mysqli_fetch_assoc($result)) {
				array_push($prescriptions, $row);
				}
  			}

  			elseif($_SESSION['userType'] == 'doctor'){
  				//Select SQL
				$selectAccepted = "
				SELECT 
				  	appointment.`id`, appointment.`doc_id`, appointment.`appoint_date`, appointment.`appoint_time`, doctor.`fname`, doctor.`lname`
				FROM 
				  	`appointment` 
				INNER JOIN `doctor` ON appointment.`doc_id` = doctor.`id`
				WHERE 
					`pat_id` = " . $userID . "
					AND
					`accepted` = 1
				";
  			}

		  	//3. Execute SQL
			$acceptResult = mysqli_query($conn, $selectAccepted);
			while ($acceptRow = mysqli_fetch_assoc($acceptResult)) {
			array_push($accepted, $acceptRow);
			}

			//Opening script tag
			echo '<script>';

			if(count($accepted) > 0){
				

				for($i = 0; $i < count($accepted); $i++){

					echo '

					  	$("#calendar").evoCalendar("addCalendarEvent", [
							{
							  id: "Appointment' . $i . '",
							  name: "Dr. ' . $accepted[$i]["fname"] . ' ' . $accepted[$i]["lname"] . '",
							  date: "' . $accepted[$i]["appoint_date"] . '",
							  type: "event",
							  color: "#28a745",
							  everyYear: false
							}
						]);


					';
				}

			}

			if(count($prescriptions) > 0){
			
				for($i = 0; $i < count($prescriptions); $i++){	
					echo '

					  	$("#calendar").evoCalendar("addCalendarEvent", [
							{
							  id: "MedStart' . $i . '",
							  name: "Start of Medication",
							  date: "' . $prescriptions[$i]["issuedOn"] . '",
							  description: "' . $prescriptions[$i]["data"] . ' - Dr. ' . $prescriptions[$i]["fname"] . ' ' . $prescriptions[$i]["lname"] . '",
							  type: "event",
							  color: "#A4292E",
							  everyYear: false
							},
							{
							  id: "MedEnd' . $i . '",
							  name: "End of Medication",
							  date: "' . $prescriptions[$i]["repeatUntil"] . '",
							  description: "' . $prescriptions[$i]["data"] . ' - Dr. ' . $prescriptions[$i]["fname"] . ' ' . $prescriptions[$i]["lname"] . '",
							  type: "event",
							  color: "#A4292E",
							  everyYear: false
							},
						]);

					';
				}
			}

			//Closing script tag
			echo '</script>';

		?>

	</body>
</html>