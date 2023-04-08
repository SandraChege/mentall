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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
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
            <div class="container cont-small">
                <div>
                    <!--BACKGROUND IMAGE-->
                    <div class=" bg-image d-flex justify-content-center align-items-center" style="background-image:url('images/therapybackimage2.jpg'); height: 50vh;">
                        <div class="mask d-flex justify-content-center align-items-center" style="background-color: hsla(0, 0%, 0%, 0.6); height: 100%; width: 100%;">
                            <div>
                                <h2 style="color: #EAEDE7; font-size: 30px; font-family: poppins;">
                                    How does mentihub work?
                                </h2>
                            </div>
                        </div>
                    </div>
                    </div>    
                    <!--CONTENT-->
                    <div class="row mt-3">
                        <div class="cards-body"><!--add this to ensure they are on one row: d-flex justify-content-between-->
                            <!--card one-->
                            <div class="col">
                                <div class="info-obj img-l g0 small animated fadeInUp" data-animate-in="fadeInUp|0.1" style="animation-delay: 0.1s;">
                                    <div class="img">
                                        <span class="txt-white bg-default iconwrp sq mr-t-20 f-2">01</span>
                                    </div>
                                    <div class="info pd-tiny shadow-mini" data-rgen-sm="pd-20 medium">
                                        <!--sq60: This class sets the width and height of the span element to 60 pixels, making it a square. fs50: This class sets the font size of any text inside the span element to 50 pixels. mr-b-micro: This class adds a small amount of margin to the bottom of the span element.-->
                                        <span class="iconbox sq60 fs50 mr-b-micro"><i class="fa-regular fa-circle-check fa-2xl" style="color: #000000;"></i></span>
                                        <h3 class="title small">Pick a therapist</h3>
                                        <p class="mr-0">Choose a therapist you would like to connect with.</p>
                                        <div>
                                            <a href="clientchoosetherapist.php" class="btn"> Choose therapist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <!--card two-->
                                <div class="info-obj img-l g0 small animated fadeInUp" data-animate-in="fadeInUp|0.1" style="animation-delay: 0.1s;">
                                    <div class="img">
                                        <span class="txt-white bg-default iconwrp sq mr-t-20 f-2">02</span>
                                    </div>
                                    <div class="info pd-tiny shadow-mini" data-rgen-sm="pd-20 medium">
                                        <!--sq60: This class sets the width and height of the span element to 60 pixels, making it a square. fs50: This class sets the font size of any text inside the span element to 50 pixels. mr-b-micro: This class adds a small amount of margin to the bottom of the span element.-->
                                        <span class="iconbox sq60 fs50 mr-b-micro"><i class="fa-regular fa-clock fa-2xl" style="color: #000000;"></i></span>
                                        <h3 class="title small">Book Quickly</h3>
                                        <p class="mr-0">Make a quick booking for a counselling session</p>
                                        <div>
                                            <a href="clientbooksession.php" class="btn">Book now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <!--card three-->
                                <div class="info-obj img-l g0 small animated fadeInUp" data-animate-in="fadeInUp|0.1" style="animation-delay: 0.1s;">
                                    <div class="img">
                                        <span class="txt-white bg-default iconwrp sq mr-t-20 f-2">03</span>
                                    </div>
                                    <div class="info pd-tiny shadow-mini" data-rgen-sm="pd-20 medium">
                                        <!--sq60: This class sets the width and height of the span element to 60 pixels, making it a square. fs50: This class sets the font size of any text inside the span element to 50 pixels. mr-b-micro: This class adds a small amount of margin to the bottom of the span element.-->
                                        <span class="iconbox sq60 fs50 mr-b-micro"><i class="fa-regular fa-messages fa-2xl" style="color: #000000;"></i></span>
                                        <h3 class="title small">Mental tips</h3>
                                        <p class="mr-0">Mental tips improve mental health and overall well-being.</p>
                                        <div>
                                            <a href="tipsgenerator.php" class="btn">Generate tip</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
    
    
