<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: LogIn.php"); 
    exit;
}
$email = $_SESSION['email'];
?>

<div style="background-color:#2c3e50; color: white; padding: 20px 20px; text-align: center; font-size: 16px; font-weight: normal; border-radius: 5px; position: absolute; top: 0; right: 0; z-index: 9999;">
    Welcome, <?php echo $email; ?>!
    <a href="Logout.php" style="text-decoration: none; color: white; background-color: #f44336; padding: 5px 10px; border-radius: 5px; font-size: 14px; margin-left: 15px;">Logout</a>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AirBnb</title>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
   <header>
        <div class="navbar">
            <div class="logo">
                <img src="./images/image.png" alt="logo">
        </div>
            <nav>
                <a href="#home">Home</a>
                <a href="AboutUs.html">About Us</a>
                <a href="Apartments.html">Apartments</a>
                <a href="ContactUs.html">Contact Us</a>
                <a href="Booking.php">Booking</a>
            </nav>
            <button class="login-btn"><a href="LogIn.php">Log In</a></button>
        </div>
    </header>

    <section class="main">
        <div class="main-content">
             <h3>~SERENITY~</h3>
            <h1>Discover Your Next Adventure</h1>
            <p>Unlock the magic of travel with our carefully curated apartments, each offering a unique experience that enhances your journey. Step into a world of comfort and explore like a local in every destination you visit.</p>
     <button class="learn-more-btn"><a href="AboutUs.html">LEARN MORE</a></button>
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
                <p>Access our comprehensive travel concierge services, providing local insights, activity recommendations, and seamless travel arrangements to enhance your stay.</p>
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
        var i=0;
        var imgs=[
            "images/imgs2.jpg",
            "images/imgs3.jpg",
            "images/imgs4.jpg",
            "images/imgs5.jpg",
            "images/imgs6.jpg"
        ];

        function slideImg(){

            document.getElementById('slideshow').src=imgs[i];
            if(i<imgs.length - 1){
                i++;
            }else{
                i=0;
            }
        }
       document.body.addEventListener('load',slideImg());
        
    </script>

    <div id="slide-content">
     
        <img name="slide" id="slideshow" src="images/imgs1.jpg" />
        <button onclick="slideImg()">Next</button>
        
        </div>


        
    <footer>
        <div class="container">
            <div class="footer-content">
                <h3>Contact Us</h3>
                
                <p>Email: info-serenity@gmail.com</p>
                <p>Phone: +383 45 621 166</p>
            </div>
            <div class="footer-content">
                <h3>Quick Links</h3>
                <ul class="list">
                    <li><a href="Home.html">Home</a></li>
                    <li><a href="AboutUs.html">About</a></li>
                    <li><a href="Apartments.html">Services</a></li>
                    <li><a href="ContactUs.html">Contact</a></li>
                    <li><a href="Booking.html">Booking</a></li>
                </ul>
            </div>
            <div class="footer-content">
                <h3>Follow Us</h3>
                <ul class="social-icons">
                <li><a href="https://www.facebook.com/"></a><img src="/images/facebook.png" alt="Facebook Icon" width="60" height="60"><i class="fab fa-facebook"></i></a></li>
                <li><a href="https://x.com/"></a><img src="/images/twitter.png" alt="Twitter Icon" width="60" height="60"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/"></a><img src="/images/instagram.png" alt="Instagram Icon" width="60" height="60"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://www.linkedin.com/"></a><img src="/images/linkedin.png" alt="LinkedIn Icon" width="60" height="60"><i class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="bottom-bar">
            <p>&copy;2024 Serenity . All rights reserved</p>
        </div>
            
    </footer> 

    
</body>
</html>