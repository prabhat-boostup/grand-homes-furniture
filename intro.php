<?php require_once("includes/header.php"); ?>
<body>
    <div class="page-wrapper <?= isIndia() ? 'light-mode' : '' ?>">

        <!-- Preloader -->
        <div class="preloader"><div class="custom-loader"></div></div>

        <!-- main header -->
        <?php
            include("includes/mainNavbar.php");
        ?>
        
        <!-- Hero Section Start -->
        <section class="hero-area mt-92 pb-64 black-120-bg">
            <div class="container pb-64">
                <div class="carousel slide" id="recipeCarousel" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#recipeCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#recipeCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#recipeCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#recipeCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#recipeCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    </div>
                    <div class=" carousel-inner" role="listbox">
                        <div class="row carousel-item active">
                            <div class="d-flex">
                                <div class="col-lg-2">
                                    <h1 class="rotate-hero">Design</h1>
                                </div>
                                <div class="col-lg-10 d-flex hero-text-img">
                                    <div class="hero-content">
                                        <div class="wow fadeInUp delay-0-1s">
                                            <h6>Spectacular home in the Northern Crest of Nuevo Leon, Mexico</h6>
                                            <a href="project-details.php" class="hero-btn wow fadeInUp delay-0-1s">Read More
                                                <span class="btn-icon">
                                                    <span class="circle"></span>
                                                    <span class="dot"></span>
                                                    <span class="line"></span>
                                                    <span class="fa fa-long-arrow-right"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="bg-img">
                                        <a href="project-details.php">
                                            <img class="hero-img wow zoomIn" src="assets/images/background/hero-bg.jpg" alt="hero image" title="hero image">
                                        </a>
                                    </div>
                                </div>
                            </div>                                                  
                        </div>
                        <div class="row carousel-item">
                            <div class="d-flex">
                                <div class="col-lg-2">
                                    <h1 class="rotate-hero">Decor</h1>
                                </div>
                                <div class="col-lg-10 d-flex hero-text-img">
                                    <div class="hero-content">
                                        <div class="wow fadeInUp delay-0-2s">
                                            <h6>Beautiful home in the Northern Crest of Nuevo Leon, Mexico</h6>
                                            <a href="project-details.php" class="hero-btn wow fadeInUp delay-0-1s">Read More
                                                <span class="btn-icon">
                                                    <span class="circle"></span>
                                                    <span class="dot"></span>
                                                    <span class="line"></span>
                                                    <span class="fa fa-long-arrow-right"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="bg-img">
                                        <a href="project-details.php">
                                            <img class="hero-img" src="assets/images/background/hero-bg-2.jpg" alt="hero image" title="hero image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row carousel-item">
                            <div class="d-flex">
                                <div class="col-lg-2">
                                    <h1 class="rotate-hero">Devise</h1>
                                </div>
                                <div class="col-lg-10 d-flex hero-text-img">
                                    <div class="hero-content">
                                        <div class="wow fadeInUp delay-0-2s">
                                            <h6>Design spectacular home in the Northern Crest of Nuevo Leon.</h6>
                                            <a href="project-details.php" class="hero-btn wow fadeInUp delay-0-1s">Read More
                                                <span class="btn-icon">
                                                    <span class="circle"></span>
                                                    <span class="dot"></span>
                                                    <span class="line"></span>
                                                    <span class="fa fa-long-arrow-right"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="bg-img">
                                        <a href="project-details.php">
                                            <img class="hero-img" src="assets/images/background/hero-bg-3.jpg" alt="hero image" title="hero image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row carousel-item">
                            <div class="d-flex">
                                <div class="col-lg-2">
                                    <h1 class="rotate-hero">Dream</h1>
                                </div>
                                <div class="col-lg-10 d-flex hero-text-img">
                                    <div class="hero-content">
                                        <div class="wow fadeInUp delay-0-1s">
                                            <h6>Gorgeous home in the Northern Crest of Nuevo Leon, Mexico</h6>
                                            <a href="project-details.php" class="hero-btn wow fadeInUp delay-0-1s">Read More
                                                <span class="btn-icon">
                                                    <span class="circle"></span>
                                                    <span class="dot"></span>
                                                    <span class="line"></span>
                                                    <span class="fa fa-long-arrow-right"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="bg-img">
                                        <a href="project-details.php">
                                            <img class="hero-img" src="assets/images/background/hero-bg-4.jpg" alt="hero image" title="hero image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row carousel-item">
                            <div class="d-flex">
                                <div class="col-lg-2">
                                    <h1 class="rotate-hero">Invent</h1>
                                </div>
                                <div class="col-lg-10 d-flex hero-text-img">
                                    <div class="hero-content">
                                        <div class="wow fadeInUp delay-0-1s">
                                            <h6>Spectacular home in the Northern Crest of Nuevo Leon, Mexico</h6>
                                            <a href="project-details.php" class="hero-btn wow fadeInUp delay-0-1s">Read More
                                                <span class="btn-icon">
                                                    <span class="circle"></span>
                                                    <span class="dot"></span>
                                                    <span class="line"></span>
                                                    <span class="fa fa-long-arrow-right"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="bg-img">
                                        <a href="project-details.php">
                                            <img class="hero-img" src="assets/images/background/hero-bg-5.jpg" alt="hero image" title="hero image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                  
            </div>
        </section>
        <!-- Hero Section End -->
        
        <!-- About Area start -->
        <section class="about-area py-128">
            <div class="container d-flex">                  
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <div class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" role="tab" aria-selected="true">
                            <div class="about-content">
                                <div class="text">
                                    <h4 class="h4-rotate">1 - WHO WE ARE</h4>
                                    <p class="wow fadeInUp delay-0-2s">We are a dedicated furniture craftsmanship company with over 10 years of experience in designing and creating high-quality wooden furniture. Our expertise spans across a wide range of products including sofas, bedroom sets, study tables, dining tables, computer tables, cupboards, and almirahs.</p>
                                    <p class="wow fadeInUp delay-0-3s">With a strong focus on durability, functionality, and aesthetic appeal, we combine traditional woodworking skills with modern design to deliver furniture that enhances every space. </p>
                                </div>
                                <div>
                                    <img class="big-image wow fadeInRight" src="assets/images/about/1.png" alt="hero image" title="hero image">
                                    <p class="p-rotate">WHO WE ARE</p>
                                    <h1 class="number">1</h1>
                                </div>
                                <img class="small-image" src="assets/images/about/1-small.png" alt="hero image" title="hero image">
                            </div>       
                        </div>
                    </li>
                    <li class="nav-item" role="presentation">
                        <div class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" role="tab" aria-selected="false">
                            <div class="about-content">
                                <div class="text">
                                    <h4 class="h4-rotate">2 - OUR MISSION</h4>
                                    <p class="fadeInUp delay-0-2s animated">Over the years, we have built trust by consistently delivering customized solutions tailored to our clients’ needs. Whether it’s for your home or workspace, we aim to provide furniture that reflects comfort, style, and reliability.</p>
                                    <p class="fadeInUp delay-0-2s animated">Each piece is crafted with attention to detail, ensuring long-lasting quality and customer satisfaction. Our mission is simple — to turn wood into timeless pieces that add value to your everyday living.</p>
                                </div>
                                <div>
                                    <img class="big-image zoomIn animated" src="assets/images/about/2.png" alt="hero image" title="hero image">
                                    <p class="p-rotate">OUR MISSION</p>
                                    <h1 class="number">2</h1>
                                </div> 
                                <img class="small-image" src="assets/images/about/2-small.png" alt="hero image" title="hero image">
                            </div>
                        </div>
                    </li>
                    <li class="nav-item" role="presentation">
                        <div class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" role="tab" aria-selected="false">
                            <div class="about-content">
                                <div class="text">
                                    <h4 class="h4-rotate">3 - OUR VISSION</h4>
                                    <p class=" fadeInUp delay-0-2s animated">Our vision is to become a trusted and recognized name in the furniture industry, known for delivering high-quality wooden products that combine durability, functionality, and timeless design.</p>
                                    <p class=" fadeInUp delay-0-2s animated">With a strong focus on customer satisfaction, we strive to build long-term relationships by providing reliable, customized solutions that meet the evolving needs of our customers.</p>
                                </div>
                                <div>
                                    <img class="big-image  zoomIn animated" src="assets/images/about/3.png" alt="hero image" title="hero image">
                                    <p class="p-rotate">OUR VISSION</p>
                                    <h1 class="number">3</h1>
                                </div>
                                <img class="small-image" src="assets/images/about/3-small.png" alt="hero image" title="hero image">
                            </div>
                        </div>
                    </li>
                </ul>                                                
            </div>
        </section>
        <!-- About Area end -->
        
        <!-- Service Section Start -->
        <section class="service-area black-120-bg py-128 justify-content-center">
            <div class="container-fluid">
                <div class="container d-flex section-heading mb-96">
                    <div class="section-title">
                        <h2 class="wow fadeInUp delay-0-2s">SERVICES</h2>
                    </div>
                    <div class="carousel-buttons">
                        <button class="prev" type="button" data-bs-target="#servicerecipeCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fa fa-long-arrow-left"></i></span>
                        </button>
                        <button class="" type="button" data-bs-target="#servicerecipeCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"><i class="fa fa-long-arrow-right"></i></span>
                        </button>
                    </div>
                </div>                
                <div class="carousel slide justify-content-center" id="servicerecipeCarousel" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">         
                            <div class="col-lg-6 service-act">
                                <a href="project-details.php"><img src="assets/images/services/5.jpg" alt="service image"></a>
                                <div class="carousel-caption">
                                    <div class="big-text mb-16">CUSTOM</div>
                                    <p class="mb-32">We design furniture as per your space and requirements. <br> with experienced to complete full design services.</p>
                                    <a href="project-details.php"><span class="right-arrow"><i class="fa fa-long-arrow-right"></i></span></a>
                                </div>                               
                            </div>            
                        </div>
                        <div class=" carousel-item">
                            <div class="col-lg-6 service-act">
                                <a href="project-details.php"><img src="assets/images/services/1.jpg" alt="service image"></a>
                                <div class="carousel-caption">
                                    <div class="big-text mb-16">PREMIUM</div>
                                    <p class="mb-32">High-quality solid wood with expert craftsmanship. <br> Timeless beauty and durability.</p>
                                    <a href="project-details.php"><span class="right-arrow"><i class="fa fa-long-arrow-right"></i></span></a>
                                </div>                                
                            </div>
                        </div>
                        <div class=" carousel-item">
                            <div class="col-lg-6 service-act">
                                <a href="project-details.php"><img src="assets/images/services/2.jpg" alt="service image"></a>
                                <div class="carousel-caption">
                                    <div class="big-text mb-16">INTERIOR </div>
                                    <p class="mb-32">Smart furniture layout for better space use.<br>Space planning and styling.</p>
                                    <a href="project-details.php"><span class="right-arrow"><i class="fa fa-long-arrow-right"></i></span></a>
                                </div>                               
                            </div>
                        </div>
                        <div class=" carousel-item">
                            <div class="col-lg-6 service-act">
                                <a href="project-details.php"><img src="assets/images/services/3.jpg" alt="service image"></a>
                                <div class="carousel-caption">
                                    <div class="big-text mb-16">EXTERIOR</div>
                                    <p class="mb-32">We have several strategic teaming arrangements <br> with experienced to complete full design services.</p>
                                    <a href="project-details.php"><span class="right-arrow"><i class="fa fa-long-arrow-right"></i></span></a>
                                </div>                                
                            </div>
                        </div>
                        <div class=" carousel-item">
                            <div class="col-lg-6 service-act">
                                <a href="project-details.php"><img src="assets/images/services/4.jpg" alt="service image"></a>
                                <div class="carousel-caption">
                                    <div class="big-text mb-16">DESIGN</div>
                                    <p class="mb-32">We have several strategic teaming arrangements <br> with experienced to complete full design services.</p>
                                    <a href="project-details.php"><span class="right-arrow"><i class="fa fa-long-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                                                               
            </div>
        </section>
        <!-- Services Section End -->

        <!-- Architecture Projects Area start -->
        <section class="architecture-area py-128">
            <div class="container">
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
                            <a href="project-details.php"><img src="assets/images/architecture-projects/1.jpg" alt="Apartment"></a>
                        </div>                    
                        <div class="row apartment-content wow fadeInRight delay-0-1s rp-0">
                            <div class="col-lg-6 pro-title">
                                <a href="project-details.php"><h3>HOUSE DESIGN</h3></a>
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
                            <a href="project-details.php"><img src="assets/images/architecture-projects/2.jpg" alt="Apartment"></a>
                        </div>
                    
                        <div class="row apartment-content wow fadeInRight delay-0-1s rp-0">
                            <div class="pro-title-haft">
                                <a href="project-details.php"><h3>VILLA</h3></a>
                                <span class="category">ARCHITECTURE</span>
                            </div>
                            <div class="pro-desc-haft">
                                <p>Lorem Ipsumis simply dummy text of the printing.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 item INTERIOR">
                        <div class="row apartment-image wow fadeInLeft delay-0-1s">
                            <a href="project-details.php"><img src="assets/images/architecture-projects/3.jpg" alt="Apartment"></a>
                        </div>
                    
                        <div class="row apartment-content wow fadeInRight delay-0-1s rp-0">
                            <div class="pro-title-haft">
                                <a href="project-details.php"><h3>HOUSE</h3></a>
                                <span class="category">INTERIOR</span>
                            </div>
                            <div class="pro-desc-haft">
                                <p>Lorem Ipsumis simply dummy text of the printing.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 item DESIGN">                        
                        <div class="row apartment-image wow fadeInLeft delay-0-1s">
                            <a href="project-details.php"><img src="assets/images/architecture-projects/4.jpg" alt="Apartment"></a>
                        </div>                    
                        <div class="row apartment-content wow fadeInRight delay-0-1s rp-0">
                            <div class="col-lg-6 pro-title">
                                <a href="project-details.php"><h3>MODERN HOUSE</h3></a>
                                <span class="category">DESIGN</span>
                            </div>
                            <div class="col-lg-6 pro-desc">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                            </div>
                        </div>                    
                    </div>
                    <div class="col-lg-12 text-center">
                        <button class="loadmore primary-readmore mt-0" type="submit">MORE PROJECTS</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Architecture Projects Area end -->
        
        <!-- Interior Projects Section Start -->
        <section class="interior-area black-110-bg py-128 justify-content-center">
            <div class="container-fluid">
                <div class="container rel z-1 justify-content-center text-center">
                    <div class="text-center mb-96 wow fadeInUp delay-0-2s">
                        <span class="sub-title mb-16">INTERIOR PROJECTS</span>
                        <h2>LATEST WORKS</h2> 
                    </div>         
                </div>
                <div class="container section-heading">
                    <div class="nav-fill-left">
                        <ul class="tab-style-one nav nav-pills nav-fill mb-96 wow fadeInUp delay-0-4s">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#inter-tap1">ALL</a>
                                <div class="carousel-buttons">
                                    <button class="prev" type="button" data-bs-target="#interiorrecipeCarousel1" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fa fa-long-arrow-left"></i></span>
                                    </button>
                                    <button class="" type="button" data-bs-target="#interiorrecipeCarousel1" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"><i class="fa fa-long-arrow-right"></i></span>
                                    </button>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#inter-tap2">HOUSE</a>
                                <div class="carousel-buttons">
                                    <button class="prev" type="button" data-bs-target="#interiorrecipeCarousel2" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fa fa-long-arrow-left"></i></span>
                                    </button>
                                    <button class="" type="button" data-bs-target="#interiorrecipeCarousel2" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"><i class="fa fa-long-arrow-right"></i></span>
                                    </button>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#inter-tap3">VILLA</a>
                                <div class="carousel-buttons">
                                    <button class="prev" type="button" data-bs-target="#interiorrecipeCarousel3" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fa fa-long-arrow-left"></i></span>
                                    </button>
                                    <button class="" type="button" data-bs-target="#interiorrecipeCarousel3" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"><i class="fa fa-long-arrow-right"></i></span>
                                    </button>
                                </div> 
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#inter-tap4">RESTAURANT</a>
                                <div class="carousel-buttons">
                                    <button class="prev" type="button" data-bs-target="#interiorrecipeCarousel4" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fa fa-long-arrow-left"></i></span>
                                    </button>
                                    <button class="" type="button" data-bs-target="#interiorrecipeCarousel4" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"><i class="fa fa-long-arrow-right"></i></span>
                                    </button>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#inter-tap5">HOTEL</a>
                                <div class="carousel-buttons">
                                    <button class="prev" type="button" data-bs-target="#interiorrecipeCarousel5" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fa fa-long-arrow-left"></i></span>
                                    </button>
                                    <button class="" type="button" data-bs-target="#interiorrecipeCarousel5" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"><i class="fa fa-long-arrow-right"></i></span>
                                    </button>
                                </div>
                            </li>
                        </ul>
                    </div>                   
                </div>                  
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="inter-tap1">                         
                        <div class="carousel slide interior-nav" id="interiorrecipeCarousel1" data-bs-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="col-lg-6 interior-act">
                                        <a href="project-details.php"><img class="zoomIn" src="assets/images/interior/1.jpg" alt="project image"></a>
                                        <div class="carousel-caption">
                                            <span class="sub-title mb-16">VILLA ROOM</span>
                                            <a href="project-details.php"><h5 class="mb-32">Villa Room Design Indochine Style </h5></a>
                                            <p class="mb-32">We have several strategic teaming arrangements  with experienced to complete full design services.</p>
                                            <a href="project-details.php" class="hero-btn wow fadeInUp delay-0-1s">Read More
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
                                <div class=" carousel-item">                
                                    <div class="col-lg-6 interior-act">
                                        <a href="project-details.php"><img src="assets/images/interior/2.jpg" alt="project image"></a>
                                        <div class="carousel-caption">
                                            <span class="sub-title mb-16">LIVING ROOM</span>
                                            <a href="project-details.php"><h5 class="mb-32">Living Room Design Classic Style </h5></a>
                                            <p class="mb-32">We have several strategic teaming arrangements  with experienced to complete full design services.</p>
                                            <a href="project-details.php" class="hero-btn">Read More
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
                                <div class=" carousel-item">
                                    <div class="col-lg-6 interior-act">
                                        <a href="project-details.php"><img src="assets/images/interior/3.jpg" alt="project image"></a>
                                        <div class="carousel-caption">
                                            <span class="sub-title mb-16">WORK ROOM</span>
                                            <a href="project-details.php"><h5 class="mb-32">Work Room Design Modern Style </h5></a>
                                            <p class="mb-32">We have several strategic teaming arrangements  with experienced to complete full design services.</p>
                                            <a href="project-details.php" class="hero-btn">Read More
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
                                <div class=" carousel-item">
                                    <div class="col-lg-6 interior-act">
                                        <a href="project-details.php"><img src="assets/images/interior/4.jpg" alt="project image"></a>
                                        <div class="carousel-caption">
                                            <span class="sub-title mb-16">OPEN SPACE</span>
                                            <a href="project-details.php"><h5 class="mb-32">Open Space Minimalism Style </h5></a>
                                            <p class="mb-32">We have several strategic teaming  arrangements  with experienced to complete full design services.</p>
                                            <a href="project-details.php" class="hero-btn">Read More
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
                                <div class=" carousel-item">
                                    <div class="col-lg-6 interior-act">
                                        <a href="project-details.php"><img src="assets/images/interior/5.jpg" alt="project image"></a>
                                        <div class="carousel-caption">
                                            <span class="sub-title mb-16">KITCHEN</span>
                                            <a href="project-details.php"><h5 class="mb-32">Kitchen Design Modern Style </h5></a>
                                            <p class="mb-32">We have several strategic teaming  arrangements  with experienced to complete full design services.</p>
                                            <a href="project-details.php" class="hero-btn">Read More
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
                        </div>  
                    </div>
                    <div class="tab-pane fade show" id="inter-tap2">                          
                        <div class="carousel slide interior-nav" id="interiorrecipeCarousel2" data-bs-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class=" carousel-item active">
                                    <div class="col-lg-6 interior-act">
                                        <a href="project-details.php"><img src="assets/images/interior/6.jpg" alt="project image"></a>
                                        <div class="carousel-caption">
                                            <span class="sub-title mb-16">BEDROOM</span>
                                            <a href="project-details.php"><h5 class="mb-32">Bedroom Design Classic Style </h5></a>
                                            <p class="mb-32">We have several strategic teaming  arrangements  with experienced to complete full design services.</p>
                                            <a href="project-details.php" class="hero-btn">Read More
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
                                <div class=" carousel-item">
                                    <div class="col-lg-6 interior-act">
                                        <a href="project-details.php"><img src="assets/images/interior/7.jpg" alt="project image"></a>
                                        <div class="carousel-caption">
                                            <span class="sub-title mb-16">LIVING ROOM</span>
                                            <a href="project-details.php"><h5 class="mb-32">Living Room Minimalism Style </h5></a>
                                            <p class="mb-32">We have several strategic teaming  arrangements  with experienced to complete full design services.</p>
                                            <a href="project-details.php" class="hero-btn">Read More
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
                                <div class=" carousel-item">
                                    <div class="col-lg-6 interior-act">
                                        <a href="project-details.php"><img src="assets/images/interior/1.jpg" alt="project image"></a>
                                        <div class="carousel-caption">
                                            <span class="sub-title mb-16">VILLA ROOM</span>
                                            <a href="project-details.php"><h5 class="mb-32">Villa Room Design Modern Style </h5></a>
                                            <p class="mb-32">We have several strategic teaming  arrangements  with experienced to complete full design services.</p>
                                            <a href="project-details.php" class="hero-btn">Read More
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
                        </div>  
                    </div>
                    <div class="tab-pane fade show" id="inter-tap3">                   
                        <div class="carousel slide interior-nav" id="interiorrecipeCarousel3" data-bs-ride="carousel">
                            <div class="carousel-inner" role="listbox">                             
                                <div class=" carousel-item active">
                                    <div class="col-lg-6 interior-act">
                                        <a href="project-details.php"><img src="assets/images/interior/8.jpg" alt="project image"></a>
                                        <div class="carousel-caption">
                                            <span class="sub-title mb-16">COZY ROOM</span>
                                            <a href="project-details.php"><h5 class="mb-32">Cozy Room Minimalism Style </h5></a>
                                            <p class="mb-32">We have several strategic teaming  arrangements  with experienced to complete full design services.</p>
                                            <a href="project-details.php" class="hero-btn">Read More
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
                                <div class=" carousel-item">
                                    <div class="col-lg-6 interior-act">
                                        <a href="project-details.php"><img src="assets/images/interior/1.jpg" alt="project image"></a>
                                        <div class="carousel-caption">
                                            <span class="sub-title mb-16">VILLA ROOM</span>
                                            <a href="project-details.php"><h5 class="mb-32">Villa Room Design Modern Style </h5></a>
                                            <p class="mb-32">We have several strategic teaming arrangements  with experienced to complete full design services.</p>
                                            <a href="project-details.php" class="hero-btn">Read More
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
                                <div class=" carousel-item">
                                    <div class="col-lg-6 interior-act">
                                        <a href="project-details.php"><img src="assets/images/interior/5.jpg" alt="project image"></a>
                                        <div class="carousel-caption">
                                            <span class="sub-title mb-16">KITCHEN</span>
                                            <a href="project-details.php"><h5 class="mb-32">Kitchen Design Minimalism Style </h5></a>
                                            <p class="mb-32">We have several strategic teaming arrangements  with experienced to complete full design services.</p>
                                            <a href="project-details.php" class="hero-btn">Read More
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
                        </div>  
                    </div>
                    <div class="tab-pane fade show" id="inter-tap4">            
                        <div class="carousel slide interior-nav" id="interiorrecipeCarousel4" data-bs-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class=" carousel-item active">
                                    <div class="col-lg-6 interior-act">
                                        <a href="project-details.php"><img src="assets/images/interior/9.jpg" alt="project image"></a>
                                        <div class="carousel-caption">
                                            <span class="sub-title mb-16">ROOM DECOR</span>
                                            <a href="project-details.php"><h5 class="mb-32">Room Decor Minimalism Style </h5></a>
                                            <p class="mb-32">We have several strategic teaming arrangements  with experienced to complete full design services.</p>
                                            <a href="project-details.php" class="hero-btn">Read More
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
                                <div class=" carousel-item">
                                    <div class="col-lg-6 interior-act">
                                        <a href="project-details.php"><img src="assets/images/interior/5.jpg" alt="project image"></a>
                                        <div class="carousel-caption">
                                            <span class="sub-title mb-16">FURNITURE DECOR</span>
                                            <a href="project-details.php"><h5 class="mb-32">Furniture Decor Minimalism Style </h5></a>
                                            <p class="mb-32">We have several strategic teaming  arrangements  with experienced to complete full design services.</p>
                                            <a href="project-details.php" class="hero-btn">Read More
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
                                <div class=" carousel-item">
                                    <div class="col-lg-6 interior-act">
                                        <a href="project-details.php"><img src="assets/images/interior/1.jpg" alt="project image"></a>
                                        <div class="carousel-caption">
                                            <span class="sub-title mb-16">VILLA ROOM</span>
                                            <a href="project-details.php"><h5 class="mb-32">Villa Room Design Modern Style </h5></a>
                                            <p class="mb-32">We have several strategic teaming arrangements  with experienced to complete full design services.</p>
                                            <a href="project-details.php" class="hero-btn">Read More
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
                        </div>  
                    </div>
                    <div class="tab-pane fade show" id="inter-tap5">                             
                        <div class="carousel slide interior-nav" id="interiorrecipeCarousel5" data-bs-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class=" carousel-item active">
                                    <div class="col-lg-6 interior-act">
                                        <a href="project-details.php"><img src="assets/images/interior/10.jpg" alt="project image"></a>
                                        <div class="carousel-caption">
                                            <span class="sub-title mb-16">FURNITURE DECOR</span>
                                            <a href="project-details.php"><h5 class="mb-32">Furniture Decor Minimalism Style </h5></a>
                                            <p class="mb-32">We have several strategic teaming arrangements  with experienced to complete full design services.</p>
                                            <a href="project-details.php" class="hero-btn">Read More
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
                                <div class=" carousel-item">
                                    <div class="col-lg-6 interior-act">
                                        <a href="project-details.php"><img src="assets/images/interior/1.jpg" alt="project image"></a>
                                        <div class="carousel-caption">
                                            <span class="sub-title mb-16">VILLA ROOM</span>
                                            <a href="project-details.php"><h5 class="mb-32">Villa Room Design Modern Style </h5></a>
                                            <p class="mb-32">We have several strategic teaming arrangements  with experienced to complete full design services.</p>
                                            <a href="project-details.php" class="hero-btn">Read More
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
                                <div class=" carousel-item">
                                    <div class="col-lg-6 interior-act">
                                        <a href="project-details.php"><img src="assets/images/interior/2.jpg" alt="project image"></a>
                                        <div class="carousel-caption">
                                            <span class="sub-title mb-16">LIVING ROOM</span>
                                            <a href="project-details.php"><h5 class="mb-32">Living Room Design Modern Style </h5></a>
                                            <p class="mb-32">We have several strategic teaming arrangements  with experienced to complete full design services.</p>
                                            <a href="project-details.php" class="hero-btn">Read More
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
                        </div>  
                    </div>
                </div>                                                             
            </div>
        </section>
        <!-- Interior Projects Section End -->

        <!-- Timeline Area start -->
        <section class="timeline-area py-128 black-90-bg">
            <div class="container">
                <div class="row section-heading mb-96">
                    <div class="section-title  col-sm-6 col-lg-6">
                        <h2 class="wow fadeInUp delay-0-2s">WORK PROCESS</h2>
                    </div>
                    <div class="button  col-sm-6 col-lg-6">
                        <a class="theme-btn" href="contact.php">Contact Us</a>  
                    </div>
                </div> 
                <div class="row align-items-center">                   
                    <div class=" col-md-2 col-lg-2">
                       <div class="timeline-content wow fadeInRight delay-0-2s">
                           <div class="timeline-item">
                                <img class="ishow" src="assets/images/work-process/ruler.png" alt="ruler image">
                                <img class="ifade" src="assets/images/work-process/ruler-3.png" alt="ruler image">
                                <div class="icon h2">01</div>
                                
                            </div>
                            <div class="timeline-item">
                                <img class="ishow" src="assets/images/work-process/ruler.png" alt="ruler image">
                                <img class="ifade" src="assets/images/work-process/ruler-3.png" alt="ruler image">
                                <div class="icon h2">02</div>
                                
                           </div>
                           <div class="timeline-item">
                                <img class="ishow" src="assets/images/work-process/ruler.png" alt="ruler image">
                                <img class="ifade" src="assets/images/work-process/ruler-3.png" alt="ruler image">
                                <div class="icon h2">03</div>
                                                      
                           </div>
                            <div class="timeline-item">
                                <img class="ishow" src="assets/images/work-process/ruler.png" alt="ruler image">
                                <img class="ifade" src="assets/images/work-process/ruler-3.png" alt="ruler image">
                                <div class="icon h2">04</div>
                               
                            </div>
                            <div class="timeline-item">
                                <img class="ishow" src="assets/images/work-process/ruler.png" alt="ruler image">
                                <img class="ifade" src="assets/images/work-process/ruler-3.png" alt="ruler image">
                                <div class="icon h2">05</div>
                               
                           </div>
                           <div class="timeline-item">
                            <img class="ishow" src="assets/images/work-process/ruler.png" alt="ruler image">
                            <img class="ifade" src="assets/images/work-process/ruler-3.png" alt="ruler image">
                                <div class="icon h2">06</div>
                               
                           </div>
                       </div>
                    </div>
                    <div class=" col-md-10 col-lg-10">
                        <div class="timeline-images wow fadeInLeft delay-0-2s">
                            <div>
                                <div class="content">
                                   <span class="h5 title">IDEAS</span>
                                   <p class="description">Problem statement, document, client review and approval. Lorem ipsum dolor sit  amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                               </div>
                                <img src="assets/images/work-process/1.jpg" alt="Timeline">
                            </div>
                            <div>
                                <div class="content">
                                   <span class="h5 title">CONCEPT</span>
                                   <p class="description">Find out  your design ambitions. Your timescales, budgets. Build a detailed brief. Identify your design preferences. Develop architectural layouts for your property. Design styles and influences. Create renders and early 3D models describing the volumetric aspects of the design.</p>
                               </div>
                                <img src="assets/images/work-process/2.jpg" alt="Timeline">
                            </div>
                            <div>
                                <div class="content">
                                   <span class="h5 title">DESIGN</span>
                                   <p class="description">Drawings, scaled floor plans showing furniture placement, mood boards,  color, material,...</p>
                                </div> 
                                <img src="assets/images/work-process/3.jpg" alt="Timeline">
                            </div>
                            <div>
                                <div class="content">
                                   <span class="h5 title">CALCULATE</span>
                                   <p class="description">Defining price, providing the price of items upon which the final product will be built. </p>
                               </div>
                                <img src="assets/images/work-process/4.jpg" alt="Timeline">
                            </div>
                            <div>
                                <div class="content">
                                   <span class="h5 title">EXECUTION</span>
                                   <p class="description">Prepares details  of works,  construction, installations and finishing.</p>
                               </div>
                                <img src="assets/images/work-process/5.jpg" alt="Timeline">
                            </div>
                            <div>
                                <div class="content">
                                   <span class="h5 title">EVALUATION</span>
                                   <p class="description">Surveys, interviews, walkthroughs, compare and comment on design works.</p>
                               </div>
                               <img src="assets/images/work-process/6.jpg" alt="Timeline">
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Reviews Area start -->
        <section class="reviews-area py-128 black-100-bg">
            <div class="container">
                <div class="testimonials-slider wow fadeInUp delay-0-4s">
                    <div class="testimonial-item">
                        <div class="section-title text-center mb-96 wow fadeInUp delay-0-2s">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="h2 author-text">“We loved this company! Because the finished project not only beautiful but also exactly what we hoped. I give the project 5 out of 5 stars and strongly recommend.”</div>
                        <img class="testi-img" src="assets/images/testimonials/author-1.jpg" alt="review author image">
                        <h5>Olivia Carpenter</h5>
                        <p class="designations">Business analyst at Apple</p>
                    </div>
                    <div class="testimonial-item">
                        <div class="section-title text-center mb-96 wow fadeInUp delay-0-2s">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="h2 author-text">“I loved this company! And give the project 5 out of 5 stars and strongly recommend. Because the finished project not only beautiful but also exactly what we hoped. ”</div>
                        <img class="testi-img" src="assets/images/testimonials/author-2.jpg" alt="review author image">
                        <h5>David John</h5>
                        <p class="designations">Business analyst at Apple</p>
                    </div>
                    <div class="testimonial-item">
                        <div class="section-title text-center mb-96 wow fadeInUp delay-0-2s">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="h2 author-text">“Love love love this company! I give the project 5 out of 5 stars and strongly recommend. Because the finished project not only beautiful but also exactly what we hoped. ”</div>
                        <img class="testi-img" src="assets/images/testimonials/author-3.jpg" alt="review author image">
                        <h5>Lara Smith</h5>
                        <p class="designations">Business analyst at Apple</p>
                    </div>
                    <div class="testimonial-item">
                        <div class="section-title text-center mb-96 wow fadeInUp delay-0-2s">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="h2 author-text">“Highly recommended, We give the project 5 out of 5 stars and strongly recommend. Because the finished project not only beautiful but also exactly what we hoped. ”</div>
                        <img class="testi-img" src="assets/images/testimonials/author-4.jpg" alt="review author image">
                        <h5>Charlotte Shreya</h5>
                        <p class="designations">Business analyst at Apple</p>
                    </div>
                    <div class="testimonial-item">
                        <div class="section-title text-center mb-96 wow fadeInUp delay-0-2s">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="h2 author-text">“This company is great! I give the project 5 out of 5 stars and strongly recommend. Because the finished project not only beautiful but also exactly what we hoped. ”</div>
                        <img class="testi-img" src="assets/images/testimonials/author-5.jpg" alt="review author image">
                        <h5>Isabella Swara</h5>
                        <p class="designations">Business analyst at Apple</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Reviews Area end -->

        <!-- CTA Area start -->
        <section class="cta-area pt-140 pb-110 bgs-cover" style="background-image: url(assets/images/background/cta.png);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="video-content-part text-center wow fadeInUp delay-0-2s">
                        <span class="sub-title">SUBSCRIBE</span>
                        <div class="cta-content wow fadeInUp delay-0-4s">
                            <h2>Want some design <span class="white">tips?</span></h2>
                            <h2> <span class="white">Join </span> our <span class="white">email list</span> for design <span class="white">tips, news</span> & <span class="white">more!</span></h2>
                        </div>
                         <form class="cta-form mt-96" action="#">
                            <input type="text" required placeholder="Your Email Address">
                            <button type="submit" class="btn-white-bg">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA Area end -->

        <!-- Blog Area start -->
        <section class="blog-area blog-home py-128 black-100-bg">
            <div class="container">
               <div class="row section-heading mb-96">
                    <div class="section-title col-sm-6 col-lg-6">
                        <h2 class="wow fadeInUp delay-0-2s">LATEST NEWS</h2>
                    </div>
                    <div class="button col-sm-6 col-lg-6">
                        <a class="theme-btn" href="blog.php">More News</a>  
                    </div>
                </div> 
                <div class="row">
                    <div class="col-lg-4 item text-center">
                        <div class="blog-item wow fadeInUp delay-0-2s black-30-bg ">
                            <div class="content ">                               
                                <h6><a href="blog-details.php">Hotel Design Ideas</a></h6>
                                <hr>
                                <span><i class="fal fa-calendar-alt"></i> 15 July 2024</span>
                                <div class="image">
                                    <img src="assets/images/blog/blog-1.jpg" alt="Blog">
                                </div>
                                <ul class="blog-meta mb-16">
                                    <li>
                                        <i class="fal fa-user"></i>
                                        <a href="#">Admin</a>
                                    </li>
                                    <li>
                                        <i class="fal fa-comment-dots"></i> 1 Comment
                                    </li>
                                </ul>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                <a href="blog-details.php" class="theme-btn">Read more</a>  
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 item text-center">
                        <div class="blog-item wow fadeInUp delay-0-2s black-120-bg ">
                            <div class="content ">                               
                                <h6><a href="blog-details.php">Best Design Tips</a></h6>
                                <hr>
                                <span><i class="fal fa-calendar-alt"></i> 15 July 2024</span>
                                <div class="image">
                                    <img src="assets/images/blog/blog-2.png" alt="Blog">
                                </div>
                                <ul class="blog-meta mb-16">
                                    <li>
                                        <i class="fal fa-user"></i>
                                        <a href="#">Admin</a>
                                    </li>
                                    <li>
                                        <i class="fal fa-comment-dots"></i> 1 Comment
                                    </li>
                                </ul>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                <a href="blog-details.php" class="theme-btn">Read more</a>  
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 item text-center">
                        <div class="blog-item wow fadeInUp delay-0-2s black-30-bg ">
                            <div class="content ">                               
                                <h6><a href="blog-details.php">Trending house</a></h6>
                                <hr>
                                <span><i class="fal fa-calendar-alt"></i> 15 July 2024</span>
                                <div class="image">
                                    <img src="assets/images/blog/blog-3.png" alt="Blog">
                                </div>
                                <ul class="blog-meta mb-16">
                                    <li>
                                        <i class="fal fa-user"></i>
                                        <a href="#">Admin</a>
                                    </li>
                                    <li>
                                        <i class="fal fa-comment-dots"></i> 1 Comment
                                    </li>
                                </ul>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                <a href="blog-details.php" class="theme-btn">Read more</a>  
                            </div>
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
