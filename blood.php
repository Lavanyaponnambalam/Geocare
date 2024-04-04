
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Responsive Website Landing Page With Full Screen Draggable Image Slider - Html, Css & Javascript</title>
<link rel="stylesheet" href="css/swiper-bundle.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/login.css">
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
<section>
    <h1 style="color: white; text-align: center; display: flex; justify-content: center; flex-direction : column;padding-top:4em; font-size: 2em;"><span style="font-size: 2.5em;">GEOblood</span>Donate Blood Here</h1>
    <div class="container" style="padding-bottom: 0em;">
    <div class="box">
            <div class="box-login" id="login">
                <div class="top-header">
                    <h3 style="font-size: 1.5em; color: #202834;">Donate Now...</h3>
                </div>
                <div class="input-group">
                    <div class="input-field">
                        <input type="text" class="input-box" id="User" required>
                        <label for="User">User Name</label>
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
                    <h3 style="font-size: 1em; color: #202834;">Blood Group</h3>
                    <label for="Blood"></label>
                    <select id="ambBlood" name="ambBlood">
                    <option value="O+ve">O+ve</option>
                    <option value="A+ve">A+ve</option>
                    <option value="B+ve">B+ve</option>
                    <option value="C+ve">C+ve</option>
                    <option value="AB+ve">AB+ve</option>
                    <option value="AB-ve">AB-ve</option>
                    <option value="A-ve">A-ve</option>
                    <option value="O-ve">O-ve</option>
                    <option value="-ve">B-ve</option>
                    </select></div>

                    <div class="input-field">
                        <h3 style="font-size: 1em; color: #202834;">Health Issues</h3>
                    <label for="Health_Issues"></label>
                    <select id="Health_Issues" name="Health_Issues">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option></select>
                    </div>
                    <div class="input-field">
                        <a href="#step2"><input type="submit" class="input-submit" value="Save Details"></a>
                    </div>
                    <div class="forgot"id="step2" >
                        <h2>move to next step -></h2>
                    </div>
                </div>
                
    </div></section><div style="color: white; text-align: center; display: flex; justify-content: center; flex-direction : column; font-size: 2em;">Choose Nearby Hospital><h3 </h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d26544.944008484195!2d80.17109735271802!3d13.084039332617463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1681437979081!5m2!1sen!2sin" width="1100" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><br><br>
    <a href="popblood.php"><button class="emergency-btn" id="track"
                            style="background: #db3e00; color: white; padding: 5px 10px 5px 10px; border-radius: 10px; cursor: pointer; transform: translateX(40px); opacity: 5; font-size: 40px;">DONATE NOW</button></a></div><br><br><br><br>

<script src="js/swiper-bundle.min.js"></script>
<script src="js/main.js"></script>

</body>

</html>