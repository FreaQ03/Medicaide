<?php

	session_start();

	$birthday = $_POST['birthday'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$phone = $_POST['phone_number'];
	$address = $_POST['Address'];
	$hospital = $_POST['Hospital'];
	$location = $_POST['Location'];
	$specialization = $_POST['Specialization'];

	$userID = $_SESSION['userID'];
	$hospital = strtoupper($hospital); //Make hospital uppercase

	//1. Setup Database Connection
	require 'connection.php';

	//I. Update doctor information
	//2. Insert SQL
	$sql = "UPDATE `doctor` SET 
	`fname` = '" . $first_name . "',
	`lname` = '" . $last_name . "', 
	`specialization` = '" . $specialization . "',
	`birthday`= '" . $birthday . "',
	`verified` = 2
	WHERE `id` = " . $userID;


	//II. Update doctor address
	$insertDetails = "INSERT INTO `doctor_contact`( 
	`doc_id`, 
	`phone`, 
	`address`
	) VALUES (
	" . $userID . ",
	'" . $phone . "',
	'" . $address . "'
	)";

	//III. Insert doctor hospital
	$insertHosp = "INSERT INTO `doctor_hospitals`(
	`doc_id`, 
	`hospital`,
	`location`
	) VALUES (
	" . $userID . ",
	'" . $hospital . "',
	'" . $location . "'
	)";

	//Execute SQL
	if (mysqli_query($conn, $sql) && mysqli_query($conn, $insertDetails) && mysqli_query($conn, $insertHosp)){
		header('Location: ../dashboard.php?verifySent=1');
		$_SESSION['verified'] = 2;
	}
	else {
		echo mysqli_error($conn);
	}

	//Closing Database Connection
	mysqli_close($conn);
?>