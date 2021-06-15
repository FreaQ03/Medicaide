<?php
	session_start();

	$userID = $_SESSION['userID'];

	//For the ID Photo
	if(isset($_FILES['idPhoto-0'])){
		//parse uploaded file
		$idPhoto = $_FILES['idPhoto-0'];

		$idPath = "../verifyID/doctor/" . $userID;

		//Creates new directory for User ID if directory is not created
		if (!is_dir($idPath)){
			mkdir($idPath);
		}

		//Moves the file to the directory
		move_uploaded_file($idPhoto['tmp_name'], $idPath . "/" . $idPhoto['name']);

		echo "verifyID/doctor/" . $userID . "/" . $idPhoto['name'];
	}

	//For the Profile Picture
	if(isset($_FILES['profilePic-0'])){

		//parse uploaded file
		$profilePicture = $_FILES['profilePic-0'];

		//1. save the file name in the database
		//2. upload / move the uploaded file into a specific folder

		//1. Setup database connection
	  	require 'connection.php';

		//2. Insert SQL
		$sql = "UPDATE `doctor` SET `profile_pic` = 'user-files/doctor/profile-pic/" . $userID . "/" . $profilePicture['name'] . "' WHERE `id` = " . $userID; 

		//3. Execute SQL
		if (mysqli_query($conn, $sql)) {

			$profilePicPath = "../user-files/doctor/profile-pic/" . $userID;

			//Creates new directory for User ID if directory is not created
			if (!is_dir($profilePicPath)){
				mkdir($profilePicPath);
			}

			move_uploaded_file($profilePicture['tmp_name'], $profilePicPath . '/' . $profilePicture['name']);

			echo 'user-files/doctor/profile-pic/' . $userID . '/' . $profilePicture['name'];

		} 

		else {
			echo mysqli_error($conn);
		}

		//.4 Closing Database Connection
		mysqli_close($conn);
	}
	
?>