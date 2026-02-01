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
         <h1 id="cont">contact us</h1>
        <div class="page7">
            <div class="form">
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
        echo "<script>alert('Data Inserted Successfully!'); window.location=('contact.php?status=success');</script>";
        exit();
    } 
    }
    
?>
                <form action="" method="POST">
                    <input type="text" placeholder="Name.." pattern="[A-Za-z ]{3,}" title="Naam mein sirf letters hone chahiye" name="name" required>
                    <input type="email" placeholder="Email..:example@mail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" 
       title="Kripya sahi email address bharein (example@mail.com)" name="email" required>
                    <input type="tel" placeholder="Phone Number.." title="Please enter exactly 10 digits" name="phone" required pattern="[0-9]{10}">
                    <input type="text" placeholder="city.." name="city" required>
                    <textarea name="message" id="" placeholder="Massege.."></textarea>
                    <select name="subject" id="" >
                        <option disabled selected value="" >Choose Option..</option>
                        <option value="Mainline Stabilizer Inquiry">Mainline Stabilizer Inquiry</option>
                        <option value="Bulk/Wholesale Order">Bulk/Wholesale Order</option>
                        <option value="Custom Voltage Solution">Custom Voltage Solution</option>
                        <option value="Technical Support/Service">Technical Support/Service</option>
                        <option value="Warranty Related">Warranty Related</option>
                        <option value="Sales/New Purchase">Sales/New Purchase</option>
                        <option value="Other">Others</option>
                    </select>
                    <button type="submit" name="submit">Submit</button>
                </form>
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