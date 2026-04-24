<?php require_once("includes/header.php"); ?>
<body>
    <div class="page-wrapper <?= isIndia() ? 'light-mode' : '' ?>">

        <!-- Preloader -->
        <div class="preloader"><div class="custom-loader"></div></div>

        <!-- main header -->
        <?php include("includes/mainNavbar.php") ?>
        
        <!-- Banner Section Start -->
        <section class="banner-area pt-324 pb-250" style="background-image: url(assets/images/projects-02/banner.png);">
            <div class="container text-center">
                <div class="row align-items-center justify-content-between">
                    <div class="banner-content wow fadeInUp delay-0-2s">
                        <h1>PROJECTS - 02</h1>
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
        <section class="projects-02 py-128">
            <div class="container">
                <ul class="project-filter tab-style-one justify-content-center nav nav-pills nav-fill mb-96 wow fadeInUp delay-0-4s">
                    <li data-filter="*" class="nav-item current">
                        <a class="nav-link">ALL</a>
                    </li>
                    <li class="nav-item" data-filter=".LIVING-ROOM">
                        <a class="nav-link">LIVING ROOM</a>
                    </li>
                    <li class="nav-item" data-filter=".BEDROOM">
                        <a class="nav-link">BEDROOM</a>
                    </li>
                    <li class="nav-item" data-filter=".BATHROOM">
                        <a class="nav-link">BATHROOM</a>
                    </li>
                    <li class="nav-item" data-filter=".KITCHEN">
                        <a class="nav-link">KITCHEN</a>
                    </li>
                </ul>
                <div class="tab-content tab-pane project-active">
                    <div class="mb-128 justify-content-center align-items-center item BEDROOM">
                        <div class="pro-02-item">
                            <div class="pro-02-images pro-02-images-1">
                                <div class="image-container">
                                    <img class="image-before slider-image" src="assets/images/projects-02/1-before.png" alt="Apartment">
                                    <img class="image-after slider-image" src="assets/images/projects-02/1-after.jpg" alt="Apartment">
                                </div>
                                <input type="range" min="0" max="100" value="50" class="buttonslider buttonslider1" aria-label="percentage of before photo shown">
                                <div class="slider-line"></div>
                                <div class="slider-button" aria-hidden="true"></div>
                            </div>
                            <div class="row project-02-caption d-md-block">
                               <a href="project-details.php"><h5>BEDROOM</h5></a>
                            </div> 
                        </div>                  
                    </div>
                    <div class="row justify-content-center align-items-center">
                        <div class="mb-128 pro-02-item col-sm-4 col-lg-4 item BEDROOM">
                            <div class="pro-02-images pro-02-images-2">
                                <div class="image-container">
                                    <img class="image-before slider-image" src="assets/images/projects-02/2-before.png" alt="Apartment">
                                    <img class="image-after slider-image" src="assets/images/projects-02/2-after.jpg" alt="Apartment">
                                </div>
                                <input type="range" min="0" max="100" value="50" class="buttonslider buttonslider2" aria-label="percentage of before photo shown">
                                <div class="slider-line"></div>
                                <div class="slider-button" aria-hidden="true"></div>
                            </div>
                            <div class="row project-02-caption d-md-block">
                                <a href="project-details.php"><h5>BEDROOM</h5></a>
                            </div> 
                        </div> 
                        <div class="mb-128 pro-02-item col-sm-4 col-lg-4 item BEDROOM">
                            <div class="pro-02-images pro-02-images-3">
                                <div class="image-container">
                                    <img class="image-before slider-image" src="assets/images/projects-02/3-before.png" alt="Apartment">
                                    <img class="image-after slider-image" src="assets/images/projects-02/3-after.jpg" alt="Apartment">
                                </div>
                                <input type="range" min="0" max="100" value="50" class="buttonslider buttonslider3" aria-label="percentage of before photo shown">
                                <div class="slider-line"></div>
                                <div class="slider-button" aria-hidden="true"></div>
                            </div>
                            <div class="row project-02-caption d-md-block">
                                <a href="project-details.php"><h5>BEDROOM</h5></a>
                            </div> 
                        </div>
                        <div class="mb-128 pro-02-item col-sm-4 col-lg-4 item BATHROOM">
                            <div class="pro-02-images pro-02-images-4">
                                <div class="image-container">
                                    <img class="image-before slider-image" src="assets/images/projects-02/4-before.png" alt="Apartment">
                                    <img class="image-after slider-image" src="assets/images/projects-02/4-after.jpg" alt="Apartment">
                                </div>
                                <input type="range" min="0" max="100" value="50" class="buttonslider buttonslider4" aria-label="percentage of before photo shown">
                                <div class="slider-line"></div>
                                <div class="slider-button" aria-hidden="true"></div>
                            </div>
                            <div class="row project-02-caption d-md-block">
                                <a href="project-details.php"><h5>BATHROOM</h5></a>
                            </div> 
                        </div> 
                    </div>
                    <div class="mb-128 justify-content-center align-items-center item LIVING-ROOM">
                        <div class="pro-02-item">
                            <div class="pro-02-images pro-02-images-5">
                                <div class="image-container">
                                    <img class="image-before slider-image" src="assets/images/projects-02/5-before.png" alt="Apartment">
                                    <img class="image-after slider-image" src="assets/images/projects-02/5-after.jpg" alt="Apartment">
                                </div>
                                <input type="range" min="0" max="100" value="50" class="buttonslider buttonslider5" aria-label="percentage of before photo shown">
                                <div class="slider-line"></div>
                                <div class="slider-button" aria-hidden="true"></div>
                            </div>
                            <div class="row project-02-caption d-md-block">
                                <a href="project-details.php"><h5>LIVING ROOM</h5></a>
                            </div> 
                        </div>
                    </div>
                    <div class="mb-128 row justify-content-center align-items-center item KITCHEN">
                        <div class="pro-02-item col-sm-6 col-md-6 col-lg-6">
                            <div class="pro-02-images pro-02-images-6">
                                <div class="image-container">
                                    <img class="image-before slider-image" src="assets/images/projects-02/6-before.png" alt="Apartment">
                                    <img class="image-after slider-image" src="assets/images/projects-02/6-after.jpg" alt="Apartment">
                                </div>
                                <input type="range" min="0" max="100" value="50" class="buttonslider buttonslider6" aria-label="percentage of before photo shown">
                                <div class="slider-line"></div>
                                <div class="slider-button" aria-hidden="true"></div>
                            </div>
                            <div class="row project-02-caption d-md-block">
                                <a href="project-details.php"><h5>KITCHEN</h5></a>
                            </div> 
                        </div> 
                        <div class="pro-02-item col-sm-6 col-md-6 col-lg-6 item KITCHEN">
                            <div class="pro-02-images pro-02-images-7">
                                <div class="image-container">
                                    <img class="image-before slider-image" src="assets/images/projects-02/7-before.png" alt="Apartment">
                                    <img class="image-after slider-image" src="assets/images/projects-02/7-after.jpg" alt="Apartment">
                                </div>
                                <input type="range" min="0" max="100" value="50" class="buttonslider buttonslider7" aria-label="percentage of before photo shown">
                                <div class="slider-line"></div>
                                <div class="slider-button" aria-hidden="true"></div>
                            </div>
                            <div class="row project-02-caption d-md-block">
                                <a href="project-details.php"><h5>KITCHEN</h5></a>
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
