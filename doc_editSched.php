<doctype html>

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
   <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="css/doc_editSched.css">
  <link rel="stylesheet" type="text/css" href="css/indexfile.css">
</head>

<body>


  <div class="center">
    <h1>Edit Schedule</h1>
    <form id="registerForm" action="functions/registrationPost.php" method="post">




      <div class="user_info justify-content-center">
      <div class="txt_field">
        <input type="text" name="Hospital" required>
        <span></span>
        <label>Hospital</label>
      </div>
      </div>


<table class="main-table justify-content-center">
<thead>
  <tr>
    <th><label>Day: </label></th>
    <th><label>Start time: </label></th>
    <th><label>End time: </label></th>
  </tr>
</thead>
<tbody>
  <tr>
    <td><div class="form-group registration justify-content-center">
                <select class="Day" id="Day" name="Day" >
                  <option value="Sunday">Sunday</option>
                  <option value="Monday">Monday</option>
                  <option value="Tuesday">Tuesday</option>
                  <option value="Wednesday">Wednesday</option>
                  <option value="Thursday">Thursday</option>
                  <option value="Friday">Friday</option>
                  <option value="Saturday">Saturday</option>
                </select>

              </div> 
    </td>
    <td> <div class="start_time">
      <input type="time" required>
        </div>
    </td>
    <td> <div class="end_time">
      <input type="time" required>
        </div>
    </td>
  </tr>
</tbody>
</table>

              <button type="button" class="btn btn-success">Add Schedule</button>
              <input type="submit" value="Submit">
      <div class="register_link mt-2"> 
         <a href="login.php"></a>
      </div>
      </div>

      </div>
      </div>
    </form>

</body>
</html>