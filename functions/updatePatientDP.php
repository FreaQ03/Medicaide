<?php
	session_start();

	$userID = $_SESSION['userID'];

	//parse uploaded file
	$profilePicture = $_FILES['profile-pic'];

	//1. save the file name in the database
	//2. upload / move the uploaded file into a specific folder

	//1. Setup database connection
  	require 'connection.php';

	//2. Insert SQL
	$sql = "UPDATE `patient` SET `profile_pic` = 'user-files/patient/profile-pic/" . $userID . "/" . $profilePicture['name'] . "' WHERE `id` = " . $userID; 

	//3. Execute SQL
	if (mysqli_query($conn, $sql)) {
		move_uploaded_file($profilePicture['tmp_name'], '../user-files/patient/profile-pic/' . $userID . '/' . $profilePicture['name']);
		header('Location: ../dashboard.php');

	} 

	else {
		echo mysqli_error($conn);
	}

	//.4 Closing Database Connection
	mysqli_close($conn);

?>