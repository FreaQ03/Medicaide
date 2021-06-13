<?php

	session_start();

	$medicine = $_POST['medicine'];
	$frequency = $_POST['frequency'];
	$route = $_POST['route'];
	$patientID = $_POST['patientID'];
	$otherNotes = $_POST['otherNotes'];
	$todayDate = date_default_timezone_set('Asia/Manila'); 

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
	  	`length`
	  ) VALUES (
	  " . $patientID . ",
	  " . $_SESSION['userID'] . ",
	  " . $todayDate . ",
	  " . $medicine . ",
	  " . $route . ",
	  " . $frequency . ",
	  " . $otherNotes . ",
	  [value-8]
	)";

?>