# City Nest - Apartment Rental Website

City Nest is a web-based apartment rental platform developed as a university project during my 2nd Year 1st Semester in October 2024. The system allows users to browse apartment listings, view detailed property information, save apartments to a wishlist, contact the platform, and manage user sessions through login and registration.

The project also includes an admin section where the admin can manage apartment listings, view contact messages, add new listings, edit existing listings, delete listings, and manage registered users.

---

## Project Overview

City Nest is designed to make apartment searching simple and convenient. Users can explore available apartments with details such as price, location, number of bedrooms, bathrooms, furnished status, area, images, and WhatsApp contact links.

The platform includes two main user roles:

1. **Normal Users**

   * Browse apartments
   * Register and login
   * View apartment details
   * Add apartments to wishlist
   * Remove apartments from wishlist
   * Send contact messages

2. **Admin**

   * Login using predefined admin credentials
   * View user messages
   * Add apartment listings
   * Manage apartment listings
   * Edit apartment listing details
   * Delete apartment listings
   * Manage registered users

---

## Features

### Public Website Features

* Home page with hero section
* Apartment listing page
* Apartment detail/overview page
* About page
* Contact page
* Terms and Conditions page
* Responsive-style page layout using custom CSS
* Apartment image gallery
* Font Awesome icons integration

### User Features

* User registration
* User login
* Session-based authentication
* User logout
* Wishlist functionality
* Add apartments to wishlist
* View saved wishlist apartments
* Delete apartments from wishlist
* Submit contact messages

### Admin Features

* Hardcoded admin login
* Admin dashboard navigation
* View submitted contact messages
* Delete contact messages
* Add new apartment listings
* Manage apartment listings
* Edit existing apartment listings
* Delete apartment listings
* View registered users
* Delete registered users

---

## Technologies Used

### Frontend

* HTML5
* CSS3
* JavaScript
* Font Awesome

### Backend

* PHP

### Database

* MySQL / MariaDB

### Local Server

* XAMPP
* Apache
* MySQL / MariaDB

### Database Management Tools

* MySQL Workbench
* phpMyAdmin

---

## Project Folder Structure

```text
src/
│
├── images/
│   ├── heroBanner.png
│   ├── aboutCover.jpg
│   ├── aboutUs.jpg
│   ├── img1.jpg
│   ├── img1_1.jpg
│   ├── img1_2.jpg
│   └── ...
│
├── js/
│   ├── contact.js
│   ├── editListingAdmin.js
│   ├── mangeUser.js
│   ├── message.js
│   ├── register.js
│   └── wishlist.js
│
├── styles/
│   ├── about.css
│   ├── addListingAdmin.css
│   ├── adminheader.css
│   ├── apartment.css
│   ├── contact.css
│   ├── footer.css
│   ├── header.css
│   ├── home.css
│   ├── login.css
│   ├── manageListingAdmin.css
│   ├── manageUserAdmin.css
│   ├── messageAdmin.css
│   ├── overView.css
│   ├── register.css
│   ├── termsAndCondition.css
│   └── wishList.css
│
├── about.php
├── addListingAdmin.php
├── addListing_process.php
├── apartments.php
├── config.php
├── contact.php
├── contact_process.php
├── deleteListing_process.php
├── deleteMessage_process.php
├── deleteUser_process.php
├── deleteWishList_process.php
├── editListing_process.php
├── home.php
├── login.html
├── login_process.php
├── logoff.php
├── manageListingAdmin.php
├── manageUserAdmin.php
├── messageAdmin.php
├── overView.php
├── register.html
├── register_process.php
├── termsAndCondition.php
├── wishList.php
├── wishList_processApartments.php
├── wishList_processHome.php
└── wishList_processOverview.php
```

---

## Database Tables

The project uses the following database tables:

### 1. `registered_user`

Stores normal user account details.

| Column     | Description     |
| ---------- | --------------- |
| `user_id`  | Unique user ID  |
| `password` | User password   |
| `email`    | User email      |
| `f_name`   | User first name |
| `l_name`   | User last name  |

### 2. `apartment`

Stores main apartment listing information.

| Column             | Description                   |
| ------------------ | ----------------------------- |
| `apartment_id`     | Unique apartment ID           |
| `title`            | Apartment title               |
| `discription`      | Apartment description         |
| `no_of_bedrooms`   | Number of bedrooms            |
| `no_of_bathroom`   | Number of bathrooms           |
| `area`             | Apartment area in square feet |
| `furnished_status` | Furnished status              |
| `apart_address`    | Apartment address             |
| `price`            | Monthly rental price          |
| `whatsappLink`     | WhatsApp contact link         |
| `thumbnail`        | Main apartment image          |

