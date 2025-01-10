<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apartments</title>
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/addListingAdmin.css">
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
                <li><a href="addListingAdmin.php"  class="adminActive">Add listing</a></li>
                <li><a href="messageAdmin.php">Messages</a></li>
                <li><a href="manageUserAdmin.php">Manage users</a></li>
            </ul>
        </nav>
    </div>
    
    <!--add listing-->
    <div class="add-listing-form">
        <h1 class="form-title">Add New Listing</h1>
        <form action="addListing_process.php" method="post" >
            
            <div class="form-group">
                <label for="apartment_id">ID:</label>
                <input type="text" id="apartmentId" name="apartment_id" class="form-input" placeholder="Enter ID" required>
            </div>

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" class="form-input" placeholder="Enter title" required>
            </div>

            <div class="form-group">
                <label for="discription">Description:</label>
                <textarea id="description" name="discription" class="form-description" rows="5" placeholder="Enter description" required></textarea>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="no_of_bedrooms">No Bedroom:</label>
                    <select id="bedrooms" name="no_of_bedrooms" class="form-input">
                        <option value="" disabled selected>Select</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="no_of_bathroom">No Bathroom:</label>
                    <select id="bathrooms" name="no_of_bathroom" class="form-input">
                        <option value="" disabled selected>Select</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="area">Scale:</label>
                <input type="number" id="area" name="area" class="form-input" placeholder="Enter scale (in sq ft)">
            </div>

            <div class="form-group">
                <label>Is Furnished:</label>
                <div>
                    <input type="radio" id="furnished-yes" name="furnished_status" value="Furnished" class="form-radio">
                    <label for="furnished-yes">Yes</label>
                    <input type="radio" id="furnished-no" name="furnished_status" value="Unfurnished" class="form-radio">
                    <label for="furnished-no">No</label>
                </div>
            </div>

            <div class="form-group">
                <label for="thumbnail">Thumbnail image:</label>
                <input type="file" id="thumbnail" name="thumbnail" class="form-input" required>
            </div>

            <div class="form-group">
                <div class="otherimages">
                    <div class="image">
                        <label for="other-images">images 1:</label>
                        <input type="file" id="image1" name="image1" class="form-input" >
                    </div>
                    <div class="image">
                        <label for="other-images">images 2:</label>
                        <input type="file" id="image2" name="image2" class="form-input" >
                    </div>
                    <div class="image">
                        <label for="other-images">images 3:</label>
                        <input type="file" id="image3" name="image3" class="form-input" >
                    </div>
                    <div class="image">
                        <label for="other-images">images 4:</label>
                        <input type="file" id="image4" name="image4" class="form-input" >
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="apart_address">Address:</label>
                <input type="text" id="address" name="apart_address" class="form-input " placeholder="Enter address" required>
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" step="0.01" id="price" name="price" class="form-input" placeholder="Enter price" required>
            </div>

            <div class="form-group">
                <label for="whatsappLink">Whatsapp link:</label>
                <input type="text" id="price" name="whatsappLink" class="form-input" placeholder="Enter Whatsapp link" required>
            </div>

            <div class="form-buttons">
                <button type="submit" class="form-submit-btn">Upload</button>
            </div>
        </form>
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
