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
            <div class="container-fluid mainbody">
                <div class="tal">
                    <div class="zeru">
                        <!--heading-->
                        <div class="row anyle">
                            <div class="col-lg-12 col-md-12 col-12">
                                <h2 class="heading-red">Mental Health</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
                                <p class="mb-3">Mental health is more than the absence of mental disorders. Mental health is an integral part of health; indeed, there is no health without mental health. Mental health is determined by a range of socioeconomic, biological and environmental factors.</p>
                            </div>
                        </div>
                        <!--disease content-->
                        <div class="container-fluid keyne">
                            <div class="alapai">
                                <!--ROW 1-->
                                <div class="row aukai mb-4 gy-4">
                                    <!--ADHD-->
                                    <div class="col-md-4 hema kahawai">
                                        <div class="keawe">
                                            <div class="card h-100">
                                                <div class="card-img-top">
                                                    <img src="images/adhd1.jpg" alt="" height="30%" width="100%">
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">ADHD</h5>
                                                    <p class="card-text">ADHD is one of the most common neurodevelopmental disorders of childhood. It is usually first diagnosed in childhood and often lasts into adulthood</p>
                                                    <a href="adhd.html" class="nahele btn">Learn more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--ANGER-->
                                    <div class="col-md-4 hema">
                                        <div class="keawe">
                                            <div class="card h-100">
                                                <div class="card-img-top">
                                                    <img src="images/anger.jpg" alt="" height="30%" width="100%">
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Anger</h5>
                                                    <p class="card-text">Anger is a strong feeling of being annoyed because of something wrong.It is the feeling that makes someone want to hurt other people.</p>
                                                    <br>
                                                    <a href="anger.html" class="nahele btn">Learn more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--ANXIETY-->
                                    <div class="col-md-4 hema kamaile">
                                        <div class="keawe">
                                            <div class="card h-100">
                                                <div class="card-img-top">
                                                    <img src="images/anxiety.jpg" alt="" height="30%" width="100%">
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Anxiety</h5>
                                                    <p class="card-text">Anxiety is an emotion characterized by feelings of tension, worried thoughts, and physical changes like increased blood pressure.</p>
                                                    <br>
                                                    <a href="anxiety.html" class="nahele btn">Learn more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--ROW 2-->
                                <div class="row aukai mb-4 gy-4">
                                    <!--AUTISM-->
                                    <div class="col-md-4 hema">
                                        <div class="keawe">
                                            <div class="card h-100">
                                                <div class="card-img-top">
                                                    <img src="images/autism2.jpg" alt="" height="30%" width="100%">
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Autism Sprectum Disorder</h5>
                                                    <p class="card-text">Autism spectrum disorder (ASD) is a developmental disability caused by differences in the brain.</p>
                                                    <br>
                                                    <a href="autism.html" class="nahele btn">Learn more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--BODY DYSMORPHIC-->
                                    <div class="col-md-4 hema">
                                        <div class="keawe">
                                            <div class="card h-100">
                                                <div class="card-img-top">
                                                    <img src="images/bdd1.jpg" alt="" height="30%" width="100%">
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Body Dysmorphic</h5>
                                                    <p class="card-text">Body dysmorphia is a mental health condition where a person spends a lot of time worrying about flaws in their appearance.</p>
                                                    <br>
                                                    <a href="bdd.html" class="nahele btn">Learn more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Borderline personality-->
                                    <div class="col-md-4 hema">
                                        <div class="keawe">
                                            <div class="card h-100">
                                                <div class="card-img-top">
                                                    <img src="images/borderline.jpg" alt="" height="30%" width="100%">
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Borderline Personality</h5>
                                                    <p class="card-text">This is a mental health disorder that impacts the way you think and feel about yourself and others, causing problems functioning in everyday life.</p>
                                                    <a href="borderline.html" class="nahele btn">Learn more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--ROW 3-->
                                <div class="row aukai mb-4 gy-4">
                                    <!--Bipolar disorder-->
                                    <div class="col-md-4 hema">
                                        <div class="keawe">
                                            <div class="card h-100">
                                                <div class="card-img-top">
                                                    <img src="images/bipolar.jpg" alt="" height="30%" width="100%">
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Bipolar disorder</h5>
                                                    <p class="card-text">Bipolar disorder is when you experience extreme mood changes that can cause you to experience extreme periods of low (depressed) and high (manic) moods.</p>
                                                    <a href="bipolar.html" class="nahele btn">Learn more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--CONDUCT DISORDER-->
                                    <div class="col-md-4 hema">
                                        <div class="keawe">
                                            <div class="card h-100">
                                                <div class="card-img-top">
                                                    <img src="images/conduct.jpg" alt="" height="30%" width="100%">
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Conduct Disorder</h5>
                                                    <p class="card-text">Conduct disorder is a repetitive and persistent pattern of behavior in children and adolescents in which the rights of others or basic social rules are violated. </p>
                                                    <a href="conduct.html" class="nahele btn">Learn more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--depression-->
                                    <div class="col-md-4 hema">
                                        <div class="keawe">
                                            <div class="card h-100">
                                                <div class="card-img-top">
                                                    <img src="images/depression.jpg" alt="" height="30%" width="100%">
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Depression</h5>
                                                    <p class="card-text">Depression is when you experience a low mood that lasts for a long time and affects your everyday life.</p>
                                                    <br>
                                                    <a href="depression.html" class="nahele btn">Learn more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                </div>
                                <!--ROW 4-->
                                <div class="row aukai mb-4 gy-4">                                                                       
                                    <!--DISSOCIATIVE-->
                                    <div class="col-md-4 hema kahawai">
                                        <div class="keawe">
                                            <div class="card h-100">
                                                <div class="card-img-top">
                                                    <img src="images/dissociation.jpg" alt="" height="30%" width="100%">
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Dissociation And Dissociative Disorders</h5>
                                                    <p class="card-text">Dissociation is a mental process that causes a lack of connection in a person’s thoughts, memory and sense of identity.</p> <br>
                                                    <a href="dissociation.html" class="nahele btn">Learn more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                 <!--Eating disorder-->
                                    <div class="col-md-4 hema kahawai">
                                        <div class="keawe">
                                            <div class="card h-100">
                                                <div class="card-img-top">
                                                    <img src="images/eating.png" alt="" height="30%" width="100%">
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Eating disorder</h5>
                                                    <p class="card-text">Eating disorders are a range of psychological conditions that cause unhealthy eating habits to develop. They might start with an obsession with food, body weight, or body shape</p>
                                                    <a href="eating.html" class="nahele btn">Learn more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    
                                    <!--generalized anxiexty disorder-->
                                    <div class="col-md-4 hema kahawai">
                                        <div class="keawe">
                                            <div class="card h-100">
                                                <div class="card-img-top">
                                                    <img src="images/gad1.jpg" alt="" height="30%" width="100%">
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Generalized anxiexty disorder</h5>
                                                    <p class="card-text">Eating disorders are a range of psychological conditions that cause unhealthy eating habits to develop. They might start with an obsession with food, body weight, or body shape</p>
                                                    <a href="gad.html" class="nahele btn">Learn more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>                                
                                <!--ROW 5-->
                                <div class="row aukai mb-4 gy-4">
                                    <!--OCD-->
                                    <div class="col-md-4 hema kamaile">
                                        <div class="keawe">
                                            <div class="card h-100">
                                                <div class="card-img-top">
                                                    <img src="images/OCD.jpg" alt="" height="30%" width="100%">
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Obsessive Compulsive Disorder(OCD)</h5>
                                                    <p class="card-text">Obsessive-compulsive disorder (OCD) is a mental illness that causes repeated unwanted thoughts or sensations (obsessions) or the urge to do something over and over again (compulsions).</p>
                                                    <a href="#" class="nahele btn">Learn more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--panic disorder-->
                                    <!--Paranoia-->
                                    <div class="col-md-4 hema kamaile">
                                        <div class="keawe">
                                            <div class="card h-100">
                                                <div class="card-img-top">
                                                    <img src="images/paranoia.jpg" alt="" height="30%" width="100%">
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Paranoia</h5>
                                                    <p class="card-text">Paranoia involves intense anxious or fearful feelings and thoughts often related to persecution, threat, or conspiracy.</p>
                                                    <a href="paranoia.html" class="nahele btn">Learn more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--row 6-->
                                <div class="row aukai mb-4 gy-4">
                                    <!--PTSD-->
                                    <div class="col-md-4 hema kahawai">
                                        <div class="keawe">
                                            <div class="card h-100">
                                                <div class="card-img-top">
                                                    <img src="images/ptsd2.jpg" alt="" height="30%" width="100%">
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Post-Traumatic Stress Disorder</h5>
                                                    <p class="card-text">(PTSD) is a psychological disorder. It develops in response to a traumatic event. It can develop at anytime after experiencing traumatic event. </p>
                                                    <a href="ptsd.html" class="nahele btn">Learn more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--psychosis-->
                                    <!--schizorphrenia-->
                                </div>
                                <!--ROW 7-->
                                <div class="row aukai mb-4 gy-4">
                                    <!--self-harm-->
                                    <div class="col-md-4 hema kamaile">
                                        <div class="keawe">
                                            <div class="card h-100">
                                                <div class="card-img-top">
                                                    <img src="images/selfharm.jpg" alt="" height="30%" width="100%">
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Self-harm</h5>
                                                    <p class="card-text">Self-harm is the act of purposely hurting oneself (as by cutting or burning the skin) as an emotional coping mechanism</p>
                                                    <a href="#" class="nahele btn">Learn more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--SOCIAL ANXIETY DISORDER-->
                                    <!--stress-->
                                    <div class="col-md-4 hema kahawai">
                                        <div class="keawe">
                                            <div class="card h-100">
                                                <div class="card-img-top">
                                                    <img src="images/stress.jpg" alt="" height="30%" width="100%">
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Stress</h5>
                                                    <p class="card-text"> Stress is our emotional and physical response to pressure. That pressure can arise from factors such as life events, illness, work, and study.</p>
                                                    <a href="stress.html" class="nahele btn">Learn more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--ROW 8-->
                                <div class="row aukai mb-4 gy-4">
                                    <!--SUICIDE-->
                                    <div class="col-md-4 hema kahawai">
                                        <div class="keawe">
                                            <div class="card h-100">
                                                <div class="card-img-top">
                                                    <img src="images/suicide.jpg" alt="" height="30%" width="100%">
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Suicidal feelings</h5>
                                                    <p class="card-text">Suicidal feelings is the thought process of having ideas, or ruminations about the possibility of ending one's own life.</p>
                                                    <a href="#" class="nahele btn">Learn more</a>
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
