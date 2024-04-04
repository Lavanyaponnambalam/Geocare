<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Website Landing Page With Full Screen Draggable Image Slider - Html, Css & Javascript</title>
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>

<body>

    <header>
        <div class="nav-bar">
            <a href="index.php" class="logo">GEOCARE</a>
            <div class="navigation">
                <div class="nav-items">
                    <i class="uil uil-times nav-close-btn"></i>
                    <a href="index.php"><i class="uil uil-info-circle"></i> About</a>
                    <a href="services.php"><i class="uil uil-document-layout-left"></i> Services</a>
                    <a href="logout.php"><i class="uil uil-home"></i> Logout</a>
                    <a href="ambulance.php"><button class="emergency-btn"
                            style="background: rgba(222, 5, 5, 0.702); color: white; padding: 5px 10px 5px 10px; border-radius: 10px; cursor: pointer; transform: translateX(40px); opacity: 5; font-size: 1.2em;">EMERGENCY</button></a>
                </div>
            </div>
            <i class="uil uil-apps nav-menu-btn"></i>
        </div>
    </header>

    <section class="home">
        
        <div class="swiper bg-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/ambulance2.jpg" alt="">
                    <div class="text-content">
                        <h2 class="title">GEOamb<span> Ambulance Service</span></h2>
                        <p>Our Quick Ambulance Services take the lead in integrating access to emergency and urgent Ambulance care in the city, and we work hard to make sure patients get the correct care at the right time and location. They receive urgent and emergency care from us at the time they need it. There is no second chance when it comes to delivering ambulance service.</p>
                        <a href="ambulance.php"><button  class="read-btn">Book Now<i class="uil uil-arrow-right"></i></button> </a>
                    </div>
                </div>
                <div class="swiper-slide dark-layer">
                    <img src="images/blood1.jpg" alt="">
                    <div class="text-content">
                        <h2 class="title">GEOblood<span> Donate Blood</span></h2>
                        <p>Our GEOblood web based mechanism inter connects the people interested in donating blood into a single network. People who are willing to donate but do know where to give so by  using our page we provide you the ideas and ways. User will donate blood through hospitals.</p>
                        <a href="blood.php"><button class="read-btn">Donate Now<i class="uil uil-arrow-right"></i></button></a>
                    </div> 
                </div>
                <div class="swiper-slide dark-layer">
                    <img src="images/doctors.jpg" alt="">
                    <div class="text-content">
                        <h2 class="title">GEOdr<span> Consulting Doctor</span></h2>
                        <p>Our mission at Quick Health Service is to provide patients with the best, most comprehensive care for all ages from birth to seniors. Our practice is committed to giving every patient the best-personalized care.  Just consider us part of your family. Our Geocare provides doctor details and user will book slot.</p>
                        <a href="doctor.php"><button class="read-btn">Book now <i class="uil uil-arrow-right"></i></button></a>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <div class="bg-slider-thumbs">
            <div class="swiper-wrapper thumbs-container">
                <img src="images/ambulance2.jpg" class="swiper-slide" alt="">
                <img src="images/blood1.jpg" class="swiper-slide" alt="">
                <img src="images/doctors.jpg" class="swiper-slide" alt="">
            </div>
        </div>
    </section>

    <section class="about section">
        <h2>our GEOamb service</h2>
        <p>Our Emergency Ambulance Services take the lead in integrating access to emergency and urgent Ambulance care in the city, and we work hard to make sure patients get the correct care at the right time and location. They receive urgent and emergency care from us at the time they need it. There is no second chance when it comes to delivering ambulance service.
        
        When it comes to providing ambulance service there’s no second chance to get it right. We are making availability of ambulance your area which gives you faster action of ambulance service
        </p>
        <a href="ambulance.php"><button class="emergency-btn"
                            style="  border: none; outline: none; background: var(--white-color); color: var(--dark-color); font-size: 1em;font-weight: 500;padding: 8px 25px; display: flex;align-items: center; margin-top: 40px; border-radius: 10px;cursor: pointer;">BOOK NOW</button></a>
</section>
            <section style="background-color: #491437;" class="about section"><h2>our GEOblood service</h2>
            <p>Services of blood donation and transfusion are essential components of modern medicine and healthcare. 
With the advancement of information and computer technology, such a significant barrier has been greatly reduced. An integrated automation system for blood banks is called e-Blood Bank. and these types of electronic processes will help the public for easy access to the blood availability status of blood banks on their fingertips. The system oversees all operations, including blood collection from hospitals and camps as well as the distribution of blood units. Donor screening, blood collection, storage, and unit maintenance are all included..</p>
            <a href="blood.php"><button class="emergency-btn"
                            style="  border: none; outline: none; background: var(--white-color); color: var(--dark-color); font-size: 1em;font-weight: 500;padding: 8px 25px; display: flex;align-items: center; margin-top: 40px; border-radius: 10px;cursor: pointer;">DONATE NOW</button></a>
</section>
    <section class="about section">
            <h2>our GEOdr service</h2>

        <p>Our mission at Quick Health Service is to provide patients with the best, most comprehensive care for all ages from birth to seniors. Our practice is committed to giving every patient the best-personalized care.  Just consider us part of your family. Our Geocare provides doctor details and user will book slot.
            Our practice is committed to giving every patient the best-personalized care.  Just consider us part of your family! Our counselling services is available in full time.Our wellbeing support services are open to all doctors.</p>
        <a href="doctor.php"><button class="emergency-btn"
                            style="  border: none; outline: none; background: var(--white-color); color: var(--dark-color); font-size: 1em;font-weight: 500;padding: 8px 25px; display: flex;align-items: center; margin-top: 40px; border-radius: 10px;cursor: pointer;">BOOK NOW</button></a>
    </section>
    <footer class="footer">
    <div class="container">
    <div class="row justify-content-center">
        <p class="copyright-text">&copy; 2023 by GEOCARE Quick Health Services</p>
    </div>
    </div>
    </footer>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>