@extends('layouts.app')
@section('slot')

<!-- start of hero -->
<section class="hero hero-slider-wrapper agency-hero-slider">
    <div class="hero-slider">
        <div class="slide">
            <img src="../assets/images/jgtm/congregation.jpg" alt class="slider-bg">
            <div class="container">
                <div class="row">
                    <div class="col col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 slide-caption">
                        <h2>City of Liberty</h2>
                        <p>enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure
                            dolor in reprehenderit in voluptate velit</p>
                        <div class="btns">
                            <a href="#" class="agency-theme-btn">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide">
            <img src="../assets/images/jgtm/bishop-2.jpg " height="100" width="150" alt class="slider-bg">
            <div class="container">
                <div class="row">
                    <div class="col col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 slide-caption">
                        <h2>City of Liberety</h2>

                        <div class="btns">
                            <a href="#" class="agency-theme-btn">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of hero slider -->


<!-- start agency-services-section -->
<section class="agency-services-section section-padding" id="services">
    <div class="container">
        <div class="row">
            <div class="col col-lg-5 col-md-5">
                <div class="service-text">
                    <div class="agency-section-title">
                        <span>Getting to Know About the Commission</span>
                        <h2>Just God Triumphant Ministry: City of Liberty</h2>
                    </div>
                    <p>Started in the year 2017, the church has recorded tremenduos growth since inception.

                    </p>
                    <a href="/about" class="agency-theme-btn-s2">Read More</a>
                </div>
            </div>
            <div class="col col-lg-6 col-lg-offset-1 col-md-7">
                <div class="container">
                    <img src="../assets/images/jgtm/miracle-babies.jpg" height="400" width="500"
                        style="border-radius: 50px;" alt="">
                </div>



            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end agency-services-section -->


<!-- start agency-about-section -->
<section class="agency-about-section" id="about">
    <div class="container">
    <div class="row">
    <!-- First Column with Image -->
    <div class="col col-lg-6 col-md-5">
        <div class="container">
            <img src="../assets/images/jgtm/wedding-2.jpg" height="300" width="500" style="border-radius: 50px;" alt="">
        </div>
    </div>

    <!-- Second Column with Text Content -->
    <div class="col col-lg-6 col-md-4 col-sm-2">
        <div class="service-text">
            <div class="card">
                <div class="agency-section-title">
                    <span>Enjoy the Riches of the Glory in Christ</span>
                    <h2>You Too can be the First Pataker</h2>
                </div>
                <p>God's Word has assured us in 1 Peter 2:3,
                    According as His divine power hath given unto us all things
                    that pertain to life and Godliness. All things are yours in 
                    Christ. Believe it and walk in this consciousness.
                </p>
            </div>
        </div>
    </div>
</div>

    </div> <!-- end about-grids -->
</section>
<!-- end agency-about-section -->


