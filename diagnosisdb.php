<?php
    include "config/config.php";
    session_start();

    if(isset($_POST['approve'])){
        $therapist_id= $_POST['id'];
        $id = $_SESSION['id'];
        $insert = "INSERT INTO `assigned_therapist`(`client_id`, `therapist_id`) VALUES ('$id','$therapist_id');";
        $result = mysqli_query($conn, $insert);                            
        header("location:clientapprovedtherapist.php");
    }
?>