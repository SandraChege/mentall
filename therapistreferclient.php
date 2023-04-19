<?php
    include 'config/config.php';
    //print_r($_POST);
    session_start();
    if(isset($_POST['submit'])){
        print_r($_POST); //client_id AND REFERRED THERAPIST
        $clientid=$_POST['clId'];
        $currenttherapistid=$_SESSION['id'];
        $referedtherapistid=$_POST['therapist'];

        $insert_referrals ="INSERT INTO `referred_clients`(`client_id`, `current_therapist_id`, `referred_therapist_id`) VALUES ('$clientid','$currenttherapistid','$referedtherapistid');";
        $insert_referrals_result = mysqli_query($conn, $insert_referrals);
        if($insert_referrals_result){
            header("location:therapistusers.php?message=referral is successful");
        }else{
            header("location:therapistusers.php?message=referral is not successful");
        }
    }
?>