<link rel="stylesheet" type="text/css" href="dashboard-files/doctor/css/user.css">

<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<div class="wrapper">
    <div class="left">
        <div class="profile-pic-div">
        <img src="icons/img_placeholder.png" id="photo">

            

        </div>

        <input type="file" id="picfile">
        <label for="picfile" id="uploadpic" ><i class="fas fa-edit">Edit Photo</label></i>
     
        <p id="docName">Name Goes Here</p>

    </div>
    <div class="right pt-0">
        <div class="info">
            <h3 id="main-header">User Profile</h3>
            <div class="info_data">
                <div class="data">
                    <p class="category">Current Hospital</p>                  
                    <input type="text" placeholder="Makati Medical Center">
                    <span class="tooltiptext">Edit</span>
                    <button type="button" class="btn btn-success btn-sm">Edit Schedule</button>
                    <button type="button" class="btn btn-danger btn-sm">Add</button>
                </div>
                 
                <div class="data" value="">
                    <p class="category">Specialization</p>
                    
                    <input type="text" placeholder="surgery">
                    <span class="tooltiptext">Edit</span>
                    <button type="button" class="btn btn-danger btn-sm">Add</button>
                </div>
            
            </div>
        </div> 
      
        <div class="UPDATE">           
            <input type="submit" value="Update">
        </div>
    </div>
</div>