<?php 

    $email = $_POST["email"];
    $password = $_POST["password"];
    
    require 'config.php';

    $sql = "SELECT email, password FROM registered_user WHERE email = '$email' AND password = '$password'";
    $result = $con->query($sql);

    session_start();
    
    if($email==="admin@citynest.com" && $password==="123")
    {
        $_SESSION["userName"] = $email;
        header("Location:messageAdmin.php");
    }
    elseif($result->num_rows > 0)
    {
        $row = $result->fetch_assoc();
                            
        $_SESSION["userName"] = $row['email'];
        header("Location:home.php");

    }
    else 
    {
        header("Location:login.html");

    }

    $con->close();

?> 




