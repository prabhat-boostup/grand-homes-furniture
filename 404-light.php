<?php require_once("includes/header.php"); ?>
<body>
    <div class="page-wrapper <?= isIndia() ? 'light-mode' : '' ?>">

        <!-- Preloader -->
        <div class="preloader"><div class="custom-loader"></div></div>

        <!-- main header -->
        <?php include("includes/mainNavbar.php") ?>
        
        <!-- 404 Section Start -->
        <section class="error-area">
            <div class="container">
                <div class="error-content text-center wow fadeInUp delay-0-2s">
                    <span class="error-img">
                        <img src="assets/images/404/404.png" alt="error image">
                    </span>
                    <div class="error-desc ow py-128 justify-content-center wow fadeInUp delay-0-4s">
                        <p>OOPPS! THE PAGE YOU WERE LOOKING FOR, COULD NOT BE FOUND.</p>
                    </div>
                    <a href="index.php" class="primary-readmore wow fadeInUp delay-0-6s">Back To Home</a>
                </div>
            </div>
        </section>
        <!-- 404 Section End -->

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
