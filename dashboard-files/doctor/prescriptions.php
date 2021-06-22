<link rel="stylesheet" type="text/css" href="dashboard-files/doctor/css/prescription.css">

<?php

	session_start();
  $limit = 8; //limits number of queries per page
  $start = ($_SESSION['page'] - 1) * $limit;

  $previous = $_SESSION['page'] - 1; //variable for previous button
  $next = $_SESSION['page'] + 1; //variable for next button

  $patients = [];
  $patientCount = [];

  //1. Setup database connection
  require '../../functions/connection.php';

  //2. SQL Statements
  $selectPatients = "SELECT DISTINCT patient.`fname`, patient.`lname`, patient.`profile_pic`, patient.`sex`, patient.`id`, patient_contact.`address` FROM `patient` 
  INNER JOIN `appointment` ON appointment.`pat_id` = patient.`id` 
  INNER JOIN `doctor` ON appointment.`doc_id` = doctor.`id`
  INNER JOIN `patient_contact` on patient.`id` = patient_contact.`pat_id`
  WHERE appointment.`doc_id` = " . $_SESSION['userID'] . " LIMIT " . $start . ", " . $limit;

  //3. Execute SQL
  $patientResult = mysqli_query($conn, $selectPatients);
  while ($patientRow = mysqli_fetch_assoc($patientResult)) {
    array_push($patients, $patientRow);
  }

  $total = count($patients); //Sets number of patients from database

  $pages = ceil( $total / $limit ); //Sets how many pages should be created. Automatically rounds up decimal values.

  //4. Closing Database Connection
  mysqli_close($conn);

?>

<div id="PatientSearch">
	
	<div class="Heading_patient">
		<h1>Send a Prescription</h1> 
		<p>Choose from your patients and create a prescription for them.</p> 
	</div>

<?php

	if($total > 0){
		echo '<div class="row mx-5 mb-5">'; //opening row div

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
									    	Sex: "' . $patients[$index]["sex"] . '"<br><br>
									    	Address: <br>"' . $patients[$index]["address"] . '"<br>
									    </p>
									    <button id ="showForm" class="btn btn-outline-primary Prescription" type="submit" value="' . $patients[$index]["id"] . '">Create a Prescription</button>
									</div>
							</div>
						</div>
				';

			}

		echo '</div>'; //closing div
	}

	else{
		echo '<h2 class="text-center heading_patient mt-5">You have no patients.</h2>';
	}

?>


	<div class="presWrapper container-fluid mb-3 pb-0">
		<!--Content will be printed here when user pressses the button-->
	</div>

	<br><br><br>

<!--pagination-->
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item <?php if($_SESSION['page']==1){echo 'disabled';} ?>" >
    	<a class="page-link" href="dashboard.php?page=<?php echo $previous; ?>">Previous</a>
    </li>
    <?php
      for($i = 1; $i <= $pages; $i++){
        echo '<li class="page-item"><a class="page-link" href="dashboard.php?page=' . $i . '">' . $i . '</a></li>';
      }
    ?>
    <li class="page-item <?php if($_SESSION['page']==$pages){echo 'disabled';} ?>">
    	<a class="page-link" href="dashboard.php?page=<?php echo $next; ?>">Next</a>
    </li>
  </ul>
</nav>
	
</div>