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
                <div class="container-fluid" id="Qatherapist-form">
                    <form action="therapyassign.php" method="post" class="quiz-container" id="quiz">
                        <!--Question 1-->
                        <div class="question-container" style="margin-top:30px;">
                            <label for="">1.On a scale of 1 to 5, how would you rate your overall mood and emotions?</label>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="emotions" id="" value>
                                <label class="form-check-label" for="">1-Very bad</label>
                            </div>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="emotions" id="">
                                <label class="form-check-label" for="">2-Bad</label>
                            </div>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="emotions" id="">
                                <label class="form-check-label" for="">3-Neutral</label>
                            </div>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="emotions" id="">
                                <label class="form-check-label" for="">4-Good</label>
                            </div>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="emotions" id="">
                                <label class="form-check-label" for="">5-Very good</label>
                            </div>
                        </div>
                        <!--Question 2-->
                        <div class="question-container">
                            <label for="">2. How often do you experience persistent feelings of sadness, hopelessness, or emptiness?</label>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="sadness" id="">
                                <label class="form-check-label" for="">1-Very often</label>
                            </div>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="sadness" id="">
                                <label class="form-check-label" for="">2-Often</label>
                            </div>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="sadness" id="">
                                <label class="form-check-label" for="">3-Sometimes</label>
                            </div>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="sadness" id="">
                                <label class="form-check-label" for="">4-Rarely</label>
                            </div>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="sadness" id="">
                                <label class="form-check-label" for="">5-Never</label>
                            </div>
                        </div>
                        <!--Question 3-->
                        <div class="question-container">
                            <label for="">3. How frequently do you find yourself worrying excessively or feeling restless and on edge?</label>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="worry" id="">
                                <label class="form-check-label" for="">1-Very frequently</label>
                            </div>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="worry" id="">
                                <label class="form-check-label" for="">2-Frequently</label>
                            </div>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="worry" id="">
                                <label class="form-check-label" for="">3-Occasionally</label>
                            </div>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="worry" id="">
                                <label class="form-check-label" for="">4-Rarely</label>
                            </div>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="worry" id="">
                                <label class="form-check-label" for="">5-Never</label>
                            </div>
                        </div>
                        <!--Question 4-->
                        <div class="question-container">
                            <label for="">4. How much difficulty do you face in enjoying activities or interests that you used to find pleasurable?</label>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="interest" id="">
                                <label class="form-check-label" for="">1- A lot of difficulty</label>
                            </div>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="interest" id="">
                                <label class="form-check-label" for="">2-Moderate difficulty</label>
                            </div>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="interest" id="">
                                <label class="form-check-label" for="">3-Some difficulty</label>
                            </div>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="interest" id="">
                                <label class="form-check-label" for="">4-Little difficulty</label>
                            </div>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="interest" id="">
                                <label class="form-check-label" for="">5-No difficulty</label>
                            </div>
                        </div>
                        <!--Question 5-->
                        <div class="question-container">
                            <label for="">5. How often do you experience intrusive thoughts, flashbacks, or nightmares related to a past traumatic event?</label>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="intrusive" id="">
                                <label class="form-check-label" for="">1-Very often</label>
                            </div>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="intrusive" id="">
                                <label class="form-check-label" for="">2-Often</label>
                            </div>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="intrusive" id="">
                                <label class="form-check-label" for="">3-Sometimes</label>
                            </div>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="intrusive" id="">
                                <label class="form-check-label" for="">4-Rarely</label>
                            </div>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="intrusive" id="">
                                <label class="form-check-label" for="">5-Never</label>
                            </div>
                        </div>
                        <!--Question 6-->
                        <div class="question-container">
                            <label for="">6. How much do you struggle with concentrating, making decisions, or remembering things?</label>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="decision" id="">
                                <label class="form-check-label" for="">1- A lot of struggle</label>
                            </div>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="decision" id="">
                                <label class="form-check-label" for="">2-Moderate struggle</label>
                            </div>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="decision" id="">
                                <label class="form-check-label" for="">3-Some struggle</label>
                            </div>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="decision" id="">
                                <label class="form-check-label" for="">4-Little struggle</label>
                            </div>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="decision" id="">
                                <label class="form-check-label" for="">5-No struggle</label>
                            </div>
                        </div>
                        <!--Question 7-->
                        <div class="question-container">
                            <label for="">7. How frequently do you feel irritable, agitated, or easily angered?</label>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="agitated" id="">
                                <label class="form-check-label" for="">1-Very frequently</label>
                            </div>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="agitated" id="">
                                <label class="form-check-label" for="">2-Frequently</label>
                            </div>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="agitated" id="">
                                <label class="form-check-label" for="">3-Occasionally</label>
                            </div>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="agitated" id="">
                                <label class="form-check-label" for="">4-Rarely</label>
                            </div>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="agitated" id="">
                                <label class="form-check-label" for="">5-Never</label>
                            </div>
                        </div>
                        <!--Question 8-->
                        <div class="question-container">
                            <label for="">8. How often do you experience physical symptoms such as headaches, stomachaches, or rapid heartbeat without any medical cause? </label>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="physical" id="">
                                <label class="form-check-label" for="">1-Very often</label>
                            </div>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="physical" id="">
                                <label class="form-check-label" for="">2-Often</label>
                            </div>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="physical" id="">
                                <label class="form-check-label" for="">3-Sometimes</label>
                            </div>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="physical" id="">
                                <label class="form-check-label" for="">4-Rarely</label>
                            </div>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="physical" id="">
                                <label class="form-check-label" for="">5-Never</label>
                            </div>
                        </div>
                        <!--Question 9-->
                        <div class="question-container">
                            <label for="">9. How much difficulty do you have in falling asleep, staying asleep, or having restful sleep?</label>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="sleep" id="">
                                <label class="form-check-label" for="">1- A lot of difficulty</label>
                            </div>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="sleep" id="">
                                <label class="form-check-label" for="">2-Moderate difficulty</label>
                            </div>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="sleep" id="">
                                <label class="form-check-label" for="">3-Some difficulty</label>
                            </div>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="sleep" id="">
                                <label class="form-check-label" for="">4-Little difficulty</label>
                            </div>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="sleep" id="">
                                <label class="form-check-label" for="">5-No difficulty</label>
                            </div>
                        </div>
                        <!--Question 10-->
                        <div class="question-container">
                            <label for="">10.How satisfied are you with your overall quality of life and ability to cope with daily challenges?</label>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="life" id="">
                                <label class="form-check-label" for="">1-Very dissatisfied</label>
                            </div>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="life" id="">
                                <label class="form-check-label" for="">2-Dissatisfied</label>
                            </div>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="life" id="">
                                <label class="form-check-label" for="">3-Neutral</label>
                            </div>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="life" id="">
                                <label class="form-check-label" for="">4-Satisfied</label>
                            </div>
                            <div class="quiz-answers form-check">
                                <input class="form-check-input" type="radio" name="life" id="">
                                <label class="form-check-label" for="">5-Very satisfied</label>
                            </div>
                        </div>
                        <button type="submit" name="submit">Submit</button>
                        <!--QNS END HERE-->
                    </form>
                </div>
            <!--body ends here-->    
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