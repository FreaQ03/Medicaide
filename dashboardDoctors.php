<doctype html>
<head>

	<!--Boostrap CSS-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!--w3schools-->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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

	<!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="css/dashboardDoctors.css">
</head>

<body>

<!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-light sticky-top" id="navbar-color">
    <div class="container-fluid sticky-top">
      <a class="navbar-brand" href="#" style="color: white;"><b>MEDICAIDE</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          </ul>
        <div class="nav-links">
          <ul>
            <a href="#aboutUs" style="color: white;"><li>ABOUT US</li></a>
            <a href="#aboutUs" style="color: white;"><li>CONTACT US</li></a>
          </ul>
      </div>   
        <div class="navbar-welc">
          <p class="navbar-brand m-0 p-0" href="#" style="color: white;"><b>Welcome, <?php echo $_SESSION['fname'];?>!</b></p>
        </div>
          </li> 
    </div>
    </div>
  </nav>

<div class="container m-0 p-0 d-inline" id="dynamicBody">

  <!--SIDEBAR-->
  <ul class="nav d-inline-flex flex-column justify-content-center" id="dash-sidebar">
    <li class="nav-item">
      <a class="nav-link sidebar-icon" id="calendar_button" aria-current="page" href="#" style="color: #A4292E;"><i class="fas fa-calendar-plus fa-2x"><span id="font"> Calendar</span></i></a>
    </li>
    <li class="nav-item">
      <a class="nav-link sidebar-icon" id="prescriptions" aria-current="page" href="#" style="color: #A4292E;"> <i class="fas fa-notes-medical fa-2x"><span id="font"> Prescriptions</span></i></a>
    </li>
    <li class="nav-item">
      <a class="nav-link sidebar-icon" id="journal" aria-current="page" href="#" style="color: #A4292E;"> <i class="fas fa-sticky-note fa-2x"><span id="font"> View Journals</span></i></a>
    </li>
    <li class="nav-item">
      <a class="nav-link sidebar-icon" id="user" aria-current="page" href="#" style="color: #A4292E;"> <i class="fas fa-user fa-2x"><span id="font"> Profile</span></i></a>
    </li>
    <li class="nav-item">
      <a class="nav-link sidebar-icon" id="user" aria-current="page" href="functions/logout.php" style="color: #A4292E;"> <i class="fas fa-sign-out-alt fa-2x"><span id="font"> Log out</span></i></a>
    </li>
  </ul>

  <!--Content goes here-->
  <center>
    <div id="dynamicElement">

    </div>
  </center>

</div>


<div class="container m-0 p-0 d-inline" id="dynamicBody">
<!--TOAST-->

  <div aria-live="polite" aria-atomic="true" style="position: static; min-height: 200px;">
    <!-- Position it -->
    <div style="position: absolute; top: 80px !important; right: 10px;">


      <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
        <div class="toast-header">
          <img src=" " class="rounded mr-2" alt="...">
          <strong class="mr-auto">Name Here</strong>
        </div>
        <div class="toast-body">
          (name) wants to book an appointment at (time) (date) (idk yung content)
        </div>
        <div class="doc_choice">
        <button type="button" class="dismissbtn btn-success" data-dismiss="toast" >
            ACCEPT
          </button>
        <button type="button" class="dismissbtn btn-danger" data-dismiss="toast" >
            DECLINE
        </button>
      </div>
    </div>

          <!-- When auto added marami na notif, stacked sila automatically -->

          <!-- EXAMPLE
                
      <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
        <div class="toast-header">
          <img src=" " class="rounded mr-2" alt="...">
          <strong class="mr-auto">Name Here</strong>
        </div>
        <div class="toast-body">
          (name) wants to book an appointment at (time) (date) (idk yung content)
        </div>
        <div class="doc_choice">
        <button type="button" class="dismissbtn btn-success" data-dismiss="toast" >
            ACCEPT
          </button>
        <button type="button" class="dismissbtn btn-danger" data-dismiss="toast" >
            DECLINE
        </button>
      </div>
    </div>
          
           -->






    </div>
  </div>
</div>
</div>

  <!--Bootstrap Javascript-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  <script>
    $('.toast').toast('show');
  </script>

  <!--Full Jquery for other functions-->
  <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

  <script>
    var addFunctionsDefined = false;

    //for main dashboard page
    const xhr = new XMLHttpRequest();
    const container = document.getElementById("dynamicElement");

    //Appending content of the HTTP Request (from the php files) to the container
    xhr.onload = function(){
      if (this.status === 200) {
        container.innerHTML = xhr.responseText;
      }
      else {
        console.warn("Did not receive 200 OK from response!");
      }
    };

    xhr.open("get", "dashboard-files/doctor/calendar.php");
    xhr.send();

    //Live search function for search patients
    $(document).on("keyup", "#search-bar", function() {
      
      var search = $(this).val();

      $.ajax({
        url:'functions/asyncSearchPatient.php',
        method:'post',
        data:{query:search},
        success:function(response){
          $(".row").html(response);
        }
      });
      
    });


    $(document).on("click", "#showForm", function() {
      var patientID = $(this).val();

      $.ajax({
        url:'functions/showCreateForm.php',
        method:'post',
        data:{userID:patientID},
        success:function(response){
          $(".presWrapper").html(response);
        }
      });
    });

    $("#calendar_button").on('click', function(event) {
      event.preventDefault();
      xhr.open("get", "dashboard-files/doctor/calendar.php");
      xhr.send();
    });

    $("#clock").on('click', function(event) {
      event.preventDefault();
      xhr.open("get", "dashboard-files/doctor/clock.php");
      xhr.send();
    });

    $("#prescriptions").on('click', function(event) {
      event.preventDefault();
      xhr.open("get", "dashboard-files/doctor/prescriptions.php");
      xhr.send();

      function addPresForm() {
        $(".presWrapper").css("visibility", "visible");
        
      }
      
      $(document).on("click", "#showForm", function(){
        addPresForm();
      });

    });

    $("#journal").on('click', function(event) {
      event.preventDefault();
      xhr.open("get", "dashboard-files/doctor/journal.php");
      xhr.send();
    });

    $("#user").on('click', function(event) {
      event.preventDefault();
      xhr.open("get", "dashboard-files/doctor/user.php");
      xhr.send();

      var am = 1;
      var pm = 1;
      
      if (addFunctionsDefined == false){
        //Add button JS for Hospitals
        function addHosp() {
          var newText = $('<input />').attr('type','text').attr('placeholder', 'Makati Medical Center').attr('class','mt-2').attr('id','hosp'+am+' autocomplete').attr('name','doctorHosp'+am);
          var newBtn = $('<button />').attr('id','sched'+am).attr('type','button').attr('class','btn btn-success btn-sm').html('Edit Schedule');
          $('#innerHosp').append(newText);
          $('#innerHosp').append(newBtn);
          am++;
        }

        function addSpecialization(){
          $("#specialization-group").clone().appendTo("#innerSpec");

          pm++;
        }

        $(document).on("click", "#addHosp", function(){
          addHosp();
        });        

        $(document).on("click", "#addSpec", function(){
          addSpecialization();
        });

        $(document).on("change", "#picfile", function() {
          $("#profile-picture").submit();
        });

        addFunctionsDefined = true;
      }

    });

  </script>

  <script>
    // Selecting the iframe element
    var iframe = document.getElementById("calendarFrame");
    
    // Adjusting the iframe height onload event
    iframe.onload = function(){
        iframe.style.height = iframe.contentWindow.document.body.scrollHeight + 'px';
    }
  </script>

  <script>
    
    

  </script>

</body>
</html>