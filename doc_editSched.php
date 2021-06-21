<doctype html>

<?php
  session_start();
  //1. Setup Database connection
  require 'functions/connection.php';

  //I. Get hospital of doctor
  $docHospital = [];

  $selectHosp = "SELECT * FROM `doctor_hospitals` WHERE `doc_id` = " . $_SESSION['userID'];

  $result = mysqli_query($conn, $selectHosp);
  while ($row = mysqli_fetch_assoc($result)) {
      array_push($docHospital, $row);
  }

  //Closing Database Connection
  mysqli_close($conn);

?>


<head>

  <!--Boostrap CSS-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

  <!--Fontawesome-->
  <script src="https://kit.fontawesome.com/6af8a38aa6.js" crossorigin="anonymous"></script>

  <!--Ajax-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!--Animate CSS-->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

  <!--Google Fonts API-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Rubik&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="css/doc_editSched.css">
  <link rel="stylesheet" type="text/css" href="css/indexfile.css">
</head>

<body>
  
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-light sticky-top" id="navbar-color">
  <div class="container-fluid sticky-top">
    <a class="navbar-brand" href="index.php" style="color: #A4292E; font-family: 'Quicksand', sans-serif;"><b>MEDICAIDE</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
      <div class="nav-links">
        <ul>
          <a href="#"><li>ABOUT US</li></a>
          <a href="#"><li>CONTACT US</li></a>
        </ul>
      </div>   
          <a class="nav-link icon" id="calendar" aria-current="page" href="#" style="color: #A4292E;"> <i class="fas fa-calendar-plus"></i></a>
          <a class="nav-link icon" id="phone" aria-current="page" href="#" style="color: #A4292E;"> <i class="fas fa-phone-square-alt"></i></a>
          <a class="nav-link icon" id="clock" aria-current="page" href="#" style="color: #A4292E;">  <i class="fas fa-clock"></i></a>
          <a class="nav-link icon" id="prescriptions" aria-current="page" href="#" style="color: #A4292E;"> <i class="fas fa-notes-medical"></i></a>
          <a class="nav-link icon" id="journal" aria-current="page" href="#" style="color: #A4292E;"> <i class="fas fa-sticky-note"></i></a>
          <a class="nav-link icon" id="user" aria-current="page" href="#" style="color: #A4292E;"> <i class="fas fa-user"></i></a>
        </li> 
    </div>
  </div>
</nav>


  <div class="center">
    <h1>Edit Schedule</h1>
    <form id="registerForm" action="functions/updateSchedule.php" method="post">

      <div class="user_info justify-content-center">
      <div class="txt_field">
        <input type="text" value="<?php echo $docHospital[0]["hospital"]; ?>" disabled>
        <input type="hidden" name="Hospital" value="<?php echo $docHospital[0]["hospital"]; ?>" >
        <span></span>
        <label>Hospital</label>
      </div>

      <div class="box_field">
            <label class="birthdaycss">Hospital Location</label>
            <select class="form-control" name="Specialization" id="specSelect" required>
              <option value="">Select Location</option>
              <option value="">Caloocan</option>
              <option value="">Malabon</option>
              <option value="">Navotas</option>
              <option value="">Valenzuela</option>
              <option value="">Quezon City</option>
              <option value="">Marikina</option>
              <option value="">Pasig</option>
              <option value="">Makati</option>
              <option value="">Manila</option>
              <option value="">Mandaluyong</option>
              <option value="">San Juan</option>
              <option value="">Pasay</option>
              <option value="">Parañaque</option>
              <option value="">Las Piñas</option>
              <option value="">Pateros</option>


            </select>

          </div>

      </div>




<table class="main-table justify-content-center">
<thead>
  <tr>
    <th><label>Day: </label></th>
    <th><label>Start time: </label></th>
    <th><label>End time: </label></th>
  </tr>
</thead>
<tbody>
  <tr>
    <td><div class="form-group registration justify-content-center">
                <select class="Day" id="Day" name="Day" >
                  <option value="0">Sunday</option>
                  <option value="1">Monday</option>
                  <option value="2">Tuesday</option>
                  <option value="3">Wednesday</option>
                  <option value="4">Thursday</option>
                  <option value="5">Friday</option>
                  <option value="6">Saturday</option>
                </select>

              </div> 
    </td>
    <td> <div class="start_time">
      <input type="time" name="start_time" required>
        </div>
    </td>
    <td> <div class="end_time">
      <input type="time" name="end_time" required>
        </div>
    </td>
  </tr>
</tbody>
</table>

              <button type="button" class="btn btn-success">Add Schedule</button>
              <input type="submit" value="Submit">
      <div class="register_link mt-2"> 
         <a href="login.php"></a>
      </div>
      </div>

      </div>
      </div>
    </form>

</body>
</html>