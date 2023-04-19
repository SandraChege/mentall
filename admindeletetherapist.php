<?php
    include "config/config.php";

    if(isset($_POST['delete'])){
        $therapist_id= $_POST['id'];
        $delete = "DELETE FROM `therapist_info` WHERE therapist_id = '$therapist_id';";
        $result = mysqli_query($conn, $delete);
        header("location:admintherapists.php");
    }
?>