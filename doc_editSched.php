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

      <?php

        if (isset($_GET['duplicate'])) { //check if duplicate key exists in URL
          if ($_GET['duplicate'] == 1) {
            echo '
              <br>
              <div class="alert alert-warning text-center ml-5 mr-5" role="alert">
              There are duplicate days in your entry. Please re-check and try again.
              </div>
            ';
          }
        }

        ?>

      <div class="user_info justify-content-center">
      <div class="txt_field">
        <input type="text" value="<?php echo $docHospital[0]["hospital"]; ?>" disabled>
        <input type="hidden" name="Hospital" value="<?php echo $docHospital[0]["hospital"]; ?>" >
        <span></span>
        <label>Hospital</label>
      </div>

      <div class="box_field">
            <label class="birthdaycss">Hospital Location</label>
            <select class="form-control" name="Location" id="specSelect" required>
              <option value="">Select Location</option>
              <option value="Caloocan">Caloocan</option>
              <option value="Malabon">Malabon</option>
              <option value="Navotas">Navotas</option>
              <option value="Valenzuela">Valenzuela</option>
              <option value="Quezon City">Quezon City</option>
              <option value="Marikina">Marikina</option>
              <option value="Pasig">Pasig</option>
              <option value="Makati">Makati</option>
              <option value="Manila">Manila</option>
              <option value="Mandaluyong">Mandaluyong</option>
              <option value="San Juan">San Juan</option>
              <option value="Pasay">Pasay</option>
              <option value="Parañaque">Parañaque</option>
              <option value="Las Piñas">Las Piñas</option>
              <option value="Pateros">Pateros</option>
            </select>

          </div>

      </div>




<table class="main-table justify-content-center" id="scheduleTable">
<thead>
  <tr>
    <th><label>Day: </label></th>
    <th><label>Start time: </label></th>
    <th><label>End time: </label></th>
  </tr>
</thead>
<tbody id="tableBody">
  <tr id="tableRow">
    <td>
      <div class="form-group registration justify-content-center">
        
        <select class="Day" id="Day" name="Day[]" >
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
      <input type="time" name="start_time[]" required>
        </div>
    </td>
    <td> <div class="end_time">
      <input type="time" name="end_time[]" required>
        </div>
    </td>
  </tr>
</tbody>
</table>

              <button type="button" id="addSched" class="btn btn-success">Add Schedule</button>
              <input type="submit" value="Submit">
      <div class="register_link mt-2"> 
         <a href="login.php"></a>
      </div>
      </div>

      </div>
      </div>
    </form>


    <script>
      
      var day = 1;

      function addSchedule() {
        
        if(day < 7){
          var row = $('#tableRow').html();
          $('#scheduleTable tbody').append('<tr>'+row+'</tr>');
          day++;
        }
        else{
          alert("You cannot add any more days!");
        }
      }

      $(document).on("click", "#addSched", function(){
          addSchedule();
          
      });  

    </script>

</body>
</html>