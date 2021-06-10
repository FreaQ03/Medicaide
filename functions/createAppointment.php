<?php
	session_start();

	//Set variables
	$appointDate = $_POST['appointDate'];
	$docID = $_POST['docID'];
	$appointTime = $_POST['time'] . ":00";
	//$appointTime = str_replace(':', '', $appointTime); remove colon from time

	$dayOfWeek = date("w", strtotime($appointDate)); //set day of week to numbers

	//1. Setup database connection
  	require 'connection.php';

	//SQL Statements
	$sql = "SELECT * FROM `doctor_schedule` WHERE 
	`doc_id` = " . $docID . " 
	AND `day` = " . $dayOfWeek . " 
	AND `start_time` <= '" . $appointTime . "' 
	AND `end_time` >= '" . $appointTime . "'";

	//Execute SQL
	$result = mysqli_query($conn, $sql);
 	$count = mysqli_num_rows($result); 

 	if($count > 0){
 
 		//If doctor has schedule on that day

 		$checkConflict = "SELECT * FROM `appointment` 
 		WHERE `appoint_date` = '" . $appointDate . "' 
 		AND TIMEDIFF(`appoint_time`, '" . $appointTime . "') >= '-00:30:00' 
 		AND TIMEDIFF(`appoint_time`, '" . $appointTime . "') <= '00:30:00'";

 		//Execute conflict check
 		$checkResult = mysqli_query($conn, $checkConflict);
 		$conflictCount = mysqli_num_rows($checkResult); 

 		if($conflictCount == 0){

 			//No conflicts in schedules

 			$insertAppointment = "INSERT INTO `appointment`(
	 			`pat_id`, 
	 			`doc_id`, 
	 			`appoint_date`, 
	 			`appoint_time`
	 		) VALUES (
	 			" . $_SESSION['userID'] . ",
	 			" . $docID . ",
	 			'" . $appointDate . "',
	 			'" . $appointTime . "'
	 		)";

	 		if(mysqli_query($conn, $insertAppointment)) {
	 			header('Location: ../dashboard.php?bookSuccess=1');
	 		}
	 		else{
	 			echo mysqli_error($conn);
	 		}
 		}
 		else{
 			//There are conflicting schedules
 			header('Location: ../dashboard.php?docAvail=0');
 		}

 	}
 	else{

 		//If doctor has no schedule that day
 		header('Location: ../dashboard.php?docAvail=0');
 	}

?>