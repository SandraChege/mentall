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
            <li class="nav-item w-100"> <a href="logout.php" class="nav-link pl-4"><i class="fas fa-sign-out-alt"></i></i><span class="nav-item">Logout</span> </a> </li>
        </ul>
    </nav>
    <section class="p-4 my-container ">
        <div class="therapistappointments container-fluid">
            <h1 class="text-center text-black">CLIENT LIST</h1>
            <table class="table table-striped table-hover table-bordered" style= "margin-bottom: 15.625rem;">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Time</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>    
                <?php
                    $id = $_SESSION['id'];
                    $select_appointment_team_data = "SELECT `client_id`, `therapist_id` FROM `assigned_therapist` WHERE `therapist_id` = '$id';";
                    $select_appointment_team_result = mysqli_query($conn, $select_appointment_team_data);
                    //print_r($select_ther_team_result);
                    $i = 0;
                    if($select_appointment_team_result){
                        while ($row  = mysqli_fetch_assoc($select_appointment_team_result)) { //fetch array
                            $i++;
                            //$therinformation = $row['therapist_id'];
                            $clientinformation = $row['client_id'];
                            //$selectther = "SELECT `therapist_name`, `email` FROM `therapist_info` WHERE `therapist_id` = '$therinformation';";
                            $selectclient= "SELECT  `client_name`, `Phone_No`, `email` FROM `client_info` WHERE `client_id` = '$clientinformation';";
                            $selectstatus = "SELECT `client_id`, `date`, `time`, `status` FROM `appointments` WHERE `client_id`= '$clientinformation';";
                            $selectstatusresult = mysqli_query($conn, $selectstatus);
                            //$selecttherresult = mysqli_query($conn, $selectther);
                            $selectclientresult = mysqli_query($conn, $selectclient);
                            //print_r($selecttherresult);
                            //$rows = mysqli_fetch_assoc($selecttherresult);
                            $Rows= mysqli_fetch_assoc($selectclientresult);
                            $mows = mysqli_fetch_assoc($selectstatusresult);
                ?>
                    <tr>
                        <td><?php echo $i;?></td>
                        <!--<td><?php//echo $row['user_email'];?></td>-->
                        <td><?php echo $Rows['client_name'];?></td>
                        <td><a href=""><?php echo $Rows['email'];?></a></td>
                        <td><?php echo $Rows['Phone_No']?></td>
                        <td><?php echo $mows['time']?></td>
                        <td><?php echo $mows['date']?></td>
                        <td><?php echo $mows['status']?></td>
                    </tr>
                        <?php
                                }
                            }                                                
                        ?>
                    </thead>
            </table>
        </div>  
    </section>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
<?php
}else{
    echo 'no session';
}
?>