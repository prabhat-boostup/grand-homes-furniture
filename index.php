<?php require_once("includes/header.php"); ?>
<body>
    <div class="page-wrapper <?= isIndia() ? 'light-mode' : '' ?>">

        <!-- Preloader -->
        <div class="preloader"><div class="custom-loader"></div></div>

        <!-- main header -->
        <?php include("includes/mainNavbar.php") ?>
        <!-- Hero Section Start -->
        <section class="hero-area intro-area mt-92 py-128 black-80-bg">
            <div class="container">      
                <div class="row">
                    <div class="col-md-6 left">                        
                        <a class="screen" href="intro.php?location=America">
                            <img src="assets/images/intro/index.jpg" alt="Dark Version" title="Dark Version">
                        </a>
                        <div class="content">
                            <a href="intro.php?location=America" class="stroke-btn">Dark Version</a>
                        </div>
                    </div>   
                    <div class="col-md-6 right">                       
                        <a class="screen" href="intro.php?location=India">
                            <img src="assets/images/intro/index-light.jpg" alt="Light Version" title="Light Version">
                        </a>
                        <div class="content">
                            <a href="intro.php?location=India" class="stroke-btn">Light Version</a>
                        </div>
                    </div>                                               
                </div>                  
            </div>
        </section>
        <!-- Hero Section End -->

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
