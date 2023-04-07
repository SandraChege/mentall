<?php
include 'config/config.php';
echo"hey";

session_start();
echo "hat";

if(isset($_POST['submit'])){
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



    // Define score mapping
    $scoreMapping = array(
        "Very often" => 1,
        "Very bad" => 1,
        "Very frequently" => 1,
        "Very dissatisfied" =>1,
        "A lot of difficulty" =>1,
        "A lot of struggle" =>1,

        "Often" => 2,
        "Bad"=> 2,
        "Frequently" => 2,
        "Dissatisfied" => 2,
        "Moderate difficulty" => 2,
        "Moderate struggle" => 2,

        "Sometimes" => 3,
        "Occasionally" => 3,
        "Some difficulty" => 3,
        "Some struggle" => 3,
        "Neutral" => 3,

        "Rarely" => 4,
        "Satisfied" => 4,
        "Little difficulty" => 4,
        "Little struggle" => 4,
        "No difficulty" => 4,
        "Good" => 4,

        "Never" => 5,
        "Very satisfied" => 5,
        "No difficulty" => 5,
        "No struggle" => 5,
        "Very good" => 4,
    );
    // Calculate total score
    $totalScore = 0;
    $totalScore = $scoreMapping[$emotions] + $scoreMapping[$sadness] + $scoreMapping[$worry] + $scoreMapping[$interest] + $scoreMapping[$intrusive] + $scoreMapping[$decision] + $scoreMapping[$agitated] + $scoreMapping[$physical] + $scoreMapping[$life] + $scoreMapping[$sleep];

    // Assign patient to a doctor based on total score
    $doctor = "";
    if ($totalScore >= 10 && $totalScore <= 20) {
        $doctor = "Therapist";
    } elseif ($totalScore >= 21 && $totalScore <= 30) {
        $doctor = "Psychologist";
    } else {
        $doctor = "Psychiatrist";
    }
    // Display the total score and assigned doctor
    echo "Based on your answers, you have been assigned to a " . $doctor . ".";
}
?>