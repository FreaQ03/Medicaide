<?php
	$appointmentID = $_POST['appointment_ID'];

	//1. Setup database connection
	require 'connection.php';

	//2. Update SQL
	$sql = "UPDATE `appointment` SET `active`= 0  WHERE `id` = " . $appointmentID;

	if(mysqli_query($conn, $sql)){
		echo 'Successfully declined request';
	}
	else{
		echo mysqli_error();
	}

	//.4 Closing Database Connection
	mysqli_close($conn);
?>