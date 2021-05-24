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
<link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Text:wght@700&family=Roboto:wght@300&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
	<!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/indexfile.css">
</head>

<body>

	<!--Navbar-------------------------------------------------->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="navbar-color">
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

	<!--Carousell---------------------------------------------------->
	<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="overlay"></div>
  <div class="caption">
    <h1><b>MEDICAIDE</b></h1>
    <p>For Patients and Doctors Medical Assistance</p>
     <button type="button" class="btn btn-outline-success btn-lg">Log in</button>
      <button type="button" class="btn btn-primary btn-lg">Sign up</button>
  </div>
  <div class="carousel-inner bg-info" role="listbox">
    <div class="carousel-item active vh-100">
      <img src="carousellimg/carou1.jpg" class="d-block w-100" alt="...">
         
    </div>
    <div class="carousel-item vh-100">
      <img src="carousellimg/carou2.jpg" class="d-block w-100" alt="...">

    </div>
    <div class="carousel-item vh-100">
      <img src="carousellimg/carou3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>

  <!--Features---------------------------------------------------------->

  <div class="features">
    <!--text-->
  <div class="features-text">
    <h2>MADE FOR PATIENTS AND DOCTORS</h2>
      <p>Our goal/aim (subheading)</p>
      <p>Description here before entering the features, give introductions or over view about the website and or the developers keep it atleast 3 sentences or so. Description here before entering the features, give introductions or over view about the website and or the developers keep it atleast 3 sentences or so. 
      </p>
  </div>
</div>
    <!--grid for features-->

  <div class="container">
      <div class="card-deck text-light">
      <div class="card crdimg1" style="background-image: url(bgCards/calendar.png);">
 
        <div class="card-body cb1">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">scary</p>
        </div>
      </div>
      <div class="card crdimg2" style="background-image: url(bgCards/phone.png);">
        <div class="card-body cb2">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">scary</p>
        </div>
      </div>
      <div class="card crdimg3" style="background-image: url(bgCards/clock.png);">
        <div class="card-body cb3">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">scary</p>
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
</body>
</html>