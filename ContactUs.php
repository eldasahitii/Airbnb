
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
                <a href="#contact">Contact Us</a>
                <a href="Booking.php">Booking</a>
            </nav>
            <button class="login-btn"><a href="Logout.php">Log Out</a></button>
        </div>
    </header>

    <div class="contact-container">
        <div class="contact-left">
            
            <h1>Contact Us</h1>
            <p>You will hear from us at the earliest!</p>
            <div class="contact-info">
                <div class="info-item">
                    <span class="icon"></span>
                    <p><strong>Address:</strong>Washington Square,New York,NY 10012</p>
                </div>
                <div class="contact-info">
                    <div class="info-item">
                        <span class="icon"></span>
                        <p><strong>Phone:</strong>+1 234 567 890</p>
                    </div>
                    <div class="info-item">
                        <span class="icon"></span>
                        <p><strong>Email:</strong>serenityinfo@gmail.com</p>
                    </div>
                   
                </div>

                <div class="contact-right">
                    <form method="POST" action="contactController.php">
                    
                        <h2>Send Message</h2>
                        <input type="text"   id="fname" name="name" placeholder="Full Name" required>
                        <input type="email" id="email" name="email" placeholder="Email" required>
                        <textarea id="message" name="message" placeholder="Type Your Message..." required></textarea>
                        <button type="submit" id="send-btn" name="contact_us">Send Message</button>
                        
                    </form>
                </div>
               
            </div>
        </div>
    </div>

    <script>
 document.addEventListener("DOMContentLoaded", function(){
    const sendBtn=document.getElementById('send-btn');
    const contactForm = document.querySelector("form");
    const validate=(event)=>{
        event.preventDefault();
        const fullName=document.getElementById('fname');
        const emailaddress=document.getElementById('email');
        const messages=document.getElementById('message');

        if(fullName.value.trim()===""){
            alert("Please enter your full name.");
            fullName.focus();
            return false;
        }
        const emailRegex = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,})$/;
        if(!emailRegex.test(emailaddress.value.trim())){
            alert("Please enter a valid Email.");

            emailaddress.focus();
            return false;
        }
        if(emailaddress.value.trim()!==emailaddress.value.trim().toLowerCase()){
        alert("Email must be in lowercase!");
        emailaddress.focus();
        return false;
    } 
    if(messages.value.trim()===""){
        alert("Please enter your message.");
        messages.focus();
        return false;
    }
    if(messages.value.trim().length<10){
        alert("Your message must be at least 10 characters long.");
        messages.focus();
        return false;
    }
    alert("Your message has been sent successfully!");
    contactForm.submit();
};
sendBtn.addEventListener("click",validate);
   
 });
    </script>










    <script>
        var i=0;
        var imgs=[
            "images/sliderimg1.jpg",
            "images/sliderimg2.jpg",
            "images/sliderimg3.jpg",
            "images/sliderimg4.jpg",
            "images/sliderimg5.jpg",
            "images/sliderimg6.jpg",
            "images/sliderimg7.jpg"
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
        <img name="slide" id="slideshow" src="images/sliderimg1.jpg"/>
        <button onclick="slideImg()">Next</button>
    </div>

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