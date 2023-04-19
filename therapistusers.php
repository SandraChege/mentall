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
    $select_refer_therapist= "SELECT * FROM `therapist_info` WHERE `therapist_id`!='$id'";
    $select_refer_therapist_result = mysqli_query($conn, $select_refer_therapist);
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
        <div class="therapistusers container-fluid">
            <div class="table-responsive">
                <h1 class="text-center text-black">CLIENT LIST</h1>
                <table class="table table-striped table-hover table-bordered" style= "margin-bottom: 15.625rem;">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <!--<th scope="col">Email</th>-->
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Diagnosis</th>
                            <th scope="refer">Refer</th>
                            <th scope= "col">Reffered Therapist</th>
                        </tr>
                    </thead>    
                    <?php
                        $id = $_SESSION['id'];

                        $select_ther_team_data = "SELECT `client_id`, `therapist_id` FROM `assigned_therapist` WHERE `therapist_id` = '$id';";
                        $select_ther_team_result = mysqli_query($conn, $select_ther_team_data);
                        //print_r($select_ther_team_result);
                        $i = 0;
                        if($select_ther_team_result){
                            while ($row  = mysqli_fetch_assoc($select_ther_team_result)) { //fetch array
                                $i++;
                                
                                $clientinformation = $row['client_id'];
                                
                                $selectclient= "SELECT  `client_name`, `Phone_No`, `email` FROM `client_info` WHERE `client_id` = '$clientinformation';";
                                $selectdiagnosis= " SELECT `client_id`, `diagnosis_name` FROM `diagnosis` WHERE `client_id` = '$clientinformation';";
                                
                                $selectclientresult = mysqli_query($conn, $selectclient);
                                $selectdiagnosisresult = mysqli_query($conn, $selectdiagnosis);
                                
                                $Rows= mysqli_fetch_assoc($selectclientresult);
                                $diseaserow = mysqli_fetch_assoc($selectdiagnosisresult);
                    ?>
                    <tr>
                        <td><?php echo $i;?></td>
                        <!--<td><?php//echo $row['user_email'];?></td>-->
                        <td><?php echo $Rows['client_name'];?></td>
                        <td><?php echo $Rows['email'];?></td>
                        <td><?php echo $Rows['Phone_No']?></td>
                        <td><?php echo $diseaserow['diagnosis_name']?></td>
                        <td>
                            <form action="therapistreferclient.php" method="post" id="referclientsbtn">
                                <input type="hidden" id="clId" name="clId" value="<?php echo $row['client_id'];?>">
                                <select name="therapist" id="therapist" class="form-select" required>
                                    <option selected>Choose one</option>
                                    <?php
                                        foreach ($select_refer_therapist_result as $therapistresult) {
                                            $therapistid=$therapistresult['therapist_id'];
                                            $therapistname=$therapistresult['therapist_name'];
                                            //$therapistcountquery="SELECT  FROM `client_info` WHERE `th_ID`='$therapistid'";//count number of ids
                                            //$therapistcountres=mysqli_query($mysqli,$therapistcountquery);
                                            //$therapistcount=mysqli_fetch_assoc($therapistcountres);
                                            //$count=$therapistcount['COUNT(`clth_ID`)'];
                                    ?>
                                    <option value="<?php echo $therapistid;?>"><?php echo $therapistname;?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                                </td>
                                <td>
                                    <input type="submit" value="Refer" name="submit">
                                </td>
                            </form>
                        </td>
                        <!--<td>
                            <form id="referclientsbtn" action="therapistreferclient.php" method="post">
                                <input type="hidden" name="clientkitambulisho" value= "<?php //echo $row['client_id'];?>">
                                <input type="submit" value="Refer" name="Refer">
                            </form>
                        </td>-->
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
<?php
}else{
    echo 'no session';
}
?>