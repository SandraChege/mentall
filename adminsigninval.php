<?php
include 'config/config.php';

session_start();

if(isset($_POST['submit'])){

  $email = $_POST['UserEmail'];
  $pass = $_POST['Password'];
  $cryptpsd=hash('sha512', $pass);

  $select = "SELECT * FROM admin_info WHERE admin_name = '$email' && Password = '$cryptpsd'";    
  $result = mysqli_query($conn, $select);

  if(mysqli_num_rows($result) == 0){
    header("location:admintherapists.php?message=Incorrect password or email");
  }

  if(mysqli_num_rows($result) == 1)  {
    $row = mysqli_fetch_array($result);   
    $_SESSION['id'] = $row['admin_id'];
    $_SESSION['name'] = $row['admin_name'];
    header('location:admintherapists.php');
  } 
  if(mysqli_num_rows($result) > 1 ){
    header("location:admintherapists.php?message=We are in deep trouble");
  }
     
}else{
  $error[] ='incorrect email or password!';
  header("location:admintherapists.php?message='Incorrect email or password'");
  }
?>