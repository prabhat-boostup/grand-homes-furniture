<?php require_once("includes/header.php"); ?>
<body>
    <div class="page-wrapper <?= isIndia() ? 'light-mode' : '' ?>">

        <!-- Preloader -->
        <div class="preloader"><div class="custom-loader"></div></div>

        <!-- main header -->
        <?php include("includes/mainNavbar.php") ?>
        
        <!-- Banner Section Start -->
        <section class="banner-area pt-324 pb-250" style="background-image: url(assets/images/projects-03/banner.png);">
            <div class="container text-center">
                <div class="row align-items-center justify-content-between">
                    <div class="banner-content wow fadeInUp delay-0-2s">
                        <h1>PROJECTS - 03</h1>
                        <div class="mt-32">
                            <ul class="breadcrumb wow fadeInUp delay-0-4s">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item">projects</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Section End -->
        <!-- Architecture Projects Area start -->
        <section class="architecture-area py-128">
            <div class="container">
                <ul class="project-filter tab-style-one justify-content-center nav nav-pills nav-fill mb-96 wow fadeInUp delay-0-4s">
                    <li data-filter="*" class="nav-item current">
                        <a class="nav-link">ALL</a>
                    </li>
                    <li class="nav-item" data-filter=".ARCHITECTURE">
                        <a class="nav-link">ARCHITECTURE</a>
                    </li>
                    <li class="nav-item" data-filter=".LANDSCAPE">
                        <a class="nav-link">LANDSCAPE</a>
                    </li>
                    <li class="nav-item" data-filter=".DESIGN">
                        <a class="nav-link">DESIGN</a>
                    </li>
                    <li class="nav-item" data-filter=".INTERIOR">
                        <a class="nav-link">INTERIOR</a>
                    </li>
                </ul>
                <div class="tab-content tab-pane project-active">
                    <div class="col-lg-12 item ARCHITECTURE LANDSCAPE">                        
                        <div class="row apartment-image wow fadeInLeft delay-0-1s">
                            <a href="project-details.html"><img src="assets/images/architecture-projects/1.jpg" alt="Apartment"></a>
                        </div>                    
                        <div class="row apartment-content wow fadeInRight delay-0-1s rp-0">
                            <div class="col-lg-6 pro-title">
                                <a href="project-details.html"><h3>HOUSE DESIGN</h3></a>
                                <span class="category">ARCHITECTURE / LANDSCAPE</span>
                            </div>
                            <div class="col-lg-6 pro-desc">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                            </div>
                        </div>                    
                    </div>
                    <div class="col-lg-6 item ARCHITECTURE">
                        <div class="row apartment-image wow fadeInLeft delay-0-1s">
                            <a href="project-details.html"><img src="assets/images/architecture-projects/2.jpg" alt="Apartment"></a>
                        </div>
                    
                        <div class="row apartment-content wow fadeInRight delay-0-1s rp-0">
                            <div class="pro-title-haft">
                                <a href="project-details.html"><h3>VILLA</h3></a>
                                <span class="category">ARCHITECTURE</span>
                            </div>
                            <div class="pro-desc-haft">
                                <p>Lorem Ipsumis simply dummy text of the printing.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 item INTERIOR">
                        <div class="row apartment-image wow fadeInLeft delay-0-1s">
                            <a href="project-details.html"><img src="assets/images/architecture-projects/3.jpg" alt="Apartment"></a>
                        </div>
                    
                        <div class="row apartment-content wow fadeInRight delay-0-1s rp-0">
                            <div class="pro-title-haft">
                                <a href="project-details.html"><h3>HOUSE</h3></a>
                                <span class="category">INTERIOR</span>
                            </div>
                            <div class="pro-desc-haft">
                                <p>Lorem Ipsumis simply dummy text of the printing.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 item DESIGN">                        
                        <div class="row apartment-image wow fadeInLeft delay-0-1s">
                            <a href="project-details.html"><img src="assets/images/architecture-projects/4.jpg" alt="Apartment"></a>
                        </div>                    
                        <div class="row apartment-content wow fadeInRight delay-0-1s rp-0">
                            <div class="col-lg-6 pro-title">
                                <a href="project-details.html"><h3>MODERN HOUSE</h3></a>
                                <span class="category">DESIGN</span>
                            </div>
                            <div class="col-lg-6 pro-desc">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                            </div>
                        </div>                    
                    </div>
                    <div class="col-lg-12">
                        <ul class="pagination mt-40 flex-wrap justify-content-center wow fadeInUp delay-0-2s">
                            <li class="page-item"> <span class="page-link"> Prev </span></li>
                            <li class="page-item active">
                                <span class="page-link">
                                    1
                                    <span class="sr-only">(current)</span>
                                </span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"> <span class="page-link"> Next </span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Architecture Projects Area end -->
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
