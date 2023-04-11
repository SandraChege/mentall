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
            <!--payment-->
            <div class="container view-account">
                <div class="content-panel">
        			<h2 class="title">Billing</h2>
        			<div class="billing">
        				<div class="secure text-center margin-bottom-md">
        					<div class="accepted-cards">
        						<img src="images/visa.png" alt="Visa">
        						<img src="images/mastercard.png" alt="MasterCard">
        						<img src="images/paypal.jpg" alt="PayPal">
        					</div>
        				</div>
        				<form id="billing" class="form-horizontal" method="post" action="#" role="form">
        					<div class="form-group">
        						<label for="card-name" class="col-sm-3 control-label">Name on Card</label>
        						<div class="col-sm-9">
        							<input type="text" class="form-control" id="card-name" placeholder="Your name" required>
        							<p class="help-block">As it appears on the card</p>
        						</div>
        					</div>
        					<div class="form-group">
        						<label for="card-number" class="col-sm-3 control-label">Card Number </label>
        						<div class="col-sm-9">
        							<input type="text" id="card-number" class="form-control" placeholder="1234 5678 4356 7856" minlength="16" maxlength="16" required>
        							<p class="help-block">The 16 digits on the front of your credit card.</p>
        						</div>
        					</div>
        					<div class="form-group">
        						<label class="col-sm-3 control-label" for="card-exp-date">Expiration Date</label>
        						<div class="col-sm-9 form-inline">
        							<!--<select class="form-control">
        								<option value="01">01</option>
        								<option value="01">02</option>
        								<option value="01">03</option>
        								<option value="01">04</option>
        								<option value="01">05</option>
        								<option value="01">06</option>
        								<option value="01">07</option>
        								<option value="01">08</option>
        							</select>
        							<span class="divider">/</span>
        							<select class="form-control">
        								<option value="01">2015</option>
        								<option value="01">2016</option>
        								<option value="01">2017</option>
        								<option value="01">2018</option>
        								<option value="01">2019</option>
        								<option value="01">2020</option>
        								<option value="01">2021</option>
        								<option value="01">2022</option>
        							</select>-->
                                    <input type="month" id="card-exp-date" class="form-control" placeholder="MM/YYYY" required>
        							<p class="help-block">The date your credit card expires. Find this on the front of your credit card.</p>
        						</div>
        					</div>
        					<div class="form-group">
        						<label class="col-sm-3 control-label">Security Code</label>
        						<div class="col-sm-9">
        							<input type="text" class="form-control" placeholder="CVC" minlength="3" maxlength="3" required>
        							<p class="help-block">The last 3 digits displayed on the back of your credit card.</p>
        						</div>
        					</div>
        					<div class="action-wrapper text-center">
        						<div class="action-btn">
        							<button class="btn btn-lg">
        								<!--Pay $20 -->Confirm
        							</button>
        						</div>
        					</div>
        				</form>
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

