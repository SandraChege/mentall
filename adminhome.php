<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['name'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENTIHUB</title>
    <!--FAVICON-->
    <link rel="icon" type="image/x-icon" href="images/Logo.png">
    <!--CSS LINK-->
    <link rel="stylesheet" href="css/admin.css">
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!--bootstrap link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <!--NAVIGATION BAR-->
        <header><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
            <nav>
                <ul>
                    <div><li class="logo"><img src="images/Logo.png"><span class=""><br>Mentihub</span></li></div><!--<li><a href="#" class="logo"><img src="images/Logo.png"><br><span class="nav-item">Mentihub</span></a></li>-->
                    <li><a href="adminhome.php"><i class="fa-solid fa-house"></i><span class="nav-item">Home</span> </a></li>
                    <li><a href="admintherapists.php"><i class="fa-solid fa-users"></i><span class="nav-item">Therapists</span></a></li>
                    <li><a href="#"><i class="fa-solid fa-calendar-check"></i><span class="nav-item">Appointments</span> </a></li>
                    <li><a href="admincareteam.php"><i class="fa-solid fa-people-group"></i><span class="nav-item">Care team</span> </a></li>
                    <li><a href="logout.php" class="logout"><i class="fas fa-sign-out-alt"></i></i><span class="nav-item">Logout</span> </a></li>
                    <div class="sidebar-footer">
                        <p>
                            © 2023 Mentihub. All rights reserved.
                        </p>
                    </div>
                </ul>
            </nav>
        </header>
        <div class="therapist-pending">
            <div class="adminhome">
                <p>
                    Welcome <?php echo "admin"; ?>
                </p>
                <div class="col-xl-3 col-md-6">
                    <div class="card text-white mb-4 bg-sucess">
                        <div class="card-body">Total users</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a href="" class="small text-white stretched-link">View users</a>
                            <div class="small text-white"><i class = "fas-fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php
}else{
    echo 'no session';
}
?>