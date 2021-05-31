<doctype html>
<?php
  //security check
  session_start();

  if(isset($_SESSION['isLogin'])){
    if($_SESSION['isLogin'] == false){
      header('Location: index.php');
    }
  }
  else{
    header('Location: index.php');
  }
?>

<head>

	<!--Boostrap CSS-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

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
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">

	<!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="css/dashboardDoctors.css">
</head>

<body>

<!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="navbar-color">
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
          <a class="navbar-brand" href="#" style="color: white;"><b>WELCOME "name"</b></a>
        </div>
          </li> 
    </div>
    </div>
  </nav>

<div class="container m-0" id="dynamicBody">

  

  <div id="dynamicElement">

  </div>

  <!--SIDEBAR-->
  <section class="sidebar">
    <div class="w3-sidebar w3-bar-block w3-medium" id="dash-sidebar">

      <ul><a class="sidebar-icon" id="calendar_button" aria-current="page" href="#" style="color: #A4292E; padding-top: 9px"> <i class="fas fa-calendar-plus fa-2x"></i></a></ul>
      <ul><a class="sidebar-icon" id="phone" aria-current="page" href="#" style="color: #A4292E;"> <i class="fas fa-search fa-2x"></i></a></ul>
      <ul><a class="sidebar-icon" id="clock" aria-current="page" href="#" style="color: #A4292E;">  <i class="fas fa-clock fa-2x"></i></a></ul>
      <ul><a class="sidebar-icon" id="prescriptions" aria-current="page" href="#" style="color: #A4292E;"> <i class="fas fa-notes-medical fa-2x"></i></a></ul>
      <ul><a class="sidebar-icon" id="journal" aria-current="page" href="#" style="color: #A4292E;"> <i class="fas fa-sticky-note fa-2x"></i></a></ul>
      <ul><a class="sidebar-icon" id="user" aria-current="page" href="#" style="color: #A4292E;"> <i class="fas fa-user fa-2x"></i></a></ul>
      <ul><a class="sidebar-icon" id="user" aria-current="page" href="#" style="color: #A4292E;"> <i class="fas fa-sign-out-alt fa-2x"></i></a></ul>

    </div>
  </section>

  <!--Bootstrap Javascript-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

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

    $("#calendar_button").on('click', function(event) {
      event.preventDefault();
      xhr.open("get", "dashboard-files/calendar.php");
      xhr.send();
    });

    $("#phone").on('click', function(event) {
      event.preventDefault();
      xhr.open("get", "dashboard-files/phone.php");
      xhr.send();
    });

    $("#clock").on('click', function(event) {
      event.preventDefault();
      xhr.open("get", "dashboard-files/clock.php");
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