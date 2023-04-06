<?php
    session_start();

    // Include the PHPMailer library
    //require_once('phpmailer/vendor/PHPMailerAutoload.php');

    // Connect to the database
    include "config/config.php";

    // Process the form data
    if(isset($_POST['singlebutton'])) {

        // Sanitize input data to prevent SQL injection
        $name = $conn->real_escape_string($_POST['name']);
        $email = $conn->real_escape_string($_POST['email']);
        $date = $conn->real_escape_string($_POST['date']);
        $time = $conn->real_escape_string($_POST['appoint-time']);

        // Insert the data into the database
        $insert = "INSERT INTO appointments (user_name, user_email, date, time) VALUES ('$name', '$email', '$date', '$time')";
        $result = mysqli_query($conn, $insert);
        if($result){
                header("Location: booksession.php?message=You have successfully booked an appointment");
            }else {
                header("Location: booksession.php?message=Your submission is unsuccessful.  Please try again");    
            }

        //header('location:homepage.php');

        // Close the database connection
        //$conn->close();

        

        // Close statement and connection
        //$stmt->close();

        //$conn->close();
        //header("Location: booksession.php?message=You have successfully booked an appointment");

    }
?>
