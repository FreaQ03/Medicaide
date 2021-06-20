<doctype html>


<head>

	<!--Boostrap CSS-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
  <link rel="stylesheet" type="text/css" href="css/doc_verify.css">

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


    <div class="picform">
      <form>
        <div class="form-group" id="account-container">        
          <p class="subheading" style="color: #fff;" >Send image of valid ID (required).</p>

          <div class="id-pic-div">
            <img src="https://i.stack.imgur.com/y9DpT.jpg" class="photo" id="idPhoto" >
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
      </form>
    </div>


    <div class="center">
      <h1>Verify Account</h1>
      <form id="registerForm" action="functions/verifyDoctor.php" method="post">

        <div class="user_box">
          <div class="box_field">
            <label class="birthdaycss">Birthday</label>
            <input type="date" id="birthdayInput" class="form-control" name="birthday" required>
          </div>

          <div class="box_field">
            <label class="birthdaycss">Specialization</label>
            <select class="form-control" name="Specialization" id="specSelect" required>
              <option value="">Select a specialization</option>
              <?php

              //Echo specializations from database
              for ($ctr = 0; $ctr < count($specialization); $ctr++){
                  $optionValue = $ctr + 1;

                  echo '<option value="' . $optionValue . '">' . $specialization[$ctr]["value"] . '</option>';
              }
              ?>

            </select>

          </div>


        </div>



        <div class="user_info">
          <div class="txt_field">
            <input type="text" name="first_name" id="fname" required>
            <span></span>
            <label>First Name</label>
          </div>

          <div class="txt_field">
            <input type="text" name="last_name" id="lname" required>
            <span></span>
            <label>Last Name</label>
          </div>

          <div class="txt_field">
            <input type="text" name="phone_number" id="inputPhone" placeholder="+63 980 9876 451" required>
            <span></span>
            <label>Phone Number</label>
          </div>
        </div>

        <div class="user_pass justify-content-center">
          <div class="txt_field">
            <input type="text" name="Address" id="inputAddress" required>
            <span></span>
            <label>Address</label>
          </div>


          <div class="txt_field">
            <input type="text" name="Hospital" id="inputHospital" required>
            <span></span>
            <label>Hospital Name</label>
          </div>

          <div class="box_field">
            <label class="birthdaycss">Hospital Location</label>
            <select class="hospitalLocal" name="Specialization" id="specSelect" required>
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



        <input type="submit" id="submit-btn" value="Verify">
        
        
      </form>
    </div>

  <!--Bootstrap JS-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!--Full Jquery for other functions-->
  <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

  <script>
    $(document).ready(function(){

      //Submit button will only be enabled
      //when everything is filled up (including ID upload)
      $('#submit-btn').attr('disabled', true);

      $(document).on("keyup", "#registerForm", function () {

          if ($('#inputIDPhoto').val() != '' && 
          $('#birthdayInput').val() != '' && 
          $('#specSelect').val() != '' && 
          $('#fname').val() != '' && 
          $('#lname').val() != '' &&
          $('#inputPhone').val() != '' &&
          $('#inputHospital').val() != '' && 
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
          url:'functions/doctorVerifyImg.php',
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
          url:'functions/doctorVerifyImg.php',
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