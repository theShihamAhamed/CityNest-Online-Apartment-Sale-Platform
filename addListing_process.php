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
    $image1 = $_POST["image1"];
    $image2 = $_POST["image2"];
    $image3 = $_POST["image3"];
    $image4 = $_POST["image4"];
    
	$sql = "INSERT INTO apartment(apartment_id, title, discription, no_of_bedrooms, no_of_bathroom, area, furnished_status, apart_address, price, whatsappLink, thumbnail) VALUES ('$apartment_id', '$title', '$discription', '$no_of_bedrooms', '$no_of_bathroom', '$area', '$furnished_status', '$apart_address', '$price', '$whatsappLink', '$thumbnail');
    INSERT INTO apartment_images(apartment_id, images) VALUES ('$apartment_id', '$image1');
    INSERT INTO apartment_images(apartment_id, images) VALUES ('$apartment_id', '$image2');
    INSERT INTO apartment_images(apartment_id, images) VALUES ('$apartment_id', '$image3');
    INSERT INTO apartment_images(apartment_id, images) VALUES ('$apartment_id', '$image4');";

        if($con->multi_query($sql))
        {
            echo "Inserted successfully";
            header("Location:addListingAdmin.php");
        }
        else
        {
            echo "Error:". $con->error;
        }
        $con->close();   

?>