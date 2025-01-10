<?php
    require 'config.php';

    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $message = $_POST["message"];

	$sql = "INSERT INTO message(message_id, name, phone_no, email, message ) VALUES ('','$name','$phone','$email','$message')";

        if($con->multi_query($sql))
        {
            echo "Inserted successfully";
            header("Location:contact.php");
        }
        else
        {
            echo "Error:". $con->error;
        }
        $con->close();   

?>