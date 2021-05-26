<doctype html>
<?php
  //security check
  session_start();
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

	<!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="css/registercss.css">
</head>

<body>

	<!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-light sticky-top" id="navbar-color">
  <div class="container-fluid sticky-top">
    <a class="navbar-brand" href="#" style="color: #A4292E;"><b>MEDICAIDE</b></a>
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
          <a href="#"><li>PRIVACY POLICY</li></a>
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



<div class="container">
  <div class="row h-75">

    <!--First Column-->
    <div class="col choice-container content-center align-self-center animate__animated animate__fadeInRight">
      <center>
      <div class="form-group" id="account-container">
        <h1 class="signup-header1 mt-3 mb-1">Account Type</h1>        
        <p class="subheading" style="color: #6c757d;" align="center">Please pick an account type.</p>
        <div class="userchoice">
          <input type="radio" id="check_patient" name="role" value="patient" checked>
          <label for="check_patient"><img src="img/patient-signup.jpg" class="img-choice mr-5 mb-3"></label>
        </div>
        <div class="userchoice">
          <input type="radio" id="check_doctor" name="role" value="doctor">
          <label for="check_doctor"><img src="img/doctor-signup.jpg" class="img-choice mb-3"></label>
        </div>
      </div>
    </center>
    </div>

    <!--Second Column-->
    <div class="col signup-container align-self-center">
      <div class="container pt-3">
        <h1 class="signup-header" align="center">Sign up</h1>
        <p class="subheading" align="center">In just a few steps, you can have an assistant for your medical needs!</p>
      </div>

      <!--Registration Form-->
      <center>
      <div class="container mt-3 ml-5 mr-5 pt-3 pb-3 border-top border-bottom">

          <form id="registerForm" action="registrationPost.php" method="post">
              <div class="row content-center">
                <div class="form-group col-md-6 registration">
                  <label class="subheading">First Name</label>
                  <input type="text" class="form-control" name="first_name" placeholder="e.g. Andrew" required>
                </div>
                <div class="form-group col-md-6 registration">
                  <label class="subheading">Last Name</label>
                  <input type="text" class="form-control" name="last_name" placeholder="e.g. Cook" required>
                </div>
              </div>
              <div class="row content-center mt-3">
                <div class="form-group col-md-6 registration">
                  <label class="subheading">Email</label>
                  <input type="email" class="form-control" name="email" placeholder="name@example.com" required>
                </div>
                <div class="form-group col-md-6 registration">
                  <label class="subheading">Birthday</label>
                  <input type="date" class="form-control" name="birthday" required>
                </div>
              </div>
              <div class="row content-center mt-3">
                <div class="form-group col-md-6 registration">
                  <label class="subheading">Password</label>
                  <input type="password" class="form-control" name="password" required>
                </div>
                <div class="form-group col-md-6 registration">
                  <label class="subheading">Confirm Password</label>
                  <input type="password" class="form-control" name="password1" required>
                </div>
              </div>
              <div class="row content-center mt-3">
                <div class="form-group col-md-6 registration">
                  <label for="userSex" class="subheading">Sex</label>
                  <select class="form-control" id="userSex" name="sex">
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                  </select>
                </div>
                <input type="radio" name="userType" value="patient" id="radio1" style="display:none;" checked>
                <input type="radio" name="userType" value="doctor" id="radio2" style="display:none;" checked>
              </div>
              <div class="row mt-5 signup-button">
                <button type="submit" class="btn btn-primary subheading">Sign Up</button>
              </div>
          </form>
          <?php
            if (isset($_GET['origemail'])) { //check if authenticate key exists in URL
              if ($_GET['origemail'] == "false") {
                echo '
                  <br>
                  <div class="alert alert-warning ml-5 mr-5" role="alert">
                  This email already exists, please use another email.
                  </div>
                ';
              }
            }
          ?>

        </div>
      </center>
    </div>
  </div>
</div>

	<!--Bootstrap Javascript-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

	<!--Wow.js Javascript-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	<script>
		var wow = new WOW(
      {
        boxClass:     'wow',      // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset:       0,          // distance to the element when triggering the animation (default is 0)
        mobile:       true,       // trigger animations on mobile devices (default is true)
        live:         true,       // act on asynchronously loaded content (default is true)
        callback:     function(box) {
          // the callback is fired every time an animation is started
          // the argument that is passed in is the DOM node being animated
        },
        scrollContainer: null,    // optional scroll container selector, otherwise use window,
        resetAnimation: true,     // reset animation on end (default is true)
      }
    );
    wow.init();
	</script>

  <!--Checkbox Script-->
  <script>
  $( "input:radio[id=check_patient]" ).on( "click", function() {
    $("#radio_1").prop("checked", true); 

  });

  $( "input:radio[id=check_doctor]" ).on( "click", function() {
    $("#radio_2").prop("checked", true);  

  });

  </script>

</body>
</html>