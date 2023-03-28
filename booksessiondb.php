<?php

    // Include the PHPMailer library
    require_once('path/to/PHPMailerAutoload.php');

    //connect to database
    include "config.php"

    session_start();

    // Process the form data
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['date']) && isset($_POST['appoint-time'])) {

        // Sanitize input data to prevent SQL injection
        $name = $conn->real_escape_string($_POST['name']);
        $email = $conn->real_escape_string($_POST['email']);
        $date = $conn->real_escape_string($_POST['date']);
        $time = $conn->real_escape_string($_POST['appoint-time']);

        // Insert the data into the database
        $sql = "INSERT INTO appointments (name, email, date, time) VALUES ('$name', '$email', '$date', '$time')";
        if ($conn->query($sql) === TRUE) {

            // Send confirmation email using PHPMailer
            $mail = new PHPMailer;

            // Set the SMTP settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'your_gmail_username';
            $mail->Password = 'your_gmail_password';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Set the email content
            $mail->setFrom('your_gmail_username@gmail.com', 'Your Name');
            $mail->addAddress($email, $name);
            $mail->isHTML(true);
            $mail->Subject = 'Appointment Confirmation';
            $mail->Body    = 'Hello ' . $name . ',<br><br>Your appointment has been booked for ' . $date . ' at ' . $time . '.<br><br>Thank you for choosing us!';

            // Send the email
            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'Message has been sent';
            }

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close the database connection
        $conn->close();

    }
?>
