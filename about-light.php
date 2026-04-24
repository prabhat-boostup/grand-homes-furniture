<?php require_once("includes/header.php"); ?>
<body>
    <div class="page-wrapper <?= isIndia() ? 'light-mode' : '' ?>">

        <!-- Preloader -->
        <div class="preloader"><div class="custom-loader"></div></div>

        <!-- main header -->
        <?php include("includes/mainNavbar.php") ?>
        
        <!-- Banner Section Start -->
        <section class="banner-area text-black pt-324 pb-250" style="background-image: url(assets/images/about/page-banner-light.png);">
            <div class="container text-center">
                <div class="row align-items-center justify-content-between">
                    <div class="banner-content wow fadeInUp delay-0-2s">
                        <h1>ABOUT US</h1>
                        <div class="mt-32">
                            <ul class="breadcrumb wow fadeInUp delay-0-4s">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item">About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>                
            </div>
        </section>
        <!-- Banner Section End -->
        <!-- About Style 2 Start -->
        <section class="about-style-2 py-128">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 left">
                        <div class="section-title wow fadeInUp delay-0-3s">
                            <h2>Where imagination meets reality </h2>
                            <div class="wow fadeInUp delay-0-4s mb-45">
                                <ul class="tab-style-one nav nav-pills nav-fill mb-32 wow fadeInUp delay-0-4s">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#apart-tap1">Who We Are</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#apart-tap2">Mission</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#apart-tap3">Vision</a>
                                    </li> 
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="apart-tap1">
                                        <p>Indochine has worked on projects nationwide and worldwide, designs that make magic happen, without the wand. focuses more on structural design, whereas interior design is the practice of creating interior atmosphere.</p>
                                        <p>Indochine has worked on projects nationwide and worldwide, designs that make magic happen, without the wand. focuses more on structural design, whereas interior design is the practice of creating interior atmosphere.</p>
                                    </div>
                                    <div class="tab-pane fade" id="apart-tap2">
                                        <p>Indochine has worked on projects nationwide and worldwide, designs that make magic happen, without the wand. focuses more on structural design, whereas interior design is the practice of creating interior atmosphere.</p>
                                    </div>
                                    <div class="tab-pane fade" id="apart-tap3">
                                        <p>Indochine has worked on projects nationwide and worldwide, designs that make magic happen, without the wand.</p>
                                        <p>Indochine has worked on projects nationwide and worldwide, designs that make magic happen, without the wand. focuses more on structural design, whereas interior design is the practice of creating interior atmosphere.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="button">
                                <a class="btn-white-bg" href="contact.php">Contact Us</a>  
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="imgs">
                            <img src="assets/images/about/about-right.jpg" alt="about image">
                            <img class="hovershow" src="assets/images/about/hover.png" alt="about image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Style 2 End -->
        <!-- Service Section Start -->
        <section class="service-area-2 black-90-bg py-128 justify-content-center">
            <div class="container">
                <div class="row mb-96">
                    <div class="col-xs-4 col-lg-4 service-item">
                        <div class="icon"><i class="fa fa-house"></i></div>
                        <a href="project-details.php"><h5>ARCHITECTURE</h5></a>
                        <p>Our design team can make changes to any plan, big or small, to make it perfect for your needs.</p>
                        <a href="project-details.php"><span class="right-arrow"><i class="fa fa-long-arrow-right"></i></span></a>
                    </div>
                    <div class="col-xs-4 col-lg-4 service-item">
                        <div class="icon"><i class="fa fa-chair"></i></div>
                        <a href="project-details.php"><h5>INTERIOR</h5></a>
                        <p>Our design team can make changes to any plan, big or small, to make it perfect for your needs.</p>
                        <a href="project-details.php"><span class="right-arrow"><i class="fa fa-long-arrow-right"></i></span></a>
                    </div>
                    <div class="col-xs-4 col-lg-4 service-item">
                        <div class="icon"><i class="fa fa-snowflake"></i></div>
                        <a href="project-details.php"><h5>DECORATION</h5></a>
                        <p>Our design team can make changes to any plan, big or small, to make it perfect for your needs.</p>
                        <a href="project-details.php"><span class="right-arrow"><i class="fa fa-long-arrow-right"></i></span></a>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-xs-4 col-lg-4 service-item">
                        <div class="icon"><i class="fa fa-hammer"></i></div>
                        <a href="project-details.php"><h5>Building</h5></a>
                        <p>Our design team can make changes to any plan, big or small, to make it perfect for your needs.</p>
                        <a href="project-details.php"><span class="right-arrow"><i class="fa fa-long-arrow-right"></i></span></a>
                    </div>
                    <div class="col-xs-4 col-lg-4 service-item">
                        <div class="icon"><i class="fa fa-dharmachakra"></i></div>
                        <a href="project-details.php"><h5>INTERIOR</h5></a>
                        <p>Our design team can make changes to any plan, big or small, to make it perfect for your needs.</p>
                        <a href="project-details.php"><span class="right-arrow"><i class="fa fa-long-arrow-right"></i></span></a>
                    </div>
                    <div class="col-xs-4 col-lg-4 service-item">
                        <div class="icon"><i class="fa fa-dollar-sign"></i></div>
                        <a href="project-details.php"><h5>Calculator</h5></a>
                        <p>Our design team can make changes to any plan, big or small, to make it perfect for your needs.</p>
                        <a href="project-details.php"><span class="right-arrow"><i class="fa fa-long-arrow-right"></i></span></a>
                    </div>
                </div>                                                         
            </div>
        </section>
        <!-- Services Section End -->

        <!-- Achievements Area start -->
        <section class="achievement-area text-white" style="background-image: url(assets/images/background/counter.png);">
            <div class="container">
                <div class="row">
                    <div class="counter-wrap">
                        <div class="row">
                            <div class="mobile-mb col-xs-3 col-lg-3">
                                <div class="counter-text-wrap wow fadeInUp delay-0-2s">
                                    <div class="d-flex">
                                        <h2 class="count-text mb-32" data-speed="3000" data-stop="1200">0</h2><span class="h2">K</span>
                                    </div>
                                    <h5 class="counter-title">Happy Clients</h5>
                                </div>
                            </div>
                            <div class="mobile-mb col-xs-3 col-lg-3">
                                <div class="counter-text-wrap wow fadeInUp delay-0-4s">
                                    <div class="d-flex">
                                        <h2 class="count-text mb-32" data-speed="3000" data-stop="15">0</h2>
                                    </div>
                                    <h5 class="counter-title">Years Experience</h5>
                                </div>
                            </div>
                            <div class="mobile-mb col-xs-3 col-lg-3">
                                <div class="counter-text-wrap wow fadeInUp delay-0-2s">
                                    <div class="d-flex">
                                        <h2 class="count-text mb-32" data-speed="3000" data-stop="46">0</h2><span class="h2">+</span>
                                    </div>
                                    <h5 class="counter-title">Best Partners</h5>
                                </div>
                            </div>
                            <div class="mobile-mb col-xs-3 col-lg-3">
                                <div class="counter-text-wrap wow fadeInUp delay-0-4s">
                                    <div class="d-flex">
                                        <h2 class="count-text mb-32" data-speed="3000" data-stop="1600">0</h2>
                                    </div>
                                    <h5 class="counter-title">Projects Done</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Achievements Area end -->

        <!-- Team Area start -->
        <section class="team-area py-128">
            <div class="container">
                <div class="d-flex section-heading mb-96">
                    <div class="section-title">
                        <h2 class="wow fadeInUp delay-0-2s">OUR TEAM</h2>
                    </div>
                    <div class="carousel-buttons">
                        <button class="prev" type="button" data-bs-target="#teamCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fa fa-long-arrow-left"></i></span>
                        </button>
                        <button class="" type="button" data-bs-target="#teamCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"><i class="fa fa-long-arrow-right"></i></span>
                        </button>
                    </div>
                </div>   
                <div class="row justify-content-center">
                    <div id="teamCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="row carousel-item active">
                                <div class="col-md-4 team-item-wrap">
                                    <div class="team-item text-center">
                                        <div class="team-img">
                                            <img src="assets/images/team/1.png" alt="team image">
                                        </div>
                                        <div class="text">
                                            <div>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h5>Chris Evan</h5>
                                            <p>Architecture Design</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row carousel-item">
                                <div class="col-md-4 team-item-wrap">
                                    <div class="team-item text-center">
                                        <div class="team-img">
                                            <img src="assets/images/team/2.png" alt="team image">
                                        </div>
                                        <div class="text">
                                            <div>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h5>Chris Jobling</h5>
                                            <p>Interior Design</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row carousel-item">
                                <div class="col-md-4 team-item-wrap">
                                    <div class="team-item text-center">
                                        <div class="team-img">
                                            <img src="assets/images/team/3.png" alt="team image">
                                        </div>
                                        <div class="text">
                                            <div>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h5>Lara Smith</h5>
                                            <p>Interior Design</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row carousel-item">
                                <div class="col-md-4 team-item-wrap">
                                    <div class="team-item text-center">
                                        <div class="team-img">
                                            <img src="assets/images/team/4.png" alt="team image">
                                        </div>
                                        <div class="text">
                                            <div>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h5>Chris Norlan</h5>
                                            <p>Interior Design</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team Area end -->
        <!-- Timeline Area start -->
        <section class="faq-area py-128 black-110-bg">
            <div class="container">
                <div class="row align-items-center">                   
                    <div class="col-sm-1 col-lg-1">
                        <p class="faq-p-rotate">FREQUENTLY ASKED QUESTIONS</p>
                    </div>
                    <div class="mobile-ml-96 col-sm-3 col-lg-3">
                       <div class="timeline-content wow fadeInRight delay-0-2s">
                           <div class="timeline-item">
                                <img class="ishow" src="assets/images/work-process/ruler-black.png" alt="ruler image">
                                <img class="ifade" src="assets/images/work-process/ruler-3.png" alt="ruler image">
                                <div class="icon h2">01</div>
                                
                            </div>
                            <div class="timeline-item">
                                <img class="ishow" src="assets/images/work-process/ruler-black.png" alt="ruler image">
                                <img class="ifade" src="assets/images/work-process/ruler-3.png" alt="ruler image">
                                <div class="icon h2">02</div>
                                
                           </div>
                           <div class="timeline-item">
                                <img class="ishow" src="assets/images/work-process/ruler-black.png" alt="ruler image">
                                <img class="ifade" src="assets/images/work-process/ruler-3.png" alt="ruler image">
                                <div class="icon h2">03</div>
                                                      
                           </div>
                            <div class="timeline-item">
                                <img class="ishow" src="assets/images/work-process/ruler-black.png" alt="ruler image">
                                <img class="ifade" src="assets/images/work-process/ruler-3.png" alt="ruler image">
                                <div class="icon h2">04</div>
                               
                            </div>
                            <div class="timeline-item">
                                <img class="ishow" src="assets/images/work-process/ruler-black.png" alt="ruler image">
                                <img class="ifade" src="assets/images/work-process/ruler-3.png" alt="ruler image">
                                <div class="icon h2">05</div>
                               
                           </div>
                       </div>
                    </div>
                    <div class="col-sm-8 col-lg-8">
                        <div class="timeline-images wow fadeInLeft delay-0-2s">
                            <div class="content" style="background-image: url(assets/images/background/faq.png);">
                                <div class="faq-text">
                                   <span class="h5 title mb-32">When is the right time to design your lovely home?</span>
                                   <h6 class="mb-32">Lorem Ipsum is simply dummy text of the printing industry. It was recently with desktop publishing software</h6>
                                   <p>Lorem Ipsum is simply dummy text of the printing industry. It was more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                   <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                               </div>
                            </div>
                            <div class="content" style="background-image: url(assets/images/background/faq.png);">
                                <div class="faq-text">
                                   <span class="h5 title mb-32">What are the considerations of interior design?</span>
                                   <h6 class="mb-32">Lorem Ipsum is simply dummy text of the printing industry. It was recently with desktop publishing software</h6>
                                   <p>Lorem Ipsum is simply dummy text of the printing industry. It was more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                   <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                               </div>
                            </div>
                            <div class="content" style="background-image: url(assets/images/background/faq.png);">
                                <div class="faq-text">
                                   <span class="h5 title mb-32">How do I prepare for an interior designer meeting?</span>
                                   <h6 class="mb-32">Lorem Ipsum is simply dummy text of the printing industry. It was recently with desktop publishing software</h6>
                                   <p>Lorem Ipsum is simply dummy text of the printing industry. It was more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                   <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                               </div>
                            </div>
                            <div class="content" style="background-image: url(assets/images/background/faq.png);">
                                <div class="faq-text">
                                   <span class="h5 title mb-32">How do you work cross-functionally with developers, copywriters, project managers, etc.?</span>
                                   <h6 class="mb-32">Lorem Ipsum is simply dummy text of the printing industry. It was recently with desktop publishing software</h6>
                                   <p>Lorem Ipsum is simply dummy text of the printing industry. It was more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                   <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                               </div>
                            </div>
                            <div class="content" style="background-image: url(assets/images/background/faq.png);">
                                <div class="faq-text">
                                   <span class="h5 title mb-32">Tell me about the projects you're most proud of and why?</span>
                                   <h6 class="mb-32">Lorem Ipsum is simply dummy text of the printing industry. It was recently with desktop publishing software</h6>
                                   <p>Lorem Ipsum is simply dummy text of the printing industry. It was more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                   <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
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
