<?php
	session_start();
	
	//Insert variables
	$hospital = $_POST['doctorHosp'];
	$specialization = $_POST['doctorSpec'];
	$docId = $_SESSION['userID'];

	//Make whole string uppercase
	$hospital = strtoupper($hospital);
	$specialization = strtoupper($specialization);

	//1. Setup database connection
  require 'connection.php';

	//I. Edit or insert hospital if input is not empty
	if(!empty($hospital)){
		$hospital_database = [];

		//Select SQL
		$sql = "
	    SELECT 
	      * 
	    FROM 
	      `doctor_hospitals` 
	    WHERE 
	      `doc_id`=".$docId;

	  //Execute Select Query
		$result = mysqli_query($conn, $sql);
		while ($row = mysqli_fetch_assoc($result)) {
		array_push($hospital_database, $row);
		}

		if($hospital_database[0]["hospital"] != $hospital) {

			//code to execute when initial hospital is not equal with database file

			//Update SQL
			$updateHospital = 'UPDATE `doctor_hospitals` SET 
			`hospital`="' . $hospital . '" 
			WHERE `id`='.$hospital_database[0]["id"];

			if(mysqli_query($conn, $updateHospital)){
				header('Location:../dashboardDoctors.php');
			}

			else {
				echo mysqli_error($conn);
			}
		}

		else {
			//code to execute when initial hospital is equal with database file
			header('Location:../dashboardDoctors.php');
		}
	}

	else{
		header('Location:../dashboardDoctors.php');
	}
	

	//II. Edit or insert specialization if input is not empty
	if(!empty($specialization)){

		$specializationDatabase = [];

		//Select SQL
		$selectSpecialization = "SELECT * FROM `doctor` WHERE `id` = " . $docId;

		$result = mysqli_query($conn, $selectSpecialization);
    while ($row = mysqli_fetch_assoc($result)) {
      array_push($specializationDatabase, $row);
    }

    if($specializationDatabase != $specialization){
    	//Code to execute when initial specialization is not equal with database file
    	echo 'Not the same!';

    	//Update SQL
			$updateSpecialization = 'UPDATE `doctor` SET 
			`specialization` = ' . $specialization . ' 
			WHERE `id` = ' . $specializationDatabase[0]["id"];

			if(mysqli_query($conn, $updateSpecialization)){
				header('Location:../dashboardDoctors.php');
			}

			else {
				echo mysqli_error($conn);
			}
		}

		else{
    	//Code to execute when initial specialization is equal with database file
    	header('Location:../dashboardDoctors.php');
    }
  }

	//Closing Database Connection
  	mysqli_close($conn);
?>