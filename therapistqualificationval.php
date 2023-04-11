<?php
    //connect to the database
    include 'config/config.php';

    session_start();
    if(isset($_POST['submit'])){
        $doctor_type = $_POST['doctortype'];
        $doc_disease= $_POST['diseasetype'];
        $doc_qualifications = 'pending';
        $id = $_SESSION['id'];
        if($doctor_type == "blank"){
            header("location:therapistqualification.php?message=Kindly choose your area of expertise");
        }
        if($doc_disease == "blank"){
            header("location:therapistqualification.php?message=Kindly choose your specialization");
        }
        $update = "UPDATE `therapist_info` SET `doctor_type`='$doctor_type',`doc_disease`='$doc_disease',`doc_qualifications`='$doc_qualifications' WHERE `therapist_id` = '$id';";    
        $therapistupdate = mysqli_query($conn, $update);

        if($therapistupdate)  {
            $files = array_filter($_FILES['fileToUpload']['name']); //Use something similar before processing files.
            // Count the number of uploaded files in array
            $total_count = count($_FILES['fileToUpload']['name']);
            $counter = 0;
            // Loop through every file
            for( $i=0 ; $i < $total_count ; $i++ ) {
                $doc_name = $_FILES['fileToUpload']['name'][$i];
                $doc_size = $_FILES['fileToUpload']['size'][$i];
                $tmp_name = $_FILES['fileToUpload']['tmp_name'][$i];
                $error = $_FILES['fileToUpload']['error'][$i];
                //echo nl2br("\n" .$doc_name);
                //The temp file path is obtained
                //$tmpFilePath = $_FILES['fileToUpload']['tmp_name'][$i];
                //A file path needs to be present
                if($error === 0){
                    if ($doc_size > 5242880) {//5MB
                        header("Location: therapistqualification.php?message=file exceeds 5MB");
                    }else{
                        $doc_ex = pathinfo($doc_name, PATHINFO_EXTENSION);//gets the extension
                        echo nl2br("\n" .$doc_ex);
                        $doc_ex_lc = strtolower($doc_ex);
                        $allowed_exs = array("doc", "docx", "pdf"); //allowed extensions
                        if(in_array($doc_ex_lc, $allowed_exs)){
                            $new_doc_name = uniqid("doc-", true).'.'.$doc_ex_lc;//change name of document
                            if ($tmp_name != ""){
                                //Setup our new file path
                                $doc_upload_path = './uploadFiles/'.$new_doc_name;
                                //$newFilePath = "./uploadFiles/" . $_FILES['fileToUpload']['name'][$i];
                                //File is uploaded to temp dir
                                if(move_uploaded_file($tmp_name, $doc_upload_path)) {
                                    $insert_doc= "INSERT INTO `qualifications`(`therapist_id`, `doc_name`) VALUES ('$id','$new_doc_name');";
                                    $result_insert = mysqli_query($conn, $insert_doc);
                                    if($result_insert){
                                        $counter++;
                                    }
                                }

                            }
                        }else{
                            //check this out
                            //$em = "You can't upload files of this type";
		                    //header("Location: index.php?error=$em");
                        }
                    
                    }    
                }else{
                    //redirect back to page
                    //message should be kindly enter your documents
                } 
            } 
            if($counter == $total_count){
                header("location:therapistshome.php?message=Your details have been submitted. Awaiting verification");
            }else{
                header("location:therapistqualification.php?message=Your documents are not submitted. Please try again");
            }
        }    
    }
?>