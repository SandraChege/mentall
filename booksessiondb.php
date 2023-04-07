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
    }
?>

//SEND EMAILS

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/vendor/autoload.php';

//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\SMTP;

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try{
    //Server settings
    $mail->SMTPDebug = 1; //change 1 to ::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP(); //Send using SMTP
    $mail->SMTPAuth = true; //Enable SMTP authentication
    $mail->Host = 'smtp.gmail.com';//Set the SMTP server to send through
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; //ENCRYPTION_SMTPS //Enable implicit TLS encryption
    $mail->Port = 587; //TCP port to connect to; use 465 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_SMTPS`

    $mail->Username   = 'user@example.com';                     //SMTP username
    $mail->Password   = 'secret';                               //SMTP password

    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress('sandra@example.net', 'Sandra');     //Add a recipient
    $mail->Subject = "Appointment details";
    $mail->Body = $date .' '. $time;
    
    //$mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    //$mail->isHTML(true);                                  //Set email format to HTML
    //$mail->Subject = 'Here is the subject';
    //$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo "Mail has been sent successfully!";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
