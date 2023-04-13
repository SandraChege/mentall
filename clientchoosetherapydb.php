<?php
include 'config/config.php';

session_start();

if(isset($_POST['submit']) && isset($_SESSION['id'])){
        // Retrieve answers from the form
        $emotions = $_POST['emotions'];
        $sadness = $_POST['sadness'];
        $worry = $_POST['worry'];
        $interest = $_POST['interest'];
        $intrusive = $_POST['intrusive'];
        $decision = $_POST['decision'];
        $agitated = $_POST['agitated'];
        $physical = $_POST['physical'];
        $sleep = $_POST['sleep'];
        $life = $_POST['life'];

    $id = $_SESSION['id'];


    // Calculate the total score based on the answers
    $totalScore = $emotions + $sadness + $worry + $interest + $intrusive+ $decision + $agitated + $physical + $sleep + $life;
    $depression = $emotions + $sadness + $interest + $life;
    $anxiety = $worry + $decision + $sleep;
    $ptsd = $intrusive + $agitated + $physical;
    $diagnosis = "";
    //echo $depression;
    //echo $anxiety;
    //echo $ptsd;

    // Assign patient to a doctor based on total score
    $doctor = "";
    if ($totalScore >= 0 && $totalScore <= 18) {
        $doctor = "Therapist";
    } elseif ($totalScore >= 19 && $totalScore <= 36) {
        $doctor = "Psychologist";
    } else {
        $doctor = "Psychiatrist";
    }
    
    //Determine the diagnosis based on the values of the variables
    if($depression > $anxiety && $depression > $ptsd){
        $diagnosis = "Depression";
    } elseif($anxiety > $depression && $anxiety > $ptsd){
        $diagnosis = "Anxiety";
    }elseif($ptsd > $anxiety && $ptsd > $depression){
        $diagnosis = "Ptsd";
    }
    echo $diagnosis;

    
    $check = "SELECT diagnosis_id from `diagnosis` WHERE client_id = '$id';";
    $result_check = mysqli_query($conn, $check);

    //insert info to table
    $insert = "INSERT INTO diagnosis (`client_id`, `diagnosis_name`,`doc_type`) VALUES ('$id', '$diagnosis', '$doctor');";
    //update info
    $update = "UPDATE `diagnosis` SET `diagnosis_name`='$diagnosis', `doc_type`='$doctor' WHERE `client_id` = '$id';";
    echo "holla";

    if(mysqli_num_rows($result_check) == 0){
        $result_insert = mysqli_query($conn, $insert);
        if ($result_insert){
            header(("location:diagnosis.php?message= Your diagnosis has been made. A therapist will be assigned to you"));
        }
    }
    echo $diagnosis;
    echo $doctor;
    if(mysqli_num_rows($result_check) == 1){
        $result_update = mysqli_query($conn, $update);
        if ($result_update){
            header(("location:diagnosis.php?message= Your diagnosis has been updated."));
        }
    }
}
?>