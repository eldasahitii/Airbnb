<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Apartments</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
        }
        .card{
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.2s;
        }
        .card:hover{
            transform: scale(1.03);
        }
        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .card-content{
            padding: 15px;
        }
        .card-content h3 {
            font-size: 16px;
            margin: 0 0 10px; 
        }
        .card-content p {
            font-size: 14px;
            margin: 5px 0;
            color:#666;
        }
        .card-content .price {
            font-size: 16px;
            font-weight: bold;
            color: #333;
        }
        .gallery{
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
            margin-top: 20px;
        }
        .gallery img {
            width: 200px;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
            transition: transform 0.3s;
        }
        .gallery img:hover {
            transform: scale(1.1);
        }
        .card .book-btn{
            display: block;
            margin: 10px auto;
            padding: 8px 15px;
            background-color: #c0392b;
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        .card .book-btn:hover{
            background-color: darkred;
        }
        .modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.8);
}
.modal-content {
    position: relative;
    margin: auto;
    padding: 0;
    width: 80%;
    max-width: 800px;
    background-color: white;
    border-radius: 10px;
    overflow: hidden;
}
.close {
    position: absolute;
    top: 10px;
    right: 20px;
    color: white;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
}
.close:hover {
    color: #f1c40f;
}
#slider {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
}
#slider img {
    width: 100%;
    height: auto;
    max-height: 500px;
    object-fit: cover;
    border-radius: 10px;
}
.prev,
.next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    font-size: 24px;
    font-weight: bold;
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;
    z-index: 10;
}
.prev {
    left: 10px;
}
.next {
    right: 10px;
}
.prev:hover,
.next:hover {
    background-color: rgba(0, 0, 0, 0.8);
}
@media (max-width: 1200px) {
    .cards {
        grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
    }

    .card img {
        height: 180px;
    }

    .card-content h3 {
        font-size: 18px;
    }

    .card-content p {
        font-size: 16px;
    }

    .card-content .price {
        font-size: 18px;
    }
}

@media (max-width: 992px) {
    .cards {
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    }

    .card img {
        height: 180px;
    }

    .gallery img {
        width: 150px;
        height: 120px;
    }
}

@media (max-width: 768px) {
    .cards {
        grid-template-columns: 1fr;
    }

    .gallery {
        justify-content: space-between;
    }

    .gallery img {
        width: 100%;
        height: auto;
    }

    .card-content h3 {
        font-size: 20px;
    }

    .card-content p {
        font-size: 18px;
    }

    .card-content .price {
        font-size: 20px;
    }

    .card .book-btn {
        padding: 10px 20px;
    }
}

@media (max-width: 480px) {
    .gallery img {
        width: 100%;
        height: auto;
        border-radius: 5px;
    }

    .cards {
        grid-template-columns: 1fr;
        padding: 10px;
    }

    .card img {
        height: 200px;
    }

    .card-content h3 {
        font-size: 16px;
    }

    .card-content p {
        font-size: 14px;
    }

    .card-content .price {
        font-size: 16px;
    }

    .card .book-btn {
        padding: 8px 15px;
        font-size: 12px;
    }
}
    </style>
