<?php
    include 'config/config.php';

    session_start();
    $id = $_SESSION['id'];
    $sid=$_GET['sid'];
    echo $sid;

    $query = "UPDATE `appointments` SET `status`='Cancel' WHERE `Appointment_id`= '$sid';";
    $query_result = mysqli_query($conn, $query);
    if($query_result){
        header("location:sessions.php?message=You have cancelled your appointment");
    }
?>