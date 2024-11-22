<?php $page = 'home';
include_once './navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_forward" />
    <!--- Linkking SwiperJs CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!--- Linking StyleCSS ----->
    <link rel="stylesheet" href="indexstyle.css">
    <title>Main</title>
</head>

<body>

    <!-- ------------- Main ------------ -->

    <div class="main" id="main">
        <div class="left">
            <br>
            <p>We are a community of leaders focused on developing young professionals in their faith and career.</p>
            <br>
        </div>
    </div>

    <!-- ------------- End of Main ------------ -->

    <!-- -------------About ------------ -->

    <div class="about" id="about">
        <div class="left">
            <img src="./img/orientation.jpg" alt="">
        </div>
        <div class="right">
            <h2>About Us</h2>
            <p>
                <b>
                    Global Surge is a 501(c)3 registered organization in the United states,
                    Additionally, Global Surge and the Dr. Gregory S. Lyons Founndation are
                    both registered NGOs (Non Profit Organizations) in the Philippines
                </b>
            </p>
            <br>
            <p>
                Gpro Ministry is part of Global Surge that Exist as a Church planting urban ministry committed to
                reaching
                this generation for Christ and transforming them into reproducing disciples that will reach the world.
                Global Surge provides Worship Centers throughout Metro Manila and Southeast Asia. We aim to present
                Christ in Creative,
                Credible, and Caring way to young urban residents and to establish community of believers each Equipped
                and committed
                to minister effectively to those around them. Also, we actively pursue the planting of Community Group
                based churches in local
                foreign urban centers.
            </p>
        </div>
    </div>

    <!-- -------------End of About ------------ -->
    <!-- ------------ Kickstart Image ------------ -->

    <div class="kickstart">
        <img src="./img/GPRORTX4090.png" alt="">
    </div>

    <!-- ------------- Mission and Kicksstart Image ------------ -->

    <!-- ------------- Mission and Vision ------------ -->
    <div class="mission">
        <div class="mission1">
            <h1>Our Mission</h1>
            <p>
                Gpro helps to nurture and support young adults.
                <br>
                To merge and harmonize biblical principles with the secular worlds
            </p>
        </div>
        <div class="mission-img">
            <img src="./img/Mission.png" alt="">
        </div>
    </div>

    <!-- ------------- Vision ------------ -->

    <div class="vision">
        <div class="vision-img">
            <img src="./img/vision.png" alt="">
        </div>
        <div class="vision1">
            <h1>Our Vision</h1>
            <p>To see communities commit to truth in all areas
                <br> "Spiritual, Economic, Social, Physical" a hope resulting in global change.
            </p>
        </div>
    </div>

    <!-- -------------End of Mission/Vision ------------ -->



    <!-- ------------- Video Section ------------ -->

    <div class="portfolio" id="portfolio">
        <div class="header">
            <div class="info">
                <h5></h5>
            </div>
        </div>
    </div>

    <!-- ------------- End of Video Section ------------ -->


    <!-- ------------- Card Slider ------------ -->

    <div class="container">
        <h1>Inaayos pa po namen</h1>
        <div class="slide-container">
            <div class="card-wrapper">
                <div class="card">
                    <div class="image-box">
                        <img src="./img/meow.jpg" alt="">
                    </div>
                    <div class="profile-details">
                    <div class="programs">
                        <h3 class="Name">Education</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ------------- End of Card Slider ------------ -->

    <!-- ------------- Contacts and Location ------------ -->
    <div class="contact-location">
        <div class="contact" id="contact">
            <div class="contact-loc">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.573511532958!2d121.07377237419975!3d14.566364677915775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c87777938deb%3A0x7f7e5476021cee1c!2sGlobal%20Surge%20Worship%20Center%20Pasig!5e0!3m2!1sen!2sph!4v1731999974406!5m2!1sen!2sph"
                    width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="contact-form">
                <h1>Kenji x Pj Fubu Event</h1>
                <form>
                    <input type="text" placeholder="Name" class="contact-form1">
                    <input type="text" placeholder="Name" class="contact-form1">
                    <textarea placeholder="Message" class="contact-form-area"></textarea>
                    <input type="Submit" name="Submit" class="form-button">
                </form>
            </div>
        </div>
    </div>
    <!-- ------------- End of Contacts and Location ------------ -->

    <!-- ------------- Footer ------------ -->

    <footer>
        <div class="top">
            <div class="logo">
                <a href="">Gpro Ministry</a>
            </div>
            <ul>
                <li><a href="https://www.facebook.com/GPROministry">Facebook</a></li>
                <li><a href="https://www.instagram.com/gswcpasig?igsh=Z2h3a2o1OWZkNWpo">Instagram</a></li>
                <li><a href="https://www.youtube.com/@GproMinistry">Youtube</a></li>
            </ul>
            <div class="social-link">
                <a href="https://www.facebook.com/GPROministry"><i class='bx bxl-facebook-circle'></i></a>
                <a href="https://www.instagram.com/gswcpasig?igsh=Z2h3a2o1OWZkNWpo"><i
                        class='bx bxl-instagram-alt'></i></a>
                <a href="https://www.youtube.com/@GproMinistry"><i class='bx bxl-youtube'></i></a>
            </div>
        </div>
        <div class="separator"></div>
        <div class="bottom">
            <p>
                Made by Joshua MaNiggas, Kenji Fubo PJ, Harold Joaquin Villahermosa
            </p>

        </div>
    </footer>
    <!-- Linking SwiperJS script -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!---- Custom script --->
    <script src="script.js"></script>
</body>

</html>