<!-- start agency-portfolio-section -->
<section class="agency-portfolio-section" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <div class="agency-section-title-s2">
                    <span>Our Works Speak For Ourselves </span>
                    <h2>Our Portfolio</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>
            </div>
        </div>
    </div>

    <div class="sortable-gallery">
        <div class="gallery-filters portfolio-list">
            <ul>
                <li>
                    <a data-filter="*" href="#" class="current">All</a>
                </li>
                <li>
                    <a data-filter=".design" href="#">Design</a>
                </li>
                <li>
                    <a data-filter=".web" href="#">Web</a>
                </li>
                <li>
                    <a data-filter=".branding" href="#">Branding</a>
                </li>
                <li>
                    <a data-filter=".others" href="#">Others</a>
                </li>
            </ul>
        </div>

        <div class="gallery-container portfolio-grids masonry-gallery">
            <div class="grid-item design branding">
                <div class="inner">
                    <div class="img-holder">
                        <img src="../assets/images/agency/portfolio/img-1.jpg" alt>
                    </div>
                    <div class="details">
                        <div class="details-inner">
                            <ul>
                                <li>
                                    <a href="../assets/images/agency/portfolio/img-1.jpg" class="fancybox">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </li>
                            </ul>
                            <h3>Pied Piper</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-item design web">
                <div class="inner">
                    <div class="img-holder">
                        <img src="../assets/images/agency/portfolio/img-2.jpg" alt>
                    </div>
                    <div class="details">
                        <div class="details-inner">
                            <ul>
                                <li>
                                    <a href="../assets/images/agency/portfolio/img-2.jpg" class="fancybox">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </li>
                            </ul>
                            <h3>Pied Piper</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-item others">
                <div class="inner">
                    <div class="img-holder">
                        <img src="../assets/images/agency/portfolio/img-3.jpg" alt>
                    </div>
                    <div class="details">
                        <div class="details-inner">
                            <ul>
                                <li>
                                    <a href="../assets/images/agency/portfolio/img-3.jpg" class="fancybox">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </li>
                            </ul>
                            <h3>Pied Piper</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-item event web branding">
                <div class="inner">
                    <div class="img-holder">
                        <img src="../assets/images/agency/portfolio/img-4.jpg" alt>
                    </div>
                    <div class="details">
                        <div class="details-inner">
                            <ul>
                                <li>
                                    <a href="../assets/images/agency/portfolio/img-4.jpg" class="fancybox">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </li>
                            </ul>
                            <h3>Pied Piper</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-item web others design">
                <div class="inner">
                    <div class="img-holder">
                        <img src="../assets/images/agency/portfolio/img-7.jpg" alt>
                    </div>
                    <div class="details">
                        <div class="details-inner">
                            <ul>
                                <li>
                                    <a href="../assets/images/agency/portfolio/img-7.jpg" class="fancybox">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </li>
                            </ul>
                            <h3>Pied Piper</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-item branding web design">
                <div class="inner">
                    <div class="img-holder">
                        <img src="../assets/images/agency/portfolio/img-5.jpg" alt>
                    </div>
                    <div class="details">
                        <div class="details-inner">
                            <ul>
                                <li>
                                    <a href="../assets/images/agency/portfolio/img-5.jpg" class="fancybox">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </li>
                            </ul>
                            <h3>Pied Piper</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-item others branding">
                <div class="inner">
                    <div class="img-holder">
                        <img src="../assets/images/agency/portfolio/img-6.jpg" alt>
                    </div>
                    <div class="details">
                        <div class="details-inner">
                            <ul>
                                <li>
                                    <a href="../assets/images/agency/portfolio/img-6.jpg" class="fancybox">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </li>
                            </ul>
                            <h3>Pied Piper</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end agency-portfolio-section -->


<!-- start agency-testimonials-section -->
<section class="agency-testimonials-section" id="testimonials">
    <div class="container">
        <div class="row">
            <div class="col col-md-10 col-md-offset-1">
                <div class="agency-testimonials-slider">
                    <div class="grid">
                        <div class="client-quote">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation.</p>
                        </div>
                        <div class="client-info">
                            <h3>Jora’h El Mormont</h3>
                            <p>Mormont Inc.</p>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="client-quote">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation.</p>
                        </div>
                        <div class="client-info">
                            <h3>Jora’h El Mormont</h3>
                            <p>Mormont Inc.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end agency-testimonials-section -->


<!-- start agency-newsletter-section -->
<section class="agency-newsletter-section">
    <div class="container">
        <div class="row">
            <div class="col col-md-8 col-sm-10">
                <div class="newsletter">
                    <h3>Becone a member</h3>
                    <form>
                        <div>
                            <input type="email" class="form-control" required placeholder="Your email..">
                            <button type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end agency-newsletter-section -->


<!-- start agency-team-section -->
<!-- <section class="agency-team-section" id="team">
            <div class="container">
                <div class="row">
                    <div class="col col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="agency-section-title-s2">
                            <span>Our Works Speak For Ourselves </span>
                            <h2>Our Team</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="team-grids agency-team-slider">
                            <div class="grid">
                                <div class="member-pic-social">
                                    <div class="img-holder">
                                        <img src="../assets/images/agency/team/img-1.jpg" alt>
                                    </div>
                                    <div class="social">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="details">
                                    <h3>Amber Lee</h3>
                                    <span>Co-founder</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. </p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="member-pic-social">
                                    <div class="img-holder">
                                        <img src="../assets/images/agency/team/img-2.jpg" alt>
                                    </div>
                                    <div class="social">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="details">
                                    <h3>Jonathon Howard</h3>
                                    <span>Co-founder</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. </p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="member-pic-social">
                                    <div class="img-holder">
                                        <img src="../assets/images/agency/team/img-3.jpg" alt>
                                    </div>
                                    <div class="social">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="details">
                                    <h3>Jennifer Kovacic</h3>
                                    <span>Co-founder</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. </p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="member-pic-social">
                                    <div class="img-holder">
                                        <img src="../assets/images/agency/team/img-1.jpg" alt>
                                    </div>
                                    <div class="social">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="details">
                                    <h3>Amber Lee</h3>
                                    <span>Co-founder</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
