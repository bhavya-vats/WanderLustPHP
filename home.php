<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class="header">
        <a href="home.php" class="logo">WanderlustWonders.com</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars">

        </div>
    </section>

    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swipper-slide slide" style="background:url(assets/back.avif) no-repeat">
                    <div class="content">
                        <span>EXPLORE, DISCOVER, TRAVEL</span>
                        <h3>Travel around the World</h3>
                        <a href="package.php" class="btn">Discover more</a>
                    </div>
                </div>

                <div class="swipper-slide slide" style="background:url(assets/back2.avif) no-repeat">
                    <div class="content">
                        <span>EXPLORE, DISCOVER, TRAVEL</span>
                        <h3>Discover the new places</h3>
                        <a href="package.php" class="btn">Discover more</a>
                    </div>
                </div>

                <div class="swipper-slide slide" style="background:url(assets/back3.avif) no-repeat">
                    <div class="content">
                        <span>EXPLORE, DISCOVER, TRAVEL</span>
                        <h3>Go Beyond the Map</h3>
                        <a href="package.php" class="btn">Discover more</a>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>


        </div>
    </section>




    <section class="services">
        <h1 class="heading-title">Our Services</h1>
        <div class="box-container">
            <div class="box">
                <img src="assets/1.png" alt="">
                <h3>Adventure</h3>
            </div>
            <div class="box">
                <img src="assets/tour-guide (1).png" alt="">
                <h3>Tour Guides</h3>
            </div>
            <div class="box">
                <img src="assets/trekking.png" alt="">
                <h3>Trekking</h3>
            </div>
            <div class="box">
                <img src="assets/fire (1).png" alt="">
                <h3>Camp fire</h3>
            </div>
            <div class="box">
                <img src="assets/jeep.png" alt="">
                <h3>Off Road</h3>
            </div>
            <div class="box">
                <img src="assets/tent.png"alt="">
                <h3>Camping</h3>
            </div>
        </div>
    </section>

    <section class="home-about">
        <div class="image">
            <img src="assets/about.jpeg" alt="">
        </div>
        <div class="content">
            <h3>Empowering Dreams, Enriching Lives.</h3>
            <p>Our mission is to inspire and empower people to explore the world, connect with diverse cultures, and create cherished memories. We strive to make travel accessible, enjoyable, and educational, ensuring that every trip with us is a transformative adventure.</p>
            <a href="about.php" class="btn">Read more</a>
        </div>
    </section>

    <section class="home-packages" >
        <h1 class="heading-title">
            Our Packages
        </h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="assets/tour1.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & tour</h3>
                    <p>Our team of passionate adventurers and knowledgeable guides are your companions on this thrilling journey. They not only lead the way but also share fascinating stories, ensuring every moment is educational, inspiring, and filled with laughter.Our meticulously designed tours take you off the beaten path, revealing the hidden treasures of the world. </p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="assets/tour2.webp" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & tour</h3>
                    <p>We understand that every traveler is unique. That's why we offer tailor-made itineraries, allowing you to customize your adventure according to your interests and preferences. Whether it's a solo escapade, a family vacation, or an adrenaline-fueled group expedition, we've got you covered. </p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="assets/tour3.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & tour</h3>
                    <p>From the moment you inquire about a trip to the second you return home, our support team is with you every step of the way, ensuring a seamless and enjoyable experience. Are you ready to embark on a journey that will awaken your spirit of adventure? .</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
        </div>
        <div class="load-more">
            <a href="package.php" class="btn">Load more</a>
        </div>
    </section>

    <section class="home-offer">
        <div class="content">
            <h3>Upto 50% off</h3>
            <p>Embark on the journey of a lifetime without breaking the bank! For a limited time, enjoy an exclusive 50% discount on our handpicked tours and travel packages. Discover exotic destinations, experience thrilling adventures, and create unforgettable memories, all at half the price!</p>
            <a href="book.php" class="btn">Book now</a>
        </div>
    </section>

    <section class="footer">
        <div class="box-container">

            <div class="box">
                <h3>Quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i> About</a>
            <a href="package.php"><i class="fas fa-angle-right"></i> Package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i> Book</a>
            </div>

            <div class="box">
                <h3>Extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i> Any Queries</a>
            <a href="#"><i class="fas fa-angle-right"></i> About us</a>
            <a href="#"><i class="fas fa-angle-right"></i> Privacy Policy</a>
            <a href="#"><i class="fas fa-angle-right"></i> Terms & conditions</a>
            </div>

            <div class="box">
                <h3>Contact info </h3>
            <a href="#"><i class="fas fa-phone"></i> +91 9112745689</a>
            <a href="#"><i class="fas fa-envelope"></i> bhavyavats5@gmail.com</a>
            <a href="#"><i class="fas fa-map">
            </i> Phagwara,Punjab - 144411</a>
            </div>

            <div class="box">
                <h3>Follow us</h3>
                <a href='#'><i class="fab fa-facebook">
                </i> Facebook
            </a>
            <a href='#'><i class="fab fa-twitter">
                </i> Twitter
            </a>
            <a href='#'><i class="fab fa-instagram">
                </i> Instagram
            </a>
            <a href='#'><i class="fab fa-linkedin">
                </i> Linkedin
            </a>
            </div>

        </div>


    </section>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>