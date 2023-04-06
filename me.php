if ($conn->query($sql) === TRUE) {

// Send confirmation email using PHPMailer
$mail = new PHPMailer;

// Set the SMTP settings
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
//$mail->Username = 'Mentihub';
//$mail->Password = 'your_gmail_password';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Set the email content
$mail->setFrom('Mentihub@gmail.com', 'Mentihub');
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