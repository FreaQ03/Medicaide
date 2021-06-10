<doctype html>
<?php
  //security check
  session_start();

  if(isset($_SESSION['isLogin'])){
    if($_SESSION['isLogin'] == false){
      header('Location: dashboard.php');
    }
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

      <div class="form-group" id="account-container">        
        <p class="subheading" style="color: #fff;" >Send image of valid ID (required).</p>

        <div class="id-pic-div">
                <img src="https://i.stack.imgur.com/y9DpT.jpg" id="photo" >
        </div>

        <input type="file" id="picfile" required>
        <label for="picfile" id="uploadpic" ><i class="fas fa-edit">Edit Photo</label></i>


        <p class="subheading" style="color: #fff;" >Set profile picture (optional)</p>

        <div class="profile-pic-div">
                <img src="icons/img_placeholder.png" id="photo">
        </div>

        <input type="file" id="picfile">
        <label for="picfile" id="uploadpic" ><i class="fas fa-edit">Edit Photo</label></i>

    </div>
  </label>
</label>
</div>


    <div class="center">
      <h1>Verify Account</h1>
      <form id="registerForm" action="functions/registrationPost.php" method="post">



        <div class="user_box">
        <div class="box_field">
                  <label class="birthdaycss">Birthday</label>
                  <input type="date" class="form-control" name="birthday" required>
        </div>

        </div>



        <div class="user_info">
        <div class="txt_field">
          <input type="text" name="first_name" required>
          <span></span>
          <label>First Name</label>
        </div>

        <div class="txt_field">
          <input type="text" name="last_name" required>
          <span></span>
          <label>Last Name</label>
        </div>

        <div class="txt_field">
          <input type="text" name="phone_number" placeholder="+63 980 9876 451" required>
          <span></span>
          <label>Phone Number</label>
        </div>
        </div>

        <div class="user_pass">
        <div class="txt_field">
          <input type="text" name="Address" required>
          <span></span>
          <label>Address</label>
        </div>


        <div class="txt_field">
          <input type="text" name="Hospital" required>
          <span></span>
          <label>Hospital</label>
        </div>
        </div>



        <input type="submit" value="Verify">
        
        
      </form>
    </div>

</body>
</html>