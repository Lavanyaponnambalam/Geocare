
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>GEOCARE - Quick Health Services</title>
<link rel="stylesheet" href="css/swiper-bundle.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/login.css">
<link rel="stylesheet" href="css/slideDr.css">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>

<body style="background-color: #202834;">

<header>
    <div class="nav-bar">
    <a href="index.php" class="logo">GEO<span>CARE</span></a>
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
<section class="slideSec">
    <h1 style="color: white; text-align: center; display: flex; justify-content: center; flex-direction : column;padding-top:4em; font-size: 2em;"><span style="font-size: 2.5em;">GEOdr</span>Prebooking Doctor Appointment</h1>

<section class="swiper mySwiper" style="margin: auto; padding:50px;">

    <div class="swiper-wrapper">

    <div class="card swiper-slide">
        <div class="card__image">
        <img src="images/dr1.jpg" alt="card image">
        </div>

        <div class="card__content">
        <span class="card__title">Dr.Joseph Navaseelan</span>
        <span class="card__name">General Physician</span>
        <p class="card__text">13 Years Experience Overall<br>Sugam Hospitals,Tiruvottiyur, Chennai</p>
        <span class="card__name">₹700 Consultation Fees</span>
        <a href="#slot"><button class="card__btn">Book Slot</button></a>
        </div>
    </div>

    <div class="card swiper-slide">
        <div class="card__image">
        <img src="images/dr2.jpg" alt="card image">
        </div>

        <div class="card__content">
        <span class="card__title">Dr.Kavya Somesh</span>
        <span class="card__name">Gynecologist</span>
        <p class="card__text">6 Years Experience Overall<br>Apollo Hospital,Chennai</p>
        <span class="card__name">₹500 Consultation Fees</span>
        <a href="#slot"><button class="card__btn">Book Slot</button></a>
        </div>
    </div> 

    <div class="card swiper-slide">
        <div class="card__image">
        <img src="images/dr3.jpg" alt="card image">
        </div>

        <div class="card__content">
        <span class="card__title">Dr.Praveen Kumar</span>
        <span class="card__name">Cardiologists</span>
        <p class="card__text">10 Years Experience Overall<br>Madras Medical Mission Hospital, Mogappair, Chennai</p>
        <span class="card__name">₹1000 Consultation Fees</span>
        <a href="#slot"><button class="card__btn">Book Slot</button></a>
        </div>
    </div>

    <div class="card swiper-slide">
        <div class="card__image">
        <img src="images/dr4.jpg" alt="card image">
        </div>

        <div class="card__content">
        <span class="card__title">Dr.Ram Prasad</span>
        <span class="card__name">Diabetologist</span>
        <p class="card__text">25 Years Experience Overall<br>SIMS Hospital, Vadapalani, Chennai</p>
        <span class="card__name">₹800 Consultation Fees</span>
        <a href="#slot"><button class="card__btn">Book Slot</button></a>
        </div>
    </div>

    <div class="card swiper-slide">
        <div class="card__image">
        <img src="images/dr5.jpg" alt="card image">
        </div>

        <div class="card__content">
        <span class="card__title">Dr. Mohamed Sajjid</span>
        <span class="card__name">Pediatrician</span>
        <p class="card__text">9 Years Experience Overall<br>Prashanth Hospitals, kolathur, Chennai</p>
        <span class="card__name">₹500 Consultation Fees</span>
        <a href="#slot"><button class="card__btn">Book Slot</button></a>
        </div>
    </div>

    <div class="card swiper-slide">
        <div class="card__image">
        <img src="images/dr6.jpg" alt="card image">
        </div>

        <div class="card__content">
        <span class="card__title">Dr. Sivaraman</span>
        <span class="card__name">Physiotherapist</span>
        <p class="card__text">15 Years Experience Overall<br>MGM Hospitals. Aminjikarai, Chennai</p> 
        <span class="card__name">₹1500 Consultation Fees</span>
        <a href="#slot"><button class="card__btn">Book Slot</button></a>
        </div>
    </div>

    </div>
</section>



    <div class="container" style="padding-bottom: 0em;" id="slot">
    <div class="box">
            <div class="box-login" id="login">
                <div class="top-header">
                    <h3 style="font-size: 1.5em; color: #202834;">Choose Slot...</h3>
                </div>
                <div class="input-group">
                    <div class="input-field">
                        <input type="text" class="input-box" id="Patient" required>
                        <label for="Patient">Patient Name</label>
                    </div>
                    <div class="input-field">
                        <input type="number" class="input-box" id="Number" required>
                        <label for="Number">Contact Number</label>
                    </div>
                    <div class="input-field">
                        <input type="number" class="input-box" id="age" required>
                        <label for="age">Age</label>
                    </div>
                    <div class="input-field">
                        <input type="text" class="input-box" id="problem" required>
                        <label for="problem">Health Issues</label>
                    </div>

                    <div class="input-field">
                        <h3 style="font-size: 1em; color: #202834;">Gender</h3>
                    <label for="gender"></label>
                    <select id="gender" name="gender" required>
                    <option value="Female">Female</option>
                    <option value="Male">Male</option></select>
                    </div>

                    <div class="input-field">
                    <h3 style="font-size: 1em; color: #202834;">Time Slot</h3>
                    <label for="Blood"></label>
                    <select id="ambBlood" name="ambBlood">
                    <option value="9am">9am</option>
                    <option value="10m">10am</option>
                    <option value="11am">11am</option>
                    <option value="4pm">4pm</option>
                    <option value="5pm">5pm</option>
                    <option value="6pm">6pm</option>
                    <option value="7pm">7pm</option>
                    <option value="8pm">8pm</option>
                    
                    </select></div>

                    
                    <div class="input-field">
                        <a href="popdr.php"><input type="submit" class="input-submit" value="BOOK NOW"></a>
                    </div>
                </div>
                <br><br><br><br>
    <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script src="js/swiper-bundle.min.js"></script>
  <script src="js/main.js"></script>
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 300,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>
</html>


  

</body>

</html>