 <link rel="stylesheet" type="text/css" href="dashboard-files/dashboardCSS/user.css">

<div class="profileUser">
<div class="wrapper container-fluid">
    <div class="left">
        <center>
            <div class="profile-pic-div">
                <img src="icons/img_placeholder.png" id="photo">
            </div>
        </center>

        <input type="file" id="picfile">
        <label for="picfile" id="uploadpic"><i class="fas fa-edit">Edit Photo</label></i>
     
        <p id="docName">Name Goes Here</p>

    </div>
    <div class="right pt-0">
        <div class="info mb-0">
            <h3 id="main-header">User Profile</h3>

            <form action="functions/updateDoctorProfile.php" method="post">
                <div class="info_data">
                    <div class="data" id="hospital">
                        <p class="category">Address</p>        
                        <div class="container-fluid p-0" id="innerHosp">          
                            <input type="text" id="hosp autocomplete" placeholder="Brgy. 183, Villamor, Pasay City" name="doctorHosp">
                            <span class="tooltiptext">Edit</span>
                            <button type="button" class="btn btn-success btn-sm">Edit Schedule</button>
                        </div>
                        <button type="button" class="btn btn-danger btn-sm mt-2" id="addHosp">Add</button>
                    </div>
                     
                    <div class="data" id="specialization" value="">
                        <p class="category">Phone Number</p>
                        <div class="container-fluid p-0" id="innerSpec">
                            <input type="text" placeholder="+63 980 9876 451" id="spec" name="doctorSpec">
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
</div>