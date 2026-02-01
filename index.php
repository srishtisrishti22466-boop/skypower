<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>skypower</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./responsvie.css">
</head>
<body>
   <div class="fall">
                    <h4><a href="index.php" class="navs">HOME</a></h4>
                    <h4><a href="about.php" class="navs">ABOUT</a></h4>
                    <h4><a href="product.php" class="navs">PRODUCT</a></h4>
                    <h4><a href="contact.php" class="navs">CONTACT</a></h4>
                    <ul>
                        <li id="gap">
                            <i class="fa-regular fa-envelope-open"></i>
                            <a href="skypower142@gmail.com">skypower142@gmail.com</a>
                        </li>
                        <li>
                            <i class="fa-brands fa-whatsapp"></i>
                             <a href="91+8860705070">91+8860705070</a>
                        </li>
                    </ul>
                </div>
    <header>
        <div class="container">
            
            <nav>
                <h2>skypower</h2>                
                <div class="navbar">
                <h4><a href="index.php" class="navs hide">HOME</a></h4>
                <h4><a href="about.php" class="navs hide">ABOUT</a></h4>
                <h4><a href="product.php" class="navs hide">PRODUCT</a></h4>
                <h4><a href="contact.php" class="navs hide">CONTACT</a></h4>
                    <h4><a href="" id="menu" >Menu</a></h4>
                </div>
                
                <div class="icon">
                    <ul>
                        <li id="gap">
                            <i class="fa-regular fa-envelope-open"></i>
                            <a href="skypower142@gmail.com">skypower142@gmail.com</a>
                        </li>
                        <li>
                            <i class="fa-brands fa-whatsapp"></i>
                             <a href="91+8860705070">91+8860705070</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <main>
<div class="page1">
    <div class="bannr1">
       <img src="imgs/banner.png" alt=""> 
    </div>
    <div class="center">
        <h1>skypower</h1>
        <h3>the reliable high digital volatage stabilizer.</h3>
    </div>
    <div class="bannr2">
        <img src="imgs/banner2.png" alt="">
    </div>
</div>
<div class="page2">
           <h3>our product</h3>
    <div class="product-home">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="">
                         <img src="imgs/prod1.jpg" alt="">
                    </div>
                    <button><a href="">view more</a></button>

                </div>
                <div class="swiper-slide">
                    <div class="">
                        <img src="imgs/prod2.png" alt="">
                    </div>
                    <button><a href="">view more</a></button>
                </div>
                <div class="swiper-slide">
                    <div class="">
                        <img src="imgs/prod3.jpg" alt="">
                   </div>
                    <button><a href="">view more</a></button>
                </div>
                <div class="swiper-slide">
                    <div class="">
                        <img src="imgs/prod4.jpg" alt="">
                    </div>
                    <button><a href="">view more</a></button>
                </div>
                <div class="swiper-slide">
                    <div class="">
                        <img src="imgs/prod5.jpg" alt="">
                    </div>
                    <button><a href="">view more</a></button>
                </div>
                <div class="swiper-slide">
                    <div class="">
                        <img src="imgs/prod6.jpg" alt="">
                    </div>
                    <button><a href="">view more</a></button>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>
<div class="page3">
    <h3>about us</h3>
    <div class="about-home">
        <div class="enqury">
            <?php
include 'admin/db.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $massage = $_POST['message'];
    $city = $_POST['city'];
    $subject = $_POST['subject'];

    $sql = "INSERT INTO sp_form (name, email, phone, message, city, subject) VALUES (:name, :email, :phone, :message, :city, :subject)";
    $pre = $PDO->prepare($sql);
    if($pre->execute(['name' => $name, 'email' => $email, 'phone' => $phone, 'message' => $massage, 'city' => $city, 'subject' => $subject])){
        echo "<script>alert('Data Inserted Successfully!'); window.location=('index.php?status=success');</script>";
        exit();
    } 
    }
    

?>
            <form action="" method="post">
                <h4>enquiry form</h4>
                    <input type="text" placeholder="Name:" pattern="[A-Za-z ]{3,}" title="Naam mein sirf letters hone chahiye" name="name" required>
                    <input type="email"placeholder="Email:example@mail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" 
       title="Please enter a valid email address (example@mail.com)" name="email" required>
                    <input type="tel" placeholder="phone number:" title="Please enter exactly 10 digits" name="phone" required pattern="[0-9]{10}">
                    <textarea id="message" placeholder="Message:" name="message" ></textarea>
                    <button type="submit" name="submit">submit form</button>
            </form>
        </div>
        <div class="text">
            <h4>who we are</h4>
            <p><span>skypower</span> is a pioneer in manufacturing high-performance Digital Voltage Stabilizers. With a focus on innovation and reliability, we provide advanced protection for your home and industrial appliances. Our mission is to safeguard your technology from voltage fluctuations with our 100% copper-wound, digitally controlled stabilizers.</p>
        </div>
    </div>
</div>
    </main>
   <footer class="footer">
    <div class="footer-container">
        <div class="footer-col">
            <h3>Company Address</h3>
            <img src="imgs/sp-logo.png" alt="Skypower Logo" class="footer-logo">
            <p><i class="fas fa-map-marker-alt"></i> Plot No 78/1 Bhalswa Jahangirpuri, Delhi-110042</p>
            <p><i class="fas fa-clock"></i> Office Hours: 9:00am to 6:00pm</p>
        </div>

        <div class="footer-col">
            <h3>Contact Details</h3>
            <p><i class="fas fa-phone"></i> +91-8860705070</p>
            <p><i class="fas fa-mobile-alt"></i> +91-958275348</p>
            <p><i class="fas fa-envelope"></i> skypower142@gmail.com</p>
        </div>

        <div class="footer-col">
            <h3>Useful Links</h3>
            <ul>
                <li><a href="index.php" class="navs">Home</a></li>
                <li><a href="about.php" class="navs">About</a></li>
                <li><a href="product.php" class="navs">Product</a></li>
                <li><a href="contact.php" class="navs">Contact</a></li>
            </ul>
        </div>
    </div>
</footer>
           
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>