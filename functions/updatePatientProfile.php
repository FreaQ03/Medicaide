<?php
	session_start();
	
	//Insert variables
	$address = $_POST['patAddress'];
	$phone = $_POST['patPhone'];
	$patId = $_SESSION['userID'];

	//1. Setup database connection
  require 'connection.php';

	//I. Edit address if input is not empty
	if(!empty($address)){

		$updateAddress = "UPDATE `patient_contact` SET `address` = '" . $address . "' WHERE `pat_id` = " . $patId;

		if(mysqli_query($conn, $updateAddress)){
			header('Location:../dashboard.php');
		}

		else {
			echo mysqli_error($conn);
		}
	}


	//II. Edit phone number if input is not empty
	if(!empty($phone)){
		
		$updatePhone = "UPDATE `patient_contact` SET `phone` = '" . $phone . "' WHERE `pat_id` = " . $patId;

		if(mysqli_query($conn, $updatePhone)){
			header('Location:../dashboard.php');
		}

		else {
			echo mysqli_error($conn);
		}
  }


  else{
		header('Location:../dashboard.php');
	}

	//Closing Database Connection
  	mysqli_close($conn);
?>