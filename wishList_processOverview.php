<?php
    require 'config.php';

    $apartment_id = $_POST["apartment_id"];
    $email = $_POST["email"];

    
    $check_sql = "SELECT * FROM wishlist WHERE apartment_id = '$apartment_id' AND email = '$email'";
    $result = $con->query($check_sql);

    if ($result->num_rows > 0 ) {
       
        header("Location: overView.php?id=$apartment_id");
    }
    elseif($email === ''){
        header("Location: login.html");
    } 
    else {
       
        $insert_sql = "INSERT INTO wishlist(wishlist_id, email, apartment_id) VALUES ('', '$email', '$apartment_id')";

        if ($con->query($insert_sql)) {
            header("Location: overView.php?id=$apartment_id");
        } else {
            echo "Error: " . $con->error;
        }
    }

    $con->close();
?>
