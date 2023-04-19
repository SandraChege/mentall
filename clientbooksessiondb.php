<?php
    include "config/config.php";
    session_start();

    if(isset($_POST['singlebutton'])) {

        $id = $_SESSION['id'];
        //$name = $conn->real_escape_string($_POST['name']);
        //$email = $conn->real_escape_string($_POST['email']);//made this a comment
        $date = $conn->real_escape_string($_POST['date']);
        $time = $conn->real_escape_string($_POST['appoint-time']);


        // Insert the data into the database
        //$insert = "INSERT INTO appointments (user_name, user_email, date, time) VALUES ('$name', '$email', '$date', '$time')";
        $insert = "INSERT INTO appointments (client_id, date, time, status) VALUES ('$id', '$date', '$time', 'Active')";
        $result = mysqli_query($conn, $insert);
        if($result){
               header("Location: clientbooksession.php?message=You have successfully booked an appointment");
            }else {
                header("Location: clientbooksession.php?message=Your submission is unsuccessful.  Please try again");    
        }
    }
?>