<doctype html>
<?php
  session_start();
?>
<head>

	<!--Boostrap CSS-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!--Ajax-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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

  <!--Bootstrap Javascript-->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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

    xhr.open("get", "dashboard-files/doctor/calendar.php");
    xhr.send();

    $("#calendar_button").on('click', function(event) {
      event.preventDefault();
      xhr.open("get", "dashboard-files/doctor/calendar.php");
      xhr.send();
    });

    $("#clock").on('click', function(event) {
      event.preventDefault();
      xhr.open("get", "dashboard-files/doctor/clock.php");
      xhr.send();
    });

    $("#prescriptions").on('click', function(event) {
      event.preventDefault();
      xhr.open("get", "dashboard-files/doctor/prescriptions.php");
      xhr.send();
    });

    $("#journal").on('click', function(event) {
      event.preventDefault();
      xhr.open("get", "dashboard-files/doctor/journal.php");
      xhr.send();
    });

    $("#user").on('click', function(event) {
      event.preventDefault();
      xhr.open("get", "dashboard-files/doctor/user.php");
      xhr.send();

      var am = 1;
      var pm = 1;

      //Add button JS for Hospitals
      function addHosp() {
          var newText = $('<input />').attr('type','text').attr('placeholder', 'Makati Medical Center').attr('class','mt-2').attr('id','hosp'+am+' autocomplete').attr('name','doctorHosp'+am);
          var newBtn = $('<button />').attr('id','sched'+am).attr('type','button').attr('class','btn btn-success btn-sm').html('Edit Schedule');
          $('#innerHosp').append(newText);
          $('#innerHosp').append(newBtn);
          am++;
      }

      function addSpecialization(){
        var newText = $('<input />').attr('type','text').attr('placeholder', 'surgery').attr('class','mt-2').attr('name','doctorSpec'+pm).attr('id','spec'+pm);
          $('#innerSpec').append(newText);
          pm++;
      }

      $(document).on("click", "#addHosp", function(){
        addHosp();
      });        

      $(document).on("click", "#addSpec", function(){
        addSpecialization();
      });

    });

  </script>

  <script>
    // Selecting the iframe element
    var iframe = document.getElementById("calendarFrame");
    
    // Adjusting the iframe height onload event
    iframe.onload = function(){
        iframe.style.height = iframe.contentWindow.document.body.scrollHeight + 'px';
    }
  </script>

  <script>
    
    

  </script>

</body>
</html>