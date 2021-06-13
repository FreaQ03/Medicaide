<?php

	session_start();

	$medicine = $_POST['medicine'];
	$frequency = $_POST['frequency'];
	$route = $_POST['route'];
	$patientID = $_POST['patientID'];
	$otherNotes = $_POST['notes'];
	$dose = $_POST['medAmount'];
	$repeatUntil = $_POST['takeUntil'];
	$todayDate = date('Y/m/d'); 

	//1. Setup database connection
  	require 'connection.php';

  	//2. Insert SQL
  	$sql = "INSERT INTO `prescription` (
	  	`pat_id`, 
	  	`doc_id`, 
	  	`issuedOn`, 
	  	`data`, 
	  	`dose`, 
	  	`route`,
	  	`repeatBy`, 
	  	`notes`, 
	  	`repeatUntil`
	  ) VALUES (
	  " . $patientID . ",
	  " . $_SESSION['userID'] . ",
	  '" . $todayDate . "',
	  '" . $medicine . "',
	  '" . $dose . "',
	  '" . $route . "',
	  '" . $frequency . "',
	  '" . $otherNotes . "',
	  '" . $repeatUntil . "'
	)";

	if(mysqli_query($conn, $sql)) {

		header('Location: ../dashboard.php');
	}
	else {
	    echo mysqli_error($conn);
	    print_r($_REQUEST);
	}
?>