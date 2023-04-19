<?php
  include 'config/config.php';

  session_start();

  if(isset($_POST['emailcheck'])){

    $email = $_POST['UserEmail'];
    //echo"$email";

     $select_admin_email = "SELECT * FROM `admin_info`;";
     $result_admin_email = mysqli_query($conn, $select_admin_email);
    
    if(mysqli_num_rows($result_admin_email) == 0){
      header("location:adminforgotpassword.php?message=Enter the correct email");    
    }
    if(mysqli_num_rows($result_admin_email) == 1){
      header("location:admintypepassword.php?message=Enter the new password");
    }
  }
?>