### 3. `apartment_images`

Stores additional apartment images.

| Column         | Description            |
| -------------- | ---------------------- |
| `id`           | Unique image record ID |
| `apartment_id` | Related apartment ID   |
| `images`       | Image file name        |

### 4. `message`

Stores contact form messages.

| Column       | Description         |
| ------------ | ------------------- |
| `message_id` | Unique message ID   |
| `name`       | Sender name         |
| `phone_no`   | Sender phone number |
| `email`      | Sender email        |
| `message`    | Message content     |

### 5. `wishlist`

Stores user wishlist items.

| Column         | Description             |
| -------------- | ----------------------- |
| `wishlist_id`  | Unique wishlist item ID |
| `email`        | User email              |
| `apartment_id` | Saved apartment ID      |

---

## Prerequisites

Before running this project, install the following:

* XAMPP
* MySQL Workbench or phpMyAdmin
* Web browser such as Chrome, Edge, or Firefox

---

## Local Setup Instructions

### Step 1: Clone the Repository

```bash
git clone <your-repository-url>
```

Or download the project as a ZIP file from GitHub and extract it.

---

### Step 2: Move the Project to XAMPP `htdocs`

Copy the project folder into the XAMPP `htdocs` directory.

Example:

```text
C:\xampp\htdocs\citynest
```

Your folder should look like this:

```text
C:\xampp\htdocs\citynest\home.php
C:\xampp\htdocs\citynest\config.php
C:\xampp\htdocs\citynest\login.html
C:\xampp\htdocs\citynest\images\
C:\xampp\htdocs\citynest\styles\
```

If your folder name is `src`, the path may look like:

```text
C:\xampp\htdocs\src
```

---

### Step 3: Start XAMPP Services

Open XAMPP Control Panel and start:

```text
Apache
MySQL
```

In this project setup, MySQL is running on port:

```text
3307
```

---

### Step 4: Create the Database

Open MySQL Workbench or phpMyAdmin.

Create a database named:

```sql
test
```

Then select the database:

```sql
USE test;
```

---

## Database Setup Query

Run the following SQL query in MySQL Workbench or phpMyAdmin:

```sql
CREATE DATABASE IF NOT EXISTS test;
USE test;

CREATE TABLE IF NOT EXISTS registered_user (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    f_name VARCHAR(100) NOT NULL,
    l_name VARCHAR(100) NOT NULL
);

CREATE TABLE IF NOT EXISTS apartment (
    apartment_id VARCHAR(50) PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    discription TEXT NOT NULL,
    no_of_bedrooms INT,
    no_of_bathroom INT,
    area INT,
    furnished_status VARCHAR(50),
    apart_address VARCHAR(255),
    price DECIMAL(12,2),
    whatsappLink VARCHAR(255),
    thumbnail VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS apartment_images (
    id INT AUTO_INCREMENT PRIMARY KEY,
    apartment_id VARCHAR(50) NOT NULL,
    images VARCHAR(255) NOT NULL,
    FOREIGN KEY (apartment_id) REFERENCES apartment(apartment_id)
        ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS message (
    message_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(150) NOT NULL,
    phone_no VARCHAR(50),
    email VARCHAR(150),
    message TEXT NOT NULL
);

CREATE TABLE IF NOT EXISTS wishlist (
    wishlist_id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(150) NOT NULL,
    apartment_id VARCHAR(50) NOT NULL,
    FOREIGN KEY (apartment_id) REFERENCES apartment(apartment_id)
        ON DELETE CASCADE
);
```

---

## Database Configuration

The database connection is configured inside `config.php`.

Current configuration:

```php
<?php 

$server = "localhost";
$un = "root";
$pw = "";
$db = "test";
$port = 3307;

$con = new mysqli($server, $un, $pw, $db, $port);

if ($con->connect_error) {
    die("Connection Failed: " . $con->connect_error);
}

?>
```

### Important

If your MySQL server is running on port `3306`, change this line:

```php
$port = 3307;
```

to:

```php
$port = 3306;
```

For XAMPP MySQL running on port `3307`, keep it as:

```php
$port = 3307;
```

---

## Running the Project

After starting Apache and MySQL in XAMPP, open the project in your browser.

If your folder name is `citynest`, use:

```text
http://localhost/citynest/home.php
```

If your folder name is `src`, use:

```text
http://localhost/src/home.php
```

