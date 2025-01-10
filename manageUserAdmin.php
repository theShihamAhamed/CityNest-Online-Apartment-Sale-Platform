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
    <link rel="stylesheet" href="styles/manageUserAdmin.css">
    <link rel="stylesheet" href="styles/adminheader.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!--header-->
    <header>
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
            </header>
    <!--admin header-->
    <div class="adminHeader">
        <nav class="adminNav">
            <ul class="adminLinks">
                <li><a href="manageListingAdmin.php">Manage listings</a></li>
                <li><a href="addListingAdmin.php"  >Add listing</a></li>
                <li><a href="messageAdmin.php">Messages</a></li>
                <li><a href="manageUserAdmin.php" class="adminActive">Manage users</a></li>
            </ul>
        </nav>
    </div>
    
    <!--manage listing-->
    <section class="wishlist-section">
        <table class="wishlist-table">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php
                
                    function readData()
                    {
                        global $con;

                        $sql = "SELECT user_id, email, f_name, l_name FROM registered_user ";

                        $result = $con->query($sql);

                        if ($result->num_rows > 0)
                        {
                            while($row = $result->fetch_assoc())
                            {
                                echo '<tr>
                                        <td>'.$row['user_id'].'</td>
                                        <td>'.$row['f_name'].' '.$row['l_name'].'</td>
                                        <td>'.$row['email'].'</td>
                                        <td>
                                            <form method="POST" action="deleteUser_process.php" onsubmit="return confirmDelete()">
                                                <input type="hidden" name="user_id" value="'.$row['user_id'].'">
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

    <script src="js/mangeUser.js"></script>
</body>
</html>
