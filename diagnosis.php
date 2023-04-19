<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['name'])){
    include 'config/config.php';
    $id = $_SESSION['id'];

    $assign="SELECT `diagnosis_name`, `doc_type` FROM `diagnosis`WHERE client_id= '$id';";
    $assign_result= mysqli_query($conn, $assign);
    //print_r ($assign_result); //mysqli_result Object ( [current_field] => 0 [field_count] => 2 [lengths] => [num_rows] => 3 [type] => 0 ) 
    
    $fetch_result= mysqli_fetch_array($assign_result);
    //print_r ($fetch_result); //Array ( [0] => Depression [diagnosis_name] => Depression [1] => Psychologist [doc_type] => Psychologist )
    $doctorkind = $fetch_result['doc_type'];
    //print_r($doctorkind); //Psychologist
    $diseasekind = $fetch_result['diagnosis_name'];
    //print_r($diseasekind); //Depression

    $daktaritype= "SELECT `therapist_id`, `therapist_name`, `Phone_No`, `email` FROM `therapist_info` WHERE `doctor_type` = '$doctorkind' AND `doc_disease` = '$diseasekind' AND `doc_qualifications` = 'approved';";
    $daktari_type_result= mysqli_query($conn, $daktaritype);
    //print_r($daktari_type_result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentihub</title>
    <!--favicon-->
    <link rel="icon" type="image/x-icon" href="images/Logo.png">
    <!--CSS LINK-->
    <link rel="stylesheet" href="css/mentihub.css">
    <!--BOOTSTRAP CSS LINK-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins:wght@600&family=Roboto&display=swap" rel="stylesheet">
    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
    <!--holds the landing page-->
    <div class="container-fluid overflow-hidden">
        <div>
            <!--logo and navbar container-->
                <header id="logo">
                    <div class="m-0">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <div class="container-fluid">
                                <div>
                                    <a href="homepage.php" class="navbar-brand">
                                        <img src="images/Logo.png" class ="img-fluid d-inline-block align-text-top" alt="Website logo" width="50px" height="50px">
                                        <!--<span class="navbar-text" style="padding-top: 200px;">Mentihub</span>-->
                                    </a>
                                     <p>
                                        Mentihub
                                    </p>
                                </div>
                                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                                    <div class="navbar-nav nav-health">
                                        <ul class="navbar-nav">
                                            <li><a href="homepage.php" class="nav-item nav-link active">Home</a></li>
                                            <li><a href="diseases.php" class="nav-item nav-link">Ailments</a></li>
                                            <li><a href="therapist.php" class="nav-item nav-link">Therapy</a></li>
                                            <li><a href="sessions.php" class="nav-item nav-link">My sessions</a></li>
                                            <li><a href="billing.php" class="nav-item nav-link">Payment</a></li>
                                            <li><a href="contactus.php" class="nav-item nav-link">Contact us</a></li>
                                            <li class="nav-item logbtn"><a class="nav-link btn" href="logout.php"><i class="bi bi-box-arrow-right me-2"></i> Logout </a></li>                                                                                
                                        </ul>
                                    </div>                                                                 
                                </div>
                            </div>
                        </nav>
                    </div>
                </header>
                <div id="therapproval" class="container-fluid">
            <div class="ther2approval table-responsive">
                <h1 class="text-center  text-black" >THERAPIST LIST</h1>
                <table class=" table table-striped ">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone Number</th>
                            <th scope ="col">Accept</th>
                        </tr>
                    </thead>
                    <?php
                        // $ther_pending_list = "SELECT `therapist_id`, `therapist_name`, `doctor_type`, `doc_disease`, `doc_qualifications` FROM `therapist_info` WHERE doc_qualifications = 'pending' ORDER BY therapist_id;";
                        // $ther_pending_list_result= mysqli_query($conn, $ther_pending_list);
                        $i = 0;
                        if($daktari_type_result){
                            //print_r("Michelle");
                            while ($row = mysqli_fetch_array($daktari_type_result)) {
                                //print_r("WAmbui");
                                $i++;
                                $id = $row['therapist_id'];
                    ?> 
                    <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $row['therapist_name'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['Phone_No'];?></td>
                        <td>
                            <form id="diagnosis" action="diagnosisdb.php" method="post">
                                <input type="hidden" name="id" value= "<?php echo $row['therapist_id'];?>">
                                <input type="submit" value="Approve" name="approve" style="background-color:#364C44; padding: 8px; border-radius: 5px; margin: 5px; color: #EAEDE7;" > <br>
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
            
        </div>
    </div>
    <!--FOOTER-->
    <footer class="text-center text-white">
        <div class="alizeh">
                <!-- Grid container -->
                <div class="container p-3 pb-0">
                  <!-- Section: Social media -->
                    <section class="mb-3">
                        <!-- Facebook -->
                        <a class="btn text-white btn-floating m-1" href="#!" style="background-color: #002C31;" role="button">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <!-- Twitter -->
                        <a class="btn text-white btn-floating m-1" href="#!" style="background-color: #002C31;" role="button">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <!-- Google -->
                        <a class="btn text-white btn-floating m-1" href="#!" style="background-color: #002C31;" role="button">
                        <i class="fab fa-google"></i>
                        </a>
                        <!-- Instagram -->
                        <a class="btn text-white btn-floating m-1" href="#!" style="background-color: #002C31;" role="button">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <!-- Linkedin -->
                        <a class="btn text-white btn-floating m-1" href="#!" style="background-color: #002C31;" role="button">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </section>
                  <!-- Section: Social media -->
                </div>
                <!-- Grid container -->
              
                <!-- Copyright -->
                <div class="text-center p-3 pnet">
                  <p>
                    © 2023 Mentihub. All rights reserved.
                  </p>
                </div>
                <!-- Copyright -->
        </div>
    </footer>
    <!--bootstrap JS link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!--js link-->
    <script src="js/mentihub.js"></script>
    <!--font awesome kit-->
    <script src="https://kit.fontawesome.com/c2761d2df3.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js"></script>
</body>
</html>
<?php
}else{
    header("location:signin.php?message=Please sign in");
}
?>