<?php
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
    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins:wght@600&family=Roboto&display=swap" rel="stylesheet">
    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
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
            <!--CONTACT US BODY-->
            <div class="container contact">
                <div class="contactall">
                    <div class="contactsection">
                        <!--CONTAINS THE FORM-->
                        <div class="contact-body mb-4">
                            <!--Section heading-->
                            <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
                            <!--Section description-->
                            <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly.</p>

                            <div class="row row-content">
                                <!--Grid column-->
                                <div class="col-md-9 mb-md-0 mb-5">
                                <?php if (isset($_GET['message'])) {?>
		                                <div class="container">
                                            <div class="mes" style="margin: 10px; display: block; text-align: center; background-color: #0FCDA3; color: #EAEDE7; padding: 2px; border-radius: 5px;">
                                                <p><?php echo $_GET['message']; ?> </p>
                                            </div>									    
									    </div>
								<?php } ?>
                                    <form id="contact-form" action="contactform.php" method="POST">
                                        <div class="row-yago">                            
                                            <div class="col-md-12">
                                                <div class="md-form mb-0">
                                                    <label for="contact_name" class="xann">Your name</label>
                                                    <input type="text" id="contact_name" name="contact_name" class="form-control"> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row-yago">
                                            <div class="col-md-12">
                                                <div class="md-form mt-4">
                                                    <label for="contact_email" class="xann">Your email</label>
                                                    <input type="text" id="contact_email" name="contact_email" class="form-control">                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row-yago">
                                            <div class="col-md-12">
                                                <div class="md-form mt-4">
                                                    <label for="contact_message" class="xann">Your message</label>
                                                    <textarea type="text" id="contact_message" name="contact_message" rows="2" class="form-control md-textarea"></textarea>                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center text-md-left col-md-5" id="contact-btn">
                                            <button type="submit" class="btn" name="submit">Submit</button>
                                            <!--onclick="document.getElementById('contact-form').submit();"-->
                                        </div>
                                    </form>
                                </div>
                                <!--Grid column-->

                                <!--font awesome icons-->
                                <div class="col-md-3 text-center">
                                    <ul class="list-unstyled mb-0">
                                        <li><i class="fa-solid fa-location-dot fa-2x"></i>
                                            <p>Le Mac, Westlands Nairobi, Kenya</p>
                                        </li>

                                        <li><i class="fa-solid fa-phone mt-4 fa-2x"></i>
                                            <p>0700 000 000</p>
                                        </li>

                                        <li><i class="fa-solid fa-envelope mt-4 fa-2x"></i>
                                            <p>mentihub@gmail.com</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--Contact us form ends-->
                        </div>
                    </div>
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
</body>
</html>
