<?php

    require 'config.php';

    global $con;

    $message_id = $_POST["message_id"];

    $sql = "DELETE from message where message_id='$message_id'";
    
    if($con->query($sql)){
            echo "Deleted successfully<BR />";
            header("Location:messageAdmin.php");
    }
    else{
        echo "Error: ".$con->error;
    }
    
?>