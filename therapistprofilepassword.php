<?php
    include 'config/config.php';

    session_start();

    if(isset($_POST['submit'])){
        $mepassword = $_POST['Password'];
        $meconfirmpassword = $_POST['ConfirmPassword'];
        $id =$_SESSION['id'];

        $select_therapist_table = "SELECT * FROM `therapist_info` WHERE `therapist_id`= '$id';";
        $therapist_table_result = mysqli_query($conn, $select_therapist_table);

        if($mepassword != $meconfirmpassword){
            header("location:therapistprofile.php?message=Passwords do not match");
             //$error[] = 'password not matched!'; 	

          }else{
            $cryptpsd=hash('sha512',$mepassword);

            if($therapist_table_result){
                echo "hello";
                $update_password= "UPDATE `therapist_info` SET `Password` = '$cryptpsd' WHERE `therapist_id` = '$id';";
                $therapist_update_password= mysqli_query($conn, $update_password);
                if($therapist_update_password){
                    header("location:signin.php?message=Password change is successful");
                }else{
                    header("location:therapistsprofile.php?message=Password change is not successful");
                }    
            }
        }
    }
?>