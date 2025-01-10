<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apartments</title>
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/about.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!--header-->
    <?php 
    session_start();

    $userName = "";
    
    if(isset($_SESSION["userName"]) && $_SESSION["userName"] === 'admin@citynest.com'){
        echo '<header>
                <div class="nav">
                    <div class="logo"><a href="home.html">City Nest</a></div>
                    <ul class="links">
                        <li><a href="home.php">Home</a></li>
                        <li><a href="apartments.php">Apartment</a></li>
                        <li><a href="about.php" class="navActive">About</a></li>
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
                    <div class="logo"><a href="home.html">City Nest</a></div>
                    <ul class="links">
                        <li><a href="home.php">Home</a></li>
                        <li><a href="apartments.php">Apartment</a></li>
                        <li><a href="about.php" class="navActive">About</a></li>
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
                            <li><a href="apartments.php">Apartment</a></li>
                            <li><a href="about.php" class="navActive">About</a></li>
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

    <!--Main About Us Section-->
    <div class="aboutContainer">
        <!-- About Us Hero Image -->
        <section class="about-hero">
            <img src="images/aboutCover.jpg" alt="About Us Hero Image" class="hero-image">
        </section>

        <!-- About Us Text Section -->
        <section class="about-text">
            <h2>About Us</h2>
            <div class="about-content">
                <div class="about-image">
                    <img src="images/aboutUs.jpg" alt="About Us Image">
                </div>
                <div class="about-description">
                    <h3>Your Home, Our Mission</h3>
                    <p>City Nest is dedicated to helping you find the perfect living space in the heart of the city. With over a decade of experience in the real estate market, we pride ourselves on delivering a seamless and personalized home-buying or renting experience. Whether you're seeking a luxury penthouse, a family-friendly apartment, or a cozy studio, we have the options and expertise to meet your needs.</p>
                    <div class="qoute">
                        "Finding the right home isn't just about space—it's about finding where you truly belong."
                    </div>
                </div>
            </div>
        </section>

        <!-- Statistics Section -->
        <section class="stats">
            <div class="stat-item">
                <h3>500+</h3>
                <p>Happy Clients</p>
            </div>
            <div class="stat-item">
                <h3>120+</h3>
                <p>Luxury Listings</p>
            </div>
            <div class="stat-item">
                <h3>15+</h3>
                <p>Years in Business</p>
            </div>
        </section>

        <!-- Executive Team Section -->
        <section class="executive-team">
            <h2>Meet Our Executive Team</h2>
            <div class="team-members">
                <div class="team-member">
                    <div class="imageContainer">
                        <img src="images/f1.jpg" alt="Founder 1">
                    </div>
                    <h3>Jonathan ragav</h3>
                    <p>Co-Founder & CEO</p>
                    <p>Jonathan ragav has over 20 years of experience in real estate, specializing in luxury properties and investment opportunities. She is passionate about making home ownership accessible and stress-free.</p>
                </div>
                <div class="team-member">
                    <div class="imageContainer">
                        <img src="images/f2.jpeg" alt="Founder 2">
                    </div>                  
                    <h3>Samantha despant</h3>
                    <p>Co-Founder & CTO</p>
                    <p>With a background in technology and data analytics, Samantha is the driving force behind City Nest's cutting-edge property management tools and seamless user experience.</p>
                </div>
                <div class="team-member">
                    <div class="imageContainer">
                        <img src="images/f3.jpg" alt="Founder 3">
                    </div>
                    <h3>Rachel Green</h3>
                    <p>Chief Operating Officer</p>
                    <p>Rachel has a decade of experience in property management and customer service. Her focus is ensuring that every client feels supported throughout their journey with City Nest.</p>
                </div>
            </div>
        </section>
    </div>
    
    
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

    <script src="js/cards.js"></script>
</body>
</html>
