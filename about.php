
<?php
$pageName = 'About';
include_once ('router.php');
include_once ('layout/header.php'); ?>

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg"></div><!-- /.page-header__bg -->
    <div class="page-header-shape-1"></div><!-- /.page-header-shape-1 -->
    <div class="page-header-shape-2"></div><!-- /.page-header-shape-2 -->
    <div class="page-header-shape-3"></div><!-- /.page-header-shape-3 -->
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li><span>/</span></li>
                <li>About</li>
            </ul>
            <h2>About</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--About Start-->
<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="about__img-box">
                    <div class="about-img">
                        <img src="assets/images/resources/about-img-1.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="about__right">
                    <h2 class="about__title">We’re leading in the market</h2>
                    <div class="about__icon-box">
                        <div class="about__icon">
                            <span class="icon-data-analytics"></span>
                        </div>
                        <div class="about__icon-text">
                            <p>We are a leading brokage firm with cutting edge technology and Modern Innovations</p>
                        </div>
                    </div>
                    <p class="about__right-text">We are a team of millennial financial and technology experts, aiming to bring financial freedom to everyone.
                        Through years of hard work, investment experiments and analysis, we are proud to serve your financial investment needs
                        with exquisite accuracy. We provide you with investment services that help you live the life of your dreams.</p>

                    <p class="about__right-text">The services and advice we provide to our clients is considered the best available in the industry. Our professionalism, authenticity, integrity and sincerity is not only helping our clients accomplish what they value most in life, but also helping them move from personal success to personal significance. Our approach to wealth management is holistic, proactive and makes a significant positive impact in people’s lives.</p>

                </div>
            </div>
        </div>
    </div>
</section>
<!--About End-->


<!--Counters One Start-->
<section class="counters-one counter-page">
    <div class="counters-one-bg" style="background-image: url(assets/images/backgrounds/counter-one-bg.jpg)">
    </div>
    <div class="container">
        <ul class="counters-one__box list-unstyled">
            <li class="counter-one__single">
                <div class="counter-one__icon">
                    <span class="icon-bank"></span>
                </div>
                <div>
                    <h3>$73,067,888</h3>
                    <p class="counter-one__text">Total Deposits</p>
                </div>
            </li>
            <li class="counter-one__single">
                <div class="counter-one__icon">
                    <span class="icon-help"></span>
                </div>
                <h3>$29,143,980</h3>
                <p class="counter-one__text">Total Withdrawal</p>
            </li>
            <li class="counter-one__single">
                <div class="counter-one__icon">
                    <span class="icon-customer-review"></span>
                </div>
                <h3 class="odometer" data-count="691,909">691,909</h3>
                <p class="counter-one__text">Total Investors</p>
            </li>
            <li class="counter-one__single">


            </li>
        </ul>
    </div>
</section>
<!--Counters One Start-->

<!--Team One Start-->
<section class="team-one">
    <div class="team-one__container">
        <div class="section-title text-center">
            <h2 class="section-title__title">Meet the team</h2>
            <span class="section-title__tagline">People that bring you results</span>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0ms"
                 data-wow-duration="1500ms">
                <!--Team One Single-->
                <div class="team-one__single">
                    <div class="team-one__img">
                        <img src="assets/images/team/team-1-1.jpg" alt="">
                        <div class="team-one__hover-content">
                            <h3 class="team-one__name">Robert Butler</h3>
                            <p class="team-one__title">Chief Executive Officer</p><br>
                            <p class="team-one__title">Our sole aim is to bring you closer to your dreams</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms"
                 data-wow-duration="1500ms">
                <!--Team One Single-->
                <div class="team-one__single">
                    <div class="team-one__img">
                        <img src="assets/images/team/team-1-2.jpg" alt="">
                        <div class="team-one__hover-content">
                            <h3 class="team-one__name">Charlotte Mills</h3>
                            <p class="team-one__title">Chief Financial Officer</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="600ms"
                 data-wow-duration="1500ms">
                <!--Team One Single-->
                <div class="team-one__single">
                    <div class="team-one__img">
                        <img src="assets/images/team/team-1-3.jpg" alt="">
                        <div class="team-one__hover-content">
                            <h3 class="team-one__name">Lucas Zimmerman</h3>
                            <p class="team-one__title">Chief Operations Officer</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="900ms"
                 data-wow-duration="1500ms">
                <!--Team One Single-->
                <div class="team-one__single">
                    <div class="team-one__img">
                        <img src="assets/images/team/team-1-4.jpg" alt="">
                        <div class="team-one__hover-content">
                            <h3 class="team-one__name">Mehdi Alireza </h3>
                            <p class="team-one__title">Chief Technical Officer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Team One End-->


<?php
include_once ('layout/footer.php'); ?>