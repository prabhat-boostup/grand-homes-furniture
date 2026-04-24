<?php require_once("includes/header.php"); ?>
<body>
    <div class="page-wrapper <?= isIndia() ? 'light-mode' : '' ?>">

        <!-- Preloader -->
        <div class="preloader"><div class="custom-loader"></div></div>

        <!-- main header -->
        <?php include("includes/mainNavbar.php") ?>
        
        <!-- Hero Section Start -->
        <section class="hero-area-2 text-center justify-content-center">
            <div class="container-fluid">
                <div class="carousel slide" id="recipeCarousel" data-bs-ride="carousel">
                    <div class=" carousel-inner" role="listbox">
                        <div class="row carousel-item active">
                            <div class="slider-content" style="background-image: url(assets/images/background/slider-1.png);">
                                <div class="wow fadeInUp delay-0-1s">
                                    <h1 class="mb-32">INTERIOR<br>ARCHITECTURE</h1>
                                    <p class="white">Where creativity meets functionality</p>
                                    <form class="search-form mt-96" action="#">
                                        <input type="search" required placeholder="Type to search...">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>                                     
                        </div>
                        <div class="row carousel-item">
                            <div class="slider-content" style="background-image: url(assets/images/background/slider-2.png);">
                                <div class="wow fadeInUp delay-0-1s">
                                    <h1 class="mb-32">SPECTACULAR <br>DESIGN</h1>
                                    <p class="white">Where creativity meets functionality</p>
                                    <form class="search-form mt-96" action="#">
                                        <input type="search" required placeholder="Type to search">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </section>
        <!-- Hero Section End -->

        <!-- Architecture Projects Area start -->
        <section class="projects-04 py-128">
            <div class="container-fluid">
                <div class="row rel z-1 justify-content-center">
                    <div class="section-title text-center mb-96 wow fadeInUp delay-0-2s">
                        <span class="sub-title mb-16">ARCHITECTURE PROJECTS</span>
                        <h2>LATEST WORKS</h2> 
                    </div>
                </div>
                <ul class="project-filter tab-style-one justify-content-center nav nav-pills nav-fill mb-96 wow fadeInUp delay-0-4s">
                    <li data-filter="*" class="nav-item current">
                        <a class="nav-link">ALL</a>
                    </li>
                    <li class="nav-item" data-filter=".LIVING-ROOM">
                        <a class="nav-link">LIVING ROOM</a>
                    </li>
                    <li class="nav-item" data-filter=".KITCHEN">
                        <a class="nav-link">KITCHEN</a>
                    </li>
                    <li class="nav-item" data-filter=".BATHROOM">
                        <a class="nav-link">BATHROOM</a>
                    </li>
                    <li class="nav-item" data-filter=".DINING-ROOM">
                        <a class="nav-link">DINING ROOM</a>
                    </li>
                </ul>
                <div class="tab-content tab-pane project-active">
                    <div class="row mb-128 align-items-center odd-pro item LIVING-ROOM KITCHEN">
                        <div class="col-lg-7 wow fadeInLeft delay-0-1s pro-img">
                            <a href="project-details.php"><img src="assets/images/projects-04/1.jpg" alt="Apartment"></a>
                        </div>
                        <div class="col-lg-5 wow fadeInRight delay-0-1s pro-content" >
                            <div class="pro-04-text black-120-bg">
                                <span class="sub-title">DINING ROOM</span>
                                <a href="project-details.php"><h3>MOUNTAIN HOUSE</h3></a>
                                <div class="pro-desc-04 mb-80">
                                    <p>Lorem Ipsumis simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                </div>
                                <div>
                                    <a href="project-details.php" class="stroke-btn">Read more</a>
                                </div>  
                            </div> 
                        </div>                        
                    </div>
                    <div class="row mb-128 align-items-center even-pro item BATHROOM KITCHEN">
                        <div class="col-lg-5 wow fadeInRight delay-0-1s pro-content" >
                            <div class="pro-04-text black-120-bg">
                                <span class="sub-title">DINING ROOM</span>
                                <a href="project-details.php"><h3>MOUNTAIN HOUSE</h3></a>
                                <div class="pro-desc-04 mb-80">
                                    <p>Lorem Ipsumis simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                </div>
                                <div>
                                    <a href="project-details.php" class="stroke-btn">Read more</a>
                                </div>  
                            </div> 
                        </div> 
                        <div class="col-lg-7 wow fadeInLeft delay-0-1s pro-img">
                            <a href="project-details.php"><img src="assets/images/projects-04/2.jpg" alt="Apartment"></a>
                        </div>                       
                    </div>
                    <div class="row mb-128 align-items-center odd-pro item DINING-ROOM">
                        <div class="col-lg-7 wow fadeInLeft delay-0-1s pro-img">
                            <a href="project-details.php"><img src="assets/images/projects-04/3.jpg" alt="Apartment"></a>
                        </div>
                        <div class="col-lg-5 wow fadeInRight delay-0-1s pro-content" >
                            <div class="pro-04-text black-120-bg">
                                <span class="sub-title">LIVING ROOM</span>
                                <a href="project-details.php"><h3>VILLA DESIGN</h3></a>
                                <div class="pro-desc-04 mb-80">
                                    <p>Lorem Ipsumis simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                </div>
                                <div>
                                    <a href="project-details.php" class="stroke-btn">Read more</a>
                                </div>  
                            </div> 
                        </div>                        
                    </div>
                    <div class="row mb-128 align-items-center even-pro item LIVING-ROOM">
                        <div class="col-lg-5 wow fadeInRight delay-0-1s pro-content" >
                            <div class="pro-04-text black-120-bg">
                                <span class="sub-title">LIVING ROOM</span>
                                <a href="project-details.php"><h3>OPEN DESIGN</h3></a>
                                <div class="pro-desc-04 mb-80">
                                    <p>Lorem Ipsumis simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                </div>
                                <div>
                                    <a href="project-details.php" class="stroke-btn">Read more</a>
                                </div>  
                            </div> 
                        </div>  
                        <div class="col-lg-7 wow fadeInLeft delay-0-1s pro-img">
                            <a href="project-details.php"><img src="assets/images/projects-04/4.jpg" alt="Apartment"></a>
                        </div>                      
                    </div>
                    <div class="col-lg-12 text-center">
                        <button class="loadmore primary-readmore mt-0" type="submit">MORE PROJECTS</button>
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
