<?php
    session_start();

    if(isset($_POST["logoff"])) {
        session_destroy();
        header("Location:login.html");
    }
    else {
        header("Location:home.php");
    }
?>