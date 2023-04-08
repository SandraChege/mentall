<?php
include 'config/config.php';

session_start();

if(isset($_POST['submit'])){

  $email = $_POST['UserEmail'];
  $pass = $_POST['Password'];
  $cryptpsd=hash('sha512', $pass);

  $select_client_email = "SELECT * FROM client_info WHERE email = '$email';" ;    
  $select_therapist_email = "SELECT * FROM therapist_info WHERE email = '$email';";
  $result_client_email = mysqli_query($conn, $select_client_email);
  $result_therapist_email = mysqli_query($conn, $select_therapist_email);

  if(mysqli_num_rows($result_client_email) == 0 && mysqli_num_rows($result_therapist_email) == 0){
    header("location:signup.php?message=user doesn't exist");
  }else{
    $select_client = "SELECT * FROM client_info WHERE email = '$email' && Password = '$cryptpsd';";    
    $select_therapist = "SELECT * FROM therapist_info WHERE email = '$email' && Password = '$cryptpsd';";
    $result_client = mysqli_query($conn, $select_client);
    $result_therapist = mysqli_query($conn, $select_therapist);
    
  
    if(mysqli_num_rows($result_client) == 0 && mysqli_num_rows($result_therapist) == 0){
      header("location:signin.php?message=Enter the correct password");
    }
  
    if(mysqli_num_rows($result_client) == 0 && mysqli_num_rows($result_therapist) == 1)  {
      $row = mysqli_fetch_array($result_therapist);   
      $_SESSION['id'] = $row['therapist_id'];
      $_SESSION['name'] = $row['therapist_name'];
      header('location:therapistshome.php');
    } 
  
    if(mysqli_num_rows($result_client) == 1 && mysqli_num_rows($result_therapist) == 0)  {
      $row = mysqli_fetch_array($result_client);   
      $_SESSION['id'] = $row['client_id'];
      $_SESSION['name'] = $row['client_name'];
      header('location:homepage.php');
    }
  
    if(mysqli_num_rows($result_client) == 1 && mysqli_num_rows($result_therapist) == 1)  {
      header("location:signup.php?message=We are in trouble");
    }
  
    if(mysqli_num_rows($result_client) > 1 || mysqli_num_rows($result_therapist) > 1)  {
      header("location:signup.php?message=We are in deep trouble");
    }
  }


     
}else{
  $error[] ='incorrect password!';
  header("location:signin.php?message='Incorrect email or password'");
  }
?>