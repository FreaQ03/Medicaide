<link rel="stylesheet" type="text/css" href="dashboard-files/doctor/css/prescription.css">

<div id="PatientSearch">
	
	<div class="Header">
		<h1>Send a Prescription</h1> 
		<p>Search for a patient with their user ID </p> 
	</div>
	
	
	<div class="searchBar">
		<div class="input-group ">
  			<input type="search" class="form-control rounded" placeholder="Search patient with their user ID" aria-label="Search"
   			 aria-describedby="search-addon" id="search-bar" />
 			 <button type="button" class="btn btn-outline-primary search-btn"><i class="fas fa-search fa-2x"></i></button>
		</div>
	</div>
	<p> Search a patient via their user ID. Send them a Prescription</p>

<div class="row mx-5 mb-5">
	<!--Search content will be printed here-->
</div>

	<div class="presWrapper container-fluid mb-3">
		<!--Content will be printed here when user pressses the button-->
	</div>





	<br><br><br>

<!--pagination-->
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item <?php if($_SESSION['page']==1){echo 'disabled';} ?>">
      <a class="page-link" href="dashboard.php?page=<?php echo $previous; ?>" tabindex="-1">Previous</a>
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