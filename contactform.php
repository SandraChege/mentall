<?php
    include "config.php";

    if(isset($_POST['submit'])){
        // Get form data
        $name = $_POST['contact_name'];
        $email = $_POST['contact_email'];
        $message = $_POST['contact_message'];
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        // Prepare and execute SQL statement
        $stmt = $conn->prepare("INSERT INTO contact_data (contact_name, contact_email, contact_message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $message);
        $stmt->execute();

        // Close statement and connection
        $stmt->close();
        $conn->close();
        header("Location: contactus.php?message=Your response has been submitted successfully");
    }
?>