</head>
<body>
<header>
        <div class="navbar">
            <div class="logo">
                <img src="./images/image.png" alt="logo">
        </div>
            <nav class="nav-links">
                <a href="Home.php">Home</a>
                <a href="AboutUs.php">About Us</a>
                <a href="Apartments.php">Apartments</a>
                <a href="ContactUs.php">Contact Us</a>
                <a href="Booking.php">Booking</a>
            </nav>
            <a href="Logout.php" style="text-decoration: none; color: white; background-color: #f44336; padding: 5px 10px; border-radius: 5px; font-size: 14px; margin-left: 15px;">Logout</a>
        </div>
    </header>
     <div class="cards">
        <div class="card" onclick="showGallery('washington')">
            <img src="images/washington1.jpeg" alt="Washington, United States">
            <div class="card-content">
                <h3>Washington, United States</h3>
                <p>Salish Lodge and Spa</p>
                <p class="price"> $400 / night</p>
                <a href="Booking.php" class="book-btn">Book Here</a>
            </div>
        </div>
        <div class="card" onclick="showGallery('southcarolina')">
            <img src="images/southcarolina1.jpeg" alt="South Carolina, United States">
            <div class="card-content">
                <h3>South Carolina, United States</h3>
                <p>The Dewberry Charliston</p>
                <p class="price"> $360 / night</p>
                <a href="Booking.php" class="book-btn">Book Here</a>
            </div>
        </div>
        <div class="card" onclick="showGallery('oregon')">
            <img src="images/oregon1.avif" alt="Oregon, United States">
            <div class="card-content">
                <h3>Oregon, United States</h3>
                <p>The Alison Inn and Spa</p>
                <p class="price"> $330 / night</p>
                <a href="Booking.php" class="book-btn">Book Here</a>
            </div>
        </div>
        <div class="card" onclick="showGallery('newyork')">
            <img src="images/newyork1.avif" alt="New York, United States">
            <div class="card-content">
                <h3>New York, United States</h3>
                <p>The Standard High Line</p>
                <p class="price"> $439 / night</p>
                <a href="Booking.php" class="book-btn">Book Here</a>
            </div>
        </div>
        <div class="card" onclick="showGallery('laconner')">
            <img src="images/laconner1.jpg" alt="La conner, United States">
            <div class="card-content">
                <h3>La conner, Washington, United States</h3>
                <p>The Wild Iris Inn</p>
                <p class="price"> $270 / night</p>
                <a href="Booking.php" class="book-btn">Book Here</a>
            </div>
        </div>
        <div class="card" onclick="showGallery('gualala')">
            <img src="images/gualala1.avif" alt="Gualala, United States">
            <div class="card-content">
                <h3>Gualala, California, United States</h3>
                <p>Home in Gualala,California</p>
                <p class="price"> $780 / night</p>
                <a href="Booking.php" class="book-btn">Book Here</a>
            </div>
        </div>
        <div class="card" onclick="showGallery('cancun')">
            <img src="images/cancun1.avif" alt="Cancun, United States">
            <div class="card-content">
                <h3>Cancun, United States</h3>
                <p>Dream Sounds Cancun Resort and Spa</p>
                <p class="price"> $240 / night</p>
                <a href="Booking.php" class="book-btn">Book Here</a>
            </div>
        </div>
        <div class="card" onclick="showGallery('california')">
            <img src="images/california1.avif" alt="California, United States">
            <div class="card-content">
                <h3>California, United States</h3>
                <p>The Saguro Palm Springs</p>
                <p class="price"> $220 / night</p>
                <a href="Booking.php" class="book-btn">Book Here</a>
            </div>
        </div>
        <div class="card" onclick="showGallery('palmbeach')">
            <img src="images/palmbeach1.avif" alt="Palm Beach Miami, United States">
            <div class="card-content">
                <h3>Palm Beach Miami, United States</h3>
                <p>Blue diamond & Gold studio</p>
                <p class="price"> $259 / night</p>
                <a href="Booking.php" class="book-btn">Book Here</a>
            </div>
        </div>
        <div class="card" onclick="showGallery('islandpines')">
            <img src="images/islandpines1.avif" alt="Island Pines NYC, United States">
            <div class="card-content">
                <h3>Island Pines NYC, United States</h3>
                <p>The legendary pyramid house</p>
                <p class="price"> $1140 / night</p>
                <a href="Booking.php" class="book-btn">Book Here</a>
            </div>
        </div>
    </div>
    <div id="dynamicGallery" class="gallery"></div>
