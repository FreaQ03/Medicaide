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

	<!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/indexfile.css">
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

	<!--Carousell-->
	<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="carousellimg/carou1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="carousellimg/carou2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="carousellimg/carou3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>

	<!--Grid-->
	<div class="grid" id="bgyellow">
		<div class="interior-container">
			<h1 class="icon-header wow animate__animated animate__fadeInDown" align="center">Doctors</h1>
			
			<img src="icons/docico.png" class="index-icons wow animate__animated animate__fadeInDown animate__delay-1s my-3">
			<p class="icon-caption wow animate__animated animate__fadeInDown animate__delay-1s mx-3 px-5">Ensure convenient and efficient communication with your patients.</p>
		</div>
	</div>
	<div class="grid" id="bgblue">
		<div class="interior-container">
			<h1 class="icon-header wow animate__animated animate__fadeInDown" align="center">Patients</h1>
			<img src="icons/patientico.png" class="index-icons wow animate__animated animate__fadeInDown animate__delay-1s my-3">
			<p class="icon-caption wow animate__animated animate__fadeInDown animate__delay-1s mx-3 px-5">Health is wealth. Save future costs by taking your medicine on time with our reminder features.</p>
		</div>
	</div>
	<div class="grid" id="bgred">
		<div class="interior-container">
			<h1 class="icon-header wow animate__animated animate__fadeInDown" align="center">Prescriptions</h1>
			<img src="icons/prescriptionico.png" class="index-icons wow animate__animated animate__fadeInDown animate__delay-1s my-3">
			<p class="icon-caption wow animate__animated animate__fadeInDown animate__delay-1s mx-3 px-5">Enjoy paperless prescriptions that can be easily scanned in any pharmacies near you.</p>
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