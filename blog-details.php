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
                        <h1>BLOG DETAILS</h1>
                        <div class="mt-32">
                            <ul class="breadcrumb wow fadeInUp delay-0-4s">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item">Blog Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Section End -->

        <!-- Blog Area start -->
        <section class="blog-content blog-details py-128">
            <div class="container">
                <div class="row detail-info wow fadeInLeft delay-0-1s">   
                    <div class="col-lg-8 left">
                        <div class="details wow fadeInUp delay-0-2s">
                            <div class="blog-thumb">
                                <img src="assets/images/blog/details.png" alt="blog">
                            </div> 
                            <div class="details-desc">
                                <h2 class="detail-title">HOTEL DESIGN</h2>
                                <ul class="blog-meta mb-30">
                                    <li>
                                        <i class="fal fa-user"></i> Admin
                                    </li>
                                    <li>
                                        <i class="fal fa-calendar-alt"></i> 15 July 2024
                                    </li>
                                    <li>
                                        <i class="fal fa-comment-dots"></i> 1 Comment
                                    </li>
                                </ul>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <blockquote>
                                    <h5>“You never really know what's coming. A small wave, or maybe a big one. All you can really do is hope that when it comes, you can surf over it, instead of drown in its monstrosity.”</h5>
                                    <cite class="name">― Alysha Speer</cite>
                                </blockquote>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div> 
                            <div class="row wow fadeInRight delay-0-2s">
                                <div class="blog-tags">
                                    <span>TAGS:</span>
                                    <ul class="tag-list">
                                        <li><a href="#">Interior</a></li>
                                        <li><a href="#">Rooms</a></li>
                                        <li><a href="#">Conditions</a></li>
                                    </ul>
                                </div>
                            </div>  
                        </div>
                        <div class="comments-area wow fadeInUp delay-0-2s">
                            <h2 class="detail-title">2 COMMENTS</h2>
                            <div class="comments">
                                <div class="comment-body wow fadeInUp delay-0-2s">
                                    <div class="author-img">
                                        <img src="assets/images/blog/comment-author1.png" alt="Author">
                                    </div>
                                    <div class="right">
                                        <h6>John Doe</h6>
                                        <span class="date"><i class="fal fa-calendar-alt"></i> 15 July 2024</span>
                                        <div class="content">
                                            <p>Dictumst quisque sagittis purus sit amet volutpat. Adipiscing bibendum est ultricies integer quis auctor elit sed vulputate. Augue interdum velit euismod in pellentesque. Sed faucibus turpis in eu mi bibendum neque egestas congue.</p>
                                        </div>
                                    </div>                                            
                                    <div class=""><a href="#" class="comment-reply-link">Reply</a></div>
                                </div>
                                
                                <div class="comment-body wow fadeInUp delay-0-2s">
                                    <div class="author-img">
                                        <img src="assets/images/blog/comment-author3.jpg" alt="Author">
                                    </div>
                                    <div class="right">
                                        <h6>April Curtis</h6>
                                        <span class="date"><i class="fal fa-calendar-alt"></i> 15 July 2024</span>
                                        <div class="content">
                                            <p>Tempor orci eu lobortis elementum nibh tellus molestie nunc non. Nam libero justo laoreet sit. Suspendisse in est ante in nibh mauris cursus.</p>
                                        </div>
                                    </div>                                            
                                    <div class=""><a href="#" class="comment-reply-link">Reply</a></div>
                                </div>  
                                <div class="comment-body child-comment wow fadeInUp delay-0-2s">
                                    <div class="author-img">
                                        <img src="assets/images/blog/comment-author2.jpg" alt="Author">
                                    </div>
                                    <div class="right">
                                        <h6>David</h6>
                                        <span class="date"><i class="fal fa-calendar-alt"></i> 15 July 2024</span>
                                        <div class="content">
                                            <p>Et ligula ullamcorper malesuada proin libero nunc consequat interdum varius. Facilisis mauris sit amet massa vitae tortor condimentum lacinia quis.</p>
                                        </div>
                                    </div>                                         
                                </div> 
                            </div>
                            <div class="section-title mt-80 mb-35 wow fadeInUp delay-0-2s">
                                <h2 class="detail-title">LEAVE A COMMENT:</h2>
                            </div>
                            <form id="comment-form" class="comment-form wow fadeInUp delay-0-2s" name="comment-form" action="#" method="post">
                                <div class="form-group">
                                    <textarea name="message" id="message" class="form-control" rows="8" placeholder="Message" required=""></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="email" id="blog-email" name="blog-email" class="form-control" value="" placeholder="Email" required="">
                                </div>
                                <div class="form-group mb-0">
                                    <input type="text" id="full-name" name="full-name" class="form-control" value="" placeholder="Name" required="">
                                    <div class="form-checkbox mt-40 mb-40">
                                        <input type="checkbox" name="flexRadioDefault" id="agreement">
                                      <label for="agreement">
                                        Save my name, email annd website in this browser for the next time I comment
                                      </label>
                                    </div>
                                </div>
                                <button type="submit" class="theme-btn w-100 style-three">Post A Comment</button>
                            </form>
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
