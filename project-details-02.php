<?php require_once("includes/header.php"); ?>
<body>
    <div class="page-wrapper <?= isIndia() ? 'light-mode' : '' ?>">

        <!-- Preloader -->
        <div class="preloader"><div class="custom-loader"></div></div>

        <!-- main header -->
        <?php include("includes/mainNavbar.php") ?>
        
        <!-- Banner Section Start -->
        <section class="banner-area pt-324 pb-250" style="background-image: url(assets/images/project-details/banner-2.jpg);">
            <div class="container text-center">
                <div class="row align-items-center justify-content-between">
                    <div class="banner-content wow fadeInUp delay-0-2s">
                        <h1>PROJECT DETAILS 02</h1>
                        <div class="mt-32">
                            <ul class="breadcrumb wow fadeInUp delay-0-4s">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item">Project Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Section End -->

        <!-- Architecture Projects Area start -->
        <section class="project-details-02 py-128">
            <div class="container">
                <div class="row detail-images align-items-center mb-64 wow fadeInLeft delay-0-1s">
                    <div class="col-xs-12 carousel slide" id="detailCarousel" data-bs-ride="carousel">
                        <div class="carousel-buttons">
                            <button class="prev" type="button" data-bs-target="#detailCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fa fa-long-arrow-left"></i></span>
                            </button>
                            <button class="" type="button" data-bs-target="#detailCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"><i class="fa fa-long-arrow-right"></i></span>
                            </button>
                        </div>                        
                        <div class="row carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img src="assets/images/project-details/detail-4.jpg" alt="project">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/project-details/detail-2.jpg" alt="project">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/project-details/gal-1.jpg" alt="project">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/project-details/detail-3.jpg" alt="project">
                            </div>
                        </div>   
                        <div class="col-xs-12 carousel-indicators">
                            <div class="row carousel-list-images gap-30">
                                <div class="col-md-3 col-lg-3 button-img">
                                    <button type="button" data-bs-target="#detailCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                                        <img src="assets/images/project-details/detail-4.jpg" alt="project">
                                    </button>
                                </div>
                                <div class="col-md-3 col-lg-3 button-img">
                                    <button type="button" data-bs-target="#detailCarousel" data-bs-slide-to="1" aria-label="Slide 2">
                                        <img src="assets/images/project-details/detail-2.jpg" alt="project">
                                    </button>
                                </div>
                                <div class="col-md-3 col-lg-3 button-img">
                                    <button type="button" data-bs-target="#detailCarousel" data-bs-slide-to="2" aria-label="Slide 3">
                                        <img src="assets/images/project-details/gal-1.jpg" alt="project">
                                    </button>
                                </div>
                                <div class="col-md-3 col-lg-3 button-img">
                                    <button type="button" data-bs-target="#detailCarousel" data-bs-slide-to="3" aria-label="Slide 4">
                                        <img src="assets/images/project-details/detail-3.jpg" alt="project">
                                    </button>
                                </div> 
                            </div>              
                        </div>                              
                    </div>                          
                </div>                         
                <div class="row detail-info wow fadeInLeft delay-0-1s">  
                    <div class="col-lg-3 left">
                        <div class="block-left">
                            <h5 class="mb-16">ABOUT THIS PROJECT</h5>
                            <p>PROJECT NAME: Mountain Villa In US</p>
                            <p>PROJECT DATE: 15 January 2024</p>
                            <p>PROJECT LOCATION: Manhattan NY</p>
                            <p>ARCHITECT: Aaron Williams</p>
                        </div>                        
                        <div class="footer-social block-left">  
                            <span>Share:</span> 
                            <a href="#"><i class="fab fa-dribbble"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                        <div class="pro-tags block-left">
                            <h5 class="mb-16">TAGS:</h5>
                            <ul class="tag-list">
                                <li><a href="#">Interior</a></li>
                                <li><a href="#">Rooms</a></li>
                                <li><a href="#">Conditions</a></li>
                            </ul>
                        </div>
                    </div>     
                    <div class="col-lg-9 right">
                        <h2 class="mb-16">MODERN INTERIOR DESIGN</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        <ul class="mb-16 detail-list-text">
                            <li><i class="fa fa-check"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</li>
                            <li><i class="fa fa-check"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</li>
                            <li><i class="fa fa-check"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</li>
                        </ul>
                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    </div>
                </div>       
            </div>
        </section>
        <!-- Architecture Projects Area end -->
        
        <!-- Related Projects Area start -->
        <section class="related-projects py-128 black-10-bg">
            <div class="container">
                <div class="content align-items-center">
                    <div class="row mb-64 wow fadeInLeft delay-0-1s">
                        <a class="prev-pro" href="project-details.php">
                            <i class="fa fa-long-arrow-left"></i> PREV
                        </a>
                        <a href="projects-01.php"><i class="fa fa-table"></i></a>
                        <a class="next-pro" href="project-details.php">
                            NEXT <i class="fa fa-long-arrow-right"></i>
                        </a>
                    </div>   
                    <div class="row wow fadeInLeft delay-0-1s">
                        <div class="col-lg-6 related-left">
                            <div class="row black-100-bg">
                                <div class="col-xs-12 col-sm-6  col-lg-6">
                                    <a href="project-details.php"><img src="assets/images/project-details/related-1.jpg" alt="Apartment"></a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-lg-6 related-text">
                                    <a href="project-details.php"><h5 class="mb-16">COZY HOME</h5></a>
                                    <ul class="blog-meta mb-20">
                                        <li>
                                            <i class="fal fa-calendar-alt"></i> 15 July 2024
                                        </li>
                                        <li>
                                            <i class="fal fa-comment-dots"></i> 1 Comment
                                        </li>
                                    </ul>
                                    <p class="mt-16">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                </div>
                            </div>                            
                        </div>
                        <div class="col-lg-6 related-right">
                            <div class="row white-bg ">
                                <div class="col-xs-12 col-sm-6 col-lg-6 related-text">
                                    <a href="project-details.php"><h5 class="mb-16">MODREN DESIGN</h5></a>
                                    <ul class="blog-meta mb-20">
                                        <li>
                                            <i class="fal fa-calendar-alt"></i> 15 July 2024
                                        </li>
                                        <li>
                                            <i class="fal fa-comment-dots"></i> 1 Comment
                                        </li>
                                    </ul>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-lg-6">
                                    <a href="project-details.php"><img src="assets/images/project-details/related-2.jpg" alt="Apartment"></a>
                                </div>
                            </div>  
                        </div>
                    </div>       
                </div>
            </div>
        </section>
        <!-- Related Projects Area end -->
        
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
