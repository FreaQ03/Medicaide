<doctype html>
<head>

	<!--Boostrap CSS-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!--w3schools-->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<!--Fontawesome-->
	<script src="https://kit.fontawesome.com/6af8a38aa6.js" crossorigin="anonymous"></script>

	<!--Animate CSS-->
	<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

	<!--Google Fonts API-->
	<link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Text:wght@700&family=Roboto:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">

	<!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="css/dashboardDoctors.css">
</head>

<body>

<!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-light sticky-top" id="navbar-color">
    <div class="container-fluid sticky-top">
      <a class="navbar-brand" href="#" style="color: white;"><b>MEDICAIDE</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          </ul>
        <div class="nav-links">
          <ul>
            <a href="#aboutUs" style="color: white;"><li>ABOUT US</li></a>
            <a href="#aboutUs" style="color: white;"><li>CONTACT US</li></a>
          </ul>
      </div>   
        <div class="navbar-welc">
          <p class="navbar-brand m-0 p-0" href="#" style="color: white;"><b>Welcome, <?php echo $_SESSION['fname'];?>!</b></p>
        </div>
          </li> 
    </div>
    </div>
  </nav>

<div class="container m-0 p-0 d-inline" id="dynamicBody">

  <!--SIDEBAR-->
  <ul class="nav d-inline-flex flex-column justify-content-center" id="dash-sidebar">
    <li class="nav-item">
      <a class="nav-link sidebar-icon" id="calendar_button" aria-current="page" href="#" style="color: #A4292E;"><i class="fas fa-calendar-plus fa-2x"><span id="font"> Calendar</span></i></a>
    </li>
    <li class="nav-item">
      <a class="nav-link sidebar-icon" id="prescriptions" aria-current="page" href="#" style="color: #A4292E;"> <i class="fas fa-notes-medical fa-2x"><span id="font"> Prescriptions</span></i></a>
    </li>
    <li class="nav-item">
      <a class="nav-link sidebar-icon" id="journal" aria-current="page" href="#" style="color: #A4292E;"> <i class="fas fa-sticky-note fa-2x"><span id="font"> View Journals</span></i></a>
    </li>
    <li class="nav-item">
      <a class="nav-link sidebar-icon" id="user" aria-current="page" href="#" style="color: #A4292E;"> <i class="fas fa-user fa-2x"><span id="font"> Profile</span></i></a>
    </li>
    <li class="nav-item">
      <a class="nav-link sidebar-icon" id="user" aria-current="page" href="functions/logout.php" style="color: #A4292E;"> <i class="fas fa-sign-out-alt fa-2x"><span id="font"> Log out</span></i></a>
    </li>
  </ul>

  <!--Content goes here-->
  <center>
    <div id="dynamicElement">

    </div>
  </center>

</div>


<div class="container m-0 p-0 d-inline">

  <?php

  //Find active appointment requests from database
  $appointments = [];
  $userID = $_SESSION['userID'];

  //1. Setup database connection
  require 'functions/connection.php';

  //2. Select SQL
  $sql = "
    SELECT 
      appointment.`id`, appointment.`pat_id`, appointment.`appoint_date`, appointment.`appoint_time`, patient.`fname`, patient.`lname`, patient.`sex` 
    FROM 
      `appointment` 
    INNER JOIN `patient` ON appointment.`pat_id` = patient.`id`
    WHERE 
      `doc_id` = " . $userID . "
      AND
      `active` = 1
      AND
      `accepted` = 0
  ";

  //3. Execute SQL
  $result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    array_push($appointments, $row);
  }

  if(count($appointments) > 0){

    //Echo toast area containers
    echo '

    <!--TOAST-->
    <div aria-live="polite" aria-atomic="true" style="position: static; min-height: 12.5rem;">
      <!-- Position it -->
      <div style="position: absolute; top: 5rem !important; right: .625rem;">
    ';
    for($i = 0; $i < count($appointments); $i++){

      echo '
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
          <div class="toast-header">
            <strong class="mr-auto">Appointment Notification</strong>
          </div>
          <div class="toast-body">
            <p>' . $appointments[$i]["fname"] . ' ' . $appointments[$i]["lname"] . ' [' . $appointments[$i]["sex"] . '] wants to book an appointment at ' . $appointments[$i]["appoint_time"] . ' on ' . $appointments[$i]["appoint_date"] . '</p>
          </div>
          <div class="doc_choice">
            <button type="button" class="dismissbtn btn-success acceptRequest" data-dismiss="toast" value="' . $appointments[$i]["id"] . '">
                ACCEPT
              </button>
            <button type="button" class="dismissbtn btn-danger declineRequest" data-dismiss="toast" value="' . $appointments[$i]["id"] . '">
                DECLINE
            </button>
          </div>
        </div>
      ';
    }

    //Closing tags for the toast containers
    echo '
    </div>
    </div>
    ';
  }

  //.4 Closing Database Connection
  mysqli_close($conn);
  ?>
  
</div>


<!-- Verification Success Modal -->
<div class="modal fade" id="verifyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title verify-title" id="exampleModalLabel">Verification form sent!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Verification form sent please wait 1-2 business days for us to verify your information.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger modal-close" data-dismiss="modal">CLOSE</button>
      </div>
    </div>
  </div>
</div>


<!-- Verification Notification Modal -->
<div class="modal fade" id="verificationNotif" data-backdrop="static" data-keyboard="false"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Verify your account details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Thank you for registering! Please verify your account details to be able to access Medicaide's features.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">DISMISS</button>
        <a class="btn btn-success" href="doc_verify.php" role="button">GO</a>
      </div>
    </div>
  </div>
</div>

<!-- Edit Hospital Modal -->
<div class="modal fade" id="editSuccessModal" data-backdrop="static" data-keyboard="false"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hospital Details Updated</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Your hospital and schedule details have been successfully updated!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">DISMISS</button>
      </div>
    </div>
  </div>
</div>

  
  <!--Bootstrap Javascript-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script>
    $('.toast').toast('show');
  </script>

  <?php 
    //Show verification modal after submitting verification form
    if(isset($_GET['verifySent'])){
      echo "<script> $('#verifyModal').modal('show');</script>";
    } 
    //Show verification modal after submitting verification form
    if(isset($_GET['editSuccess'])){
      if($_GET['editSuccess'] == 1){
        echo "<script> $('#editSuccessModal').modal('show');</script>";
      }
      
    } 

    //Show verification notification modal if user is not yet verified
    if(isset($_SESSION['verified'])){
      if($_SESSION['verified'] == 0){
        echo '<script src="js/dashboardDoctors.js"></script>';

      }
      elseif($_SESSION['verified'] == 2){
        echo '<script src="js/dashboardDoctorsMin.js"></script>';
      }
      else{
        echo '
        <!--Full Jquery for other functions-->
        <script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
        <script src="js/dashboardDoctorsVerified.js"></script>';
      }
    }
  ?>


</body>
</html>