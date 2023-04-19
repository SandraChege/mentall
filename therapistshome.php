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
    <style>
        /* Style for the outer container with class "bg-soft" */
        .bg-soft {
            background-color: #f8f9fa;
            padding: 20px;
        }

        /* Style for the larger column with class "col-7" */
        .col-7 {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }

        /* Style for the smaller column with class "col-5" */
        .col-5 {
            display: flex;
            justify-content: flex-end;
            align-items: flex-end;
        }

        /* Style for the text inside the larger column */
        .text-black {
            color: #000;
            font-size: 18px;
            font-weight: bold;
            margin: 0;
            padding: 0;
        }

        /* Style for the profile image */
        .img-fluid {
            max-width: 100%;
            height: auto;
        }
    </style>
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
        <div class="container overflow-hidden">
            <div class="image-content">
                <div class="therimage">
                    <div class=" bg-image d-flex justify-content-center align-items-center"  style="background-image:url('images/therhome.jpg'); height: 50vh;">
                            <div class="mask d-flex justify-content-center align-items-center" style="background-color: hsla(0, 0%, 0%, 0.6); height: 100%; width: 100%;">
                                <div>
                                    <!--<h2 style="color: #EAEDE7; font-size: 30px; font-family: poppins;">
                                        How does mentihub work?
                                    </h2>-->
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="contennt1" style="margin:20px; line-height:30px;">
                    <p> Welcome to Mentihub <?php echo $_SESSION['name'];?>.</p>
                    <p>
                        We're delighted to have you visit our website. As a therapist, we understand the importance of finding the right platform to connect with clients and provide counseling services. At our practice, we offer professional counseling services to individuals in need of support. We are committed to maintaining the highest standards of care and ensuring the safety and well-being of our clients. As part of our process, we have a vetting procedure in place to ensure that our therapists are qualified and experienced to offer the best care to our clients. Once you have signed in and submitted the necessary documents, our team will review your credentials and experience. We appreciate your patience as we carefully review each submission to ensure the quality and professionalism of our practice.
                    </p>
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