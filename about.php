<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="responsvie.css">
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
                        <li  id="gaps">
                            <i class="fa-brands fa-whatsapp"></i>
                             <a href="91+8860705070">91+8860705070</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
<main>
    <div class="page5">
        <div class="about2">
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
        echo "<script>alert('Data Inserted Successfully!'); window.location=('about.php?status=success');</script>";
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
                    <textarea  id="" placeholder="Message:" name="message" ></textarea>
                    <button type="submit" name="submit">submit form</button>
            </form>
        </div>
            <div class="right">
                <h1>about skypower</h1>
                <h2>Powering Your Life with Unmatched Stability</h2>
                <span>
                    <h4>Our Identity</h4>
                    <p>SKYPOWER is a leading manufacturer of premium <small class="higlit">Digital Voltage Stabilizers</small> designed to protect your valuable electronics from the unpredictability of power fluctuations. From Air Conditioners to Mainline units, our products serve as a robust shield, ensuring longevity and peak performance for your appliances.</p>
                </span>
                
                <span>
                    <h4>Why Choose SKYPOWER?</h4>
                    <p>
                       &#11088;<small> Advanced Digital Logic:</small> Equipped with micro-controllers that detect and correct voltage spikes in milliseconds. <br><br>
                      &#11088; <small>100% Copper Winding:</small> We use <small class="higlit">high-grade copper</small> for superior conductivity, heat resistance, and long-term durability. <br><br>
                      &#11088;<small>Smart High-Voltage Cut-off:</small>  Our intelligent sensors automatically disconnect power during dangerous surges to prevent appliance burnout. <br><br>
                      &#11088;<small>Modern Aesthetics: </small>Designed with sleek cabinets and clear digital displays that complement your home interiors. <br><br>


                        <small>Our Commitment</small> True to our tagline— <small class="higlit">"The Reliable Voltage Stabilizer"</small>—we are committed to engineering excellence. We combine decades of technical expertise with the latest safety standards to bring you products you can trust 24/7.
                    </p>
                </span>
            </div>
        </div>
        <div class="card-box">
            <div class="card">
            <span class="c-icon"><i class="fa-solid fa-clock"></i></span>
            <h3> <span id="years">11+</span> Years Experience</h3>
          
            </div>
            <div class="card">
            <span class="c-icon"><i class="fa-solid fa-shield"></i></span>
            <h3>Digital Precision & Safety</h3>
            </div>
            <div class="card">
            <span class="c-icon"><i class="fa-solid fa-face-smile"></i></span>
            <h3>1000+ happy Costumers</h3>
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
                <li><a href="index.php"class="navs">Home</a></li>
                <li><a href="about.php"class="navs">About</a></li>
                <li><a href="product.php"class="navs">Product</a></li>
                <li><a href="contact.php"class="navs">Contact</a></li>
            </ul>
        </div>
    </div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>