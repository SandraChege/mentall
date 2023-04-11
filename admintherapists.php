<?php
    include "config/config.php";
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
        <header>
            <nav>
                <ul>
                    <div><li class="logo"><img src="images/Logo.png"><span class=""><br>Mentihub</span></li></div><!--<li><a href="#" class="logo"><img src="images/Logo.png"><br><span class="nav-item">Mentihub</span></a></li>-->
                    <li><a href="#"><i class="fa-solid fa-house"></i><span class="nav-item">Home</span> </a></li>
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
        <div id="therapproval" class="container-fluid">
            <div class="ther2approval table-responsive">
                <h1 class="text-center text-white bg-dark col-md-12" >PENDING LIST</h1>
                <table class=" table table-striped col-md-12">
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
                        $ther_documents= "SELECT * FROM `qualifications` WHERE `doc_name` == 'mend' ORDER BY therapist_id;"; //DOCUMENT NAME
                        $ther_documents_result= mysqli_query($conn, $ther_documents);
                        $ther_pending_list = "SELECT * FROM `therapist_info` WHERE `doc_qualifications` = 'pending' ORDER BY therapist_id ASC;";
                        $ther_pending_list_result= mysqli_query($conn, $ther_pending_list);
                        while ($row  = mysqli_fetch_array($ther_pending_list_result) && $row  = mysqli_fetch_array($ther_documents_result)) {
                    ?> <!--difference one-->
                    <tr>
                        <th scope="row"><?php echo $row['therapist_id'];?></th>
                        <td><?php echo $row['therapist_name'];?> </td>
                        <td> <?php echo $row['doctor_type'];?> </td>
                        <td> <?php echo $row['doc_disease'];?> </td>
                        <td> <a href="/uploadFiles/<?php echo $rs2['doc_name'];?>">Certificates</a> </td> <!--documents-->
                        <td> <?php echo $row['doc_qualifications'];?> </td><!--not used-->
                        <td>
                            <form action="admintherapists.php" method="post">
                                <input type="hidden" name="id" value= "<?php echo $row['therapist_id'];?>">
                                <input type="submit" value="approve" name="approve"> &nbsp; &nbsp;
                                <input type="submit" value="deny" name="deny">
                            </form>
                        </td>
                    </tr>
                </table> 
                <?php
                        }
                ?> 
                <?php
                    if(isset($_POST['approve'])){
                        $therapist_id= $_POST['therapist_id'];
                        $select = "UPDATE `therapist_info` SET `doc_qualifications`='approved' WHERE therapist_id = `$therapist_id`;";
                        $result = mysqli_query($conn, $select);                            
                        header("location:admintherapists.php");
                    }
                    if(isset($_POST['deny'])){
                        $therapist_id= $_POST['therapist_id'];
                        $select = "UPDATE `therapist_info` SET `doc_qualifications`='denied' WHERE therapist_id = `$therapist_id`;";
                        $result = mysqli_query($conn, $select);
                        header("location:admintherapists.php");
                    }
                ?>
                </table>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>    
</body>
</html>