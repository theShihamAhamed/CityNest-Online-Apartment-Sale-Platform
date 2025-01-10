<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms and Conditions</title>
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/termsAndCondition.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>
<body>
    <!--header-->
    <?php 
    session_start();
    $userName = "";

    if(isset($_SESSION["userName"]) && $_SESSION["userName"] === 'admin'){
        echo '<header>
                <div class="nav">
                    <div class="logo"><a href="home.html">City Nest</a></div>
                    <ul class="links">
                        <li><a href="home.php">Home</a></li>
                        <li><a href="apartments.php">Apartments</a></li>
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
                    <div class="logo"><a href="home.html">City Nest</a></div>
                    <ul class="links">
                        <li><a href="home.php">Home</a></li>
                        <li><a href="apartments.php">Apartments</a></li>
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
    else {
        echo '<header>
                    <div class="nav">
                        <div class="logo"><a href="home.html">City Nest</a></div>
                        <ul class="links">
                            <li><a href="home.php">Home</a></li>
                            <li><a href="apartments.php">Apartments</a></li>
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

    <!--Terms and Conditions-->
    <div class="termsContainer">
        <section class="terms">
            <h1>Terms and Conditions</h1>
            <p>Welcome to City Nest! These terms and conditions outline the rules and regulations for the use of City Nest's Website.</p>

            <h2>1. Terms</h2>
            <p>By accessing this website, you are agreeing to be bound by these terms and conditions of use, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws.</p>

            <h2>2. Use License</h2>
            <p>Permission is granted to temporarily download one copy of the materials (information or software) on City Nest's web site for personal, non-commercial transitory viewing only.</p>

            <h2>3. Disclaimer</h2>
            <p>The materials on City Nest's website are provided "as is". City Nest makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties.</p>

            <h2>4. Limitations</h2>
            <p>In no event shall City Nest or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit).</p>

            <h2>5. Modifications</h2>
            <p>City Nest may revise these terms of service for its web site at any time without notice. By using this website you are agreeing to be bound by the current version of these Terms and Conditions of Use.</p>

            <h2>6. Governing Law</h2>
            <p>Any claim relating to City Nest's website shall be governed by the laws of the site owner's home jurisdiction without regard to its conflict of law provisions.</p>

            <p>Thank you for choosing City Nest!</p>
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

    <script src="js/cards.js"></script>
</body>
</html>
