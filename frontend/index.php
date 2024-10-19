<?php
  include_once './config/constant.php'; 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?php echo COMPANY_NAME; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- =======================================================
      * Template Name: Delicious - v4.1.0
      
      * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
      
      * Author: BootstrapMade.com
      
      * License: https://bootstrapmade.com/license/
      
      ======================================================== -->
  </head>
  <body>
    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
        <i class="bi bi-phone d-flex align-items-center"><span><?php echo TELEPHONE; ?></span></i>
        <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Mon-Thu: 11:00 AM - 11:00 PM</span></i>
      </div>
    </section>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <div class="logo me-auto">
          <h1><a href="index.php"><?php echo COMPANY_NAME; ?></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>
        <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
            <!-- <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="#about">About</a></li> -->
            <li><a class="nav-link scrollto" href="<?php echo BASE_URL.'menu.php';?>">Menu</a></li>
            <li><a class="nav-link scrollto" href="<?php echo BASE_URL.'booking.php';?>">Table Booking</a></li>
            <!-- <li><a class="nav-link scrollto" href="#specials">Specials</a></li>
            <li><a class="nav-link scrollto" href="#events">Events</a></li>
            <li><a class="nav-link scrollto" href="#chefs">Chefs</a></li>
            <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li> -->
            <li><a class="nav-link scrollto" href="<?php echo FRONT_URL.'index.php#contact';?>">Contact</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
        <!-- <a href="#" class="book-a-table-btn scrollto">Book a table</a> -->
      </div>
    </header>
    <!-- End Header -->
    <!-- ======= Hero Section ======= -->
    <section id="hero">
      <div class="hero-area d-flex align-items-center hero-container">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
              <div class="hero-content">
                <div class="hero-sub-title">
                  <h5>GOOD FOOD - GOOD LIFE</h5>
                </div>
                <div class="hero-main-title">
                  <h1>BEST BURGERS</h1>
                  <h1>IN GALAXY</h1>
                </div>
                <div class="hero-discription">
                  <p>We can’t think of a better way to celebrate summer with these 
                    Plus, try our over-the-top creative cheeseburgers.</p>
                </div>
                <div class="hero-btn">
                  <a href="<?php echo BASE_URL.'menu.php';?>">Get Start</a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="hero-thumb bounce-animate">
                <img src="assets/img/hero-thumb.png" alt="">
              </div>
            </div>
            <div class="hero-shape-one bounce-animate">
              <img src="assets/img/hero-shape1.png" alt="">
            </div>
            <div class="hero-shape-two bounce-animate2">
              <img src="assets/img/hero-shape2.png" alt="">
            </div>
            <div class="hero-shape-three bounce-animate3">
              <img src="assets/img/hero-shape3.png" alt="">
            </div>
            <div class="hero-shape-four bounce-animate4">
              <img src="assets/img/hero-shape4.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero -->
    <main id="main">
      <!-- ======= About Section ======= -->
      <!-- <section id="about" class="about">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("assets/img/about.jpg");'>
              <a href="//www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
            </div>
            <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">
              <div class="content">
                <h3>hygienic & standardised  <strong>high - quality service</strong></h3>
                <p>
                  Our restaurant serves hygienic& standardised menu items in a quick-serve style at different locations. Our restaurant specialises in offering quality foods.
                </p>
                <p class="fst-italic">
                  Hygiene, pricing, and customer loyalty are key values practised by our staff at all outlets, distinguishing us from nearby restaurants.
                </p>
                <ul>
                  <li><i class="bx bx-check-double"></i> Reserve your table at <?php echo COMPANY_NAME; ?> and rest assured that you will have one of the best cuisine of your life.</li>
                  <li><i class="bx bx-check-double"></i> We know that delectable food is the soul of every event and aim to offer you the best food and the widest variety for your special events.</li>
                  <li><i class="bx bx-check-double"></i> We now deliver to you in the comfort of your place. Food that you will want to relish immediately, delivered to your doorstep as quick as possible.</li>
                </ul>
                <p>
                  You can also save money on your food orders by using the coupons, we occasionally offers to new and existing customers and speedy delivery service, every order placed using the mobile is going to bring in home delivery of happiness and pure satisfaction
                </p>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <!-- End About Section -->
      <!-- ======= Whu Us Section ======= -->
      <section id="why-us" class="why-us">
        <div class="container">
          <div class="section-title">
            <h2>Why choose <span>Our Restaurant</span></h2>
            <p>The most appealing and well-known restaurants in the region, with a plethora of appealing features associated with it.</p>
          </div>
          <div class="row">
            <div class="col-lg-4">
              <div class="box">
                <span>01</span>
                <h4><?php echo COMPANY_NAME; ?> Recipes</h4>
                <p>Many of the dishes served by the restaurant are of the best quality in flavour and nutrition. Furthermore, a diverse menu of dishes is available, ranging from local favorites to international cuisine</p>
              </div>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
              <div class="box">
                <span>02</span>
                <h4>Professional Chef</h4>
                <p>Our experienced Chief provides you with a wide range of options. They will serve you delectable dishes that you will undoubtedly enjoy. can tell them what you like and dislike.</p>
              </div>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
              <div class="box">
                <span>03</span>
                <h4> Excellent Services</h4>
                <p><?php echo COMPANY_NAME; ?> offers exceptional service, including home delivery and table reservations. The food is delivered promptly and in good condition.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Whu Us Section -->
      <!-- ======= Specials Section ======= -->
      <section id="specials" class="specials">
        <div class="container">
          <div class="section-title">
            <h2>Check our <span>Specials</span></h2>
            <p>Signature dishes and provincial recipes that are inspired by the destination, including dishes that showcase some of the finest seasonal ingredients of the area.</p>
          </div>
          <div class="row">
            <div class="col-lg-3">
              <ul class="nav nav-tabs flex-column">
                <li class="nav-item">
                  <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Makki di Roti</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Khar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Chicken Stew and Appam</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Dhokla</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Rogan Josh</a>
                </li>
              </ul>
            </div>
            <div class="col-lg-9 mt-4 mt-lg-0">
              <div class="tab-content">
                <div class="tab-pane active show" id="tab-1">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Makki di Roti</h3>
                      <p class="fst-italic">Makki di Roti is a corn meal Indian bread that tastes fabulous with ‘Sarsonsaag’ – mustard green and a glass of lassi.</p>
                      <p>The dish is regarded as the traditional way to prepare saag and is usually served with makki di roti literally (unleavened cornbread). It can be topped with either Makkhan (unprocessed white butter or processed yellow butter) or more traditionally with ghee.</p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="assets/img/specials-1.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-2">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Khar</h3>
                      <p class="fst-italic">Khar is a completely off beat dish prepared out of the unusual combination of red rice, beaten pulses and raw papaya along with traditional Assamese spices. </p>
                      <p>Khar (alkali) is synonymous with Assamese cuisine. Essentially, it is an exotic liquid strained from sun-dried banana skin and cooked with a seasonal vegetable like papaya(omita), water gourd (panilau)or mustard greens (laihaak).</p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="assets/img/specials-2.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-3">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Chicken Stew and Appam</h3>
                      <p class="fst-italic">This stunning dish comes straight from the hidden treasures of God's own country, Kerala. </p>
                      <p>Chicken stew is a popular dish there as a traditional Easter dish and specially among the Christian families for breakfast or brunch. Chunks of chicken bathed in a beautifully spiced and dreamy coconut gravy with soft-centered appams, a southern-style rice pancake. </p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="assets/img/specials-3.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-4">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Dhokla</h3>
                      <p class="fst-italic">A popular Gujarati snack, Dhokla is a steamed cake made from gram flour and channa dal is one of the best things to come out of Gujarat.</p>
                      <p>You can serve dhokla for breakfast as well as a light snack in the evening along with a cup of tea. A recipe that is steamed and made in just 30 minutes, using besan with a colorful, chili tempering is sure to set your taste buds racing!</p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="assets/img/specials-4.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-5">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Rogan Josh</h3>
                      <p class="fst-italic">Rogan Josh is an aromatic lamb dish with flavors of browned onions, various spices and yoghurt. </p>
                      <p>It is usually served with steamed rice and consists of pieces of lamb or mutton braised with gravy flavored with garlic, ginger and aromatic spices (cloves, bay leaves, cardamom, and cinnamon).</p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="assets/img/specials-5.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Specials Section -->
      <!-- ======= Events Section ======= -->
     <!--  <section id="events" class="events">
        <div class="container">
          <div class="section-title">
            <h2>Organize Your <span>Events</span> in our Restaurant</h2>
          </div>
          <div class="events-slider swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="row event-item">
                  <div class="col-lg-6">
                    <img src="assets/img/event-birthday.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3>Birthday Parties</h3>
                    <div class="price">
                      <p><span>£189</span></p>
                    </div>
                    <p class="fst-italic">
                      We will work with you to satisfy your expectations and make specific arrangements for your party. If you are planning in advance, we can provide you with menu choices, re-arrange the tables, order a cake, etc.
                    </p>
                    <ul>
                      <li><i class="bi bi-check-circle"></i> Pick up flowers and arrange if applicable</li>
                      <li><i class="bi bi-check-circle"></i> Print out gift tracker</li>
                      <li><i class="bi bi-check-circle"></i> Practice polite “thank-yous” with birthday boy/girl</li>
                    </ul>
                    <p>
                      We offer a wide range of balloon decorations for Birthday Parties. We can design the balloon themes as per your choice, colours and requirements.
                    </p>
                  </div>
                </div>
              </div>
              <!-- End testimonial item -->
              <!-- <div class="swiper-slide">
                <div class="row event-item">
                  <div class="col-lg-6">
                    <img src="assets/img/event-private.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3>Private Parties</h3>
                    <div class="price">
                      <p><span>£290</span></p>
                    </div>
                    <p class="fst-italic">
                      Get the whole restaurant to yourself for your unique day! For big gatherings, such as wedding receptions, Bridal Showers, and so on, we shut the restaurant depending on the number of guests attending. There will be a charge for the space.
                    </p>
                    <ul>
                      <li><i class="bi bi-check-circle"></i> Inflate and arrange balloons early in the morning</li>
                      <li><i class="bi bi-check-circle"></i> Set up flower arrangements and other last-minute decorations</li>
                      <li><i class="bi bi-check-circle"></i> Finesse final set-up. Turn on the music and party lights</li>
                    </ul>
                    <p>
                      You can order a plated meal, a family style dinner, a buffet, or work with the General Manager to customise the menu and beverage choices
                    </p>
                  </div>
                </div>
              </div> -->
              <!-- End testimonial item -->
              <!-- <div class="swiper-slide">
                <div class="row event-item">
                  <div class="col-lg-6">
                    <img src="assets/img/event-custom.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3>Custom Parties</h3>
                    <div class="price">
                      <p><span>£99</span></p>
                    </div>
                    <p class="fst-italic">
                      We will work with you to create a personalised menu for your event/occasion based on your budget and food preferences. Speak with the planner about planning the party exactly as you like it.
                    </p>
                    <ul>
                      <li><i class="bi bi-check-circle"></i> Purchase any last-minute party supplies and equipment</li>
                      <li><i class="bi bi-check-circle"></i> Organize and stage activity set-up(s)</li>
                      <li><i class="bi bi-check-circle"></i> Confirm services with any entertainers</li>
                    </ul>
                    <p>
                      We will provide you with a variety of family-style choices, such as a buffet appetiser and a sit-down meal, among other things. There are a plethora of choices to fit every occasion
                    </p>
                  </div>
                </div>
              </div> -->
              <!-- End testimonial item -->
           <!--  </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section> -->
      <!-- End Events Section -->
      <!-- ======= Book A Table Section ======= -->
     <!--  <section id="book-a-table" class="book-a-table">
        <div class="container">
          <div class="section-title">
            <h2>Book a <span>Table</span></h2>
            <p>Hurry! Reserve your favourite table now and spend your pleasant evening with us.</p>
          </div>
          <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-lg-4 col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>
      </section> -->
      <!-- End Book A Table Section -->
      <!-- ======= Gallery Section ======= -->
      <!-- <section id="gallery" class="gallery">
        <div class="container-fluid">
          <div class="section-title">
            <h2>Some photos from <span>Our Restaurant</span></h2>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
          </div>
          <div class="row no-gutters">
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-2.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-3.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-4.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-5.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-6.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-7.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-8.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <!-- End Gallery Section -->
      <!-- ======= Chefs Section ======= -->
      <!-- <section id="chefs" class="chefs">
        <div class="container">
          <div class="section-title">
            <h2>Our Proffesional <span>Chefs</span></h2>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="member">
                <div class="pic"><img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Walter White</h4>
                  <span>Master Chef</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="member">
                <div class="pic"><img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Sarah Jhonson</h4>
                  <span>Patissier</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="member">
                <div class="pic"><img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>William Anderson</h4>
                  <span>Cook</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
     
      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container">
          <div class="section-title">
            <h2><span>Contact</span> Us</h2>
            <!-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
          </div>
        </div>
        <div class="map">
          <!--    <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe> -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.4973411726014!2d-0.544728022942723!3d51.50409111094454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48767022a6f0f8d7%3A0xd228c714e5c0903d!2s5%20Meadfield%20Rd%2C%20Langley%2C%20Slough%20SL3%208HL%2C%20UK!5e0!3m2!1sen!2sin!4v1689174705943!5m2!1sen!2sin" width="600" height="450" style="border:0; width: 100%; height: 350px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="container mt-5">
          <div class="info-wrap">
            <div class="row">
              <div class="col-lg-3 col-md-6 info">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p><?php echo ADDRESS; ?></p>
              </div>
              <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                <i class="bi bi-clock"></i>
                <h4>Open Hours:</h4>
                <p>Mon-Thu: 11:00 AM - 11:00 PM</p>
                <p>Fri-Sat: 11:00 AM - 11:30 PM</p>
                <p>Sun: 12:00 AM - 11:00 PM</p>
              </div>
              <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p><?php echo EMAIL; ?></p>
              </div>
              <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p><?php echo TELEPHONE; ?></p>
              </div>
            </div>
          </div>
          <div class="form-group d-none">
            <input type="text" class="form-control" name="first_name">
            <div class="validate"></div>
          </div>
          <!-- <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="form-group mt-3">
          <form action="?" method="POST">
          <div class="g-recaptcha" data-sitekey="6LfnANIaAAAAAJULacGtijrZIfLorkaDnO_6Byqn"></div>
          <br/>
          <!--  <input type="submit" value="Submit"> 
          <div class="text-center"><button type="submit">Send Message</button></div>
          </form> -->
          </div>
          <!-- <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div> -->
          <!-- <div class="text-center"><button type="submit">Send Message</button></div> -->
          </form>
        </div>
      </section>
      <!-- End Contact Section -->
    </main>
    <!-- End #main -->
    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="container">
        <h3><?php echo COMPANY_NAME; ?></h3>
        <p>Taste the Best</p>
        <!-- <div class="social-links">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div> -->
        <div class="copyright">
          &copy; Copyright <strong><span><?php echo COMPANY_NAME; ?></span></strong>. All Rights Reserved
        </div>
      </div>
    </footer>
    <!-- End Footer -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <!-- Vendor JS Files -->
    <script src="//www.google.com/recaptcha/api.js" async defer></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>