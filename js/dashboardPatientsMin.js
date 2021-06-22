const xhr = new XMLHttpRequest();
const container = document.getElementById("dynamicElement");

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

//Live search function for search doctors
$(document).on("keyup", "#doctorSearch", function() {
  
  var search = $(this).val();

  $.ajax({
    url:'functions/asyncSearch.php',
    method:'post',
    data:{query:search},
    success:function(response){
      $("#doctorList").html(response);
    }
  });
  
});

//Functional dropdown on journal page
$(document).on("click", ".withDate", function() {
  
  var date = $(this).text();
  $("#output").val("");

  $.ajax({
    url:'functions/asyncPrescDate.php',
    method:'post',
    data:{query:date},
    success:function(response){
      $("#output").val(response);
    }
  });
  
});


//Automatic redirection if element has "page" php element
if (window.location.href.indexOf("page") > -1) {
  xhr.open("get", "dashboard-files/search.php");
  xhr.send();
}

//When user updates profile-pic, automatic form submit
$(document).on("change", "#picfile", function() {
  $("#profile-picture").submit();
});

$("#calendar_button").on('click', function(event) {
  event.preventDefault();
  xhr.open("get", "dashboard-files/calendar.php");
  xhr.send();
});

$("#search").on('click', function(event) {
  event.preventDefault();
  $('#verifyModal').modal('show');
});

$("#prescriptions").on('click', function(event) {
  event.preventDefault();
  xhr.open("get", "dashboard-files/prescriptions.php");
  xhr.send();
});

$("#journal").on('click', function(event) {
  event.preventDefault();
  $('#verifyModal').modal('show');
});

$("#user").on('click', function(event) {
  event.preventDefault();
  xhr.open("get", "dashboard-files/user.php");
  xhr.send();
});