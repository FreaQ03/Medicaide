<?php
	session_start();
	
	//Insert variables
	$hospital = $_POST['doctorHosp'];
	$specialization = $_POST['doctorSpec'];

	//Make whole string uppercase
	$hospital = strtoupper($hospital);
	$specialization = strtoupper($specialization);

	//1. Setup Database connection
	$servername = "localhost";
	$db_username = "root"; //xampp default
	$db_password = "";  //xampp default
	$database = "medicaide";

	$conn = mysqli_connect($servername, $db_username, $db_password, $database);

	

?>