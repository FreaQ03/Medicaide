<link rel="stylesheet" type="text/css" href="dashboard-files/dashboardCSS/journal.css">

<?php
	session_start();

	//Date resets everytime user opens journal page
	if(isset($_SESSION['targetDate'])){
		unset($_SESSION['targetDate']);
	}

	$userID = $_SESSION['userID'];
	$userDates = [];

	//1. Setup database connection
	require '../functions/connection.php';

	//2. Select SQL
	//Select dates of journal edit for dropdown
	$selectDate = "SELECT * FROM `journal_entries` WHERE `pat_id` = " . $userID . " ORDER BY `createdOn` DESC";

	//3. Execute Select Query
    $result = mysqli_query($conn, $selectDate);
    while ($row = mysqli_fetch_assoc($result)) {
    array_push($userDates, $row);
    }

    //Automatically include today's journal data
    //If there is an entry on the same day
    if(count($userDates) > 0){
    	if(date("Y-m-d") == $userDates[0]["createdOn"]){
    		$journalData = $userDates[0]["data"];
    	}

	    else{
	    	$journalData = "";
	    }
    }
    

    //Closing Database Connection
    mysqli_close($conn);
?>

<form name="controls" id="controls" action="functions/submitJournal.php" method="post">

	<div id="PatientJournal" class="Journal">
		<div id = "entries">
			<h1>Journal Entries</h1>	          
		</div>
		
			<div class = "journalEntry">

	 			<!--dropdown for days-->
	 			<div class="dropdown">
					<div class="btn-group">
				  		<button type="button" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    		Day of Medication
				  		</button>

						<div class="dropdown-menu">
							<?php 
							if(count($userDates) > 0){
								for($i = 0; $i < count($userDates); $i++){
									echo '<a class="dropdown-item withDate" href="#">' . $userDates[$i]["createdOn"] . '</a>';
								}
							}

							else{
								
								echo'<a class="dropdown-item" href="#">Today</a>';
							}

							?>	
						</div>
					</div>
				</div>
			</div>
			<!--Initial Journal Entry-->
			<div class="journalOutput">

			    <textarea id="output" name="journalData" placeholder="Write your day here..." required><?php if(count($userDates) > 0){echo $journalData;} ?></textarea>
			    <p align="center" class="clearBtn"><input type="reset" value="clear"></p>
			  	
			</div>
	</div>

	<div class="text-center">
	    <button type="submit" class="btn btn-outline-primary submit-btn btn-lg">Submit</button>
	</div>

</form>	
	
	


  

    

