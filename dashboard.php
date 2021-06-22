<?php
	session_start();

	//Security check
	if(isset($_SESSION['isLogin'])){
	    if($_SESSION['isLogin'] == false){
	      header('Location: index.php');
	    }
	  }
	  else{
	    header('Location: index.php');
	  }
	  
	//Dynamic dashboard content
	if($_SESSION['userType'] == 'patient'){
		require 'dashboardPatients.php';

		if(isset($_GET['page'])) {
			$_SESSION['page'] = $_GET['page']; //Get for dynamic page no. in search
		}
		else {
			$_SESSION['page'] = 1;
		}

	}
	elseif ($_SESSION['userType'] == 'doctor') {
		require 'dashboardDoctors.php';

		if(isset($_GET['page'])) {
			$_SESSION['page'] = $_GET['page']; //Get for dynamic page no. in search
		}
		else {
			$_SESSION['page'] = 1;
		}
	}

?>