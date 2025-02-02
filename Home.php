<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: LogIn.php"); 
    exit;
}
$email = $_SESSION['email'];
?>

<div id="welcomeMessage" style="background-color:#2c3e50; color: white; padding: 18px 20px; text-align: center; font-size: 16px; font-weight: normal; border-radius: 5px; position: absolute; margin-left:65px; padding-top:35px;">
    Welcome, <?php echo $email; ?>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AirBnb</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </head>
<body>
   <header>
        <div class="navbar">
            <div class="logo">
                <img src="./images/image.png" alt="logo">
        </div>
            <nav class="nav-links">
                <a href="#home">Home</a>
                <a href="AboutUs.php">About Us</a>
                <a href="Apartments.php">Apartments</a>
                <a href="ContactUs.php">Contact Us</a>
                <a href="Booking.php">Booking</a>
            </nav>
            <a href="Logout.php" style="text-decoration: none; color: white; background-color: #f44336; padding: 5px 10px; border-radius: 5px; font-size: 14px; margin-left: 15px;">Logout</a>
        
        </div>
    </header>

    <section class="main">
        <div class="main-content">
             <h3>~SERENITY~</h3>
            <h1>Discover Your Next Adventure</h1>
            <p>Unlock the magic of travel with our carefully curated apartments, each offering a unique experience that enhances your journey. Step into a world of comfort and explore like a local in every destination you visit.</p>
     <button class="learn-more-btn"><a href="AboutUs.php">LEARN MORE</a></button>
        </div>
        <div class="main-image">
            <img src="images/img1.jpg" alt="">
        </div>
    </section>

    <section class="services">
        <h2>Our Services</h2>
        <div class="services-container">
            <div class="services-card">
                <h3>Location Discovery Tours</h3>
                <p>Embark on guided location discovery tours led by local experts to uncover hidden gems and unique experiences in the vibrant neighbourhood, where our apartments are situated.</p>
              <img src="./images/img2.jpg" alt="">
            </div>
            <div class="services-card">
                <h3>Travel Concierge Services</h3>
                <p>Access our comprehensive travel concierge services, providing local insights, activity recommendations, and seamless travel arrangements to enhance your stay.</p><br>
              <img src="./images/img3.jpg" alt="">
            </div>

            <div class="services-card">
                <h3>Apartment Rental Assistance</h3>
                <p>Utilize our expert apartment rental assistance to find the perfect accommodation tailored to your preferences, whether it’s for a weekend getaway or extended stay.</p>
              <img src="./images/img4.jpg" alt="">
            </div>
        </div>
    </section>
    
    <script>
document.addEventListener("DOMContentLoaded", function() {
    setTimeout(function () {
        document.getElementById("welcomeMessage").style.display = "none";
    }, 5000);
    let i = 0;
    const images = [
        "images/imgs2.jpg",
        "images/imgs3.jpg",
        "images/imgs4.jpg",
        "images/imgs5.jpg",
        "images/imgs6.jpg"
    ];
    
    function slideImg() {
        document.getElementById("slideshow").src = images[i];
        i = (i + 1) % images.length;
    }

    document.getElementById("nextSlide").addEventListener("click", slideImg);
  ;
});
    </script>
    <div class="slideshow">
        <img name="slide" id="slideshow" src="images/imgs1.jpg" />
        <button onclick="slideImg()" id="nextSlide">Next</button>
        </div>
        
        <footer>
    <div>
        <p>&copy; 2024 Serenity. All Rights Reserved.</p><br>
        <p>Contact us: 
            <a href="#" style="color: white; text-decoration: none;">+1 234 567 890</a> | 
            <a href="mailto:serenityinfo@gmail.com" style="color: white; text-decoration: none;">serenityinfo@gmail.com</a>
        </p><br>
        <p>Follow us on:</p><br>
        <a href="https://www.facebook.com/yourpage" target="_blank"> 
            <i class="fab fa-facebook-f"></i> Facebook
        </a>
        <a href="https://twitter.com/yourprofile" target="_blank" >
            <i class="fab fa-twitter"></i> Twitter
        </a>
        <a href="https://www.instagram.com/yourprofile" target="_blank" >
            <i class="fab fa-instagram" ></i> Instagram
        </a><br>
        <p>
            <a href="privacy-policy.php" style="color: white; text-decoration: none;">Privacy Policy</a> |
            <a href="terms-of-service.php" style="color: white; text-decoration: none;">Terms of Service</a>
        </p><br>
    </div>
</footer>

<script src="https://kit.fontawesome.com/a076d05399.js"></script>

    
</body>
</html>