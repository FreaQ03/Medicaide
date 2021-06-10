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

		if(isset($_GET['page'])) {
			$_SESSION['page'] = $_GET['page']; //Get for dynamic page no. in search
		}
		else {
			$_SESSION['page'] = 1;
		}

		if(isset($_GET['docAvail'])) {
			if($_GET['docAvail'] == 0){
				$_SESSION['docAvail'] = $_GET['docAvail'];
			}
		}
		
		if(isset($_GET['bookSuccess'])) {
			if($_GET['bookSuccess'] == 1){
				$_SESSION['bookSuccess'] = $_GET['bookSuccess'];
			}
		}

	}
	elseif ($_SESSION['userType'] == 'doctor') {
		require 'dashboardDoctors.php';
	}

?>