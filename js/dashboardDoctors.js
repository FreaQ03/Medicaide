$('#verificationNotif').modal('show');
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
  $('#verificationNotif').modal('show');

});

$("#journal").on('click', function(event) {
  event.preventDefault();
  $('#verificationNotif').modal('show');
});

$("#user").on('click', function(event) {
  event.preventDefault();
  $('#verificationNotif').modal('show');

});