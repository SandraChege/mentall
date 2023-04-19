<?php
session_start();
include 'config/config.php';
if(isset($_SESSION['id']) && isset($_SESSION['name'])){
    $id=$_SESSION['id'];
    $qualification_check = "SELECT `doc_qualifications`FROM therapist_info WHERE therapist_id = '$id';"; 
    $result_qualification_check = mysqli_query($conn, $qualification_check);
    $row = mysqli_fetch_assoc($result_qualification_check);
    $qualification = $row['doc_qualifications'];
    if ($qualification == "undefined"){
        header(("location:therapistqualification.php"));
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentihub</title>
    <!--FAVICON-->
    <link rel="icon" type="image/x-icon" href="images/Logo.png">
    <!--css link-->
    <link rel="stylesheet" href="css/therapistadmin.css">
    <link rel="stylesheet" href="css/mentihub.css">
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!--bootstrap link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!--<nav class="side-bar active-nav d-flex justify-content-between flex-wrap flex-column" id="sidebar"> music:https://www.youtube.com/watch?v=5WZu2jmp6GE-->
    <nav class="navbar navbar-expand d-flex flex-column align-item-start" id = "sidebar">
        <a href="#" class="navbar-brand">
            <img src="images/Logo.png" alt="logo" height="50px" width="50px">
            <div class="font-weight-bold">
                Mentihub
            </div>
        </a>
        <ul class="navbar-nav d-flex flex-column mt-5 w-100">
            <li class="nav-item w-100"><a href="therapistshome.php" class="nav-link pl-4"><i class="fa-solid fa-house"></i><span class="nav-item">Home</span></a> </li>
            <li class="nav-item w-100"> <a href="therapistusers.php" class="nav-link pl-4"><i class="fa-solid fa-user"></i><span class="nav-item">Users</span></a></li>
            <li class="nav-item w-100"> <a href="therapistappointments.php" class="nav-link pl-4"><i class="fa-solid fa-calendar-check"></i><span class="nav-item">Appointments</span></a></li>
            <li class="nav-item w-100"> <a href="therapistprofile.php" class="nav-link pl-4"><i class="fa-solid fa-address-card"></i><span class="nav-item">My profile</span></a></li>
            <li class="nav-item w-100"> <a href="logout.php" class="nav-link pl-4"><i class="fas fa-sign-out-alt"></i></i><span class="nav-item">Logout</span> </a> </li>
        </ul>
    </nav>
    <section class="p-4 my-container ">
        <div class="container">
            <?php
                $therapistid =  $_SESSION['id'];
                $therapistprofile = "SELECT * FROM `therapist_info` WHERE therapist_id = '$therapistid';";
                $therapist_profile_result = mysqli_query($conn, $therapistprofile);
            ?>
            <?php
                if($therapist_profile_result){
                    while ($row  = mysqli_fetch_array($therapist_profile_result)){
            ?>
            <div class="myprofile-info">
                <p>
                    Hello <span> <?php echo $row['therapist_name']?> </span>.
                </p>
                <h6>This is your profile page. You can see your information here and make changes.</h6>
                <div class="form-table-profile">
                    <form action="">
                        <table class=""> 
                            <!--Email-->
                            <tr id="profdata">
                                <td>Email Address:<span style="width:300px; display:inline-block;" class= "userinfo"><?php echo $row['email']?></span></td>
                            </tr> 
                            <!--Phone number-->
                            <tr id="profdata">
                                <td>Phone Number:<span style="width:300px; display:inline-block;" class= "userinfo"> <?php echo $row['Phone_No']?> </span></td>
                            </tr>
                            <!--Email-->
                            <tr id="profdata">
                                <td>Designation:<span style="width:300px; display:inline-block;" class= "userinfo"><?php echo $row['doctor_type']?></span></td>
                            </tr> 
                            <!--Phone number-->
                            <tr id="profdata">
                                <td>Specialization:<span style="width:300px; display:inline-block;" class= "userinfo"> <?php echo $row['doc_disease']?> </span></td>
                            </tr>  
                            <?php 
                                    }
                                }
                            ?>      
                        </table>
                    </form>
                </div>
                <div class="change-profileinfo">
                    <P>
                        Change Passowrd
                    </P>
                    <form action="therapistprofilepassword.php" method="post">
                        <!--Can only change password and phonenumber-->
                        <div class="mb-3">
                            <label for="inputPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" name="Password" id="inputPassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="Password" required>
                        </div>
                        <div class="mb-3">
                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmPassword" name="ConfirmPassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="Password" required>
                        </div>
                        <input type="submit" value="Submit" name = "submit">
                    </form>
                </div>
            </div> 
        </div>
    </section>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
<?php
}else{
    echo 'no session';
}
?>