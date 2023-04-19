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
    <!--holds the signin page-->
    <div class="container-fluid overflow-hidden">
        <div>
            <!--logo container-->
            <header id="logoo"><!--different id-->
                <div class="logo">
                    <div class="row">
                        <div class="col-12 py-3 m-1">
                            <a href="index.html">
                                <img src="images/Logo.png" class ="img-fluid" alt="Website logo" width="50px" height="50px">
                            </a>
                            <p>
                                Mentihub
                            </p>
                        </div>
                    </div>
                </div>
            </header>
            <!--holds the form-->
            <div class="container">
                <div class="Forgotpass">
                    <?php if(isset($_GET['message'])) {?>
                        <div class="container">
                            <div class="mes" style="margin: 10px; display: block; text-align: center; background-color: #0FCDA3; color: #EAEDE7; padding: 2px; border-radius: 5px;">
                                <p><?php echo $_GET['message']; ?> </p>
                            </div>									    
                        </div>
                    <?php }?>
                    <form action="admintypepasswordval.php" method="post" class= "form-center"> <!--class="form-center d-flex justify-content-center align-items-center-->
                        <div class="forgot-password-container">
                            <div class="Forgot-password-email">
                                <h3>
                                  New Password
                                </h3>
                                <p>
                                    Enter your new password
                                </p>
                            </div>
                            <div class="zzep">
                                <div class="mb-3">
                                    <label for="InputPassword" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="InputPassword" name="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Enter your Password" required>
                                </div>
                                <div class="mb-3">
                                    <label for="ConfirmPassword" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" id="ConfirmPassword" name="ConfirmPassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Confirm your password" required>
                                </div>
                                <div class="emailsubmit">
                                    <button type="submit" class="btn" name="submit">Continue</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--bootstrap JS link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!--js link-->
    <script src="js/mentihub.js"></script>
    <!--font awesome kit-->
    <script src="https://kit.fontawesome.com/c2761d2df3.js" crossorigin="anonymous"></script>
</body>
</html>