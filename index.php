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
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@700&display=swap" rel="stylesheet">

  <!--Webface fonts-->
  <link rel="stylesheet" type="text/css" href="webface/stylesheet.css">

	<!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="css/indexfile.css">
  
</head>

<body>

	<!--Navbar-->
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
          <a href="#aboutUs"><li>ABOUT US</li></a>
          <a href="#aboutUs"><li>CONTACT US</li></a>
   
        </ul>
      </div>   
          <a class="nav-link icon" id="calendar" aria-current="page" href="#Pcalendar" style="color: #A4292E;"> <i class="fas fa-calendar-plus"></i></a>
          <a class="nav-link icon" id="search" aria-current="page" href="#Pcalendar" style="color: #A4292E;"> <i class="fas fa-search"></i></a>
          <a class="nav-link icon" id="clock" aria-current="page" href="#Pcalendar" style="color: #A4292E;">  <i class="fas fa-clock"></i></a>
          <a class="nav-link icon" id="prescriptions" aria-current="page" href="#Pcalendar" style="color: #A4292E;"> <i class="fas fa-notes-medical"></i></a>
          <a class="nav-link icon" id="journal" aria-current="page" href="#Pcalendar" style="color: #A4292E;"> <i class="fas fa-sticky-note"></i></a>
          <a class="nav-link icon" id="user" aria-current="page" href="#Pcalendar" style="color: #A4292E;"> <i class="fas fa-user"></i></a>

        </li> 
    </div>
  </div>
</nav>

	<!--Carousell-->
	<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="caption" style="height: 180px;">
    <h1><b>MEDICAIDE</b></h1>
    <p>Saved by Medicine. Made for Convenience.</p>
     <a class="btn btn-outline-success btn-lg" href="login.php" role="button">Login</a>
    <a class="btn btn-primary btn-lg" href="register.php" role="button">Signup</a>
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

  <!--Features-->
  <section id="Pcalendar">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <!--text-->
        <div class="col-8 features-col features-text px-5 my-5" style="padding-right: 9rem!important;
        padding-left: 13rem!important;">
          <h2 class="wow animate__animated animate__fadeInDown">MADE FOR PATIENTS AND DOCTORS</h2>
            <p class="wow animate__animated animate__fadeInDown">Our goal</p>
            <p class="wow animate__animated animate__fadeInDown"> Medicaide is a website for both patients and doctors that seeks medication assistance. The team behind Medicaide aims to decrease the growing number of patients with medication nonadherence or for those patients that are struggling to proceed and continue their treatment. Medicaide is a free website with the unlimited use of the features. Our objective is to reach out to as many as possible users to lessen the cost of healthcare expenses to patients.
            </p>
        </div>

        <!--icons-->
        <div class="col-4 features-col text-center my-auto wow animate__animated animate__fadeInRightBig">
        <i class="fas fa-user-md fa-10x" style="color: #A4292E;"></i>
        <i class="fas fa-user fa-10x"  style="color: #A4292E;"></i>
        </div>
      </div>
</div>
</section>

  <!--grid for features-->

  <div class="container">
    <div class="card-deck text-light wow animate__animated animate__bounceIn" align="center">
      <div class="card crdimg w-25 d-inline-block" style="background-image: url(bgCards/calendar.png);">
        <div class="card-body cb1">
          <h5 class="card-title">CALENDAR <br> TRACKING</h5>
          <p class="card-text"> <br>For patients to view their medication and appointment schedule; For doctors to view their scheduled appointments from their patients.<br><br><br><br></p>
        </div>
      </div>
  
      <div class="card crdimg w-25 d-inline-block" style="background-image: url(bgCards/search.png);">
        <div class="card-body cb2">
          <h5 class="card-title">APPOINTMENT BOOKING<br>&<br>DOCTOR SEARCH AVAILABILITY</h5>
          <p class="card-text">Patient users could search for their desired doctor around their area while the doctors may view their patients scheduled appointment in the calendar.<br><br></p>
        </div>
      </div>
      <div class="card crdimg w-25 d-inline-block" style="background-image: url(bgCards/clock.png);">
        <div class="card-body cb3">
          <h5 class="card-title">MEDICATION <br> REMINDER</h5>
          <p class="card-text"><br>It is also indicated in the calendar where the medication schedules are shown, the calendar page will pop up a notification to alert patients that they need to take their medication on that specific time and day.<br><br></p>
      </div>
    </div>
    <div class="card-deck text-light mt-5 wow animate__animated animate__bounceIn" align="center">
      <div class="card crdimg4 crdimg w-25 d-inline-block" style="background-image: url(bgCards/journal.png);">
        <div class="card-body cb4">
          <h5 class="card-title">PATIENT'S <br> JOURNAL</h5>
          <p class="card-text"><br>Patients may also share their experience on what they feel about their treatment journey, the doctors may view their journal to help them monitor their patient’s progress.<br><br><br></p>
        </div>
      </div>
      <div class="card crdimg w-25 d-inline-block" style="background-image: url(bgCards/presp.png);">
        <div class="card-body cb5">
          <h5 class="card-title">DOCTOR'S <br> PRESCRIPTIONS</h5>
          <p class="card-text"><br><br>Doctors may also give digitally made prescriptions for the convenience of both users, Patients and Physicians. <br><br><br><br></p>
        </div>
      </div>
      <div class="card crdimg w-25 d-inline-block" style="background-image: url(bgCards/user.png);">
        <div class="card-body cb6">
          <h5 class="card-title">PATIENTS <br> AND DOCTORS</h5>
          <p class="card-text"><br>Both users may have an account to access the features of Medicaide, after finishing the verification forms, Medicaide is ready to use.<br><br><br><br></p>
        </div>
      </div>
    </div>
  </div>

<!--about the dev-->
  <section id="aboutUs">
  <div class="container about-us d-flex flex-column justify-content-center align-items-center h-75 mt-5">
    <h1><u> About Us</u></h1>
    <p class="px-5">Medicaide is a website made by Senior High School students that studies under the School of Information Technology bootcamp semester of the Senior High School program in Asia Pacific College. They aspire to help people that are in need of medical assistance to help improve the healthcare system of the Philippines. Their main goal is to address medication nonadherence and to eliminate poor doctor to patient communication, in that way, people may lessen their healthcare costs. Their motivation is also to help the healthcare providers monitor their patient’s needs. With this, Medicaide will be the bridge for the patients to be saved by medicine and medicaide is made for convenience.</p>
  </div>
  </section>


<!--contact us-->
  <footer>
    <p>Contact Us</p>
    <p>If there are suggestions on how to improve our website, we gladly appreciate your comments. Kindly send it to our social media accounts or send us an email. We are happy to develop Medicaide with such advancements that could help our users for better service. </p>
    <!--social-->
    <div class="social-icons">
      <a href=""><i class="fas fa-envelope"></i></a>
      <a href=""><i class="fab fa-facebook-f"></i></a>
      <a href=""><i class="fab fa-instagram"></i></a>
      <a href=""><i class="fab fa-twitter"></i></a>
    </div>
  </footer>

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