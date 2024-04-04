


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
      <a href="" class="logo">GEO<span>CARE</span></a>
      <div class="navigation">
        <div class="nav-items">
          <i class="uil uil-times nav-close-btn"></i>
          <a href="#about"><i class="uil uil-info-circle"></i> About</a>
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
    <div class="media-icons">
      <a href="#"><i class="uil uil-facebook-f"></i></a>
      <a href="#"><i class="uil uil-instagram"></i></a>
      <a href="#"><i class="uil uil-twitter"></i></a>
    </div>

    <div class="swiper bg-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide ">
          
          <video src="images/homeplay.mp4" muted loop autoplay ></video>
          <div class="text-content">
            <h2 class="title">GEOCARE <span>Quick Health Care Service</span></h2>
            <p>Our Quick Health Service is focused on online healthcare prebooking needs in today's environment. We connected all the licensed hospitals through a network that provides all kinds of online health services on our GEOCARE, which is very convenient for the users.</p>
            <a href="#about"><button class="read-btn">Read More <i class="uil uil-arrow-right"></i></button></a>
          </div>
        </div>
        
        
      </div>
    </div>

    <div class="bg-slider-thumbs">
      <div class="swiper-wrapper thumbs-container">
      </div>
    </div>
  </section>

  <section class="about section" id="about">
    <br>
    <br>
    <h2>about GEOCARE</h2>
    <p>India is ranked 45th in the health maintenance index; its healthcare sector offers 3.9% of the country's gross domestic product. It employs more than 25% of all health workers in India, but due to the rapid growth of social networks, people are manually booking everything on the Internet due to their hectic schedules. So, healthcare needs online prebooking in today's environment. The proposed idea focuses on this Quick healthcare service. Some private hospitals are individually providing online services like appointments for consulting doctors, blood donation services, ambulance booking services, etc. So, the idea is to connect all the licensed hospitals through a network that provides all kinds of online health services on a single website, which is very convenient for the users. Each user will have a separate profile so that the user can easily get services in emergency situations. This method reduces human errors, increases user satisfaction, saves time, and cuts costs.</p>
    <p>We take the lead in integrating access to emergency and urgent care in the city, and we work hard to make sure patients get the correct care at the right time and location.  Patients receive urgent and emergency care from us at the time they need it.  There is no second chance when it comes to delivering ambulance service.</p>
    <p>Our Geocare services of blood donation and transfusion are essential components of modern medicine and healthcare. 
With the advancement of information and computer technology, such a significant barrier has been greatly reduced. An integrated automation system for blood banks is called e-Blood Bank. and these types of electronic processes will help the public for easy access to the blood availability status of blood banks on their fingertips. The system oversees all operations, including blood collection from hospitals and camps as well as the distribution of blood units. Donor screening, blood collection, storage, and unit maintenance are all included.</p>
    <p>The mission at Quick Health Service is to provide patients with the best, most comprehensive care for all ages from birth to seniors. Our practice is committed to giving every patient the best-personalized care.  Just consider us part of your family! Our counselling services is available in full time.Our wellbeing support services are open to all doctors.</p>
  </section>
  <footer class="footer">
    <div class="container">
      <div class="row justify-content-center">
        <p class="copyright-text">&copy; 2023 by GEOCARE Quick Health Service</p>
      </div>
    </div>
  </footer>

  <script src="js/swiper-bundle.min.js"></script>
  <script src="js/main.js"></script>

</body>
</html>
