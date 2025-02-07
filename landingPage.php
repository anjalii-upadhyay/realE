<?php
    include('db.php');
?>


<!DOCTYPE php>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestige Properties</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bona+Nova+SC:ital,wght@0,400;0,700;1,400&family=Fustat:wght@200..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">

</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <h1 class="logo-1">PRESTIGE</h1>
                <h6 class="logo-2">PROPERTIES</h6>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li>
                      <a href="#">Services ▼</a>
                      <ul class= dropdown>
                        <li><a href="buyProp.php">Buy Property</a></li>
                        <li><a href="rentProp.php">Rent Property</a></li>
                        <li><a href="sellProp.php">Sell Property</a></li>
                      </ul>
                    </li>
                    <li><a href="aboutUs.php">About Us</a></li>
                    <li><a href="login.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <img src="/images/landingHouse.jpg" alt="" class="background">

    <section id="hero" class="hero">
        <div class="tag-container">
            <h1 class="tagline">WELCOME USER!  GREETINGS OF THE DAY! </h1>
        </div>
        <h2 class="tag-2">Ready to delegate your property buying, and selling needs so you can focus on your family and career?</h2>
        <div class="buy-sell">
            <h2 class="buy-button">BUY</h2>
            <h2 class="sell-button">SELL</h2>
        </div>
    </section>

    <section id="about-us" class="about-us">
        <h1 class="abt-title">HOW CAN WE HELP YOU?</h1>
        <div class="abt-contain">
            <div class="abt-desc-con">
                <p class="abt-desc">
                  <h2>Welcome to Your Dream Home</h2>
                    Experience Stress-Free Property Transactions <br><br>
                    
                    As your dedicated real estate partners, we handle every aspect of renting, buying, and selling properties with precision and care. From initial consultations to market analysis, negotiations, and closing deals, our expert team ensures a smooth and hassle-free experience. <br><br>
                    
                    <h2>Why Choose Us?</h2>
                    
                    <b>Expert Guidance:</b> We provide professional support every step of the way.<br>
                    <b>Personalized Service:</b> We tailor our approach to your unique needs.<br>
                    <b>Trusted Experience:</b> Your investments are in capable hands <br><br>
                    <h2>Join Our Community</h2>
                    
                    
                    Focus on what matters most while we handle your real estate needs. Sign up now for exclusive access to our latest listings and personalized property recommendations.</p>
            </div>
            
            <img src="/images/4309581.webp" alt="" class="abt-img">
        </div>
        
    </section>

    <section id="buy" class="buy">
        <h1 class="abt-title">SEARCH PROPERTIES NEAR YOU</h1>
        <div class="search-container">
            <input type="text" placeholder="Search...">
            <button type="submit">Search</button>
          </div>
        
    </section>

      <section id="contact" class="contact">
        <h1 class="con-title">CONTACT US</h1>
        <div class="con-container">
          <div class="contact-info">
            <h2>Contact Us</h2>
            <p>Follow us on social media:</p>
            <div class="social-icons">
              <a href="https://www.instagram.com/accounts/login/?hl=en"><img class="social-logos" src="/images/Instagram_logo_2016.svg.webp" alt="Instagram"></a>
              <a href="https://www.facebook.com/login/"><img class="social-logos" src="/images/png-transparent-facebook-logo-social-media-facebook-computer-icons-linkedin-logo-facebook-icon-media-internet-facebook-icon.png" alt="Facebook"></a>
              <a href="https://web.whatsapp.com/"><img class="social-logos" src="/images/png-clipart-whatsapp-icon-whatsapp-computer-icons-symbol-text-messaging-whats-logo-grass.png" alt="WhatsApp"></a>
            </div>
          </div>
          <div class="contact-form">
            <h2>Send us a message</h2>
            <form action="#" method="POST">
              <input type="text" name="name" placeholder="Your Name" required>
              <input type="email" name="email" placeholder="Your Email" required>
              <textarea name="message" placeholder="Your Message" rows="4" required></textarea>
              <button type="submit">Send Message</button>
            </form>
          </div>
        </div>
      </section>
</body>
</php>