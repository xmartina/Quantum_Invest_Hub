<?php
$pageName = 'Contact Us';
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
                <li><a href="/">Home</a></li>
                <li><span>/</span></li>
                <li>Contact</li>
            </ul>
            <h2>Contact</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Locations Start-->
<section class="locations">
    <div class="container">
        <div class="location__inner">
            <div class="section-title text-center">
                <h2 class="section-title__title">Our Contacts</h2>
                <span class="section-title__tagline">Contact us through various means</span>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0ms"
                     data-wow-duration="1500ms">
                    <!--Locations Single-->
                    <div class="locations__single">
                        <h3 class="locations__title">Our Email</h3>
                        <h4 class="locations__mail-phone-box">
                            <a href="mailto:<?=$site_email?>>" class="locations__mail"><?=$site_email?>></a>
                        </h4>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="600ms"
                     data-wow-duration="1500ms">
                    <!--Locations Single-->
                    <div class="locations__single">
                        <h3 class="locations__title">Our Address</h3>
                        <p class="locations__text">7 Grosvenor Gardens, London, England, SW1W 0AF</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Locations End-->

<!--Message Box Start-->
<section class="message-box">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5">
                <div class="message-box__left">
                    <div class="section-title text-left">
                        <h2 class="section-title__title">get in touch with our team</h2>
                        <span class="section-title__tagline">Trusted by more than 99,000+ Investors</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7">
                <div class="message-box__right">


                    <script language=javascript>

                        function checkform() {
                            if (document.mainform.name.value == '') {
                                alert("Please type your full name!");
                                document.mainform.name.focus();
                                return false;
                            }
                            if (document.mainform.email.value == '') {
                                alert("Please enter your e-mail address!");
                                document.mainform.email.focus();
                                return false;
                            }
                            if (document.mainform.message.value == '') {
                                alert("Please type your message!");
                                document.mainform.message.focus();
                                return false;
                            }
                            return true;
                        }

                    </script>

                    <form method=post name=mainform onsubmit="return checkform()"><input type="hidden" name="form_id" value="17124023836595"><input type="hidden" name="form_token" value="b6faf2e4318f5afec603d9191553afa6">
                        <input type=hidden name=a value=support>
                        <input type=hidden name=action value=send>


                        <table cellspacing=0 cellpadding=2 border=0>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" name="name" value="" size=30 class=inpts placeholder="Your Name">
                                        <div class="comment-form__icon">
                                            <i class="far fa-user-circle"></i>
                                        </div>
                                    </div></div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" name="email" value="" size=30 class=inpts placeholder="Email Address">
                                        <div class="comment-form__icon">
                                            <i class="far fa-envelope"></i>
                                        </div>
                                    </div></div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="comment-form__input-box">
                                        <textarea name=message class=inpts cols=45 rows=4 placeholder="Write Message"></textarea>
                                        <div class="comment-form__icon contact-expert__icon-comment">
                                            <i class="far fa-comment"></i>
                                        </div>
                                    </div>

                                    <button type="submit" value="Send" class="thm-btn comment-form__btn">Send a message</button>
                                </div>
                            </div>

                        </table>
                    </form>


                </div>
            </div>
        </div>
    </div>
</section>
<!--Message Box End-->

<?php
include_once ('layout/footer.php'); ?>
