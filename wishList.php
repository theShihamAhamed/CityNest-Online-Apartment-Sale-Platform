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
    <link rel="stylesheet" href="styles/wishList.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                        <li><a href="apartments.php">Apartment</a></li>
                        <li><a href="about.php"">About</a></li>
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
                            <li><a href="apartments.php">Apartment</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                        <div class="wishlogin">
                            <a href="wishList.php" class="wishlistBtn">
                                <i class="fa-solid fa-heart"></i>
                            </a>
                            <a href="login.html" class="loginBtn">Login</a>
                            
                        </div>
                    </div>
                </header>';
    }

    ?>

    <!--wish list section-->
    <section class="wishlist-section">
        <h1 class="wishlist-title">Your Wish List</h1>
        <table class="wishlist-table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Bedrooms</th>
                    <th>Bathrooms</th>
                    <th>Furnished</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php
                
                    function readData()
                    {
                        global $con;
                        global $userName;

                        $sql = "SELECT w.wishlist_id, w.email, w.apartment_id, a.apartment_id, a.title, a.no_of_bedrooms, a.no_of_bathroom, a.furnished_status, a.thumbnail, a.price FROM wishlist w, apartment a WHERE a.apartment_id = w.apartment_id AND w.email = '$userName'";

                        $result = $con->query($sql);

                        if ($result->num_rows > 0)
                        {
                            while($row = $result->fetch_assoc())
                            {
                                echo '<tr>
                                        <td><img src="images/'.$row['thumbnail'].'" alt="Apartment 1" class="wishlist-image"></td>
                                        <td><a href="#">'.$row['title'].'</a></td>
                                        <td>'.$row['no_of_bedrooms'].'</td>
                                        <td>'.$row['no_of_bathroom'].'</td>
                                        <td>'.$row['furnished_status'].'</td>
                                        <td>'.$row['price'].'</td>
                                        <td>
                                            <form method="POST" action="deleteWishList_process.php" onsubmit="return confirmDelete()">
                                                <input type="hidden" name="wishlist_id" value="'.$row['wishlist_id'].'">
                                                <button type="submit" class="delete-btn">Delete</button>
                                            </form>
                                        </td>
                                    </tr>';
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
            </tbody>
        </table>
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

    <script src="js/wishlist.js"></script>
</body>
</html>
