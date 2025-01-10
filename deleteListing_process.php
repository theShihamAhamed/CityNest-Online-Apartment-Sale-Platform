<?php

    require 'config.php';

    global $con;

    $apartment_id = $_POST["apartment_id"];

    $sql_delete_images = "DELETE FROM apartment_images WHERE apartment_id='$apartment_id'";

    if($con->query($sql_delete_images)) {
        
        $sql_delete_apartment = "DELETE FROM apartment WHERE apartment_id='$apartment_id'";

        if($con->query($sql_delete_apartment)) {
            echo "Deleted successfully<BR />";
            header("Location:manageListingAdmin.php");
        }
        else {
            echo "Error deleting apartment: " . $con->error;
        }
    }
    else {
        echo "Error deleting images: " . $con->error;
    }

    $con->close();

    
?>