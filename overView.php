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
    <link rel="stylesheet" href="styles/overView.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php 

        session_start();

        $userName = "";
        if(isset($_SESSION["userName"]) && $_SESSION["userName"] === 'admin'){
            echo '<header>
                    <div class="nav">
                        <div class="logo"><a href="home.html">City Nest</a></div>
                        <ul class="links">
                            <li><a href="home.php">Home</a></li>
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
                        <div class="logo"><a href="home.html">City Nest</a></div>
                        <ul class="links">
                            <li><a href="home.php">Home</a></li>
                            <li><a href="apartments.php">Apartment</a></li>
                            <li><a href="about.php"">About</a></li>
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
                                <li><a href="about.php"">About</a></li>
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

    <!--overView-->

    <?php
    require 'config.php';

    if (isset($_GET['id'])) {
        $apartment_id = $_GET['id'];

        function readData($apartment_id) {
            global $con;
            global $userName;

            $sql1 = "SELECT apartment_id, title, discription, no_of_bedrooms, no_of_bathroom, area, furnished_status, apart_address, price, whatsappLink, thumbnail FROM apartment WHERE apartment_id = '$apartment_id'";
            $sql2 = "SELECT apartment_id, images FROM apartment_images WHERE apartment_id = '$apartment_id'";

            $result1 = $con->query($sql1);
            $result2 = $con->query($sql2);

            if ($result1->num_rows > 0) {
                $images = array();
                $i = 0;
                while($row2 = $result2->fetch_assoc()) {
                    $images[$i] = $row2["images"];
                    $i++;
                }

                while($row = $result1->fetch_assoc()) {
                    echo '<div class="container">
                            <div class="overview">
                                <div class="main-image">
                                    <img src="images/'.$row["thumbnail"].'" alt="Apartment Image">
                                </div>
                                <div class="details">
                                    <p>ID: '.$row["apartment_id"].'</p>
                                    <h1>'.$row["title"].'</h1>
                                    <p><i class="fas fa-map-marker-alt"></i> '.$row["apart_address"].'</p>
                        
                                    <div class="info-box">
                                        <div>
                                            <p>Bedrooms</p>
                                            <p>'.$row["no_of_bedrooms"].'</p>
                                        </div>
                                        <div>
                                            <p>Bathrooms</p>
                                            <p>'.$row["no_of_bathroom"].'</p>
                                        </div>
                                    </div>
                        
                                    <div class="info-box">
                                        <div>
                                            <p>Floor area (sq.ft)</p>
                                            <p>'.$row["area"].'</p>
                                        </div>
                                        <div>
                                            <p>Furnishing Status</p>
                                            <p class="furnishing-status">'.$row["furnished_status"].'</p>
                                        </div>
                                    </div>
                        
                                    <p class="price">Rs '.$row["price"].'</p>
                                    <div class = "link-heart">
                                        <a class="btn" href = "'.$row["whatsappLink"].'">Whatsapp</a>
                                    
                                        <form class="heartbtn" method="POST" action="wishList_processOverview.php" >
                                            <input type="hidden" name="apartment_id" value="'.$row['apartment_id'].'">
                                            <input type="hidden" name="email" value="'.$userName.'">
                                            <button type="submit" class="btn  delete-btn">
                                                <i class="fa-solid fa-heart"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="small-images">
                                <img src="images/'.$images[0].'" alt="Image 1">
                                <img src="images/'.$images[1].'" alt="Image 2">
                                <img src="images/'.$images[2].'" alt="Image 3">
                                <img src="images/'.$images[3].'" alt="Image 4">
                            </div>
                        
                            <div class="description">
                                <h2>Description</h2>
                                <p>'.$row["discription"].'</p>
                            </div>
                        </div>';
                }
            } else {
                echo "No results";
            }

            $con->close();
        }

        readData($apartment_id);
    }
    else {
        echo "Apartment ID not provided";
    }
    ?>


    
    
    
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
