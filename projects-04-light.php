<?php require_once("includes/header.php"); ?>
<body>
    <div class="page-wrapper <?= isIndia() ? 'light-mode' : '' ?>">

        <!-- Preloader -->
        <div class="preloader"><div class="custom-loader"></div></div>

        <!-- main header -->
        <?php include("includes/mainNavbar.php") ?>
        
        <!-- Banner Section Start -->
        <section class="banner-area pt-324 pb-250" style="background-image: url(assets/images/projects-04/banner.png);">
            <div class="container text-center">
                <div class="row align-items-center justify-content-between">
                    <div class="banner-content wow fadeInUp delay-0-2s">
                        <h1>PROJECTS - 04</h1>
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
                            <a href="project-details.html"><img src="assets/images/projects-04/1.jpg" alt="Apartment"></a>
                        </div>
                        <div class="col-lg-5 wow fadeInRight delay-0-1s pro-content" >
                            <div class="pro-04-text black-120-bg">
                                <span class="sub-title">DINING ROOM</span>
                                <a href="project-details.html"><h3>MOUNTAIN HOUSE</h3></a>
                                <div class="pro-desc-04 mb-80">
                                    <p>Lorem Ipsumis simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                </div>
                                <div>
                                    <a href="project-details.html" class="stroke-btn">Read more</a>
                                </div>  
                            </div> 
                        </div>                        
                    </div>
                    <div class="row mb-128 align-items-center even-pro item BATHROOM KITCHEN">
                        <div class="col-lg-5 wow fadeInRight delay-0-1s pro-content" >
                            <div class="pro-04-text black-120-bg">
                                <span class="sub-title">DINING ROOM</span>
                                <a href="project-details.html"><h3>MOUNTAIN HOUSE</h3></a>
                                <div class="pro-desc-04 mb-80">
                                    <p>Lorem Ipsumis simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                </div>
                                <div>
                                    <a href="project-details.html" class="stroke-btn">Read more</a>
                                </div>  
                            </div> 
                        </div> 
                        <div class="col-lg-7 wow fadeInLeft delay-0-1s pro-img">
                            <a href="project-details.html"><img src="assets/images/projects-04/2.jpg" alt="Apartment"></a>
                        </div>                       
                    </div>
                    <div class="row mb-128 align-items-center odd-pro item DINING-ROOM">
                        <div class="col-lg-7 wow fadeInLeft delay-0-1s pro-img">
                            <a href="project-details.html"><img src="assets/images/projects-04/3.jpg" alt="Apartment"></a>
                        </div>
                        <div class="col-lg-5 wow fadeInRight delay-0-1s pro-content" >
                            <div class="pro-04-text black-120-bg">
                                <span class="sub-title">LIVING ROOM</span>
                                <a href="project-details.html"><h3>VILLA DESIGN</h3></a>
                                <div class="pro-desc-04 mb-80">
                                    <p>Lorem Ipsumis simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                </div>
                                <div>
                                    <a href="project-details.html" class="stroke-btn">Read more</a>
                                </div>  
                            </div> 
                        </div>                        
                    </div>
                    <div class="row mb-128 align-items-center even-pro item LIVING-ROOM">
                        <div class="col-lg-5 wow fadeInRight delay-0-1s pro-content" >
                            <div class="pro-04-text black-120-bg">
                                <span class="sub-title">LIVING ROOM</span>
                                <a href="project-details.html"><h3>OPEN DESIGN</h3></a>
                                <div class="pro-desc-04 mb-80">
                                    <p>Lorem Ipsumis simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                </div>
                                <div>
                                    <a href="project-details.html" class="stroke-btn">Read more</a>
                                </div>  
                            </div> 
                        </div>  
                        <div class="col-lg-7 wow fadeInLeft delay-0-1s pro-img">
                            <a href="project-details.html"><img src="assets/images/projects-04/4.jpg" alt="Apartment"></a>
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
