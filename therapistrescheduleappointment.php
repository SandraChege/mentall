<?php
    include "config/config.php";
    session_start();

    if(isset($_POST['submit'])) {

        $id = $_SESSION['id'];

        $select_appointment_team_data = "SELECT `client_id`, `therapist_id` FROM `assigned_therapist` WHERE `therapist_id` = '$id';";
        $select_appointment_team_result = mysqli_query($conn, $select_appointment_team_data);
        print_r($select_appointment_team_result);

        if($select_appointment_team_result){
            while ($row = mysqli_fetch_assoc($select_appointment_team_result)) { //fetch array
                $clientinformation = $row['client_id'];
                $updatestatus = "UPDATE `appointments` SET `status`='Reschedule' WHERE `client_id` = '$clientinformation';";
                $updatestatusresult = mysqli_query($conn, $updatestatus);
                if($updatestatusresult){
                    header("Location: therapistappointments.php?message=You have successfully rescheduled an appointment");
                }else{
                    header("Location: therapistappointments.php?message=Your submission is unsuccessful.  Please try again");
                }
                
            }
        }
    }
?>