<!-- end start agency-team-section -->


<!-- start agency-partners-section -->
<!-- <section class="agency-partners-section">
            <h2 class="hidden">Messages</h2>
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="partners-slider">
                            <div class="grid">
                                <img src="../assets/images/partners/img-1.png" alt>
                            </div>
                            <div class="grid">
                                <img src="../assets/images/partners/img-2.png" alt>
                            </div>
                            <div class="grid">
                                <img src="../assets/images/partners/img-3.png" alt>
                            </div>
                            <div class="grid">
                                <img src="../assets/images/partners/img-4.png" alt>
                            </div>
                            <div class="grid">
                                <img src="../assets/images/partners/img-5.png" alt>
                            </div>
                            <div class="grid">
                                <img src="../assets/images/partners/img-3.png" alt>
                            </div>
                        </div>
                    </div>
                </div>
            </div> end container 
        </section> -->
<!-- end agency-partners-section -->


<!-- start agency-blog-section -->
<section class="agency-blog-section" id="blog">
    <div class="container">
        <div class="row">
            <div class="col col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <div class="agency-section-title-s2">
                    <span>Listen to Messages Online </span>
                    <h2>Messages</h2>
                </div>
            </div>
        </div>
        <div class="row news-grids">
            <div class="col col-md-4 col-xs-6">
                <div class="grid">
                    <div class="entry-media">
                        <img src="../assets/images/blog/img-1.jpg" alt>
                    </div>
                    <div class="entry-body">
                        <div class="entry-header">
                            <span class="date">16 Hours ago</span>
                            <h3><a href="blog.html">Cut corporate taxes to boost growth</a></h3>
                        </div>
                        <div class="entry-details">
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla pariatur.</p>
                        </div>
                        <div class="entry-meta">
                            <a href="blog.html" class="read-more">Read More</a>
                            <a href="#" class="comments"><i class="fa fa-comments"></i> 10 Comments</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-md-4 col-xs-6">
                <div class="grid">
                    <div class="entry-media">
                        <img src="../assets/images/blog/img-2.jpg" alt>
                    </div>
                    <div class="entry-body">
                        <div class="entry-header">
                            <span class="date">16 Hours ago</span>
                            <h3><a href="blog.html">European firms look to Canada to grow ..assets</a></h3>
                        </div>
                        <div class="entry-details">
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla pariatur.</p>
                        </div>
                        <div class="entry-meta">
                            <a href="blog.html" class="read-more">Read More</a>
                            <a href="#" class="comments"><i class="fa fa-comments"></i> 10 Comments</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-md-4 col-xs-6">
                <div class="grid">
                    <div class="entry-media">
                        <img src="../assets/images/blog/img-3.jpg" alt>
                    </div>
                    <div class="entry-body">
                        <div class="entry-header">
                            <span class="date">16 Hours ago</span>
                            <h3><a href="blog.html">British drinkers leave Molson Coors thirsty</a></h3>
                        </div>
                        <div class="entry-details">
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla pariatur.</p>
                        </div>
                        <div class="entry-meta">
                            <a href="blog.html" class="read-more">Read More</a>
                            <a href="#" class="comments"><i class="fa fa-comments"></i> 10 Comments</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row see-more">
            <a href="#" class="agency-theme-btn-s2">See More</a>
        </div>
    </div> <!-- end container -->
</section>
<!-- end agency-blog-section -->


<!-- start agency-contact-section -->
<section class="agency-contact-section" id="contact">
    <div class="contact-grids">
        <div class="left-grid">
            <div class="contact-map" id="agency-contact-map"></div>
        </div> <!-- end left-grid -->
        <div class="right-grid">
            <div class="inner">
                <div class="contact-title">
                    <h2>Keep In Touch</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipi scing elit, sed do eiusmod tempor incidi dunt ut
                        labore et dolore magna aliqua.</p>
                </div>
                <div class="contact-form">
                    <form method="post" id="contact-form" class="form row">
                        <div class="col col-sm-6">
                            <input type="text" class="form-control" placeholder="Full Name">
                        </div>
                        <div class="col col-sm-6">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="col col-xs-12">
                            <textarea placeholder="Write" class="form-control"></textarea>
                        </div>
                        <div class="col col-xs-12 submit-btn">
                            <button type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end right-grid -->
    </div> <!-- end contact-grids -->
</section>
<!-- end agency-contact-section -->

@endsection
