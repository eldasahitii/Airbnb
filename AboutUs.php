<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: LogIn.php"); 
    exit;
}
$email = $_SESSION['email'];
?>

<div style="background-color:#2c3e50; color: white; padding: 18px 20px; text-align: center; font-size: 16px; font-weight: normal; border-radius: 5px; position: absolute; top: 0; right: 0; z-index: 9999;">
    Welcome, <?php echo $email; ?>!
    <a href="Logout.php" style="text-decoration: none; color: white; background-color: #f44336; padding: 5px 10px; border-radius: 5px; font-size: 14px; margin-left: 15px;">Logout</a>
</div>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>About Us</title>
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo">
            <img src="./images/image.png" alt="logo">
        </div>
            <nav>
                <a href="Home.php">Home</a>
                <a href="#about">About Us</a>
                <a href="Apartments.php">Apartments</a>
                <a href="ContactUs.php">Contact Us</a>
                <a href="Booking.php">Booking</a>
            </nav>
            <button class="login-btn"><a href="LogIn.html">Log In</a></button>
        </div>
    </header>

    <section class="aboutus">
        <div class="about-us-content">
            <h1>ABOUT US</h1>
            <p>Whether you're a solo adventurer, couple, or family, our collection of curated spaces promises an unforgettable travel experience. Immerse yourself in the essence of every destination. Uncover the perfect union of comfort, convenience, and culture with our handpicked accommodations. Find your ideal home-away-from-home and unwrap the perfect travel experience with us.</p>
        </div>
    </section>

    <div class="results-wrapper">
        <div class="results-container">
            <div class="results-container2">
            <h1>Our results</h1>
            <p>We're proud of what we've achieved, but we're not stopping there.</p>
            <div class="all-statistics">
                <div class="statistics">
                    <img src="images/tagicon.png" alt=""/>
                    <div class="numbers">5</div>
                    <p>years of experience</p>
                </div>
                <div class="statistics">
                    <img src="images/bagicon.png" alt=""/>
                    <div class="numbers">100%</div>
                    <p>happy clients!</p>
                </div>

                <div class="statistics">
                    <img src="images/tagicon.png" alt=""/>
                    <div class="numbers">800+</div>
                    <p>apartments rented</p>
                </div>

                <div class="statistics">
                    <img src="images/tagicon.png" alt=""/>
                    <div class="numbers">1380</div>
                    <p>reviews submitted</p>
                </div>
            </div>
            </div>
        </div>
    </div>

<section class="box">
    <div class="box-content">
        <h1>About Us</h1>
        <p>At Serenity, we believe travel is more than just reaching a destination - it's about creating  unforgettable memories. Whether you're looking for cozy villas in the mountains, a chic city apartment, we're here to connect you with unique places that feel like home.</p>

        <div class="row">
            <div class="column">
            <div class="blue-box">
                        <h3>Our Story</h3>    
                        <p>Serenity was born from a simple idea: everyone deserves access to authentic travel experiences. Back in 2022, we were two friends who struggled to find affordable, welcoming accommodationswhile traveling. Today, we've grown into global platform where thousands of travelers enjoyed their stay more than they thought they would.</p>
                    </div>
            </div>
            <div class="column">
                <h3>Our Mission</h3>    
                   <p>Our mission is simple: to create meaningful travel experiences by bridging the gap between people and places. We empower travelers to explore the world authentically while giving hosts the opportunity to share their spaces and cultures.</p>                    
                </div>
    <div class="column">
        <h3>Why Choose Us</h3>    
               <ul>
                <li><b>Unique Stays:</b> Discover accommodations that are as one-of-a-kind as your adventures.</li>
                <li><b>Secure and Simple:</b> Enjoy a seamless booking process with trusted payments and verified hosts.</li>
                <li><b>24/7 Support:</b> Wherever your journey takes you, our team is here to assist you every step of the way.</li>
               </ul>            
             </div>
             <div class="column">
                <div class="white-box">
                <h3>Join Our Journey</h3>    
               <p>Whether you're a traveler seeking your next adventure or a host ready to share your space, we'd love to have you as part of our growing community.
                Ready to start your journey?</p> 
            </div>
          </div>
         </div>
        
    </div>
</section>



<footer style="background-color: #2c3e50; color: white; padding: 30px 0; text-align: center;margin-top: 20px>
    <div>
   
        <p>&copy; 2024 Serenity. All Rights Reserved.</p><br>
        <p>Contact us: 
            <a href="tel:+1234567890" style="color: white; text-decoration: none;">+1 234 567 890</a> | 
            <a href="mailto:serenityinfo@gmail.com" style="color: white; text-decoration: none;">serenityinfo@gmail.com</a>
        </p><br>

    
        <p>Follow us on:</p><br>
        <a href="https://www.facebook.com/yourpage" target="_blank" style="margin: 0 10px; color: white; text-decoration: none;">
            <i class="fab fa-facebook-f" style="font-size: 24px;"></i> Facebook
        </a>
        <a href="https://twitter.com/yourprofile" target="_blank" style="margin: 0 10px; color: white; text-decoration: none;">
            <i class="fab fa-twitter" style="font-size: 24px;"></i> Twitter
        </a>
        <a href="https://www.instagram.com/yourprofile" target="_blank" style="margin: 0 10px; color: white; text-decoration: none;">
            <i class="fab fa-instagram" style="font-size: 24px;"></i> Instagram
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