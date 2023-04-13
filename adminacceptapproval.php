<?php
    include "config/config.php";

    if(isset($_POST['approve'])){
        $therapist_id= $_POST['id'];
        $select = "UPDATE `therapist_info` SET `doc_qualifications`='approved' WHERE therapist_id = '$therapist_id';";
        $result = mysqli_query($conn, $select);                            
        header("location:admintherapists.php");
    }
    if(isset($_POST['deny'])){
        $therapist_id= $_POST['id'];
        $select = "UPDATE `therapist_info` SET `doc_qualifications`='denied' WHERE therapist_id = '$therapist_id';";
        $result = mysqli_query($conn, $select);
        header("location:admintherapists.php");
    }
?>