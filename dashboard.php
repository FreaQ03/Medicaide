<?php
	session_start();

	/*Security check
	if(isset($_SESSION['isLogin'])){
	    if($_SESSION['isLogin'] == false){
	      header('Location: index.php');
	    }
	  }
	  else{
	    header('Location: index.php');
	  }
	*/
	//Dynamic dashboard content
	if($_SESSION['userType'] == 'patient'){
		require 'dashboardPatients.php';
	}
	elseif ($_SESSION['userType'] == 'doctor') {
		require 'dashboardDoctors.php';
	}

?>