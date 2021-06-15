<?php

	session_start();

	$birthday = $_POST['birthday'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$phone = $_POST['phone_number'];
	$address = $_POST['Address'];

	$userID = $_SESSION['userID'];

	//1. Setup Database Connection
	require 'connection.php';

	//I. Update patient information
	//2. Insert SQL
	$sql = "UPDATE `patient` SET 
	`fname` = '" . $first_name . "',
	`lname` = '" . $last_name . "', 
	`profile_pic` = NULL,
	`birthday`= '" . $birthday . "' 
	WHERE `id` = " . $userID;

	if (mysqli_query($conn, $sql)){
		header('Location: ../dashboard.php?verifySent=1');
	}
	else {
		echo mysqli_error($conn);
	}


	//II. Update patient address
	$insertDetails = "INSERT INTO `patient_contact`( 
	`pat_id`, 
	`phone`, 
	`address`
	) VALUES (
	" . $userID . ",
	'" . $phone . "',
	'" . $address . "'
	)";

	if (mysqli_query($conn, $insertDetails)){
		header('Location: ../dashboard.php?verifySent=1');
	}
	else {
		echo mysqli_error($conn);
	}

	//Closing Database Connection
	mysqli_close($conn);
?>