<?php 
    require 'config.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apartments</title>
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/apartment.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php 

    session_start();

    $userName = "";
    if(isset($_SESSION["userName"]) && $_SESSION["userName"] === 'admin@citynest.com'){
        echo '<header>
                <div class="nav">
                    <div class="logo"><a href="home.html">City Nest</a></div>
                    <ul class="links">
                        <li><a href="home.php" >Home</a></li>
                        <li><a href="apartments.php" class="navActive">Apartment</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                    <div class="wishlogin">
                        <a href="messageAdmin.php" class="wishlistBtn">Dashboard</a>
                        <a href="wishList.php" class="wishlistBtn">
                            <i class="fa-solid fa-heart"></i>
                        </a>
                        <form class="loginBtn" method="post" action="logoff.php"> 
                            <input name="logoff" type="submit" value="Log off"/>
                        </form> 
                        
                    </div>
                </div>
            </header>';  
    }
    elseif(isset($_SESSION["userName"])) { 
        $userName = $_SESSION["userName"];
        echo '<header>
                <div class="nav">
                    <div class="logo"><a href="home.html">City Nest</a></div>
                    <ul class="links">
                        <li><a href="home.php">Home</a></li>
                        <li><a href="apartments.php" class="navActive">Apartment</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                    <div class="wishlogin">
                        <a href="wishList.php" class="wishlistBtn">
                            <i class="fa-solid fa-heart"></i>
                        </a>
                        <form class="loginBtn" method="post" action="logoff.php"> 
                            <input name="logoff" type="submit" value="Log off"/>
                        </form> 
                        
                    </div>
                </div>
            </header>';        

    }
    else
    {
        echo '<header>
                    <div class="nav">
                        <div class="logo"><a href="home.html">City Nest</a></div>
                        <ul class="links">
                            <li><a href="home.php">Home</a></li>
                            <li><a href="apartments.php" class="navActive">Apartment</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                        <div class="wishlogin">
                            <a href="login.html" class="wishlistBtn">
                                <i class="fa-solid fa-heart"></i>
                            </a>
                            <a href="login.html" class="loginBtn">Login</a>
                            
                        </div>
                    </div>
                </header>';
    }

    ?>

    <section>
        <h2>Apartments</h2>
        <div id="cardsContainer" class="cardsContainer">

            <?php
            
            function readData()
            {
                global $con;
                global $userName;

                $sql = "SELECT  apartment_id, title, no_of_bedrooms, no_of_bathroom, area, apart_address, price, thumbnail FROM apartment";

                $result = $con->query($sql);

                if ($result->num_rows > 0)
                {
                    while($row = $result->fetch_assoc())
                    {
                        echo '<div class="card">
                                    <form class="favorite" method="POST" action="wishList_processApartments.php" >
                                        <input type="hidden" name="apartment_id" value="'.$row['apartment_id'].'">
                                        <input type="hidden" name="email" value="'.$userName.'">
                                        <button type="submit" class="delete-btn">
                                            <i class="fa-solid fa-heart"></i>
                                        </button>
                                    </form>
                                    <img src="images/'.$row["thumbnail"].'" alt="House Image" class="card-image">
                                    <a href="overView.php?id='.$row["apartment_id"].'">
                                        <div class="card-content">
                                            <h2 class="price">RS '.$row["price"].'</h2>
                                            <p class="realty">'.$row["title"].'</p>
                                            <p class="address">'.$row["apart_address"].'</p>
                                            <div class="metaInfo">
                                                <span><i class="fa-solid fa-bed"> </i>'.$row["no_of_bedrooms"].' Bed</span>
                                                <span><i class="fa-solid fa-bath"> </i>'.$row["no_of_bathroom"].' Bath</span>
                                                <span><i class="fa-solid fa-ruler-combined"> </i>'.$row["area"].' sqft</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>';
                    }
                }
                else 
                {
                    echo "No results";
                }

                $con->close();
            
            }
            readData();
            ?>
        </div>
    </section>
    
    <!--footer-->
    <footer>
        <div class="footerContainer">
            <div class="footerLogo">
                <a href="#">City Nest</a>
            </div>
            <div class="footerLinks">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Apartment</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="footerSocials">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
            </div>
            <div class="footerCopyright">
                <p>&copy; 2024 City Nest. All rights reserved.</p>
            </div>
        </div>
    </footer>

</body>
</html>
