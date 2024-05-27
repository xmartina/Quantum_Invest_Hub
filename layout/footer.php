<!--Site Footer One Start-->
<footer class="site-footer">
    <div class="site-footer-shape wow slideInRight" data-wow-delay="100ms" data-wow-duration="3500ms"
         style="background-image: url(assets/images/shapes/footer-shape.png)"></div>
    <div class="container">
        <div class="site-footer__top">
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="footer-widget__column footer-widget__about">
                        <div class="footer-widget__about-logo">
                            <a href="/"><img src="assets/images/footer-logo.png" alt="" style="max-width: 170px !important;"></a>
                        </div>
                        <p class="footer-widget__text">We have suitable plans for both beginners and professional investors.
                            We bring big profits and challenge the loss. We work with our clients, not at them.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="footer-widget__column footer-widget__explore clearfix">
                        <h3 class="footer-widget__title">Useful Links</h3>
                        <ul class="footer-widget__explore-list list-unstyled">
                            <li><a href="/about.php">About</a></li>
                            <li><a href="/contact.php">Contact</a></li>
                            <li><a href="/faq.php">FAQ</a></li>

                        </ul>
                        <ul class="footer-widget__explore-list footer-widget__explore-list-two list-unstyled">
                            <li><a href="<?=$dashboard_url?>/L/login">Log In</a></li>
                            <li><a href="<?=$dashboard_url?>/L/register">Sign Up</a></li>

                        </ul>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="footer-widget__column footer-widget__explore clearfix">
                        <h3 class="footer-widget__title">Contact Us</h3>


                        <ul class="list-unstyled footer-widget__contact-list">

                            <li>
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="text">
                                    <p><a href="mailto:<?=$site_email?>"><?=$site_email?></a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="text">
                                    <p>7 Grosvenor Gardens, London, England, SW1W 0AF</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-footer-bottom">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-footer-bottom__inner">
                        <div class="site-footer-bottom__left">
                            <p>© Copyright 2024 by <a href="#"><?=$site_name?></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Site Footer One End-->


</div><!-- /.page-wrapper -->


<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="/" aria-label="logo image"><img src="assets/images/logo-1.png" width="155"
                                                              alt="" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:<?=$site_email?>"><?=$site_email?></a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div id="google_translate_element"></div>


    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->



<script src="assets/vendors/jquery/jquery-3.5.1.min.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendors/jarallax/jarallax.min.js"></script>
<script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
<script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
<script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
<script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
<script src="assets/vendors/nouislider/nouislider.min.js"></script>
<script src="assets/vendors/odometer/odometer.min.js"></script>
<script src="assets/vendors/swiper/swiper.min.js"></script>
<script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
<script src="assets/vendors/wnumb/wNumb.min.js"></script>
<script src="assets/vendors/wow/wow.js"></script>
<script src="assets/vendors/isotope/isotope.js"></script>
<script src="assets/vendors/countdown/countdown.min.js"></script>
<script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="assets/vendors/twentytwenty/twentytwenty.js"></script>
<script src="assets/vendors/twentytwenty/jquery.event.move.js"></script>
<script src="assets/vendors/bxslider/js/jquery.bxslider.min.js"></script>


<script src="http://maps.google.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM"></script>


<!-- template js -->
<script src="assets/js/aivons.js"></script>

<!-- color switcher language -->
<script src="assets/js/jQuery.style.switcher.min.js"></script>
<script src="assets/js/lang.js"></script>
<script src="assets/js/color-switcher.js"></script>

<script type="text/javascript">
    var country_list = ["CAMBODIA", "CANADA", "USA", "UNITED KINGDOM", "UNITED ARAB EMIRATES", "GERMANY",];

    function choice(array) {
        return array[Math.floor(Math.random() * array.length)];
    }

    function randomNumber(min, max) {
        return Math.random() * (max - min) + min;
    }


    function payinout() {
        var nu = Math.floor(randomNumber(100, 3500));
        var con = choice(country_list);
        var mode = choice(['deposited', 'withdrew']);

        spop({
            template: "An Investor from " + con + " " + mode + " $" + nu + " ...",

            position: 'bottom-center',
            style: 'success',
            autoclose : 4000,
        });

    }

    setInterval(payinout,7000);


</script>



</body>


<!-- Mirrored from megaforex.cc/demo99/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Apr 2024 11:20:15 GMT -->
</html>
