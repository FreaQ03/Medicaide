<doctype html>

<head>

	<!--Boostrap CSS-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

	<!--Fontawesome-->
	<script src="https://kit.fontawesome.com/6af8a38aa6.js" crossorigin="anonymous"></script>

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
    <a class="navbar-brand" href="#">Medicaide</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container pt-3">
  <h1 class="signup-header" align="center">Sign up</h1>
  <p class="subheading" align="center">In just a few steps, you can have an assistant for your medical needs!</p>
</div>

<!--Registration Form-->
<center>
<div class="container mt-5 ml-5 mr-5 pt-3 pb-3 border-top border-bottom">

    <form action="registrationPost.php" method="post">
      <div class="form-group">
        <div class="userchoice">
          <input type="radio" id="check_patient" name="role" value="patient">
          <label for="check_patient"><img src="img/patient-signup.jpg" class="h-25 mr-5"></label>
        </div>
        <div class="userchoice">
          <input type="radio" id="check_doctor" name="role" value="doctor">
          <label for="check_doctor"><img src="img/doctor-signup.jpg" class="h-25"></label>
        </div>
      </div>
      <div class="row content-center">
        <div class="form-group col-md-6 w-25">
          <label class="subheading">First Name</label>
          <input type="text" class="form-control registration" name="first_name" placeholder="e.g. Andrew" required>
        </div>
        <div class="form-group col-md-6 w-25">
          <label class="subheading">Last Name</label>
          <input type="text" class="form-control registration" name="last_name" placeholder="e.g. Cook" required>
        </div>
      </div>
      <div class="row content-center">
        <div class="form-group col-md-6 w-25">
          <label class="subheading">Email</label>
          <input type="email" class="form-control registration" name="email" placeholder="name@example.com" required>
        </div>
        <div class="form-group col-md-6 w-25">
          <label class="subheading">Password</label>
          <input type="password" class="form-control registration" name="password" required>
        </div>
      </div>
      <div class="row content-center">
        <div class="form-group col-md-6 w-25">
          <label class="subheading">Birthday</label>
          <input type="date" class="form-control registration" name="birthday" required>
        </div>
      </div>
      <div class="row mt-5 signup-button">
        <button type="submit" class="btn btn-primary subheading">Sign Up</button>
      </div>
      
    </form>
  </div>
</center>

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
</body>
</html>