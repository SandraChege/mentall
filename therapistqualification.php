<?php
session_start();
include 'config/config.php';
if(isset($_SESSION['id']) && isset($_SESSION['name'])){
//echo "unqualified fella";
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
                            <a href="">
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
                <div class="anil">
                <?php if(isset($_GET['message'])) {?>
		                                <div class="container">
                                            <div class="mes" style="margin: 10px; display: block; text-align: center; background-color: #0FCDA3; color: #EAEDE7; padding: 2px; border-radius: 5px;">
                                                <p><?php echo $_GET['message']; ?> </p>
                                            </div>									    
									    </div>
								<?php }?>
                    <form action="therapistqualificationval.php" method="post" class="form-center" enctype="multipart/form-data">
                        <div class="kai">
                            <div class="sol">
                                <p>
                                  Enter your Qualifications
                                </p>
                            </div>
                            <div class="zephyr">
                                <div class="mb-3">
                                    <label for="doctortype" class="form-label">Choose your area of expertise</label>
                                    <select name="doctortype" id="doctortype" class="col-md-6" required>
                                        <option value=""></option>
                                        <option value="Therapist">Therapist</option>
                                        <option value="Psychologist">Psychologist</option>
                                        <option value="Psychiatrist">Psychiatrist</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="diseasetype" class="form-label">Choose your specialization</label>
                                    <select name="diseasetype" id="diseasetype" class="col-md-6" required>
                                        <option value=""></option>
                                        <option value="Depression">Depression</option>
                                        <option value="Anxiety">Anxiety</option>
                                        <option value="Ptsd">PTSD</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="fileToUpload" class="form-label">Please provide necessary documents <br>[MAX FILE SIZE = 5MB]</label>
                                    <input type="file" name="fileToUpload[]" id="fileToUpload" multiple required> <br>
                                    <div id="selectedFiles"></div>
                                </div>
                                <div class="tempest">
                                    <button type="submit" class="btn" name="submit" disabled id="submit">Submit</button>
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
    <!--<script src="js/fileupload.js"></script>-->
    <script src="js/mentihub.js"></script>
    <!--font awesome kit-->
    <script src="https://kit.fontawesome.com/c2761d2df3.js" crossorigin="anonymous"></script>
    <script>
    // Get the file input element(s)
    var fileInputs = document.querySelectorAll('input[type="file"]');
    let fileInput = document.getElementById("fileToUpload");
	let fileResult = document.getElementById("selectedFiles");
	let fileSubmit = document.getElementById("submit");

    // Add event listener for each file input
    for (var i = 0; i < fileInputs.length; i++) {
        fileInputs[i].addEventListener('change', function(event) {
        // Get the file(s) from the input element
            var files = event.target.files;
            var largecount = 0;
            // Loop through each file
            for (var j = 0; j < files.length; j++) {
                var file = files[j];
                //Check the size of the file
                if (file.size > (5 * 1024 * 1024)) { // 5 MB limit
                    largecount++;
                }
                if (largecount > 0){
                    fileResult.innerHTML = "Please select a file less than 5MB.";
                    fileSubmit.disabled = true;
                }
                if (largecount == 0){
                    fileResult.innerHTML = "File size allowed";
                    fileSubmit.disabled = false;
                }
            }
        });
    }

    </script>
</body>
</html>
<?php
}
?>