<?php
  include 'config/config.php';

  session_start();

  if(isset($_POST['emailcheck'])){

    $email = $_POST['UserEmail'];
    //echo"$email";

     $select_user_email = "SELECT * FROM `client_info` WHERE `email` = '$email';";
     $result_user_email = mysqli_query($conn, $select_user_email);

     $select_ther_email = "SELECT * FROM `therapist_info`WHERE `email` = '$email';";
     $result_ther_email = mysqli_query($conn, $select_ther_email);
    
    // if(mysqli_num_rows($result_user_email) == 0 || mysqli_num_rows($result_ther_email) == 0){
    //   header("location:theruserforgotpassword.php?message=Enter the correct email"); 
    // }
    if(mysqli_num_rows($result_user_email) == 1 && mysqli_num_rows($result_ther_email) == 0){
      header("location:thernewpassword.php?message=Enter the new password");
    }
    if(mysqli_num_rows($result_user_email) == 0 && mysqli_num_rows($result_ther_email) == 1){
        header("location:thernewpassword.php?message=Enter the new password");
    }
  }
?>