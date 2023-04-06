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
    header("location:adminsignin.php?message=user doesn't exist");
  }

  if(mysqli_num_rows($result) == 1)  {
    $row = mysqli_fetch_array($result);   
    $_SESSION['id'] = $row['admin_id'];
    $_SESSION['name'] = $row['admin_name'];
    header('location:adminhome.php');
  } 
  if(mysqli_num_rows($result) > 1 ){
    header("location:adminsignin.php?message=We are in deep trouble");
  }
     
}else{
  $error[] ='incorrect email or password!';
  header("location:adminsignin.php?message='Incorrect email or password'");
  }
?>