<?php require_once("includes/header.php"); ?>
<body>
    <div class="page-wrapper <?= isIndia() ? 'light-mode' : '' ?>">

        <!-- Preloader -->
        <div class="preloader"><div class="custom-loader"></div></div>

        <!-- main header -->
        <?php include("includes/mainNavbar.php") ?>
        
        <!-- Banner Section Start -->
        <section class="banner-area text-black pt-324 pb-250" style="background-image: url(assets/images/projects-01/banner-light.png);">
            <div class="container text-center">
                <div class="row align-items-center justify-content-between">
                    <div class="banner-content wow fadeInUp delay-0-2s">
                        <h1>PROJECTS - 01</h1>
                        <div class="mt-32">
                            <ul class="breadcrumb wow fadeInUp delay-0-4s">
                                <li class="breadcrumb-item"><a href="index-.php">Home</a></li>
                                <li class="breadcrumb-item">projects</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Section End -->

        <!-- Architecture Projects Area start -->
        <section class="projects-01 py-128">
            <div class="container">
                <ul class="project-filter tab-style-one justify-content-center nav nav-pills nav-fill mb-96 wow fadeInUp delay-0-4s">
                    <li data-filter="*" class="nav-item current">
                        <a class="nav-link">ALL</a>
                    </li>
                    <li class="nav-item" data-filter=".HOUSE">
                        <a class="nav-link">HOUSE</a>
                    </li>
                    <li class="nav-item" data-filter=".VILLA">
                        <a class="nav-link">VILLA</a>
                    </li>
                    <li class="nav-item" data-filter=".RESTAURANT">
                        <a class="nav-link">RESTAURANT</a>
                    </li>
                    <li class="nav-item" data-filter=".HOTEL">
                        <a class="nav-link">HOTEL</a>
                    </li>
                </ul>
                <div class="tab-content tab-pane project-active">
                    <div class="col-lg-12 item HOUSE HOTEL" >
                        <div class="row apartment-image wow fadeInLeft delay-0-1s">
                            <a href="project-details.php"><img src="assets/images/projects-01/1.jpg" alt="Apartment"></a>
                            <div class="carousel-caption d-md-block">
                                <span class="sub-title mb-16">HOTEL</span>
                                <a href="project-details.php"><h5 class="mb-32">Beautiful Modern Hotel Design 2024</h5></a>
                                <p class="mb-32">We have several strategic teaming arrangements  with experienced to complete full design services.</p>
                                <div>
                                    <a href="project-details.php" class="hero-btn ">Read More
                                        <span class="btn-icon">
                                            <span class="circle"></span>
                                            <span class="dot"></span>
                                            <span class="line"></span>
                                            <span class="fa fa-long-arrow-right"></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>                     
                    </div>
                    <div class="col-sm-6 col-lg-6 item VILLA">
                        <div class="row apartment-image wow fadeInLeft delay-0-1s">
                            <a href="project-details.php"><img src="assets/images/projects-01/2.jpg" alt="Apartment"></a>
                            <div class="carousel-caption d-md-block">
                                <span class="sub-title mb-16">CREATIVE</span>
                                <a href="project-details.php"><h5 class="mb-32">Creative House Modern Style </h5></a>
                                <p class="mb-32">We have several strategic teaming arrangements  with experienced to complete full design services.</p>
                                <div>
                                    <a href="project-details.php" class="hero-btn ">Read More
                                        <span class="btn-icon">
                                            <span class="circle"></span>
                                            <span class="dot"></span>
                                            <span class="line"></span>
                                            <span class="fa fa-long-arrow-right"></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6 item RESTAURANT">
                        <div class="row apartment-image wow fadeInLeft delay-0-1s">
                            <a href="project-details.php"><img src="assets/images/projects-01/3.jpg" alt="Apartment"></a>
                            <div class="carousel-caption d-md-block">
                                <span class="sub-title mb-16">HOUSE</span>
                                <a href="project-details.php"><h5 class="mb-32">House Design Indochine Style </h5></a>
                                <p class="mb-32">We have several strategic teaming arrangements  with experienced to complete full design services.</p>
                                <div>
                                    <a href="project-details.php" class="hero-btn ">Read More
                                        <span class="btn-icon">
                                            <span class="circle"></span>
                                            <span class="dot"></span>
                                            <span class="line"></span>
                                            <span class="fa fa-long-arrow-right"></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="col-lg-12 item HOTEL">
                        <div class="row apartment-image wow fadeInLeft delay-0-1s">
                            <a href="project-details.php"><img src="assets/images/projects-01/4.jpg" alt="Apartment"></a>
                            <div class="carousel-caption d-md-block">
                                <span class="sub-title mb-16">VILLA</span>
                                <a href="project-details.php"><h5 class="mb-32">Villa Design Modern Style </h5></a>
                                <p class="mb-32">We have several strategic teaming arrangements  with experienced to complete full design services.</p>
                                <div>
                                    <a href="project-details.php" class="hero-btn ">Read More
                                        <span class="btn-icon">
                                            <span class="circle"></span>
                                            <span class="dot"></span>
                                            <span class="line"></span>
                                            <span class="fa fa-long-arrow-right"></span>
                                        </span>
                                    </a>
                                </div>
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
