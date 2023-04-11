<?php
    include "config/config.php";
    session_start();
    if(isset($_POST['submit'])) {

        $id = $_SESSION['id'];
        $name = $conn->real_escape_string($_POST['name']);

        $card_number = $conn->real_escape_string($_POST['card-number']);
        $cardnumber=hash('sha512', $card_number);

        $expmonth = $conn->real_escape_string($_POST['expmonth']);

        $cvc = $conn->real_escape_string($_POST['appoint-time']);
        $cvcnumber=hash('sha512', $cvc);
        echo $cvcnumber;

        $insert = "INSERT INTO `payment`(`client_id`, `Name`, `card_number`, `expmonth`, `cvc`) VALUES ('$id','$name','$cardnumber','$expmonth','$cvcnumber');";
        $result = mysqli_query($conn, $insert);
        if($result){
               header("Location: billing.php?message=You payment is successful");
            }else {
                header("Location: billing.php?message=Your payment is unsuccessful.  Please try again");    
        }
    }
?>