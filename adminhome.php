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
            <li class="nav-item w-100"><a href="adminhome.php" class="nav-link pl-4"><i class="fa-solid fa-house"></i><span class="nav-item">Home</span></a> </li>
            <li class="nav-item w-100"> <a href="admintherapists.php" class="nav-link pl-4"><i class="fa-solid fa-users"></i><span class="nav-item">Therapists</span></a> </li>
            <li class="nav-item w-100"> <a href="adminusers.php" class="nav-link pl-4"><i class="fa-solid fa-user"></i><span class="nav-item">Users</span></a></li>
            <li class="nav-item w-100"> <a href="adminappointments.php" class="nav-link pl-4"><i class="fa-solid fa-calendar-check"></i><span class="nav-item">Appointments</span></a></li>
            <li class="nav-item w-100"> <a href="admincareteam.php" class="nav-link pl-4"><i class="fa-solid fa-people-group"></i><span class="nav-item">Care team</span></a></li>
            <li class="nav-item w-100"> <a href="adminlogout.php" class="nav-link pl-4"><i class="fas fa-sign-out-alt"></i></i><span class="nav-item">Logout</span> </a> </li>
        </ul>
    </nav>
    <section class="p-4 my-container ">
        <h1>BOOTSTRAP 5 SIDEBAR</h1>
        <p class="text-dark">
                Ipsa libero suscipit optio ipsam eligendi repellendus sint culpa ab, molestias necessitatibus cupiditate, natus odio explicabo ullam. Dignissimos fugiat necessitatibus velit facere enim sit saepe officiis delectus? Dolores, maxime quae!
                Dolores aperiam debitis distinctio impedit, aspernatur officiis vero, quod fuga ducimus reprehenderit doloribus ullam! Culpa beatae non id rerum fugiat laborum nam laudantium, cum dolorem error iusto nisi magni perferendis.
                Autem, est maxime animi laboriosam ab a sapiente qui amet sunt corporis beatae expedita eum dolorem doloremque explicabo rem blanditiis quod sit eligendi labore eius quae. Sapiente fugiat voluptatem asperiores!
                Nostrum dolor neque doloribus iure praesentium! Quasi fuga mollitia dolor nisi eaque perspiciatis minima sit, veritatis debitis atque quos corrupti aliquam recusandae dolore temporibus iusto quod enim sunt earum? Qui!
                Nemo perspiciatis ex quo doloribus illum facilis est, ad placeat maiores, delectus libero neque earum, corporis vel beatae adipisci praesentium quam voluptatem quasi iure sed assumenda ut laborum? Reprehenderit, magnam.
                Maiores sit libero velit. Aspernatur optio eius delectus consectetur repellat voluptatibus quos atque possimus fuga molestias rem asperiores at voluptatem suscipit deserunt a maiores cum ipsum, corporis enim nisi tempora?
                
        </p>    
    </section>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
<?php
}else{
    header("location:adminsignin.php?message=Please sign in");
}
?>