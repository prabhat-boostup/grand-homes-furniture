<?php require_once("includes/header.php"); ?>
<body>
    <div class="page-wrapper <?= isIndia() ? 'light-mode' : '' ?>">

        <!-- Preloader -->
        <div class="preloader"><div class="custom-loader"></div></div>

        <!-- main header -->
        <?php include("includes/mainNavbar.php") ?>
        
        <!-- Banner Section Start -->
        <section class="banner-area blog-banner" style="background-image: url(assets/images/blog/banner.png);">
            <div class="container text-center">
                <div class="row align-items-center justify-content-between">
                    <div class="banner-content wow fadeInUp delay-0-2s">
                        <h1>BLOG</h1>
                        <div class="mt-32">
                            <ul class="breadcrumb wow fadeInUp delay-0-4s">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item">Blog</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Section End -->
       
        <!-- Blog Area start -->
        <section class="blog-content py-128 align-items-center">
            <div class="container">
                <div class="row detail-info wow fadeInLeft delay-0-1s">   
                    <div class="col-lg-8 left">
                        <div class="blog-item wow fadeInUp delay-0-2s">
                            <div class="blog-thumb">
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
                                            <img src="assets/images/blog/blog-1.jpg" alt="Blog">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/blog/1.jpg" alt="Blog">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/blog/2.jpg" alt="Blog">
                                        </div>
                                    </div>                           
                                </div> 
                            </div> 
                            <div class="blog-desc black-120-bg">
                                <h4>Best bedroom design trends ideas 2024</h4>
                                <ul class="blog-meta mb-16">
                                    <li>
                                        <i class="fal fa-calendar-alt"></i> 15 July 2024
                                    </li>
                                    <li>
                                        <i class="fal fa-comment-dots"></i> 1 Comment
                                    </li>
                                </ul>
                                <p class="mb-32">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing.</p>
                                <a href="blog.php" class="primary-readmore">Read more</a>  
                            </div>   
                        </div>
                        <div class="blog-item wow fadeInUp delay-0-2s">
                            <div class="blog-thumb video">
                                <img src="assets/images/blog/2.jpg" alt="Blog">
                                <a href="https://www.youtube.com/watch?v=9Y7ma241N8k" class="mfp-iframe video-play"><i class="fab fa-youtube"></i></a>
                            </div>
                            <div class="blog-desc black-120-bg">
                                <h4>Modern bedroom ideas to inspire a makeover</h4>
                                <ul class="blog-meta mb-16">
                                    <li>
                                        <i class="fal fa-calendar-alt"></i> 15 July 2024
                                    </li>
                                    <li>
                                        <i class="fal fa-comment-dots"></i> 1 Comment
                                    </li>
                                </ul>
                                <p class="mb-32">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing.</p>
                                <a href="blog.php" class="primary-readmore">Read more</a>  
                            </div>   
                        </div>
                        <div class="blog-item wow fadeInUp delay-0-2s">
                            <div class="blog-thumb">
                                <img src="assets/images/blog/blog-3.png" alt="Blog">
                            </div> 
                            <div class="blog-desc black-120-bg">
                                <h4>Bedroom makeover ideas: 10 luxury looks</h4>
                                <ul class="blog-meta mb-16">
                                    <li>
                                        <i class="fal fa-calendar-alt"></i> 15 July 2024
                                    </li>
                                    <li>
                                        <i class="fal fa-comment-dots"></i> 1 Comment
                                    </li>
                                </ul>
                                <p class="mb-32">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing.</p>
                                <a href="blog.php" class="primary-readmore">Read more</a>  
                            </div>   
                        </div>
                        <div class="col-lg-12">
                            <ul class="pagination mt-96 flex-wrap justify-content-center wow fadeInUp delay-0-2s">
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
                    <div class="col-lg-4 sidebar">
                        <div class="widget-wrapper search-wg">
                            <form class="search-form">
                                <div class="form-input">
                                    <input type="text" placeholder="Search...">
                                    <span class="form-button">
                                        <button type="button">Search</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <div class="widget-wrapper black-120-bg">
                            <h5>Recent Post</h5>
                            <ul class="recent-posts">
                                <li>
                                    <a href="blog-details.php" class="recent-thumb"><img src="assets/images/blog/blog-1.jpg" alt=""></a>
                                    <div class="content">
                                        <i class="fal fa-calendar-alt"></i> 15 July 2024
                                        <a href="blog-details.php"><h6>Best bedroom design trends ideas 2024</h6></a>
                                    </div>
                                </li>
                                <li>
                                    <a href="blog-details.php" class="recent-thumb"><img src="assets/images/blog/2.jpg" alt=""></a>
                                    <div class="content">
                                        <i class="fal fa-calendar-alt"></i> 15 July 2024
                                        <a href="blog-details.php"><h6>Bedroom ideas to inspire a makeover</h6></a>
                                    </div>
                                </li>
                                <li>
                                    <a href="blog-details.php" class="recent-thumb"><img src="assets/images/blog/blog-3.png" alt=""></a>
                                    <div class="content">
                                        <i class="fal fa-calendar-alt"></i> 15 July 2024
                                        <a href="blog-details.php"><h6>Bedroom makeover ideas: 10 luxury looks</h6></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="widget-wrapper widget-categories black-120-bg">
                            <h5>Categories</h5>
                            <ul class="widget-categories">
                                <li><a href="#">Web</a> (1)</li>
                                <li><a href="#">Office</a> (5)</li>
                                <li><a href="#">News</a> (3)</li>
                                <li><a href="#">Awards</a> (4)</li>
                            </ul>
                        </div>
                        <div class="widget-wrapper widget-tags black-120-bg">
                            <h5> Tags</h5>
                            <ul class="tags">
                                <li>
                                  <a class="link"  href="#">Photography</a>
                                </li>

                                <li>
                                  <a class="link"  href="#">Trends</a>
                                </li>

                                <li>
                                  <a class="link"  href="#">Interactive</a>
                                </li>

                                <li>
                                  <a class="link"  href="#">Personal</a>
                                </li>

                                <li>
                                  <a class="link"  href="#">Responsive</a>
                                </li>

                                <li>
                                  <a class="link"  href="#">Creative</a>
                                </li>

                                <li>
                                  <a class="link"  href="#">Design</a>
                                </li>

                                <li>
                                  <a class="link"  href="#">website</a>
                                </li>

                                <li>
                                  <a class="link"  href="#">application</a>
                                </li>
                            </ul>
                        </div>
                    </div>            
                </div>       
            </div>
        </section>
        <!-- Blog Area end -->
        
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
