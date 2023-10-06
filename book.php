<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/book.css">
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

    <div class="heading" style="background:url(assets/pngtree-booking-accommodation-mobile-application-image_1091588.jpeg) no-repeat">
        <h1>Book with us</h1>
    </div>


    <section class="booking">
        <h1 class="heading-title">Book your trip!</h1>
            <form action="book_form.php" method="post" class="book-form">
                <div class="flex">
                    <div class="inputBox">
                        <span>Name : </span>
                        <input type="text" placeholder="Enter your name" name="name">
                    </div>
                    <div class="inputBox">
                        <span>Email : </span>
                        <input type="email" placeholder="Enter your email" name="email">
                    </div>
                    <div class="inputBox">
                        <span>Phone :  : </span>
                        <input type="number" placeholder="Enter your number" name="phone">
                    </div>
                    <div class="inputBox">
                        <span>Address : </span>
                        <input type="text" placeholder="Enter your address" name="address">
                    </div>
                    <div class="inputBox">
                        <span>Where to : </span>
                        <input type="text" placeholder="Place you want to visit" name="location">
                    </div>
                    <div class="inputBox">
                        <span>How many : </span>
                        <input type="number" placeholder="Number ofguests" name="guests">
                    </div>
                    <div class="inputBox">
                        <span>Arrival : </span>
                        <input type="date" name="arrivals">
                    </div>
                    <div class="inputBox">
                        <span>Leaving : </span>
                        <input type="date" name="leaving">
                    </div>
                </div>
                <input type="submit" value="submit" class="btn" name="send">
            </form>
        </h1>
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