<link rel="stylesheet" type="text/css" href="dashboard-files/doctor/css/user.css">

<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<div class="wrapper container-fluid">
    <div class="left">
        <center>
            <div class="profile-pic-div">
                <img src="icons/img_placeholder.png" id="photo">
            </div>
        </center>

        <input type="file" id="picfile">
        <label for="picfile" id="uploadpic" ><i class="fas fa-edit">Edit Photo</label></i>
     
        <p id="docName">Name Goes Here</p>

    </div>
    <div class="right pt-0">
        <div class="info mb-0">
            <h3 id="main-header">User Profile</h3>

            <form action="functions/updateDoctorProfile.php" method="post">
                <div class="info_data">
                    <div class="data" id="hospital">
                        <p class="category">Current Hospital</p>        
                        <div class="container-fluid p-0" id="innerHosp">          
                            <input type="text" id="hosp autocomplete" placeholder="Makati Medical Center" name="doctorHosp">
                            <span class="tooltiptext">Edit</span>
                            <button type="button" class="btn btn-success btn-sm">Edit Schedule</button>
                        </div>
                        <button type="button" class="btn btn-danger btn-sm mt-2" id="addHosp">Add</button>
                    </div>
                     
                    <div class="data" id="specialization" value="">
                        <p class="category">Specialization</p>
                        <div class="container-fluid p-0" id="innerSpec">
                            <input type="text" placeholder="surgery" id="spec" name="doctorSpec">
                            <span class="tooltiptext">Edit</span>
                        </div>
                        <button type="button" class="btn btn-danger btn-sm" id="addSpec">Add</button>
                    </div>
                </div>
                <div class="UPDATE mt-3">           
                    <input type="submit" value="Update">
                </div>
            </form>

        </div> 
    </div>
</div>

<!--
<script>
    let autocomplete;
    function initMap(){
        autocomplete = new google.maps.places.Autocomplete(document.getElementById('autocomplete'),
            {

            }
        )
    }
</script>
<script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNhUxODxb5Ou1nuTITaSaXJ-IsCaqhczM&libraries=places&callback=initMap">
</script>
-->