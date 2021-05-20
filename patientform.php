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

  <!--Javascript for dynamic form-->
  <script language="Javascript">
    function hideA()
    {

        document.getElementById("A").style.visibility="hidden";
        document.getElementById("B").style.visibility="visible";    

    }

    function hideB()
    {
        document.getElementById("B").style.visibility="hidden";
        document.getElementById("A").style.visibility="visible";

    }
</script>
</head>

<body>
<!--Registration Form-->
<center>
<div class="container mt-5 ml-5 mr-5 pt-3 pb-3 border-top border-bottom">

    <form action="registrationPost.php" method="post">
      <div id="A">
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
      </div>

      <div id="B">
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