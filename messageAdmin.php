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
    <link rel="stylesheet" href="styles/messageAdmin.css">
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
                <li><a href="messageAdmin.php" class="adminActive">Messages</a></li>
                <li><a href="manageUserAdmin.php" >Manage users</a></li>
            </ul>
        </nav>
    </div>
    
    <!--message-->
    <section class="message-section">
        <div class="message-container">
            <h2>Messages</h2>
            <table class="message-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                <?php
            
                function readData()
                {
                    global $con;

                    $sql = "SELECT message_id, name, phone_no, email, message FROM message";

                    $result = $con->query($sql);

                    if ($result->num_rows > 0)
                    {
                        while($row = $result->fetch_assoc())
                        {
                            echo '<tr>
                                    <td>'.$row['name'].'</td>
                                    <td>'.$row['phone_no'].'</td>
                                    <td>'.$row['email'].'</td>
                                    <td class="message-content">'.$row['message'].'</td>
                                    <td>
                                        <form method="POST" action="deleteMessage_process.php" onsubmit="return confirmDelete()">
                                            <input type="hidden" name="message_id" value="'.$row['message_id'].'">
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

    <script src="js/message.js"></script>
</body>
</html>
