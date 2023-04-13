<?php
    include "config/config.php";
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
            <li class="nav-item w-100"> <a href="admintherapists.php" class="nav-link pl-4"><i class="fa-solid fa-users"></i><span class="nav-item">Therapists</span></a> </li>
            <li class="nav-item w-100"> <a href="adminusers.php" class="nav-link pl-4"><i class="fa-solid fa-user"></i><span class="nav-item">Users</span></a></li>
            <li class="nav-item w-100"> <a href="adminappointments.php" class="nav-link pl-4"><i class="fa-solid fa-calendar-check"></i><span class="nav-item">Appointments</span></a></li>
            <li class="nav-item w-100"> <a href="admincareteam.php" class="nav-link pl-4"><i class="fa-solid fa-people-group"></i><span class="nav-item">Care team</span></a></li>
            <li class="nav-item w-100"> <a href="adminlogout.php" class="nav-link pl-4"><i class="fas fa-sign-out-alt"></i></i><span class="nav-item">Logout</span> </a> </li>
        </ul>
    </nav>
    <section class="p-4 my-container ">
        <div id="therapproval" class="container-fluid ther2approval">
            <div class="table-responsive">
                <h1 class="text-center  text-black" >PENDING LIST</h1>
                <table class=" table table-striped ">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Designation</th>
                            <th scope="col">Specialization</th>
                            <th scope="col">Documents</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <?php
                        $ther_pending_list = "SELECT `therapist_id`, `therapist_name`, `doctor_type`, `doc_disease`, `doc_qualifications` FROM `therapist_info` WHERE doc_qualifications = 'pending' ORDER BY therapist_id;";
                        $ther_pending_list_result= mysqli_query($conn, $ther_pending_list);
                        $i = 0;
                        if($ther_pending_list_result){
                            while ($row = mysqli_fetch_array($ther_pending_list_result)) {
                                $i++;
                                $id = $row['therapist_id'];
                                $ther_documents= "SELECT `doc_name` FROM `qualifications` WHERE therapist_id = $id ORDER BY therapist_id;";
                                $ther_documents_result= mysqli_query($conn, $ther_documents);
                    ?> 
                    <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $row['therapist_name'];?></td>
                        <td><?php echo $row['doctor_type'];?></td>
                        <td><?php echo $row['doc_disease'];?></td>
                        <td> 
                            <?php
                                if(mysqli_num_rows($ther_documents_result) === 0){
                            ?> 
                                <p>No documents found</p>
                            <?php
                                }
                                if(mysqli_num_rows($ther_documents_result) === 1) {
                                   $document = mysqli_fetch_assoc($ther_documents_result);
                            ?>
                            <a target="_blank" href=".\uploadFiles\<?php echo $document['doc_name'];?>"><?php echo $document['doc_name'];?></a>                         
                            <?php       
                                } else {
                                    while ($rows = mysqli_fetch_array($ther_documents_result)) {
                            ?>
                            <a target="_blank" href=".\uploadFiles\<?php echo $document['doc_name'];?>"><?php echo $document['doc_name'];?></a><br>
                            <?php
                                    }
                                }
                                
                            ?>

                        </td> <!--documents--> <!--<a href="/uploadFiles/<?php echo $rs2['doc_name'];?>">Certificates</a>-->
                        <td><?php echo $row['doc_qualifications'];?></td>
                        <td>
                            <form id="therapprovalbtn" action="adminacceptapproval.php" method="post">
                                <input type="hidden" name="id" value= "<?php echo $row['therapist_id'];?>">
                                <input type="submit" value="Approve" name="approve"> <br>
                                <input type="submit" value="Deny" name="deny">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>
<?php
}else{
    header("location:adminsignin.php?message=Please sign in");
}
?>