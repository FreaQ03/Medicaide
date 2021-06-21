<?php
	session_start();

	$hospital = $_POST['Hospital'];
	$day = $_POST['Day'];
	$start_time = $_POST['start_time'];
	$end_time = $_POST['end_time'];
	$location = $_POST['Location'];
	$docID = $_SESSION['userID'];

	//Check for day duplicates
	$unique = array_unique($day);
	$duplicates = array_diff_assoc($day, $unique);

	//1. Setup database connection
	require 'connection.php';

	if(count($duplicates) == 0){
		foreach($day as $value => $dayCode){

			//I. Check for existing day on user's hospital
			$conflict = [];

			//SQL to check for existing day
			$checkDayConflict = "SELECT doctor_schedule.`day`, doctor_hospitals.`hospital`
			FROM `doctor_schedule` 
			INNER JOIN `doctor_hospitals` ON doctor_schedule.`hospital_id` = doctor_hospitals.`id`
			WHERE doctor_schedule.`doc_id` = " . $docID . " AND doctor_hospitals.`hospital` = '" . $hospital . "' AND 
				doctor_schedule.`day` = " . $dayCode;

			$checkResult = mysqli_query($conn, $checkDayConflict);
		  	while ($row = mysqli_fetch_assoc($checkResult)) {
				array_push($conflict, $row);
			}


			//II. Get hospital ID
			$hospID = [];

			$getHospID = "SELECT * FROM `doctor_hospitals` WHERE `hospital` = '" . $hospital . "' AND `doc_id` = " . $docID;

			$result = mysqli_query($conn, $getHospID);
		  	while ($row = mysqli_fetch_assoc($result)) {
				array_push($hospID, $row);
			}

		 	if(count($conflict) == 0){
		 		//No conflicts in day of hospital

		 		$sql = "INSERT INTO `doctor_schedule`(
		 		`doc_id`, 
		 		`hospital_id`, 
		 		`day`, 
		 		`start_time`, 
		 		`end_time`
		 		) VALUES (
		 		" . $docID . ",
		 		" . $hospID[0]["id"] . ",
		 		" . $dayCode . ",
		 		'" . $start_time[$value] . "',
		 		'" . $end_time[$value] . "'
		 		)";

		 	}
		 	else{
		 		//There is existing schedule in day

		 		$sql = "UPDATE `doctor_schedule` SET 
		 		`start_time`='" . $start_time[$value] . "',
		 		`end_time`='" . $end_time[$value] . "' 
		 		WHERE `doc_id` = " . $docID . " AND 
		 		`hospital_id` = " . $hospID[0]["id"] . " 
		 		AND `day` = " . $dayCode;
		 	}

		 	if(mysqli_query($conn, $sql)){
	 			header('Location: ../dashboard.php?editSuccess=1');
		 	}
		 	else{
		 		echo mysqli_error($conn);
		 	}

	 	}


	 	$updateLocation = "UPDATE `doctor_hospitals` SET `location`= '" . $location . "' WHERE `doc_id` = " . $docID;
	 	
	 	if(mysqli_query($conn, $updateLocation)){
	 		header('Location: ../dashboard.php?editSuccess=1');
	 	}

	 	else{
	 		echo mysqli_error($conn);
	 	}
	} //end if
	else{

		header('Location: ../doc_editSched.php?duplicate=1');
	} //end else
 	

 	//Closing Database Connection
	mysqli_close($conn);

?>