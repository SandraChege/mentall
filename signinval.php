<?php

include 'config.php';

session_start();

if(isset($_POST['submit'])){

    $email = $_POST['UserEmail'];
    $pass = $_POST['Password'];
    $cryptpsd=hash('sha512', $pass);

    $select = "SELECT * FROM user_info WHERE useremail = '$email' && password = '$cryptpsd'";
    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) == 1){
        
      $row = mysqli_fetch_array($result);
        
      if($row['user_type'] == 'Therapist'){

        $_SESSION['id'] = $row['user_id'];
        $_SESSION['therapist_name'] = $row['username'];
        header('location:therapisthome.php');

      }elseif($row['user_type'] == 'User'){

        $_SESSION['id'] = $row['user_id'];
        $_SESSION['user_name'] = $row['username'];
        header('location:homepage.php');
      }
     
    }else{
      $error[] ='incorrect email or password!';
      header("location:signin.php?message='Incorrect email or password'");
    }

};
?>