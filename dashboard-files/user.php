<?php 
    session_start();

    //1. Setup Database connection
    require '../functions/connection.php';

    //I. Checking if user has a profile picture

    $profilePictureDatabase = [];
    $pictureDirectory = "icons/img_placeholder.png";

    //2. Select SQL
    $selectDP = "SELECT `profile_pic` FROM `patient` WHERE `id` = " . $_SESSION['userID'];

    $result = mysqli_query($conn, $selectDP);
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($profilePictureDatabase, $row);
    }

    if(!empty($profilePictureDatabase[0]["profile_pic"])){
        $pictureDirectory = $profilePictureDatabase[0]["profile_pic"];
    }


    //II. Select address of user
    $address = [];

    //Select SQL
    $selectAddress = "SELECT * FROM `patient_contact` WHERE `pat_id` = " . $_SESSION['userID'];

    //Execute SQL
    $addressResult = mysqli_query($conn, $selectAddress);
    while ($addressRow = mysqli_fetch_assoc($addressResult)) {
        array_push($address, $addressRow);
    }

    //Closing Database Connection
    mysqli_close($conn);
?>

 <link rel="stylesheet" type="text/css" href="dashboard-files/dashboardCSS/user.css">

<div class="profileUser">
<div class="wrapper container-fluid">
    <div class="left">
        <center>
            <div class="profile-pic-div">
                <img src="<?php echo $pictureDirectory;?>" id="photo">
            </div>
        </center>

        <form action="functions/updatePatientDP.php" method="post" class="mb-0" id="profile-picture" enctype="multipart/form-data">
            <input type="file" id="picfile" name="profile-pic">
            <label for="picfile" id="uploadpic"><i class="fas fa-edit">Edit Photo</i></label>
        </form>
     
        <p id="patientName" class="mt-0"><?php echo $_SESSION['fname'] . " " . $_SESSION['lname'];?></p>

    </div>
    <div class="right pt-0">
        <div class="info mb-0">
            <h3 id="main-header">User Profile</h3>

            <form action="functions/updatePatientProfile.php" method="post">
                <div class="info_data">
                    <div class="data" id="hospital">
                        <p class="category">Address</p>        
                        <div class="container-fluid p-0" id="innerHosp">          
                            <input type="text" id="hosp autocomplete" value="<?php echo $address[0]["address"];?>" placeholder="Place your address here" name="patAddress">
                            <span class="tooltiptext">Edit</span>
                        </div>
                    </div>
                     
                    <div class="data" id="specialization" value="">
                        <p class="category">Phone Number</p>
                        <div class="container-fluid p-0" id="innerSpec">
                            <input type="text" value="<?php echo $address[0]["phone"];?>" placeholder="Phone number here" id="spec" name="patPhone">
                            <span class="tooltiptext">Edit</span>
                        </div>
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