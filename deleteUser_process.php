<?php

    require 'config.php';

    global $con;

    $user_id = $_POST["user_id"];

    $sql = "DELETE from registered_user where user_id='$user_id'";
    
    if($con->query($sql)){
            header("Location:manageUserAdmin.php");
    }
    else{
        echo "Error: ".$con->error;
    }
    
?>