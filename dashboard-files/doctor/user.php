<?php 
    session_start();

    $specialization = [];

    //1. Setup Database connection
    $servername = "localhost";
    $db_username = "root"; //xampp default
    $db_password = "";  //xampp default
    $database = "medicaide";

    $conn = mysqli_connect($servername, $db_username, $db_password, $database);
    //I. Finding specializations in the database
    //2. Select SQL
    $sql = "SELECT * FROM `specialization` ORDER BY `id` ASC";

    //3. Execute Select Query
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
    array_push($specialization, $row);
    }


    //II. Checking if user has a profile picture

    $profilePictureDatabase = [];
    $pictureDirectory = "icons/img_placeholder.png";

    //2. Select SQL
    $selectDP = "SELECT `profile_pic` FROM `doctor` WHERE `id` = " . $_SESSION['userID'];

    $result = mysqli_query($conn, $selectDP);
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($profilePictureDatabase, $row);
    }

    if(!empty($profilePictureDatabase[0]["profile_pic"])){
        $pictureDirectory = $profilePictureDatabase[0]["profile_pic"];
    }

    //Closing Database Connection
    mysqli_close($conn);
?>

<link rel="stylesheet" type="text/css" href="dashboard-files/doctor/css/user.css">

<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<div class="wrapper container-fluid">
    <div class="left">
        <center>
            <div class="profile-pic-div">
                <img src="<?php echo $pictureDirectory;?>" id="photo">
            </div>
        </center>
        <form action="functions/updateDoctorDP.php" method="post" id="profile-picture" enctype="multipart/form-data">
            <input type="file" id="picfile" name="profile-pic">
            <label for="picfile" id="uploadpic" ><i class="fas fa-edit">Edit Photo</label></i>
        </form>
     
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
                            <button type="button" class="btn btn-success btn-sm">Edit Schedule</button>
                        </div>
                        <button type="button" class="btn btn-danger btn-sm mt-2" id="addHosp">Add</button>
                    </div>
                     
                    <div class="data" id="specialization" value="">
                        <p class="category">Specialization</p>
                        <div class="container-fluid p-0" id="innerSpec">
                            <div class="form-group" id="specialization-group">
                                <select class="form-control" name="doctorSpec" id="spec">
                                    <option value="">Select a specialization</option>
                                    <?php

                                    for ($ctr = 0; $ctr < count($specialization); $ctr++){
                                        $optionValue = $ctr + 1;

                                        echo '<option value="' . $optionValue . '">' . $specialization[$ctr]["value"] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
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