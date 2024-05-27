<?php
$pageName = 'FAQ';
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
                <li>FAQs</li>
            </ul>
            <h2>FAQs</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Video Two End-->
<section class="listen">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="listen__left">
                    <h2 class="listen__title">We Listen and work together</h2>
                    <p class="listen__text">Find answer to some questions you might want to ask below. take your time to go through it</p>
                    <div class="listen__progress-wrap">
                        <div class="listen__progress">
                            <div class="listen__progress-box">
                                <div class="circle-progress"
                                     data-options='{ "value": 0.9,"thickness": 3,"emptyFill": "#ffffff","lineCap": "square", "size": 112, "fill": { "color": "#3c72fc" } }'>
                                </div><!-- /.circle-progress -->
                                <span>90%</span>
                            </div>
                            <div class="listen__progress-content">
                                <h3>Transparent</h3>
                            </div>
                        </div>
                        <div class="listen__progress">
                            <div class="listen__progress-box">
                                <div class="circle-progress"
                                     data-options='{ "value": 1.0,"thickness": 3,"emptyFill": "#ffffff","lineCap": "square", "size": 112, "fill": { "color": "#3c72fc" } }'>
                                </div><!-- /.circle-progress -->
                                <span>100%</span>
                            </div><!-- /.about-five__progress-box -->
                            <div class="listen__progress-content">
                                <h3>Secure</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="listen__right">
                    <div class="listen__right-faq">
                        <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                            <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h4><span>.</span> IS <span class="uppercase"><?=$site_name?></span> A REGISTERED COMPANY?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Yes, we are duely registered and regulated in the United States. You can verify by checking out our certficate</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4><span>.</span> WHERE IS YOUR OFFICE LOCATED?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>We have offices all over Asia. Our head office address is at 7 Grosvenor Gardens, London, England, SW1W 0AF</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4><span>.</span>HOW DO I BECOME AN INVESTOR?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>It is an easy process, Go to Register page , fill in your details and register. Then login to your dashboard, click on deposit and follow the prompts</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4><span>.</span>WHAT ADVANTAGES DOES <span class="uppercase"> <?=$site_name?> </span> HAVE?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>We provide you with investment services that help you live the life of your dreams. T
                                            he services and advice we provide to our clients is considered the best available in the industry.
                                            Our professionalism, authenticity, integrity and sincerity is not only helping our clients accomplish what
                                            they value most in life, but also helping them move from personal success to personal significance</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Video Two End-->


<?php
include_once ('layout/footer.php'); ?>
