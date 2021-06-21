<?php 
    session_start();

    $specialization = [];

    //1. Setup Database connection
    require '../../functions/connection.php';
    
    //I. Get specialization of doctor
    $specValue = [];

    $selectSpecialization = "SELECT specialization.`value`, doctor.`specialization` FROM `specialization` INNER JOIN `doctor` ON specialization.`id` = doctor.`specialization` WHERE doctor.`id` = " . $_SESSION['userID'];

    $result = mysqli_query($conn, $selectSpecialization);
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($specValue, $row);
    }

    //II. Finding specializations in the database
    //2. Select SQL
    $sql = "SELECT * FROM `specialization` WHERE `value` != '" . $specValue[0]["value"] . "' ORDER BY `id` ASC";

    //3. Execute Select Query
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
    array_push($specialization, $row);
    }


    //III. Checking if user has a profile picture

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

    //IV. Get hospital of doctor
    $docHospital = [];

    $selectHosp = "SELECT * FROM `doctor_hospitals` WHERE `doc_id` = " . $_SESSION['userID'];

    $result = mysqli_query($conn, $selectHosp);
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($docHospital, $row);
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
            <label for="picfile" id="uploadpic" ><i class="fas fa-edit">Edit Photo</i></label>
        </form>
     
        <p id="docName"><?php echo $_SESSION['fname'] . " " . $_SESSION['lname'];?></p>

    </div>
    <div class="right pt-0">
        <div class="info mb-0">
            <h3 id="main-header">User Profile</h3>

            <form action="functions/updateDoctorProfile.php" method="post">
                <div class="info_data">
                    <div class="data" id="hospital">
                        <p class="category">Current Hospital</p>        
                        <div class="container-fluid p-0" id="innerHosp">          
                            <input type="text" id="hosp autocomplete" placeholder="Enter Hospital Here" value="<?php echo $docHospital[0]["hospital"]; ?>" name="doctorHosp">
                            <a class="btn btn-success btn-sm" href="doc_editSched.php" role="button">Edit Hospital</a>
                        </div>
                        <button type="button" class="btn btn-danger btn-sm mt-2" id="addHosp">Add</button>
                    </div>
                     
                    <div class="data" id="specialization" value="">
                        <p class="category">Specialization</p>
                        <div class="container-fluid p-0" id="innerSpec">
                            <div class="form-group" id="specialization-group">
                                <select class="form-control" name="doctorSpec" id="spec">
                                    <option value=""><?php echo $specValue[0]["value"]; ?></option>
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