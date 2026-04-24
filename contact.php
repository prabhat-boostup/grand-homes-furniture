<?php require_once("includes/header.php"); ?>
<body>
    <div class="page-wrapper <?= isIndia() ? 'light-mode' : '' ?>">

        <!-- Preloader -->
        <div class="preloader"><div class="custom-loader"></div></div>

        <!-- main header -->
        <?php include("includes/mainNavbar.php") ?>
        
        <!-- Banner Section Start -->
        <section class="contact-banner banner-area">
            <div class="container-fluid">
                <div class="contact-title row align-items-center text-center justify-content-between wow fadeInUp delay-0-2s py-128">
                    <h1>CONTACT</h1> 
                </div>
            </div>
        </section>
        <!-- Banner Section End -->
        
        <!-- Contact Form Area start -->
        <section class="contact-area" >
            <div class="container">
                <div class="row justify-content-between contact-content">
                    <div class="col-lg-9 ct-form wow fadeInRight delay-0-2s">
                        <form id="contactForm" class="contact-form rmt-55 contactForm" action="#" name="contactForm" method="post">
                            <div class="form-group">
                                <input type="text" id="name" name="name" class="form-control" value="" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" id="email" name="email" class="form-control" value="" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" class="form-control" rows="9" placeholder="Message" required></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="contact-btn">Send a message</button>
                            </div>
                        </form>
                    </div>
                    <div class="contact-info wow fadeInLeft delay-0-2s">
                        <div class="section-title mb-32">
                            <h5 class="mb-32">Basic information</h5>
                            <p>Get in touch with us to learn more about interior or architecture design.  We'd love to hear from you,  here's how you can reach us...</p>
                        </div>
                        <div class="contact-info-item">
                            <i class="fas fa-phone-volume"></i> <a href="callto:+61(313)83766284">+61 (313) 8376 6284</a>
                        </div>
                        <div class="contact-info-item">
                            <i class="fas fa-envelope"></i> <span class="text"><a href="mailto:info@indochine.com">info@indochine.com</a></span>
                        </div>
                        <div class="contact-info-item">
                            <i class="fas fa-map-marker-alt"></i> <span class="text">2425 Westview Dr W, Seattle, WA 98119, USA</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Form Area end -->
        
        <section class="map-area">
            <div class="container-fluid">
                <!-- Location Map Area Start -->
                <div class="contact-page-map wow fadeInUp delay-0-2s">
                    <div class="our-location">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d96776.56071496992!2d-74.02420878160657!3d40.71212692665102!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1676287097391!5m2!1sen!2sbd" style="border:0; width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <!-- Location Map Area End -->
            </div>
        </section>

        <!-- footer area start -->
        <?php
            include("includes/mainFooter.php");
        ?>
        <!-- footer area end -->
        
        
        <!-- Scroll Top Button -->
        <button class="scroll-top scroll-to-target" data-target="html"><span class="fas fa-angle-double-up"></span></button>

    </div>
    <!--End pagewrapper-->
   
    
    <!-- Jquery -->
    <script src="assets/vendor/jquery-3.7.1.min.js"></script>
    <!-- Popper -->
    <script src="assets/vendor/bootstrap/js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Appear Js -->
    <script src="assets/vendor/appear.min.js"></script>
    <!-- Slick -->
    <script src="assets/vendor/slick/js/slick.min.js"></script>
    <!-- Magnific Popup -->
    <script src="assets/vendor/magnific-popup/js/jquery.magnific-popup.min.js"></script>
    <!-- Nice Select -->
    <script src="assets/vendor/nice-select/js/jquery.nice-select.min.js"></script>
    <!-- Image Loader -->
    <script src="assets/vendor/imagesloaded.pkgd.min.js"></script>
    <!-- Isotope -->
    <script src="assets/vendor/isotope.pkgd.min.js"></script>
    <!--  WOW Animation -->
    <script src="assets/vendor/wow.min.js"></script>

    <!-- Custom script -->
    <script src="assets/js/script.js"></script>

</body>
</html>
