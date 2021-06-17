<?php
	$appointmentID = $_POST['appointment_ID'];

	//1. Setup database connection
	require 'connection.php';

	//2. Update SQL
	$sql = "UPDATE `appointment` SET `accepted`= 1  WHERE `id` = " . $appointmentID;

	if(mysqli_query($conn, $sql)){
		echo 'Successfully accepted request';
	}
	else{
		echo mysqli_error();
	}

	//Insert function here to append appointment to calendar

	//.4 Closing Database Connection
	mysqli_close($conn);
?>