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
    <link rel="stylesheet" href="styles/home.css">
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
                    <div class="logo"><a href="home.php">City Nest</a></div>
                    <ul class="links">
                        <li><a href="home.php" class="navActive">Home</a></li>
                        <li><a href="apartments.php">Apartment</a></li>
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
        echo $userName;
        echo '<header>
                <div class="nav">
                    <div class="logo"><a href="home.php">City Nest</a></div>
                    <ul class="links">
                        <li><a href="home.php" class="navActive">Home</a></li>
                        <li><a href="apartments.php">Apartment</a></li>
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
                        <div class="logo"><a href="home.php">City Nest</a></div>
                        <ul class="links">
                            <li><a href="home.php" class="navActive">Home</a></li>
                            <li><a href="apartments.php">Apartment</a></li>
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
    <!--body-->
    <div class="container"></div>
        <!-- First Section -->
        <div class="section">
            <div class="content">
                <div class="icon-text">
                    <span class="icon"><i class="fa-solid fa-house-chimney"></i></span>
                    <span class="label">Your Dream Home Awaits</span>
                </div>
                <h1>Discover Your Perfect Apartment Today</h1>
                <p>Explore a variety of apartments tailored to meet your needs. Whether you're looking for a cozy studio or a spacious family home, we have options for you.</p>
                <a href = "apartments.php"><button class="btn">Browse Apartments</button></a>
            </div>
            <div class="image-placeholder">
                <img src="images/heroBanner.png" alt="Apartment view">
            </div>
        </div>

        <!-- Second Section -->
        <div class="section-secondary">
            <h2>Your Ideal Living Space Awaits.</h2>
            <p>Our listings include modern amenities and convenient locations. Find your dream apartment with ease and comfort.</p>
            <a href = "apartments.php"><button class="btn">View Listings</button></a>
        </div>
        <!--new listing-->
        <div class="newListing"><h2>New Listings</h2></div>

        <section>
            <div id="cardsContainer" class="cardsContainer">
                <?php
                function readData()
                {
                    global $con;
                    global $userName;

                    $sql = "SELECT apartment_id, title, no_of_bedrooms, no_of_bathroom, area, apart_address, price, thumbnail FROM apartment";

                    $result = $con->query($sql);

                    if ($result->num_rows > 0)
                    {
                        while($row = $result->fetch_assoc())
                        {
                            echo '<div class="card">
                                        <form class="favorite" method="POST" action="wishList_processHome.php" >
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

        <div class="newListing"><h2>Recent Clients</h2></div>

    </div>
    
    <!--recent clients-->

    <section class="recent-clients">
        <div class="client-cards">
            <div class="client-card">
                <div class="client-avatar">
                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                </div>
                <h3>John Doe</h3>
                <p>"I found my dream apartment through City Nest! The process was seamless and the staff were incredibly helpful."</p>
            </div>

            <div class="client-card">
                <div class="client-avatar">
                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                </div>
                <h3>Jane Smith</h3>
                <p>"A fantastic experience! City Nest helped me every step of the way to secure the perfect place."</p>
            </div>

            <div class="client-card">
                <div class="client-avatar">
                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                </div>
                <h3>Michael Johnson</h3>
                <p>"Great service and amazing listings! I highly recommend City Nest for anyone looking to rent or buy."</p>
            </div>

            <div class="client-card">
                <div class="client-avatar">
                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                </div>
                <h3>Emily Davis</h3>
                <p>"I had a wonderful experience finding my new home. The team is very knowledgeable and friendly."</p>
            </div>
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
