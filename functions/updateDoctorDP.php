<?php
	session_start();

	$userID = $_SESSION['userID'];

	//parse uploaded file
	$profilePicture = $_FILES['profile-pic'];

	//1. save the file name in the database
	//2. upload / move the uploaded file into a specific folder

	//1. Setup Database connection
	$servername = "localhost";
	$db_username = "root"; //xampp default
	$db_password = "";  //xampp default
	$database = "medicaide";

	$conn = mysqli_connect($servername, $db_username, $db_password, $database);

	//2. Insert SQL
	$sql = "UPDATE `doctor` SET `profile_pic` = 'user-files/doctor/profile-pic/" . $profilePicture['name'] . "' WHERE `id` = " . $userID; 

	//3. Execute SQL
	if (mysqli_query($conn, $sql)) {
		move_uploaded_file($profilePicture['tmp_name'], '../user-files/doctor/profile-pic/' . $profilePicture['name']);
		header('Location: ../dashboard.php');

	} 

	else {
		echo mysqli_error($conn);
	}

	//.4 Closing Database Connection
	mysqli_close($conn);

?>