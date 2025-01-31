<?php
session_start();
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
    <title>Booking</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="navbar">
            <div class="logo">
                <img src="./images/image.png" alt="logo">
        </div>
            <nav>
                <a href="Home.php">Home</a>
                <a href="AboutUs.php">About Us</a>
                <a href="Apartments.php">Apartments</a>
                <a href="ContactUs.php">Contact Us</a>
                <a href="#booking">Booking</a>
            </nav>
            <button class="login-btn"><a href="LogIn.html">Log In</a></button>
        </div>
    </header>


    <h1 id="h1-b">Apartment Booking</h1>
    
    <div class="booking-container">
 <form id="book" action="BookingController.php" method="POST">
    <select id="apartment" name="apartment" required>
        <option value="" disabled selected>Choose your Apartment  </option>
        <option value="1">Salish Lodge and Spa - Washington, United States</option>
        <option value="2">The Dewberry Charliston - South Carolina, United States</option>
        <option value="3">The Alison Inn and Spa - Oregon, United States</option>
        <option value="4">The Standard High Line - New York, United States</option>
        <option value="5">The Wild Iris Inn - La conner, Washington, United States</option>
        <option value="6">Home in Gualala,California - Gualala, California, United States</option>
        <option value="7">Dream Sounds Cancun Resort and Spa - Cancun, United States</option>
        <option value="8">The Saguro Palm Springs - California, United States</option>
        <option value="9">Blue Diamond & Gold Studio - Palm Beach Miami, United States</option>
        <option value="10">The Legendary Pyramid House - Island Pines NYC, United States</option>
    </select>



    <input type="text" id="name" name="name" placeholder="First Name" required>

    <input type="text" id="surname" name="surname" placeholder="Last Name" required>

    <input type="tel" id="phone" name="phone" placeholder="Phone Number">

    <input type="email" id="email"  name="email" placeholder="Email">

    <input type="date" id="checkin" name="checkin" placeholder="Check In" >

    <input type="date" id="checkout" name="checkout" placeholder="Check Out" >


    <select id="adults" name="adults" required>
        <option value="" disabled selected>Adults</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>

    <select id="kids" name="kids" required>
        <option value="" disabled selected>Kids</option>
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4+">4+</option>
       
    </select>
<div class="request">
    <input type="text" name="special_request" placeholder="Special Request (Optional)">
</div>
   <button type="submit" id="btn-book">Book Now</button>
 </form>
</div>
<script>
 document.addEventListener("DOMContentLoaded",
      function (){
        const btnSubmit=document.getElementById('btn-book');
        const contactForm = document.querySelector("form");
        const validate=(event) =>{
          event.preventDefault();
          const emailaddress=document.getElementById('email');
          const apartment=document.getElementById('apartment');
          const firstName=document.getElementById('name');
          const lastName=document.getElementById('surname');
          const phone=document.getElementById('phone');
          const checkIn=document.getElementById('checkin');
          const checkOut=document.getElementById('checkout');
          const adults=document.getElementById('adults');
          const kids=document.getElementById('kids');


      if (apartment.value === "") {
      alert("Please choose your apartment.");
      apartment.focus();
      return false;
    }
    if (firstName.value.trim() === "") {
      alert("Please enter your first name.");
      firstName.focus();
      return false;
    }
    if (lastName.value.trim() === "") {
      alert("Please enter your last name.");
      lastName.focus();
      return false;
    }

    const phoneRegex = /^\+?[0-9]{10,15}$/; 
    if (phone.value.trim() === "") {
      alert("Please enter your phone number.");
      phone.focus();
      return false;
    } else if (!phoneRegex.test(phone.value.trim())) {
      alert("Please enter a valid phone number.");
      phone.focus();
      return false;
    }
    if(emailaddress.value.trim()===""){
            alert("Please enter your Email.");
            emailaddress.focus();
            return false;
          }
          const emailRegex = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,})$/;
          if(!emailRegex.test(emailaddress.value.trim())){
        alert("Please enter a valid Email.");
        emailaddress.focus();
        return false; 
      }
      if(emailaddress.value.trim() !==emailaddress.value.trim().toLowerCase()){
        alert("Email must be in lowercase!")
        emailaddress.focus();
        return false;
      }

    if (checkIn.value === "") {
      alert("Please select a check-in date.");
      checkIn.focus();
      return false;
    }
    if (checkOut.value === "") {
      alert("Please select a check-out date.");
      checkOut.focus();
      return false;
    }
    if (new Date(checkOut.value) <= new Date(checkIn.value)) {
      alert("Check-out date must be after the check-in date.");
      checkOut.focus();
      return false;
    }
    if (adults.value === "") {
      alert("Please select the number of adults.");
      adults.focus();
      return false;
    }
    if (kids.value === "") {
      alert("Please select the number of kids.");
      kids.focus();
      return false;
    }

      alert("Booking completed successfully!");
      contactForm.submit();
        };
        btnSubmit.addEventListener("click",validate);
      });

</script>


          
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