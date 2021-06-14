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
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital@1&display=swap" rel="stylesheet">

	<!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="css/dashboard.css">

  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.css"rel="stylesheet" />
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
            <a href="index.php#aboutUs" style="color: white;"><li>ABOUT US</li></a>
            <a href="index.php#aboutUs" style="color: white;"><li>CONTACT US</li></a>
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
      <a class="nav-link sidebar-icon" id="search" aria-current="page" href="#" style="color: #A4292E;"> <i class="fas fa-search fa-2x"><span id="font"> Search Doctors</span></i></a>
    </li>
    <li class="nav-item">
      <a class="nav-link sidebar-icon" id="prescriptions" aria-current="page" href="#" style="color: #A4292E;"> <i class="fas fa-notes-medical fa-2x"><span id="font"> Prescriptions</span></i></a>
    </li>
    <li class="nav-item">
      <a class="nav-link sidebar-icon" id="journal" aria-current="page" href="#" style="color: #A4292E;"> <i class="fas fa-sticky-note fa-2x"><span id="font"> Journal</span></i></a>
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

<div class="container m-0 p-0 d-inline" id="dynamicBody">
<!--TOAST-->

  <div aria-live="polite" aria-atomic="true" style="position: static; min-height: 200px;">
    <!-- Position it -->
    <div style="position: absolute; top: 80px !important; right: 10px;">


      <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
        <div class="toast-header">
          <img src=" " class="rounded mr-2" alt="...">
          <strong class="mr-auto">Name Here</strong>
        </div>
        <div class="toast-body">
          Your appointment has been accepted!
        </div>
        <button type="button" class="dismissbtn btn-primary" data-dismiss="toast" >
            DISMISS
          </button>
      </div>

          <!-- When auto added marami na notif, stacked sila automatically -->

          <!-- EXAMPLE
                
      <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
        <div class="toast-header">
          <img src=" " class="rounded mr-2" alt="...">
          <strong class="mr-auto">Name Here</strong>
        </div>
        <div class="toast-body">
          Your appointment has been accepted!
        </div>
        <button type="button" class="dismissbtn btn-primary" data-dismiss="toast" >
            DISMISS
          </button>
      </div>
          
           -->
    </div>
  </div>
</div>



<!-- Error Modal -->
<div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="errorModalLabel">Invalid Request!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <b>Sorry the Doctor is not avilable that day or time.</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>  

<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="successModalLabel">Successfully Created Appoinmtment!</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       Your booking was sucessful, see your calendar to check the time and date of appointment. See you ;3 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

  <!--Bootstrap Javascript-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!--Shows modals for appointment queries-->
  <?php 

    if(isset($_GET['docAvail'])){
      echo "<script> $('#errorModal').modal('show');</script>";
    } 

    
  ?>

  <?php 

    if(isset($_GET['bookSuccess'])){
      echo "<script> $('#successModal').modal('show');</script>";
    } 

    
  ?>

  <script>
    $('.toast').toast('show');
  </script>

  <!--Full Jquery for other functions-->
  <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

  <script>
    const xhr = new XMLHttpRequest();
    const container = document.getElementById("dynamicElement");

    xhr.onload = function(){
      if (this.status === 200) {
        container.innerHTML = xhr.responseText;
      }
      else {
        console.warn("Did not receive 200 OK from response!");
      }
    };

    xhr.open("get", "dashboard-files/calendar.php");
    xhr.send();

    //Live search function for search doctors
    $(document).on("keyup", "#doctorSearch", function() {
      
      var search = $(this).val();

      $.ajax({
        url:'functions/asyncSearch.php',
        method:'post',
        data:{query:search},
        success:function(response){
          $("#doctorList").html(response);
        }
      });
      
    });

    //Automatic redirection if element has "page" php element
    if (window.location.href.indexOf("page") > -1) {
      xhr.open("get", "dashboard-files/search.php");
      xhr.send();
    }

    //When user updates profile-pic, automatic form submit
    $(document).on("change", "#picfile", function() {
      $("#profile-picture").submit();
    });

    $("#calendar_button").on('click', function(event) {
      event.preventDefault();
      xhr.open("get", "dashboard-files/calendar.php");
      xhr.send();
    });

    $("#search").on('click', function(event) {
      event.preventDefault();
      xhr.open("get", "dashboard-files/search.php");
      xhr.send();
    });

    $("#prescriptions").on('click', function(event) {
      event.preventDefault();
      xhr.open("get", "dashboard-files/prescriptions.php");
      xhr.send();
    });

    $("#journal").on('click', function(event) {
      event.preventDefault();
      xhr.open("get", "dashboard-files/journal.php");
      xhr.send();
    });

    $("#user").on('click', function(event) {
      event.preventDefault();
      xhr.open("get", "dashboard-files/user.php");
      xhr.send();
    });

  </script>

</body>
</html>