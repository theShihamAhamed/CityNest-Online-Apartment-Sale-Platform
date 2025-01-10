<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apartments</title>
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/contact.css">
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
                        <li><a href="apartments.php">Apartments</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php" class="navActive">Contact</a></li>
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
                        <li><a href="apartments.php">Apartments</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php" class="navActive">Contact</a></li>
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
    else {
        echo '<header>
                    <div class="nav">
                        <div class="logo"><a href="home.html">City Nest</a></div>
                        <ul class="links">
                            <li><a href="home.php">Home</a></li>
                            <li><a href="apartments.php">Apartments</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="contact.php" class="navActive">Contact</a></li>
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

    <!--contact main-->
    <div class="contactMain">
        <section class="contact-info">
            <h1>Get in Touch</h1>
            <p>We’re here to help you with any questions or concerns you may have. Feel free to reach out, and we’ll get back to you as soon as possible.<br>If you’re looking for your next home, contact us today!</p>
            <div class="contact-details">
                <div class="contact-item">
                    <span class="icon"><i class="fa-solid fa-phone"></i></span>
                    <div class="details">
                        <p>Call:</p>
                        <p>+91 98765 43210</p>
                    </div>
                </div>
                <div class="contact-item">
                    <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                    <div class="details">
                        <p>Email:</p>
                        <p>info@citynest.com</p>
                    </div>
                </div>
                <div class="contact-item">
                    <span class="icon"><i class="fa-solid fa-location-dot"></i></span>
                    <div class="details">
                        <p>Address:</p>
                        <p>123 Main Street, Downtown City</p>
                    </div>
                </div>
            </div>
            <div class="social-media">
                <p>Follow us:</p>
                <div class="social-icons">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </section>

        <section class="contact-form">
            <h2>Drop a Message</h2>
            <div class="form-container">
                <!--form-->
                <form class="contactForm" action="contact_process.php" method="post">
                    <input type="text" name="name" placeholder="Name" >
                    <input type="text" name="phone" placeholder="Phone Number" >
                    <input type="email" name="email" placeholder="Email" >
                    <textarea name="message" rows="5" placeholder="Your Message..." ></textarea>
                    <button type="submit">Send</button>
                </form>
                <div class="form-image">
                    <img src="images/c2.jpg" alt="Contact Image" />
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
                    <li><a href="#">Apartments</a></li>
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

    <script src="js/contact.js"></script>
</body>
</html>
