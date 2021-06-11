<?php

	$patients = [];

	$limit = 3; //limits number of queries

	//1. Setup database connection
  	require 'connection.php';	

  	if(isset($_POST['query'])) {
  		$search = $_POST['query'];

		//2. SQL Statement
		$sql = "SELECT * FROM `patient` WHERE `id` LIKE '" . $search . "%' LIMIT " . $limit;

		//3. Execute SQL
		$patientResult = mysqli_query($conn, $sql);
		while ($patientsRow = mysqli_fetch_assoc($patientResult)) {
		array_push($patients, $patientsRow);
		}
		
		$rowcount = mysqli_num_rows($patientResult);

		if($rowcount > 0){

			for ($index = 0; $index < count($patients); $index++) {

				//I. Setting profile picture directory
				$pictureDirectory = "icons/img_placeholder.png";

				if(!empty($patients[$index]["profile_pic"])){
				$pictureDirectory = $patients[$index]["profile_pic"];
				}

				echo '
						<div class="col-sm-4">
							<div class="card">
									<img class="card-img-top" src="' . $pictureDirectory . '" alt="Card image cap">
									<div class="card-body">
								        <h5 class="cardTitle">' . $patients[$index]["fname"] . ' ' . $patients[$index]["lname"] . '</h5>
									    <p class="card-text" > 
									    	UserID: "' . $patients[$index]["id"] . '"<br>
									    	Address: "here"<br>
									    </p>
									    <button id ="showForm" class="btn btn-outline-primary Prescription" type="submit" value="' . $patients[$index]["id"] . '">Create a Prescription</button>
									</div>
							</div>
						</div>
				';

			}

		}

  	}

  	else{
  		echo '<h1>Search a patient</h1>';
  	}

  	//Closing Database Connection
	mysqli_close($conn);
?>