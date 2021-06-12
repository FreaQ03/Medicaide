<doctype html>
<?php
  //security check
  session_start();

  if(isset($_SESSION['isLogin'])){
    if($_SESSION['isLogin'] == true){
      header('Location: dashboard.php');
    }
  }
?>
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
    <link rel="stylesheet" type="text/css" href="css/logincss.css">

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="navbar-color">
  <div class="container-fluid sticky-top">
    <a class="navbar-brand" href="#" style="color: #A4292E;"><b>MEDICAIDE</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" href="index.php" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
      <div class="nav-links">
        <ul>
          <a href="index.php#aboutUs"><li>ABOUT US</li></a>
          <a href="index.php#aboutUs"><li>CONTACT US</li></a>
   
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
          
  <!--Start of Main Body-->
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <div class="login-brand" href="#" style="color: #A4292E;"><b>MEDICAIDE</b> </div>
        <div class="placeholdperry" href="#" style="color: #A4292E;"><b>(Replaced with logo or add phrase below idk )</b> </div>
      </div>
      <div class="col-sm">
        <div class="center">
          <h1>Login</h1>

          <?php
            if (isset($_GET['credentials'])) { //check if credentials key exists in URL
              if ($_GET['credentials'] == "false") {
                echo '
                  <br>
                  <div class="alert alert-danger invalid-credentials" align="center" role="alert">
                    Invalid Email / Password.
                  </div>
                ';
              }
            }
          ?>
          <div class="container" id="login-user-type">
            <center>
              <h4>Please pick a user type</h4>
              <br>
              <input type="image" src="img/DocIcon-Login.png" class="pickUser" id="doctor">
              <input type="image" src="img/UserIcon-Login.png" class="pickUser" id="patient">
            </center>
          </div>
        </div>
      </div>
    </div>
  </div>
  
    

  

  <!--Bootstrap Javascript-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

  <!--Ajax-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!--Picking User Type JS-->
  <script>
    const xhr = new XMLHttpRequest();
    const container = document.getElementById("login-user-type");

    xhr.onload = function(){
      if (this.status === 200) {
        container.innerHTML = xhr.responseText;
      }
      else {
        console.warn("Did not receive 200 OK from response!");
      }
    };
    
    $( "input:image[id=patient]" ).on( "click", function() {
      event.preventDefault();
      xhr.open("get", "login_patient.php");
      xhr.send();

    });

    $( "input:image[id=doctor]" ).on( "click", function() {
      event.preventDefault();
      xhr.open("get", "login_doctor.php");
      xhr.send(); 

  });

  </script>
</body>
</html>

