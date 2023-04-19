<?php
    include 'config/config.php';

    session_start();

    if(isset($_POST['submit'])){
        $mepassword = $_POST['Password'];
        $meconfirmpassword = $_POST['ConfirmPassword'];
        //$id =$_SESSION['id'];
        $email=$_SESSION['admin_name'];
        //$email=$_GET['admin_name'];
        echo $email;

        $select_admin_table = "SELECT * FROM `admin_info` WHERE `admin_name`= '$email';";
        $therapist_table_result = mysqli_query($conn, $select_therapist_table);

        if($mepassword != $meconfirmpassword){
            header("location:admintypepassword.php?message=Passwords do not match");
             //$error[] = 'password not matched!'; 	

          }else{
            $cryptpsd=hash('sha512',$mepassword);

            if($therapist_table_result){
                //echo "hello";
                $update_password= "UPDATE `admin_info` SET `password` = '$cryptpsd' WHERE `admin_id` = '$id';";
                $therapist_update_password= mysqli_query($conn, $update_password);
                if($therapist_update_password){
                    header("location:adminsignin.php?message=Password change is successful");
                }else{
                    header("location:admintypepassword.php?message=Password change is not successful");
                }    
            }
        }
    }
?>