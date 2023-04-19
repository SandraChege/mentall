<?php
    include 'config/config.php';
    session_start();
    if(isset($_SESSION['id']) && isset($_SESSION['name'])){
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
    <!--<link rel="stylesheet" href="css/mentihub.css">-->
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
            <!--<li class="nav-item w-100"><a href="adminhome.php" class="nav-link pl-4"><i class="fa-solid fa-house"></i><span class="nav-item">Home</span></a> </li>-->
            <!--<li class="nav-item w-100"> <a href="admintherapists.php" class="nav-link pl-4"><i class="fa-solid fa-users"></i><span class="nav-item">Therapists</span></a> </li>-->
            <li class="nav-item w-100"> <a href="adminusers.php" class="nav-link pl-4"><i class="fa-solid fa-user"></i><span class="nav-item">Users</span></a></li>
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Therapists button
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li class="dropdown-nav-item"> <a class="dropdown-item" href="adminpendingtherapists.php"><i class="fa-solid fa-users"></i><span class="nav-item">Pending therapists</span></a></li>
                    <li class="dropdown-nav-item"> <a class="dropdown-item" href="admintherapists.php">Therapists</a></li>
                </ul>
            </div>
            <li class="nav-item w-100"> <a href="adminappointments.php" class="nav-link pl-4"><i class="fa-solid fa-calendar-check"></i><span class="nav-item">Appointments</span></a></li>
            <li class="nav-item w-100"> <a href="admincareteam.php" class="nav-link pl-4"><i class="fa-solid fa-people-group"></i><span class="nav-item">Care team</span></a></li>
            <li class="nav-item w-100"> <a href="adminprofile.php" class="nav-link pl-4"><i class="fa-solid fa-address-card"></i><span class="nav-item">My profile</span></a></li>
            <li class="nav-item w-100"> <a href="adminlogout.php" class="nav-link pl-4"><i class="fas fa-sign-out-alt"></i></i><span class="nav-item">Logout</span> </a> </li>
    </nav>
    <section class="p-4 my-container ">
        <div class="appointment_list container-fluid">
            <div class="table-responsive">
                <h1 class="text-center text-black">APPROVED THERAPISTS</h1>
                <table class="table table-striped table-hover table-bordered" style= "margin-top: 3rem;">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone number</th>
                            <th scope="col">Designation</th>
                            <th scope="col">Specialization</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <?php
                        $id = $_SESSION['id'];//admin id

                        $select_therapist_team_data = "SELECT * FROM `therapist_info` WHERE doc_qualifications = 'approved' ORDER BY therapist_id;";
                        $select_therapist_team_result = mysqli_query($conn, $select_therapist_team_data);
                        //print_r($select_therapist_team_result);
                        $i = 0;
                        if($select_therapist_team_result){
                            while ($row  = mysqli_fetch_assoc($select_therapist_team_result)) { //fetch array
                                $i++;
                                $therapistid = $row['therapist_id'];
                    ?>
                    <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $row['therapist_name'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['Phone_No'];?></td>
                        <td><?php echo $row['doctor_type'];?></td>
                        <td><?php echo $row['doc_disease'];?></td>
                        <td>
                            <form id="deletetherapistbtn" action="admindeletetherapist.php" method="post">
                                <input type="hidden" name="id" value= "<?php echo $row['therapist_id'];?>">
                                <input type="submit" value="Delete" name="delete">
                            </form>
                        </td>
                    </tr>
                    <?php 
                            }
                        }
                    ?>
                </table> 
            </div>
        </div>  
    </section>    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
<?php
}else{
    header("location:adminsignin.php?message=Please sign in");
}
?>