<?php
    include 'config/config.php';

    session_start();

    if(isset($_POST['submit'])){
        $mepassword = $_POST['Password'];
        $meconfirmpassword = $_POST['ConfirmPassword'];
        $id =$_SESSION['id'];

        $select_admin_table = "SELECT * FROM `admin_info` WHERE `admin_id` = '$id';";
        $admin_table_result = mysqli_query($conn, $select_admin_table);

        if($mepassword != $meconfirmpassword){
            header("location:adminprofile.php?message=Passwords do not match");
             //$error[] = 'password not matched!'; 	

          }else{
            $cryptpsd=hash('sha512',$mepassword);

            if($admin_table_result){
            $update_password= "UPDATE `admin_info` SET `password` = '$cryptpsd' WHERE `admin_id` = '$id';";
            $admin_password_update = mysqli_query($conn, $update_password);
            if($admin_password_update){
                header("location:adminsignin.php?message=Password change is successful");
            }else{
                header("location:adminprofile.php?message=Password change is not successful");
            }
            }
        }
    }
?>