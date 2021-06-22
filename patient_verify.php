<doctype html>
<?php
  //security check
  session_start();

  if(isset($_SESSION['isLogin'])){
    if($_SESSION['isLogin'] == false){
      header('Location: index.php');
    }
  }

  if($_SESSION['userType'] != 'patient'){
    header('Location: dashboard.php');
  }

  if($_SESSION['verified'] == 2 || $_SESSION['verified'] == 1){
    header('Location: dashboard.php?verifySent=1');
  }
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
  <link rel="stylesheet" type="text/css" href="css/patient_verify.css">

</head>

<body>

	<!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-light sticky-top" id="navbar-color">
  <div class="container-fluid sticky-top">
    <a class="navbar-brand" href="index.php" style="color: #A4292E;"><b>MEDICAIDE</b></a>
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

    <div class="picform">

      <div class="form-group" id="account-container">        
        <p class="subheading">Send image of valid ID (required).</p>

        <div class="id-pic-div">
          <img src="https://i.stack.imgur.com/y9DpT.jpg" class="photo" id="idPhoto">
        </div>

        <input type="file" class="picfile" id="inputIDPhoto" required>

        <label for="inputIDPhoto" id="uploadpic" ><i class="fas fa-edit">Edit Photo</i></label>

        <p class="subheading" style="color: #fff;" >Set profile picture (optional)</p>

        <div class="profile-pic-div">
          <img src="icons/img_placeholder.png" class="photo" id="profilePicture">
        </div>

        <input type="file" class="picfile" id="inputDP">
        <label for="inputDP" id="uploadpic" ><i class="fas fa-edit">Edit Photo</i></label>
      </div>

    </div>


    <div class="center">
      <h1>Verify Account</h1>
      <form id="registerForm" action="functions/verifyPatient.php" method="post">

        <div class="user_box">
          <div class="box_field">
            <label class="subheading">Birthday</label>
            <input type="date" class="form-control" id="birthdayInput" name="birthday" required>
          </div>
        </div>

        <div class="user_info">

          <div class="txt_field">
            <input type="text" id="fname" name="first_name" required>
            <span></span>
            <label>First Name</label>
          </div>

          <div class="txt_field">
            <input type="text" id="lname" name="last_name" required>
            <span></span>
            <label>Last Name</label>
          </div>

        </div>

        <div class="user_pass">

          <div class="txt_field">
            <input type="text" id="inputAddress" name="Address" required>
            <span></span>
            <label>Address</label>
          </div>

          <div class="txt_field">
            <input type="text" id="inputPhone" name="phone_number" placeholder="+63 980 9876 451" required>
            <span></span>
            <label>Phone Number</label>
          </div>

        </div>

        <input id="submit-btn" type="submit" value="Verify">
 
      </form>
    </div>


  <!--Bootstrap JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  <!--Full Jquery for other functions-->
  <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

  <script>
    $(document).ready(function () {

      //Submit button will only be enabled
      //when everything is filled up (including ID upload)
      $('#submit-btn').attr('disabled', true);

      $(document).on("keyup", "#registerForm", function () {

          if ($('#inputIDPhoto').val() != '' && 
          $('#birthdayInput').val() != '' && 
          $('#fname').val() != '' && 
          $('#lname').val() != '' &&
          $('#inputPhone').val() != '' && 
          $('#inputAddress').val() != '') {

            $('#submit-btn').attr('disabled', false);
          }

          else {
              $('#submit-btn').attr('disabled', true);
          }

      });


      //Asynchronous update pictures (ID Pic and Profile Pic)
      $(document).on("change", "#inputIDPhoto", function() {
        
        var data = new FormData();

        jQuery.each(jQuery('#inputIDPhoto')[0].files, function(i, file) {
          data.append('idPhoto-'+i, file);
        });

        $.ajax({
          url:'functions/patientVerifyImg.php',
          data: data,
          cache: false,
          contentType: false,
          processData: false,
          method:'POST',
          success:function(response){
            $("#idPhoto").attr("src", response);
          }
        });
        
      });

      $(document).on("change", "#inputDP", function() {
        
        var data = new FormData();

        jQuery.each(jQuery('#inputDP')[0].files, function(i, file) {
          data.append('profilePic-'+i, file);
        });

        $.ajax({
          url:'functions/patientVerifyImg.php',
          data: data,
          cache: false,
          contentType: false,
          processData: false,
          method:'POST',
          success:function(response){
            $("#profilePicture").attr("src", response);
          }
        });
        
      });

    });
  </script>

</body>
</html>