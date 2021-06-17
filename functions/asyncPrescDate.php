<?php
	session_start();
	$userID = $_SESSION['userID'];
	$date = $_POST['query'];
	$entries = [];

	//1. Setup database connection
	require '../functions/connection.php';

	//2. Select SQL
	//Select dates of journal edit for dropdown
	$selectEntries = "SELECT * FROM `journal_entries` WHERE `pat_id` = " . $userID . " AND `createdOn` = '" . $date . "'";

	//3. Execute Select Query
    $result = mysqli_query($conn, $selectEntries);
    while ($row = mysqli_fetch_assoc($result)) {
    array_push($entries, $row);
    }

    //Set global date variable just incase user re-submit's form
    $_SESSION['targetDate'] = $date;
    
    echo $entries[0]["data"];

    //Closing Database Connection
    mysqli_close($conn);
?>