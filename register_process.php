<?php
    require 'config.php';

    $f_name = $_POST["f_name"];
    $l_name = $_POST["l_name"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    
	$sql = "INSERT INTO registered_user(user_id, password, email, f_name, l_name) VALUES ('', '$password', '$email', '$f_name','$l_name')";

        if($con->query($sql))
        {
            echo "Inserted successfully";
            header("Location:login.html");
        }
        else
        {
            echo "Error:". $con->error;
        }
        $con->close();   

?>

