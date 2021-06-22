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

xhr.open("get", "dashboard-files/calendar.php");
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

//AJAX for when doctor clicks accept (update database)
$(document).on("click", ".acceptRequest", function(){
  var appointmentID = $(this).val();

  $.ajax({
    url:'functions/acceptAppointment.php',
    method:'post',
    data:{appointment_ID:appointmentID},
    success:function(response){
      console.log(response);
    }
  });
});

//AJAX for when doctor clicks decline (update database)
$(document).on("click", ".declineRequest", function(){
  var appointmentID = $(this).val();

  $.ajax({
    url:'functions/declineAppointment.php',
    method:'post',
    data:{appointment_ID:appointmentID},
    success:function(response){
      console.log(response);
    }
  });
});

$("#calendar_button").on('click', function(event) {
  event.preventDefault();
  xhr.open("get", "dashboard-files/doctor/calendar.php");
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