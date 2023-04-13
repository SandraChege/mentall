<!DOCTYPE html>
<?php
    include 'config/config.php';
    session_start();
    if(isset($_SESSION['id']) && isset($_SESSION['name'])){
?>
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
    <!--<link rel="stylesheet" href="css/admin.css">-->
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
            <li class="nav-item w-100"> <a href="admintherapists.php" class="nav-link pl-4"><i class="fa-solid fa-users"></i><span class="nav-item">Therapists</span></a> </li>
            <li class="nav-item w-100"> <a href="adminusers.php" class="nav-link pl-4"><i class="fa-solid fa-user"></i><span class="nav-item">Users</span></a></li>
            <li class="nav-item w-100"> <a href="adminappointments.php" class="nav-link pl-4"><i class="fa-solid fa-calendar-check"></i><span class="nav-item">Appointments</span></a></li>
            <li class="nav-item w-100"> <a href="admincareteam.php" class="nav-link pl-4"><i class="fa-solid fa-people-group"></i><span class="nav-item">Care team</span></a></li>
            <li class="nav-item w-100"> <a href="adminlogout.php" class="nav-link pl-4"><i class="fas fa-sign-out-alt"></i></i><span class="nav-item">Logout</span> </a> </li>
        </ul>
    </nav>
    <section class="p-4 my-container">
        <div id="userlist" class="container-fluid">
            <div class="table-responsive">
                <h1 class="text-center text-black">CLIENT LIST</h1>
                <table class="table table-striped table-hover table-bordered" style= "margin-top: 3rem;">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Phone number</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <?php
                        $id = $_SESSION['id'];

                        $select_user_data= "SELECT `client_name`, `Phone_No`, `email` FROM `client_info` ORDER BY client_id;";
                        $select_user_data_result = mysqli_query($conn, $select_user_data);
                        $i = 0;
                        if($select_user_data_result){
                            while ($row  = mysqli_fetch_array($select_user_data_result)) {
                                $i++;
                    ?>  
                    <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $row['client_name']?></td>
                        <td><?php echo $row['Phone_No']?></td>
                        <td><?php echo $row['email']?></td>
                    </tr>
                    <?php 
                            }
                        }
                    ?>
                </table> 
            </div>
        </div>    
    </section>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
}else{
    header("location:adminsignin.php?message=Please sign in");
}
?>