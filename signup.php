<?php
    @include 'config/config.php';

    if(isset($_POST['submit'])){
    
       $name = mysqli_real_escape_string($conn, $_POST['Username']);
       $email = mysqli_real_escape_string($conn, $_POST['UserEmail']);
       $phonenumber = mysqli_real_escape_string($conn, $_POST['PhoneNo']);
       $pass = $_POST['Password'];
       $cpass = $_POST['ConfirmPassword'];
       $user_type = $_POST['usertype'];
    
       $select = " SELECT * FROM user_info WHERE useremail = '$email' && password = '$pass' ";
    
       $result = mysqli_query($conn, $select);
    
       if(mysqli_num_rows($result) > 0){
    
          $error[] = 'user already exist!';
    
       }else{
    
          if($pass != $cpass){
             $error[] = 'password not matched!'; 	

          }else{
            $cryptpsd=hash('sha512',$pass);
            $insert = "INSERT INTO user_info(username, useremail, password, phonenumber, user_type) VALUES('$name','$email','$cryptpsd','$phonenumber','$user_type')";
            mysqli_query($conn, $insert);
            header('location:homepage.php');
          }
       }
    
    };
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
    <!--holds the Signup page-->
    <div class="container-fluid overflow-hidden">
        <div>
            <!--logo container-->
            <header id="logoo"><!--different id-->
                <div class="logo">
                    <div class="row">
                        <div class="col-12 py-3 m-1">
                            <a href="index.html">
                                <img src="images/Logo.png" class ="img-fluid" alt="Mentihub" width="50px" height="50px">
                            </a>
                            <p>
                                Mentihub
                            </p>
                        </div>
                    </div>
                </div>
            </header>
            <!--FORM-->
            <div class="container">
                <div class="anil">
                    <form action="" method="post" class="form-center">
                        <div class="kai">
                            <div class="sol">
                                <p>
                                  Signup
                                </p>
                            </div>          
                            <div class="zephyr">
                            <?php
                                if(isset($error)){
                                    foreach($error as $error){
                                        echo '<span class="error-msg">'.$error.'</span>';
                                    };
                                };
                            ?>
                                <div class="mb-3">
                                    <label for="InputName" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="InputName" name="Username" Placeholder= "Enter your name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="InputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="InputEmail1" name= "UserEmail" placeholder="Enter your Email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="InputPhoneNumber" class="form-label">Phone Number</label>
                                    <input type="number" class="form-control" id="InputPhoneNumber" name="PhoneNo" placeholder="Enter your Phone number" maxlenght="15" required>
                                </div>
                                <div class="mb-3">
                                    <label for="InputPassword" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="InputPassword" name="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Enter your Password" required>
                                </div>
                                <div class="mb-3">
                                    <label for="ConfirmPassword" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" id="ConfirmPassword" name="ConfirmPassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Confirm your password" required>
                                </div>
                                <div class="mb-3">
                                    <label for="usertype" class="form-label"></label>
                                    <select name="usertype" id="usertype" class="col-md-6">
                                        <option value="User">User</option>
                                        <option value="Therapist">Therapist</option>
                                    </select>
                                </div>
                                <div class="tempest">
                                    <button type="submit" class="btn" name="submit" >Submit</button>   
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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