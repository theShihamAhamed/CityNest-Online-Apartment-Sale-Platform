<?php

    require 'config.php';

    global $con;

    $wishlist_id = $_POST["wishlist_id"];

    $sql = "DELETE from wishlist where wishlist_id='$wishlist_id'";
    
    if($con->query($sql)){
            header("Location:wishList.php");
    }
    else{
        echo "Error: ".$con->error;
    }
    
?>