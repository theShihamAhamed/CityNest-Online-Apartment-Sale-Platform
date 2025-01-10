<?php
    require 'config.php';

    $apartment_id = $_POST["apartment_id"];
    $title = $_POST["title"];
    $discription = $_POST["discription"];
    $no_of_bedrooms = $_POST["no_of_bedrooms"];
    $no_of_bathroom = $_POST["no_of_bathroom"];
    $area = $_POST["area"];
    $furnished_status = $_POST["furnished_status"];
    $apart_address = $_POST["apart_address"];
    $price = $_POST["price"];
    $whatsappLink = $_POST["whatsappLink"];
    $thumbnail = $_POST["thumbnail"];
    
	$sql = "UPDATE apartment set title = '$title', discription = '$discription', no_of_bedrooms = '$no_of_bedrooms', no_of_bathroom = '$no_of_bathroom', area = '$area', furnished_status = '$furnished_status', apart_address = '$apart_address', price = '$price', whatsappLink = '$whatsappLink' WHERE apartment_id = '$apartment_id'";

        if($con->multi_query($sql))
        {
            echo "updated successfully";
            header("Location:manageListingAdmin.php");
        }
        else
        {
            echo "Error:". $con->error;
        }
        $con->close();   

?>