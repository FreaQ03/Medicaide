<?php
	session_start();

	//Set variables
	$formData = $_POST['journalData'];
	$patientID = $_SESSION['userID'];
	$date = date("Y-m-d");

	//1. Setup database connection
  	require 'connection.php';

	//I. Find Journal ID of Patient

	//1.1 Select SQL
	$journalID_Query = "SELECT * FROM `journal` WHERE `pat_id`=" . $patientID; 
	
	//1.2 Execute SQL
	$result = mysqli_query($conn, $journalID_Query);
	$row = mysqli_fetch_assoc($result);

	//1.3 Set journal ID
	$journalID = $row["id"];

	//II. Inserting data to database

	//2.1 SELECT SQL
	$sql = 'INSERT INTO `journal_entries` (`pat_id`, `journal_id`, `data`, `createdOn`) VALUES (' . $patientID . ', ' . $journalID . ', "' . $formData . '", "' . $date . '")';

	//3. Execute SQL
	if(mysqli_query($conn, $sql)) {
		header('Location: ../dashboard.php');
	}

	else {
		echo mysqli_error($conn);
	}

	//4. Closing Database Connection
  	mysqli_close($conn);

?>