<div id="imageModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <div id="slider">
            <button class="prev" onclick="prevSlide()">&#10094;</button>
            <img id="sliderImage" src="" alt="Slider Image">
            <button class="next" onclick="nextSlide()">&#10095;</button>
        </div>
    </div>
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
   <script>
        const galleries = {
            washington: [
                'images/washington2.avif',
                'images/washington3.avif',
                'images/washington4.avif',
                'images/washington5.avif',
                'images/washington6.avif',
                'images/washington7.avif',
                'images/washington8.avif',
                'images/washington9.avif',
                'images/washington10.avif',
                'images/washington11.avif',
                'images/washington12.avif',
            ],
            southcarolina: [
                'images/southcarolina2.jpeg',
                'images/southcarolina3.jpeg',
                'images/southcarolina4.jpeg',
                'images/southcarolina5.jpeg',
                'images/southcarolina6.jpeg',
                'images/southcarolina7.jpeg',
                'images/southcarolina8.jpeg',
                'images/southcarolina9.jpeg',
                'images/southcarolina10.jpeg',
            ],
            oregon: [
                'images/oregon2.avif',
                'images/oregon3.avif',
                'images/oregon4.avif',
                'images/oregon5.avif',
                'images/oregon6.avif',
                'images/oregon7.avif',
                'images/oregon8.avif',
                'images/oregon9.avif',
                'images/oregon10.avif',
                'images/oregon11.avif',
                'images/oregon12.avif',
            ],
            newyork: [
                'images/newyork2.avif',
                'images/newyork3.avif',
                'images/newyork4.avif',
                'images/newyork5.avif',
                'images/newyork6.avif',
                'images/newyork7.avif',
                'images/newyork8.avif',
                
            ],
            laconner: [
                'images/laconner2.jpg',
                'images/laconner3.jpg',
                'images/laconner4.jpg',
                'images/laconner5.jpg',
                'images/laconner6.jpg',
                'images/laconner7.jpg',
                'images/laconner8.jpg',
                'images/laconner9.jpg',
                'images/laconner10.jpg',
            ],
            gualala: [
                'images/gualala2.avif',
                'images/gualala3.avif',
                'images/gualala4.avif',
                'images/gualala5.avif',
                'images/gualala6.avif',
                'images/gualala7.avif',
                'images/gualala8.avif',
                'images/gualala9.avif',
                'images/gualala10.avif',
                'images/gualala11.avif',
            ],
            cancun: [
                'images/cancun2.avif',
                'images/cancun3.avif',
                'images/cancun4.avif',
                'images/cancun5.avif',
                'images/cancun6.avif',
                'images/cancun7.avif',
                'images/cancun8.avif',
                'images/cancun9.avif',
                'images/cancun10.avif',
            ],
            california: [
                'images/california2.avif',
                'images/california3.avif',
                'images/california4.avif',
                'images/california5.avif',
                'images/california6.avif',
                'images/california7.avif',
            ],
            palmbeach: [
                'images/palmbeach2.avif',
                'images/palmbeach3.avif',
                'images/palmbeach4.avif',
                'images/palmbeach5.avif',
                'images/palmbeach6.avif',
                'images/palmbeach7.avif',
                'images/palmbeach8.avif',
                'images/palmbeach9.avif',
                'images/palmbeach10.avif',
            ],
            islandpines: [
                'images/islandpines2.avif',
                'images/islandpines3.avif',
                'images/islandpines4.avif',
                'images/islandpines5.avif',
                'images/islandpines6.avif',
                'images/islandpines7.avif',
                'images/islandpines8.avif',
                'images/islandpines9.avif',
                'images/islandpines10.avif',
            ]
        };
        
 let currentSlideIndex = 0;
let currentImages = [];
function showGallery(hotelId) {
    currentImages = galleries[hotelId];
    if (currentImages && currentImages.length > 0) {
        currentSlideIndex = 0;
        openModal();
        updateSlide();}}
function openModal() {
    const modal = document.getElementById('imageModal');
    modal.style.display = 'block';
}
function closeModal() {
    const modal = document.getElementById('imageModal');
    modal.style.display = 'none';
}
function updateSlide() {
    const sliderImage = document.getElementById('sliderImage');
    sliderImage.src = currentImages[currentSlideIndex];
}
function nextSlide() {
    if (currentImages.length > 0) {
        currentSlideIndex = (currentSlideIndex + 1) % currentImages.length;
        updateSlide();}}
        function prevSlide() {
    if (currentImages.length > 0) {
        currentSlideIndex = (currentSlideIndex - 1 + currentImages.length) % currentImages.length;
        updateSlide();
    }
}

window.onclick = function (event) {
    const modal = document.getElementById('imageModal');
    if (event.target === modal) {
        closeModal();
    }
};
    </script> 
</body>
</html>