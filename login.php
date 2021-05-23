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
    <link rel="stylesheet" type="text/css" href="css/logincss.css">
</head>

<body>

	<!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-light sticky-top" id="navbar-color">
  <div class="container-fluid sticky-top">
    <a class="navbar-brand" href="#"><b>MEDICAIDE</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
        
     
          <a class="nav-link icon text-secondary" id="calendar" aria-current="page" href="#"> <i class="fas fa-calendar-plus"></i></a>

          <a class="nav-link icon text-secondary" id="phone" aria-current="page" href="#"> <i class="fas fa-phone-square-alt"></i>
          <a class="nav-link icon text-secondary" id="clock" aria-current="page" href="#">  <i class="fas fa-clock"></i>
          <a class="nav-link icon text-secondary" id="prescriptions" aria-current="page" href="#"> <i class="fas fa-notes-medical"></i>
          <a class="nav-link icon text-secondary" id="journal" aria-current="page" href="#"> <i class="fas fa-sticky-note"></i>
          <a class="nav-link icon text-secondary" id="user" aria-current="page" href="#"> <i class="fas fa-user"></i>
        </li> 
    </div>
  </div>
</nav>
  
  <div class="container">
    <div style="background-image: url('image_2021-05-19_222040-removebg-preview');">
    <div class="row d-flex h-100">
      <div class="col justify-content-center align-self-center">
       <center> <form action="authenticate.php" method="post">
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="far fa-user"></i></span>
            <input type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" name="email">
          </div>

          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
            <input type="password" class="form-control" placeholder="Pass" aria-label="Username" aria-describedby="basic-addon1" name="password">
          </div>

          <button type="submit" class="btn btn-primary">Login</button>
        </center></form>

        <?php
        if (isset($_GET['credentials'])) { //check if credentials key exists in URL
          if ($_GET['credentials'] == "false") {
            echo '
              <br>
              <div class="alert alert-danger" role="alert">
                Invalid email / password.
              </div>
            ';
          }
        }
      ?>

      </div>
      <div class="col">
        



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
</body>
</html>