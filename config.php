<?php
    //database connection
    $conn = new mysqli ('localhost', 'root', '', 'mentihub_project');
    
    if (!$conn) {
        echo "Connection failed!";
    }
    else{
      //echo"Connection Successful";
    }

?>