---

## Main Pages

| Page                 | URL                      |
| -------------------- | ------------------------ |
| Home                 | `home.php`               |
| Apartments           | `apartments.php`         |
| Apartment Details    | `overView.php?id=APT001` |
| About                | `about.php`              |
| Contact              | `contact.php`            |
| Login                | `login.html`             |
| Register             | `register.html`          |
| Wishlist             | `wishList.php`           |
| Terms and Conditions | `termsAndCondition.php`  |

---

## Admin Pages

| Page            | URL                      |
| --------------- | ------------------------ |
| Admin Messages  | `messageAdmin.php`       |
| Manage Listings | `manageListingAdmin.php` |
| Add Listing     | `addListingAdmin.php`    |
| Manage Users    | `manageUserAdmin.php`    |

---

## Login Credentials

### Admin Login

```text
Email: admin@citynest.com
Password: 123
```

The admin login is hardcoded inside `login_process.php`.

### Sample User Login

If sample users are inserted into the database, you can login with:

```text
Email: amaya.silva@gmail.com
Password: user123
```

or

```text
Email: kasun.jayasinghe@gmail.com
Password: user123
```

Normal users can also create an account from the registration page.

---

## Sample Data

For demonstration purposes, sample apartments, users, messages, and wishlist records can be inserted into the database. The project already includes apartment images inside the `images` folder, so sample apartment records should use image file names such as:

```text
img1.jpg
img1_1.jpg
img1_2.jpg
img1_3.jpg
img1_4.jpg
img2.jpg
img2_1.jpg
...
img10.jpg
```

This makes the apartment listing pages look complete during a demonstration.

---

## How the System Works

### User Flow

1. A visitor opens the home page.
2. The visitor can browse apartment listings.
3. The visitor can view full apartment details.
4. To use the wishlist, the visitor should login or register.
5. A logged-in user can add apartments to the wishlist.
6. The user can remove apartments from the wishlist.
7. The user can contact the platform using the contact page.
8. The user can logout.

### Admin Flow

1. Admin logs in using the admin credentials.
2. Admin is redirected to the admin dashboard.
3. Admin can view contact messages.
4. Admin can add new apartment listings.
5. Admin can edit apartment listing details.
6. Admin can delete apartment listings.
7. Admin can view and delete registered users.

---

## Important Project Notes

This project was created as an academic project and demonstrates the basic concepts of a PHP and MySQL web application.

The project currently uses:

* Procedural PHP
* Plain SQL queries
* Session-based login
* Hardcoded admin credentials
* Static image file names for listings
* Basic CRUD operations

---

## Known Limitations

This project was developed for learning and academic demonstration purposes. Some areas can be improved before using it as a real production system.

Current limitations include:

* Passwords are stored as plain text
* SQL queries are not prepared statements
* Admin login is hardcoded
* No advanced input validation
* No role table in the database
* No image upload system
* Apartment images are entered using image file names
* Some pages may need improved responsiveness
* No payment or booking system
* No email notification system
* No advanced search or filtering system
* No password reset functionality

---

## Future Improvements

Possible improvements for future development:

* Add password hashing using `password_hash()`
* Use prepared statements to prevent SQL injection
* Add proper admin role management
* Add apartment image upload feature
* Add search and filter options for apartments
* Add booking request functionality
* Add email notifications
* Add user profile management
* Improve UI/UX design
* Improve mobile responsiveness
* Add pagination for apartment listings
* Add dashboard analytics for admin
* Add environment-based configuration
* Separate backend logic from frontend markup
* Convert the project into MVC architecture

---

## Security Improvements Recommended

Before using this project in a real environment, the following security improvements are recommended:

1. Hash user passwords.
2. Replace direct SQL queries with prepared statements.
3. Validate and sanitize all form inputs.
4. Remove hardcoded admin credentials.
5. Add CSRF protection for form submissions.
6. Add authentication checks to admin pages.
7. Disable direct access to process files.
8. Add better session handling.
9. Hide database credentials using environment variables.

---

## Academic Purpose

This project was developed as part of a university assignment to practice web development using PHP, MySQL, HTML, CSS, and JavaScript. It helped improve understanding of:

* Client-server communication
* Database connectivity
* CRUD operations
* Session handling
* Form handling
* Admin dashboard development
* User authentication basics
* Dynamic content rendering using PHP

---

## Author

Developed by **Shiham Ahamed**

---

## License

This project is for educational purposes. You may modify and improve it for learning, portfolio, or academic demonstration use.
