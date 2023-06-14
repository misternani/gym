<?php
session_start();
include_once 'dbConnection.php';
?>
<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Balal Strength</title>


    <link rel="stylesheet" href="js/plugins/goodlayers-core/plugins/fontawesome/font-awesome.css" type="text/css" media="all" />
    <link rel="stylesheet" href="js/plugins/goodlayers-core/plugins/fa5/fa5.css" type="text/css" media="all" />
    <link rel="stylesheet" href="js/plugins/goodlayers-core/plugins/elegant/elegant-font.css" type="text/css" media="all" />
    <link rel="stylesheet" href="js/plugins/goodlayers-core/plugins/ionicons/ionicons.css" type="text/css" media="all" />
    <link rel="stylesheet" href="js/plugins/goodlayers-core/plugins/simpleline/simpleline.css" type="text/css" media="all" />
    <link rel="stylesheet" href="js/plugins/goodlayers-core/plugins/gdlr-custom-icon/gdlr-custom-icon.css" type="text/css" media="all" />
    <link rel="stylesheet" href="js/plugins/goodlayers-core/plugins/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="js/plugins/goodlayers-core/include/css/page-builder.css" type="text/css" media="all" />
    <link rel="stylesheet" href="js/plugins/mp-timetable/media/css/style.css?ver=2.4.2" type="text/css" media="all" />
    <link rel="stylesheet" href="css/style-core.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/zyth-style-custom.css" type="text/css" media="all" />
    <link rel="stylesheet" href="js/plugins/revslider/public/assets/css/rs6.css?ver=6.5.8" type="text/css" media="all" />


    <link rel="icon" href="upload/cropped-favicon-circle-32x32.png" sizes="32x32" />
    <link rel="icon" href="upload/cropped-favicon-circle-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="upload/cropped-favicon-circle-180x180.png" />

</head>

<body class="home page-template-default page page-id-14670 theme-zyth gdlr-core-body woocommerce-no-js zyth-body zyth-body-front zyth-full zyth-with-sticky-navigation zyth-blockquote-style-3 gdlr-core-link-to-lightbox" data-home-url="index.php" >
    <div class="zyth-mobile-header-wrap">
        <div class="zyth-mobile-header zyth-header-background zyth-style-slide zyth-sticky-mobile-navigation" id="zyth-mobile-header">
            <div class="zyth-mobile-header-container zyth-container clearfix">
                <div class="zyth-logo zyth-item-pdlr">
                    <div class="zyth-logo-inner">
                        <a class="zyth-fixed-nav-logo" href="index.php">
                            <img
                                src="upload/logo-fixed.png"
                                alt="11"
                                width="87"
                                height="47"
                                title="logo-fixed"
                            />
                        </a>
                        <a class="zyth-orig-logo" href="index.php"><img src="upload/logo-fixedx2.png" alt="11" width="173" height="92" title="logo-fixedx2" /></a>
                    </div>
                </div>
                <div class="zyth-mobile-menu-right">
                   


                    <div class="zyth-modern-menu zyth-mobile-menu" id="zyth-mobile-menu" data-back-text="Back">
                        <a class="zyth-modern-menu-icon zyth-mobile-menu-button zyth-mobile-button-hamburger" href="#"><span></span></a>
                        <div class="zyth-modern-menu-nav-base">
                            <ul id="menu-main-navigation" class="menu">
                                <li
                                    class="menu-item menu-item-home current-menu-item "
                                >
                                    <a href="index.php" aria-current="page">Home</a>
                                    
                                </li>
                            <!--     <li class="menu-item menu-item-has-children">
                                    <a href="about.html">Training</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="about.html">About Us</a></li>
                                        <li class="menu-item"><a href="our-team.html">Our Team</a></li>
                                        <li class="menu-item"><a href="join-us.html">Pricing</a></li>
                                        <li class="menu-item"><a href="timetable.html">Timetable</a></li>
                                        <li class="menu-item"><a href="zyth-review.html">Review</a></li>
                                        <li class="menu-item"><a href="faq.html">FAQ</a></li>
                                    </ul>
                                </li> -->
                                <li class="menu-item ">
                                    <a href="#">Training</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="one_to_one.html">One to One</a></li>
                                        <li class="menu-item"><a href="group.html">Group</a></li>
                                        <li class="menu-item"><a href="online.html">online</a></li>
                                    </ul>
                                </li>
                                 <li class="menu-item ">
                                    <a href="transformations.php">Transformations</a>
                                </li>
                                 <li class="menu-item ">
                                    <a href="blog-standard.php">Blog</a>
                                </li>
                                 <li class="menu-item ">
                                    <a href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="zyth-modern-menu-content zyth-navigation-font">
                            <div class="zyth-modern-menu-display">
                                <div class="zyth-modern-menu-close"></div>
                                <div class="zyth-modern-menu-nav"></div>
                                <div class="zyth-modern-menu-info clearfix">
                                    <div class="zyth-left-text">
                                        <a href="#" class="__cf_email__" >test@gmail.com</a><br />
                                        1800-2355-2356
                                    </div>
                                    <div class="zyth-right-text">
                                        <div class="gdlr-core-social-network-item gdlr-core-item-pdb gdlr-core-none-align gdlr-direction-horizontal" style="padding-bottom: 0px;" id="gdlr-core-social-network-88142">
                                            <a href="#" target="_blank" class="gdlr-core-social-network-icon" title="facebook" style="font-size: 20px; color: #ffffff; margin-right: 30px;"><i class="fa fa-facebook"></i></a>
                                            <a href="#" target="_blank" class="gdlr-core-social-network-icon" title="pinterest" style="font-size: 20px; color: #ffffff; margin-right: 30px;"><i class="fa fa-pinterest-p"></i></a>
                                            <a href="#" target="_blank" class="gdlr-core-social-network-icon" title="twitter" style="font-size: 20px; color: #ffffff; margin-right: 30px;"><i class="fa fa-twitter"></i></a>
                                            <a href="#" target="_blank" class="gdlr-core-social-network-icon" title="instagram" style="font-size: 20px; color: #ffffff; margin-right: 30px;"><i class="fa fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="zyth-body-outer-wrapper">

        <div class="zyth-float-social" id="zyth-float-social">
            <span class="zyth-head">Follow Us On</span><span class="zyth-divider"></span><a href="#" target="_blank" class="zyth-float-social-icon" title="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" target="_blank" class="zyth-float-social-icon" title="pinterest"><i class="fa fa-pinterest-p"></i></a><a href="#" target="_blank" class="zyth-float-social-icon" title="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" target="_blank" class="zyth-float-social-icon" title="instagram"><i class="fa fa-instagram"></i></a>
        </div>

        <div class="zyth-body-wrapper clearfix zyth-with-transparent-header zyth-with-frame">
            <div class="zyth-header-background-transparent">
                <div class="zyth-top-bar zyth-inner">
                    <div class="zyth-top-bar-background"></div>
                    <div class="zyth-top-bar-container zyth-top-bar-full">
                        <div class="zyth-top-bar-container-inner clearfix">
                            <div class="zyth-top-bar-right-button">
                                <a class="zyth-top-bar-button zyth-button-1" href="join-us.html" target="_self">
                                    <span>Join<i class="gdlr-icon-muscle"></i></span>
                                </a>
                               <!--  <a class="zyth-top-bar-button zyth-button-2" href="contact.html" target="_self">
                                    <span>Free Trial<i class="fa5s fa5-bolt"></i></span>
                                </a>
 -->                            </div>
                        </div>
                    </div>
                </div>
                <header class="zyth-header-wrap zyth-header-style-plain zyth-style-menu-right zyth-sticky-navigation zyth-style-slide" data-navigation-offset="75">
                    <div class="zyth-header-background"></div>
                    <div class="zyth-header-container zyth-header-full">
                        <div class="zyth-header-container-inner clearfix">
                            <div class="zyth-logo zyth-item-pdlr">
                                <div class="zyth-logo-inner">
                                    <a class="zyth-fixed-nav-logo" href="index.php">
                                        <img
                                            src="upload/logo-fixed.png"
                                            alt="11"
                                            width="87"
                                            height="47"
                                            title="logo-fixed"
                                        />
                                    </a>
                                    <a class="zyth-orig-logo" href="index.php">
                                        <img
                                            src="upload/logox1.png"
                                            alt="11"
                                            width="173"
                                            height="92"
                                            title="logox1"
                                        />
                                    </a>
                                </div>
                            </div>
                            <div class="zyth-navigation zyth-item-pdlr clearfix">
                                <div class="zyth-main-menu" id="zyth-main-menu">
                                    <ul id="menu-main-navigation-1" class="sf-menu">
                                        <li class="menu-item menu-item-home current-menu-item menu-item-has-children zyth-normal-menu" >
                                            <a href="index.php" class="sf-with-ul-pre">Home</a>
                                         </li>
                                    
                                        <li class="menu-item menu-item-has-children zyth-normal-menu">
                                            <a href="#" class="sf-with-ul-pre">Training</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item" data-size="60"><a href="one_to_one.html">One to One</a></li>
                                                <li class="menu-item" data-size="60"><a href="group.html">Group</a></li>
                                                <li class="menu-item" data-size="60"><a href="online.html">online</a></li>
                                              
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children zyth-normal-menu">
                                            <a href="transformations.php" class="sf-with-ul-pre">Transformations</a>
                                     
                                        </li>
                                        <li class="menu-item menu-item-has-children zyth-normal-menu">
                                            <a href="blog-standard.php" class="sf-with-ul-pre">Blog</a>
                                            
                                        </li>
                                        <li class="menu-item menu-item-has-children zyth-normal-menu">
                                            <a href="contact.html" class="sf-with-ul-pre">Contact</a>
                                          
                                    <div class="zyth-navigation-slide-bar zyth-navigation-slide-bar-style-2 zyth-left" data-size-offset="0" data-width="34px" id="zyth-navigation-slide-bar"></div>
                                </div>
                                <div class="zyth-main-menu-right-wrap clearfix">
                                    <!-- <div class="zyth-main-menu-search" id="zyth-top-search"><i class="icon_search"></i></div> -->
                                    <div class="zyth-top-search-wrap">
                                        <div class="zyth-top-search-close"></div>

                                        <div class="zyth-top-search-row">
                                            <div class="zyth-top-search-cell">
                                                <form role="search" method="get" class="search-form" action="index.php">
                                                    <input type="text" class="search-field zyth-title-font" placeholder="Search..." value="" name="s" />
                                                    <div class="zyth-top-search-submit"><i class="fa fa-search"></i></div>
                                                    <input type="submit" class="search-submit" value="Search" />
                                                    <div class="zyth-top-search-close"><i class="icon_close"></i></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- <div class="zyth-side-content-menu-button"><span></span></div> -->
                                </div>
                            </div>
                            <!-- zyth-navigation -->
                        </div>
                        <!-- zyth-header-inner -->
                    </div>
                    <!-- zyth-header-container -->
                </header>
                <!-- header -->
            </div>

            <div class="zyth-page-wrapper" id="zyth-page-wrapper">
                <div class="gdlr-core-page-builder-body">
                    <div class="gdlr-core-pbf-wrapper" style="padding: 0px 0px 0px 0px;" data-float-social="social-light">
                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #141414;"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-revolution-slider-item gdlr-core-item-pdlr gdlr-core-item-pdb" style="padding-bottom: 0px;">
                                        <!-- START Homepage Gym REVOLUTION SLIDER 6.5.8 -->
                                        <p class="rs-p-wp-fix"></p>
                                        <rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery" style="visibility: hidden; background: transparent; padding: 0; margin: 0px auto; margin-top: 0; margin-bottom: 0;">
                                            <rs-module id="rev_slider_1_1"  data-version="6.5.8">
                                                <rs-slides>
                                                    <rs-slide style="position: absolute;" data-key="rs-1" data-title="Slide" data-in="o:0;" data-out="a:false;" data-p2="01 Our Company">
                                                        <img
                                                            src="js/plugins/revslider/public/assets/assets/dummy.png"
                                                            alt="slider-img"
                                                            title="slider-1"
                                                            width="1784"
                                                            height="1184"
                                                            class="rev-slidebg tp-rs-img rs-lazyload"
                                                            data-lazyload="upload/slider-1.jpg"
                                                            data-bg="p:center top;"
                                                            data-no-retina=""
                                                        />
                                                        <!--						-->
                                                        <rs-layer
                                                            id="slider-1-slide-1-layer-0"
                                                            data-type="text"
                                                            data-rsp_ch="on"
                                                            data-xy="x:l,l,c,c;xo:355px,275px,0,0;yo:533px,413px,243px,159px;"
                                                            data-text="w:nowrap;s:100,77,62,38;l:70,54,65,52;fw:900,900,500,400;a:center;"
                                                            data-dim="w:auto,auto,791px,425px;"
                                                            data-frame_1="st:1280;sR:1280;"
                                                            data-frame_999="o:0;st:w;sR:7420;"
                                                            style="z-index: 11; font-family: 'Poppins'; text-transform: uppercase;"
                                                        >
                                                           <!--  Strength -->
                                                        </rs-layer>
                                                        <!--							-->
                                                        <rs-layer
                                                            id="slider-1-slide-1-layer-1"
                                                            data-type="text"
                                                            data-color="var(--gradientBackground)"
                                                            data-rsp_ch="on"
                                                            data-xy="x:l,l,c,c;xo:527px,408px,0,0;yo:533px,413px,317px,227px;"
                                                            data-text="w:nowrap;s:100,77,79,63;l:70,54,93,52;fw:900,900,800,800;a:center;"
                                                            data-dim="w:auto,auto,791px,425px;"
                                                            data-frame_1="st:1590;sR:1590;"
                                                            data-frame_999="o:0;st:w;sR:7110;"
                                                            style="z-index: 15; font-family: 'Poppins'; text-transform: uppercase;"
                                                        >
                                                            Coaching
                                                        </rs-layer>
                                                        <!--							-->
                                                        <rs-layer
                                                            id="slider-1-slide-1-layer-2"
                                                            data-type="image"
                                                            data-rsp_ch="on"
                                                            data-xy="xo:112px,86px,-92px,-56px;yo:298px,231px,173px,106px;"
                                                            data-text="w:normal;s:20,15,11,6;l:0,19,14,8;"
                                                            data-dim="w:416px,322px,344px,212px;h:198px,153px,164px,101px;"
                                                            data-frame_999="o:0;st:w;sR:8700;"
                                                            style="z-index: 8;"
                                                        >
                                                           <!--  <img
                                                                src="js/plugins/revslider/public/assets/assets/dummy.png"
                                                                alt="slider-img"
                                                                class="tp-rs-img rs-lazyload"
                                                                width="416"
                                                                height="198"
                                                            
                                                                data-no-retina=""
                                                            /> -->
                                                        </rs-layer>
                                                        <!--							-->
                                                        <rs-layer
                                                            id="slider-1-slide-1-layer-3"
                                                            data-type="text"
                                                            data-rsp_ch="on"
                                                            data-xy="x:l,l,c,c;xo:351px,272px,0,0;yo:409px,317px,168px,99px;"
                                                            data-text="w:nowrap;s:100,77,62,43;l:70,54,73,52;fw:900,900,700,800;a:center;"
                                                            data-dim="w:auto,auto,762px,425px;"
                                                            data-frame_1="st:980;sR:980;"
                                                            data-frame_999="o:0;st:w;sR:7720;"
                                                            style="z-index: 17; font-family: 'Poppins'; text-transform: uppercase;"
                                                        >
                                                           Balal Strength

                                                        </rs-layer>
                                                        <!--							-->
                                                        <rs-layer
                                                            id="slider-1-slide-1-layer-4"
                                                            data-type="image"
                                                            data-rsp_ch="on"
                                                            data-xy="xo:512px,397px,-66px,-40px;yo:690px,535px,549px,338px;"
                                                            data-text="w:normal;s:20,15,11,6;l:0,19,14,8;"
                                                            data-dim="w:32px,24px,18px,11px;h:33px,25px,18px,11px;"
                                                            data-vbility="t,t,f,f"
                                                            data-frame_1="st:1880;sR:1880;"
                                                            data-frame_999="o:0;st:w;sR:6820;"
                                                            style="z-index: 14;"
                                                        >
                                                            <img
                                                                src="js/plugins/revslider/public/assets/assets/dummy.png"
                                                                alt="upper-button"
                                                                class="tp-rs-img rs-lazyload"
                                                                data-lazyload="upload/button-icon-1.svg"
                                                                data-no-retina=""
                                                            />
                                                        </rs-layer>
                                                        <!--							-->
                                                        <rs-layer
                                                            id="slider-1-slide-1-layer-5"
                                                            data-type="image"
                                                            data-rsp_ch="on"
                                                            data-xy="xo:766px,594px,451px,278px;yo:589px,456px,346px,213px;"
                                                            data-text="w:normal;s:20,15,11,6;l:0,19,14,8;"
                                                            data-dim="w:720px,558px,423px,260px;h:353px,273px,207px,127px;"
                                                            data-frame_999="o:0;st:w;sR:8700;"
                                                            style="z-index: 9;"
                                                        >
                                                            <img
                                                                src="js/plugins/revslider/public/assets/assets/dummy.png"
                                                                alt="slider-img"
                                                                class="tp-rs-img rs-lazyload"
                                                                width="720"
                                                                height="353"
                                                               
                                                                data-no-retina=""
                                                            />
                                                        </rs-layer>
                                                        <!--							-->
                                                        <rs-layer
                                                            id="slider-1-slide-1-layer-6"
                                                            data-type="image"
                                                            data-rsp_ch="on"
                                                            data-xy="xo:409px,317px,240px,246px;yo:-181px,-140px,-106px,-11px;"
                                                            data-text="w:normal;s:20,15,11,6;l:0,19,14,8;"
                                                            data-dim="w:350px,271px,205px,126px;h:1072px,831px,631px,389px;"
                                                            data-frame_999="o:0;st:w;sR:8700;"
                                                            style="z-index: 10;"
                                                        >
                                                            <img
                                                                src="js/plugins/revslider/public/assets/assets/dummy.png"
                                                                alt="slider-img"
                                                                class="tp-rs-img rs-lazyload"
                                                                width="350"
                                                                height="1072"
                                                                data-lazyload="upload/slider-1-3.png"
                                                                data-no-retina=""
                                                            />
                                                        </rs-layer>
                                                        <!--							-->
                                                        <rs-layer
                                                            id="slider-1-slide-1-layer-7"
                                                            data-type="shape"
                                                            data-rsp_ch="on"
                                                            data-xy="x:c;xo:624px,484px,0,0;yo:540px,418px,441px,312px;"
                                                            data-text="w:normal;s:20,15,11,6;l:0,19,14,8;"
                                                            data-dim="w:1px,1px,60px,22px;h:40px,31px,5px,3px;"
                                                            data-frame_1="st:2460;sR:2460;"
                                                            data-frame_999="o:0;st:w;sR:6240;"
                                                            style="z-index: 11; background-color: #ffffff;"
                                                        >
                                                        </rs-layer>
                                                        <!--							-->
                                                        <a
                                                            id="slider-1-slide-1-layer-8"
                                                            class="rs-layer rev-btn"
                                                            href="join-us.html"
                                                            target="_self"
                                                            data-type="button"
                                                            data-rsp_ch="on"
                                                            data-xy="x:c;xo:-199px,-154px,0,0;yo:676px,524px,491px,343px;"
                                                            data-text="w:normal;s:17,13,17,20;l:20,15,11,10;fw:700;"
                                                            data-dim="minh:0px,none,none,none;"
                                                            data-padding="t:22,17,17,20;r:63,49,17,28;b:22,17,17,20;l:31,24,18,28;"
                                                            data-frame_1="st:1880;sR:1880;"
                                                            data-frame_999="o:0;st:w;sR:6820;"
                                                            data-frame_hover="c:#fff;bgc:#570fff;bor:0px,0px,0px,0px;bri:120%;"
                                                            style="
                                                                z-index: 13;
                                                                background-color: var(--gradientBackground);
                                                                font-family: 'Poppins';
                                                                font-style: italic;
                                                                -ms-transform: skewX(-15deg);
                                                                -webkit-transform: skewX(-15deg);
                                                                transform: skewX(-15deg);
                                                            "
                                                        >
                                                            <span style="-ms-transform: skewX(15deg); -webkit-transform: skewX(15deg); transform: skewX(15deg); display: block;">Train with me</span>
                                                        </a>
                                                        <!--							-->
                                                        <rs-layer
                                                            id="slider-1-slide-1-layer-21"
                                                            data-type="shape"
                                                            data-rsp_ch="on"
                                                            data-xy="x:c;xo:-366px,-283px,15px,0;yo:708px,549px,312px,295px;"
                                                            data-text="w:normal;s:20,15,11,6;l:0,19,14,8;"
                                                            data-dim="w:40px,31px,60px,22px;h:1px,1px,5px,3px;"
                                                            data-vbility="t,t,f,f"
                                                            data-frame_1="st:2160;sR:2160;"
                                                            data-frame_999="o:0;st:w;sR:6540;"
                                                            style="z-index: 12; background-color: #ffffff;"
                                                        >
                                                        </rs-layer>
                                                        <!---->
                                                    </rs-slide>
                                                </rs-slides>
                                                <rs-static-layers>
                                                    <!--					-->
                                                </rs-static-layers>
                                            </rs-module>

                                        </rs-module-wrap>
                                        <!-- END REVOLUTION SLIDER -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper" style="padding: 0px 0px 100px 0px;" id="gdlr-core-wrapper-1" data-float-social="social-light">
                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #0c0c0c;">
                            <div
                                class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                                style="background-image: url(upload/BG-Top-ZYTH-GYM.jpg); background-repeat: no-repeat; background-position: top center;"
                                data-parallax-speed="0"
                            ></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-wrapper-container-inner gdlr-core-item-mglr clearfix" style="margin: -100px 0px 0px 0px; z-index: 99; width: 100%;">
                                    <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first" id="gdlr-core-column-14171">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="margin: 0px -13px 40px -13px;">
                                            <div class="gdlr-core-pbf-background-wrap"></div>
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation="fadeInUp" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-image-content-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix gdlr-core-style-slide" style="padding-bottom: 0px;" id="gdlr-core-image-content-id-83503">
                                                        <div class="gdlr-core-item-rvpdlr">
                                                            <div class="gdlr-core-item-list gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-column-60 gdlr-core-column-first">
                                                                <div class="gdlr-core-image-content gdlr-core-center-align clearfix" style="transform: skewX(169deg); -webkit-transform: skewX(169deg); height: 335px;">
                                                                    <div
                                                                        class="gdlr-core-image-content-thumbnail"
                                                                        style="
                                                                            transform: skewX(-169deg);
                                                                            -webkit-transform: skewX(-169deg);
                                                                            background-image: url(upload/Content01.jpg);
                                                                            left: -32.558701780568px;
                                                                            right: -32.558701780568px;
                                                                        "
                                                                    >
                                                                        <a class="gdlr-core-image-content-link" href="one_to_one.html"><span class="gdlr-core-image-content-thumbnail-overlay"></span></a>
                                                                    </div>
                                                                    <div class="gdlr-core-image-content-overlay gdlr-core-with-link" style="left: 65px; right: 65px;">
                                                                        <div class="gdlr-core-image-content-overlay-inner" style="transform: skewX(-169deg); -webkit-transform: skewX(-169deg);">
                                                                            <h3
                                                                                class="gdlr-core-image-content-title gdlr-core-skin-title"
                                                                                style="font-size: 36px; font-weight: 700; text-transform: none; letter-spacing: 0px; color: #ffffff;"
                                                                            >
                                                                                One to One training
                                                                            </h3>
                                                                            <div class="gdlr-core-image-content-overlay-content">
                                                                                <div class="gdlr-core-image-content-text gdlr-core-skin-content" style="font-size: 16px; font-weight: 400; color: #c8c5ff;">
                                                                                    <p>Get professional training one to one, in person to achieve your fitness goals.</p>
                                                                                </div>
                                                                                <a class="gdlr-core-image-content-link" href="timetable.html"><i class="gdlr-icon-oblique-arrow"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-20" id="gdlr-core-column-12235">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="margin: 0px -13px 40px -13px;">
                                            <div class="gdlr-core-pbf-background-wrap"></div>
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation="fadeInDown" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-image-content-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix gdlr-core-style-slide" style="padding-bottom: 0px;" id="gdlr-core-image-content-id-59353">
                                                        <div class="gdlr-core-item-rvpdlr">
                                                            <div class="gdlr-core-item-list gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-column-60 gdlr-core-column-first">
                                                                <div class="gdlr-core-image-content gdlr-core-center-align clearfix" style="transform: skewX(169deg); -webkit-transform: skewX(169deg); height: 335px;">
                                                                    <div
                                                                        class="gdlr-core-image-content-thumbnail"
                                                                        style="
                                                                            transform: skewX(-169deg);
                                                                            -webkit-transform: skewX(-169deg);
                                                                            background-image: url(upload/C2.jpg);
                                                                            left: -32.558701780568px;
                                                                            right: -32.558701780568px;
                                                                        "
                                                                    >
                                                                        <a class="gdlr-core-image-content-link" href="group.html"><span class="gdlr-core-image-content-thumbnail-overlay"></span></a>
                                                                    </div>
                                                                    <div class="gdlr-core-image-content-overlay gdlr-core-with-link" style="left: 65px; right: 65px;">
                                                                        <div class="gdlr-core-image-content-overlay-inner" style="transform: skewX(-169deg); -webkit-transform: skewX(-169deg);">
                                                                            <h3
                                                                                class="gdlr-core-image-content-title gdlr-core-skin-title"
                                                                                style="font-size: 36px; font-weight: 700; text-transform: none; letter-spacing: 0px; color: #ffffff;"
                                                                            >
                                                                               Group Training
                                                                            </h3>
                                                                            <div class="gdlr-core-image-content-overlay-content">
                                                                                <div class="gdlr-core-image-content-text gdlr-core-skin-content" style="font-size: 16px; font-weight: 400; color: #c8c5ff;">
                                                                                    <p>get you body pumped with a group of other fitness freaks on a journey to transform thier bodies.</p>
                                                                                </div>
                                                                                <a class="gdlr-core-image-content-link" href="classes.html"><i class="gdlr-icon-oblique-arrow"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-20" id="gdlr-core-column-66885">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="margin: 0px -13px 160px -13px;">
                                            <div class="gdlr-core-pbf-background-wrap"></div>
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation="fadeInUp" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-image-content-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix gdlr-core-style-slide" style="padding-bottom: 0px;" id="gdlr-core-image-content-id-27775">
                                                        <div class="gdlr-core-item-rvpdlr">
                                                            <div class="gdlr-core-item-list gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-column-60 gdlr-core-column-first">
                                                                <div class="gdlr-core-image-content gdlr-core-center-align clearfix" style="transform: skewX(169deg); -webkit-transform: skewX(169deg); height: 335px;">
                                                                    <div
                                                                        class="gdlr-core-image-content-thumbnail"
                                                                        style="
                                                                            transform: skewX(-169deg);
                                                                            -webkit-transform: skewX(-169deg);
                                                                            background-image: url(upload/C3-1.jpg);
                                                                            left: -32.558701780568px;
                                                                            right: -32.558701780568px;
                                                                        "
                                                                    >
                                                                        <a class="gdlr-core-image-content-link" href="#"><span class="gdlr-core-image-content-thumbnail-overlay"></span></a>
                                                                    </div>
                                                                    <div class="gdlr-core-image-content-overlay gdlr-core-with-link" style="left: 65px; right: 65px;">
                                                                        <div class="gdlr-core-image-content-overlay-inner" style="transform: skewX(-169deg); -webkit-transform: skewX(-169deg);">
                                                                            <h3
                                                                                class="gdlr-core-image-content-title gdlr-core-skin-title"
                                                                                style="font-size: 36px; font-weight: 700; text-transform: none; letter-spacing: 0px; color: #ffffff;"
                                                                            >
                                                                                online Training
                                                                            </h3>
                                                                            <div class="gdlr-core-image-content-overlay-content">
                                                                                <div class="gdlr-core-image-content-text gdlr-core-skin-content" style="font-size: 16px; font-weight: 400; color: #c8c5ff;">
                                                                                    <p>No matter where you are, I'm here to get you that dream body, Let's connect online and smash those fitness goals.</p>
                                                                                </div>
                                                                                <a class="gdlr-core-image-content-link" href="join-us.html"><i class="gdlr-icon-oblique-arrow"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first" id="gdlr-core-column-12821">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="margin-bottom: 190px; padding: 34px 0px 0px 0px;">
                                            <div class="gdlr-core-pbf-background-wrap"></div>
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation="fadeInLeft" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                                                        <div class="gdlr-core-title-item-title-wrap">
                                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 36px; font-weight: 700; font-style: italic; letter-spacing: 0px; color: #ffffff;">
                                                                My Mission
                                                                <span
                                                                    class="gdlr-core-title-item-title-side-border gdlr-core-style-lower"
                                                                    style="transform: skewX(150deg); -webkit-transform: skewX(150deg); border-bottom-width: 6px; border-color: var(--gradientBackground); width: 30px; margin-left: 20px;"
                                                                ></span>
                                                                <span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align gdlr-core-no-p-space" style="padding-bottom: 50px;">
                                                        <div class="gdlr-core-text-box-item-content" style="font-size: 18px; font-weight: 400; letter-spacing: 0.34px;  color: #ffffff;">
                                                            <p>
                                                              As a gym trainer, my mission is to inspire and empower individuals to achieve their fitness goals and live a healthier lifestyle. Through personalized training programs, nutritional guidance, and motivational support, I aim to create a safe and welcoming environment where clients can feel confident and motivated to reach their full potential.

I believe that everyone is unique, and therefore, each training program should be tailored to individual needs and abilities. My goal is to help clients develop the knowledge, skills, and habits necessary to make fitness a sustainable and enjoyable part of their daily routine.
                                                                <span class="s1">💪</span>
                                                            </p>
                                                            <span style="float: right;" class="s1">-Balal</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px;">
                                                    <!--     <a
                                                            class="gdlr-core-button gdlr-core-button-gradient gdlr-core-left-align gdlr-core-button-no-border"
                                                            href="about.html"
                                                            style="
                                                                transform: skewX(-15deg);
                                                                -webkit-transform: skewX(-15deg);
                                                                font-size: 17px;
                                                                font-style: italic;
                                                                font-weight: 700;
                                                                color: #ffffff;
                                                                padding: 16px 33px 16px 33px;
                                                                text-transform: capitalize;
                                                                border-radius: 0px;
                                                                -moz-border-radius: 0px;
                                                                -webkit-border-radius: 0px;
                                                                background: var(--gradientBackground);
                                                            "
                                                        >
                                                            <span class="gdlr-core-content" style="transform: skewX(15deg); -webkit-transform: skewX(15deg);">
                                                                More About me<i class="gdlr-core-pos-right gdlr-icon-oblique-arrow" style="color: #ffffff;"></i>
                                                            </span>
                                                        </a> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-30" id="gdlr-core-column-87862">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="margin: 0px 0px 180px 0px;">
                                            <div class="gdlr-core-pbf-background-wrap"></div>
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation="fadeInRight" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-image-item gdlr-core-item-pdb gdlr-core-center-align gdlr-core-item-pdlr" style="padding-bottom: 0px;">
                                                        <div class="gdlr-core-image-item-wrap gdlr-core-media-image gdlr-core-image-item-style-rectangle" style="border-width: 0px;">

                                                            
                                                            
                                                                <img src="upload/balal_video.png" alt="11" width="1000" height="596" title="video Image" />
                                                                <span class="gdlr-core-image-overlay gdlr-core-no-hover gdlr-core-transparent">
                                                                   
                                                                </span>
                                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/lTmM5M-YgwA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>








 <div class="gdlr-core-pbf-wrapper" style="padding: 100px 0px 100px 0px;" data-float-social="social-dark">
                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #ffffff;">
                            <div
                                class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                                style="background-image: url(upload/LLLine.jpg); background-repeat: no-repeat; background-position: center;"
                                data-parallax-speed="0"
                            ></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first" id="gdlr-core-column-33156">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding-right: 35px; padding-left: 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation="fadeInUp" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-image-item gdlr-core-item-pdb gdlr-core-left-align gdlr-core-item-pdlr" style="padding-bottom: 50px;">
                                                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image gdlr-core-image-item-style-rectangle" style="border-width: 0px; max-width: 60px;">
                                                        <img src="upload/Logo01.png" alt="11" width="120" height="120" title="Logo01" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 20px;">
                                                    <div class="gdlr-core-title-item-title-wrap">
                                                        <h3
                                                            class="gdlr-core-title-item-title gdlr-core-skin-title"
                                                            style="font-size: 30px; font-weight: 700; font-style: italic; letter-spacing: 0px; text-transform: none; color: #060606;"
                                                        >
                                                            Increasing Strength<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align gdlr-core-no-p-space" style="padding-bottom: 35px;">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 16px; font-weight: 400; text-transform: none; color: #3a3a3a;">
                                                        <p>Increasing your ability to lift more weight or perform more reps with the same weight. This is typically accomplished through resistance training, such as weightlifting or bodyweight exercises.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-left-align" style="margin-left: 5px;">
                                                    <div class="gdlr-core-divider-container" style="max-width: 38px;">
                                                        <div
                                                            class="gdlr-core-divider-line gdlr-core-skin-divider"
                                                            style="
                                                                transform: skewX(150deg);
                                                                -webkit-transform: skewX(150deg);
                                                                border-color: var(--gradientBackground);
                                                                border-width: 7px;
                                                                border-radius: 0px;
                                                                -moz-border-radius: 0px;
                                                                -webkit-border-radius: 0px;
                                                            "
                                                        ></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-20" id="gdlr-core-column-67741">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding-right: 35px; padding-left: 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation="fadeInDown" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-image-item gdlr-core-item-pdb gdlr-core-left-align gdlr-core-item-pdlr" style="padding-bottom: 50px;">
                                                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image gdlr-core-image-item-style-rectangle" style="border-width: 0px; max-width: 60px;">
                                                        <img src="upload/Logo02.png" alt="11" width="120" height="120" title="Logo02" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 20px;">
                                                    <div class="gdlr-core-title-item-title-wrap">
                                                        <h3
                                                            class="gdlr-core-title-item-title gdlr-core-skin-title"
                                                            style="font-size: 30px; font-weight: 700; font-style: italic; letter-spacing: 0px; text-transform: none; color: #060606;"
                                                        >
                                                            Getting Fit<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align gdlr-core-no-p-space" style="padding-bottom: 35px;">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 16px; font-weight: 400; text-transform: none; color: #3a3a3a;">
                                                        <p>Getting fit encompasses a range of physical and mental health benefits. It includes improving cardiovascular health, increasing muscular endurance, reducing body fat, and improving overall health and wellness.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-left-align" style="margin-left: 5px;">
                                                    <div class="gdlr-core-divider-container" style="max-width: 38px;">
                                                        <div
                                                            class="gdlr-core-divider-line gdlr-core-skin-divider"
                                                            style="
                                                                transform: skewX(150deg);
                                                                -webkit-transform: skewX(150deg);
                                                                border-color: var(--gradientBackground);
                                                                border-width: 7px;
                                                                border-radius: 0px;
                                                                -moz-border-radius: 0px;
                                                                -webkit-border-radius: 0px;
                                                            "
                                                        ></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-20" id="gdlr-core-column-15619">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding-right: 35px; padding-left: 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation="fadeInUp" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-image-item gdlr-core-item-pdb gdlr-core-left-align gdlr-core-item-pdlr" style="padding-bottom: 50px;">
                                                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image gdlr-core-image-item-style-rectangle" style="border-width: 0px; max-width: 60px;">
                                                        <img src="upload/Logo03.png" alt="11" width="120" height="120" title="Logo03" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 20px;">
                                                    <div class="gdlr-core-title-item-title-wrap">
                                                        <h3
                                                            class="gdlr-core-title-item-title gdlr-core-skin-title"
                                                            style="font-size: 30px; font-weight: 700; font-style: italic; letter-spacing: 0px; text-transform: none; color: #060606;"
                                                        >
                                                            Bodybuilding<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align gdlr-core-no-p-space" style="padding-bottom: 35px;">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 16px; font-weight: 400; text-transform: none; color: #3a3a3a;">
                                                        <p>Bodybuilding, accomplished through a combination of resistance training, a strict diet, and supplements. Getting ready as a Bodybuilder to compete in competitions to showcase physique and muscular development.

</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-left-align" style="margin-left: 5px;">
                                                    <div class="gdlr-core-divider-container" style="max-width: 38px;">
                                                        <div
                                                            class="gdlr-core-divider-line gdlr-core-skin-divider"
                                                            style="
                                                                transform: skewX(150deg);
                                                                -webkit-transform: skewX(150deg);
                                                                border-color: var(--gradientBackground);
                                                                border-width: 7px;
                                                                border-radius: 0px;
                                                                -moz-border-radius: 0px;
                                                                -webkit-border-radius: 0px;
                                                            "
                                                        ></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>














                    <!-- <div class="gdlr-core-pbf-wrapper" style="padding: 175px 0px 180px 0px;" data-float-social="social-dark">
                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #ffffff;">
                            <div
                                class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                                style="background-image: url(upload/OUR-CLASSES-BG.jpg); background-repeat: no-repeat; background-position: top center;"
                                data-parallax-speed="0"
                            ></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-shape-divider-item" id="gdlr-core-shape-divider-34960">
                                        <div class="gdlr-core-shape-divider-wrap gdlr-core-pos-top">
                                            <svg preserveaspectratio="none" viewbox="0 0 1000 100" xmlns="http://www.w3.org/2000/svg"><path d="m0 6v-6h1000v100z"></path></svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-36 gdlr-core-column-first" id="gdlr-core-column-74770">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="margin-bottom: 75px; padding-right: 70px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation="fadeInLeft" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-left-align" style="margin-bottom: 20px; margin-left: 5px;">
                                                    <div class="gdlr-core-divider-container" style="max-width: 38px;">
                                                        <div
                                                            class="gdlr-core-divider-line gdlr-core-skin-divider"
                                                            style="
                                                                transform: skewX(150deg);
                                                                -webkit-transform: skewX(150deg);
                                                                border-color: var(--gradientBackground);
                                                                border-width: 7px;
                                                                border-radius: 0px;
                                                                -moz-border-radius: 0px;
                                                                -webkit-border-radius: 0px;
                                                            "
                                                        ></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                                                    <div class="gdlr-core-title-item-title-wrap">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 61px; font-weight: 700; font-style: italic; color: #1e1e1e;">
                                                            Our Classes<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align gdlr-core-no-p-space" style="padding-bottom: 0px;">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 18px; line-height: 1.6; font-weight: 400; letter-spacing: 0.34px; text-transform: none; color: #606060;">
                                                        <p>It is imperative that everyone maximises the time they spend exercising to help guarantee optimal results.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-76328">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation="fadeInUp" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-page-list-item gdlr-core-item-pdb clearfix gdlr-core-item-pdlr" id="gdlr-core-page-list-42937">
                                                    <div
                                                        class="gdlr-core-flexslider flexslider gdlr-core-js-2"
                                                        data-type="carousel"
                                                        data-column="3"
                                                        data-move="1"
                                                        data-nav="navigation-inner"
                                                        data-nav-parent="self"
                                                        data-disable-autoslide="1"
                                                    >
                                                        <div class="gdlr-core-flexslider-custom-nav gdlr-core-style-navigation-inner gdlr-core-center-align">
                                                            <i class="icon-arrow-left flex-prev" style="color: #a1a1a1; font-size: 43px; margin-top: -70px; left: -95px;"></i>
                                                            <i class="icon-arrow-right flex-next" style="color: #a1a1a1; font-size: 43px; margin-top: -70px; right: -95px;"></i>
                                                        </div>
                                                        <ul class="slides">
                                                            <li>
                                                                <div class="gdlr-core-page-list gdlr-core-style-grid">
                                                                    <div class="gdlr-core-thumbnail gdlr-core-media-image gdlr-core-outer-frame-element gdlr-core-zoom-on-hover">
                                                                        <a href="hiit.html">
                                                                            <img src="upload/iStock-1149242325-1-600x800.jpg" alt="11" width="600" height="800" title="iStock-1149242325" />
                                                                        </a>
                                                                    </div>
                                                                    <h3 class="gdlr-core-title gdlr-core-skin-title" style="font-size: 23px; text-transform: uppercase;"><a href="hiit.html">HIIT</a></h3>
                                                                    <div class="gdlr-core-title-divider" style="transform: skewX(150deg); -webkit-transform: skewX(150deg); border-color: var(--gradientBackground);"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="gdlr-core-page-list gdlr-core-style-grid">
                                                                    <div class="gdlr-core-thumbnail gdlr-core-media-image gdlr-core-outer-frame-element gdlr-core-zoom-on-hover">
                                                                        <a href="cardio.html">
                                                                            <img src="upload/shutterstock_1058059004-600x800.jpg" alt="11" width="600" height="800" title="shutterstock_1058059004" />
                                                                        </a>
                                                                    </div>
                                                                    <h3 class="gdlr-core-title gdlr-core-skin-title" style="font-size: 23px; text-transform: uppercase;"><a href="cardio.html">Cardio</a></h3>
                                                                    <div class="gdlr-core-title-divider" style="transform: skewX(150deg); -webkit-transform: skewX(150deg); border-color: var(--gradientBackground);"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="gdlr-core-page-list gdlr-core-style-grid">
                                                                    <div class="gdlr-core-thumbnail gdlr-core-media-image gdlr-core-outer-frame-element gdlr-core-zoom-on-hover">
                                                                        <a href="online.html">
                                                                            <img
                                                                                src="upload/image-from-rawpixel-id-14141-jpeg-600x800.jpg"
                                                                                alt="11"
                                                                                width="600"
                                                                                height="800"
                                                                                title="image-from-rawpixel-id-14141-jpeg"
                                                                            />
                                                                        </a>
                                                                    </div>
                                                                    <h3 class="gdlr-core-title gdlr-core-skin-title" style="font-size: 23px; text-transform: uppercase;"><a href="online.html">Personal Training</a></h3>
                                                                    <div class="gdlr-core-title-divider" style="transform: skewX(150deg); -webkit-transform: skewX(150deg); border-color: var(--gradientBackground);"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="gdlr-core-page-list gdlr-core-style-grid">
                                                                    <div class="gdlr-core-thumbnail gdlr-core-media-image gdlr-core-outer-frame-element gdlr-core-zoom-on-hover">
                                                                        <a href="mind-body.html">
                                                                            <img
                                                                                src="upload/image-from-rawpixel-id-1201598-jpeg-600x800.jpg"
                                                                                alt="11"
                                                                                width="600"
                                                                                height="800"
                                                                                title="image-from-rawpixel-id-1201598-jpeg"
                                                                            />
                                                                        </a>
                                                                    </div>
                                                                    <h3 class="gdlr-core-title gdlr-core-skin-title" style="font-size: 23px; text-transform: uppercase;"><a href="mind-body.html">Mind &amp; Body</a></h3>
                                                                    <div class="gdlr-core-title-divider" style="transform: skewX(150deg); -webkit-transform: skewX(150deg); border-color: var(--gradientBackground);"></div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                                  <!--   <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align" style="padding-bottom: 0px;">
                                                    <a
                                                        class="gdlr-core-button gdlr-core-button-gradient gdlr-core-center-align gdlr-core-button-no-border"
                                                        href="classes.html"
                                                        style="
                                                            transform: skewX(-15deg);
                                                            -webkit-transform: skewX(-15deg);
                                                            font-size: 17px;
                                                            font-style: italic;
                                                            font-weight: 700;
                                                            color: #ffffff;
                                                            padding: 16px 37px 16px 37px;
                                                            text-transform: capitalize;
                                                            border-radius: 0px;
                                                            -moz-border-radius: 0px;
                                                            -webkit-border-radius: 0px;
                                                            background: var(--gradientBackground);
                                                        "
                                                    >
                                                        <span class="gdlr-core-content" style="transform: skewX(15deg); -webkit-transform: skewX(15deg);">
                                                            All Classes<i class="gdlr-core-pos-right gdlr-icon-oblique-arrow" style="color: #ffffff;"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-shape-divider-item" id="gdlr-core-shape-divider-32362">
                                        <div class="gdlr-core-shape-divider-wrap gdlr-core-pos-bottom">
                                            <svg preserveaspectratio="none" viewbox="0 0 1000 100" xmlns="http://www.w3.org/2000/svg"><path d="m0 6v-6h1000v100z"></path></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper" style="padding: 135px 0px 40px 0px;" data-float-social="social-light">
                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #0c0c0c;"></div>
                        <div class="gdlr-core-pbf-background-wrap" style="top: 30px;">
                            <div
                                class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                                style="background-image: url(upload/TEST-Black-BG.jpg); background-repeat: no-repeat; background-position: top center;"
                                data-parallax-speed="0"
                            ></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-84878">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation="fadeInLeft" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-left-align" style="margin-left: 5px;">
                                                    <div class="gdlr-core-divider-container" style="max-width: 38px;">
                                                        <div
                                                            class="gdlr-core-divider-line gdlr-core-skin-divider"
                                                            style="
                                                                transform: skewX(150deg);
                                                                -webkit-transform: skewX(150deg);
                                                                border-color: var(--gradientBackground);
                                                                border-width: 7px;
                                                                border-radius: 0px;
                                                                -moz-border-radius: 0px;
                                                                -webkit-border-radius: 0px;
                                                            "
                                                        ></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 100px;">
                                                    <div class="gdlr-core-title-item-title-wrap">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 61px; font-weight: 700; font-style: italic; letter-spacing: 0px; color: #ffffff;">
                                                            WHAT CUTOMERS SAY<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                            <div class="gdlr-core-pbf-element">
                                                <div
                                                    class="gdlr-core-testimonial-item gdlr-core-item-pdb clearfix gdlr-core-testimonial-style-image-left gdlr-core-item-pdlr"
                                                    style="padding-bottom: 0px;"
                                                    id="gdlr-core-testimonial-51699"
                                                >
                                                    <div
                                                        class="gdlr-core-flexslider flexslider gdlr-core-js-2"
                                                        data-type="carousel"
                                                        data-column="1"
                                                        data-move="1"
                                                        data-nav="navigation-outer"
                                                        data-nav-parent="self"
                                                        data-vcenter-nav="1"
                                                        data-disable-autoslide="1"
                                                    >
                                                        <div class="gdlr-core-flexslider-custom-nav gdlr-core-style-navigation-outer gdlr-core-center-align" style="margin-top: -40px;">
                                                            <i class="icon-arrow-left flex-prev" style="color: #555555; font-size: 43px; left: -95px;"></i>
                                                            <i class="icon-arrow-right flex-next" style="color: #555555; font-size: 43px; right: -95px;"></i>
                                                        </div>
                                                        <ul class="slides">
                                                            <li class="gdlr-core-item-mglr">
                                                                <div class="gdlr-core-testimonial clearfix">
                                                                    <div class="gdlr-core-testimonial-author-image gdlr-core-media-image">
                                                                        <img src="upload/Jane.jpg" alt="11" width="979" height="816" title="Jane" />
                                                                    </div>
                                                                    <div class="gdlr-core-testimonial-content-wrap" style="padding-top: 110px;">
                                                                        <div class="gdlr-core-testimonial-quote gdlr-core-quote-font gdlr-core-skin-icon" style="font-size: 278px; font-weight: 700; margin-top: 40px; color: var(--gradientBackground);">
                                                                            &#8220;
                                                                        </div>
                                                                        <div
                                                                            class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content"
                                                                            style="font-size: 19px; font-style: normal; font-weight: 400; letter-spacing: 0px; color: #ffffff;"
                                                                        >
                                                                            <p class="p1">
                                                                                Balal is an excellent gym trainer who goes above and beyond to help his clients achieve their fitness goals. He is knowledgeable, patient, and always willing to answer any questions I have about exercises or nutrition. Thanks to his guidance, I have seen significant improvements in my strength and overall fitness level. <span class="s1">👍 🤩 </span>
                                                                            </p>
                                                                        </div>
                                                                        <div
                                                                            class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title"
                                                                            style="color: #ffffff; font-size: 20px; font-weight: 700; font-style: italic; letter-spacing: 0px; text-transform: uppercase;"
                                                                        >
                                                                           Yusuf
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div class="gdlr-core-testimonial clearfix">
                                                                    <div class="gdlr-core-testimonial-author-image gdlr-core-media-image">
                                                                        <img src="upload/P02.jpg" alt="11" width="979" height="816" title="P02" />
                                                                    </div>
                                                                    <div class="gdlr-core-testimonial-content-wrap" style="padding-top: 110px;">
                                                                        <div class="gdlr-core-testimonial-quote gdlr-core-quote-font gdlr-core-skin-icon" style="font-size: 278px; font-weight: 700; margin-top: 40px; color: var(--gradientBackground);">
                                                                            &#8220;
                                                                        </div>
                                                                        <div
                                                                            class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content"
                                                                            style="font-size: 19px; font-style: normal; font-weight: 400; letter-spacing: 0px; color: #ffffff;"
                                                                        >
                                                                            <p>
                                                                                I have been working with Balal for several months now, and I can honestly say he is the best trainer I have ever had. He takes the time to understand my goals and tailors my workouts to help me achieve them. His positive attitude and encouragement have helped me stay motivated and on track.🔥
                                                                            </p>
                                                                        </div>
                                                                        <div
                                                                            class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title"
                                                                            style="color: #ffffff; font-size: 20px; font-weight: 700; font-style: italic; letter-spacing: 0px; text-transform: uppercase;"
                                                                        >
                                                                           Wahab
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div class="gdlr-core-testimonial clearfix">
                                                                    <div class="gdlr-core-testimonial-author-image gdlr-core-media-image">
                                                                        <img src="upload/P03.jpg" alt="11" width="979" height="816" title="P03" />
                                                                    </div>
                                                                    <div class="gdlr-core-testimonial-content-wrap" style="padding-top: 110px;">
                                                                        <div class="gdlr-core-testimonial-quote gdlr-core-quote-font gdlr-core-skin-icon" style="font-size: 278px; font-weight: 700; margin-top: 40px; color: var(--gradientBackground);">
                                                                            &#8220;
                                                                        </div>
                                                                        <div
                                                                            class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content"
                                                                            style="font-size: 19px; font-style: normal; font-weight: 400; letter-spacing: 0px; color: #ffffff;"
                                                                        >
                                                                            <p>
                                                                                Balal is an exceptional trainer who is not only knowledgeable about fitness but also genuinely cares about his clients' well-being. He takes a holistic approach to training, emphasizing the importance of nutrition and rest alongside exercise. I have seen tremendous progress in my fitness journey under his guidance. <span class="emoji">🚴‍♂️</span>
                                                                            </p>
                                                                        </div>
                                                                        <div
                                                                            class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title"
                                                                            style="color: #ffffff; font-size: 20px; font-weight: 700; font-style: italic; letter-spacing: 0px; text-transform: uppercase;"
                                                                        >
                                                                           Oscar
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div class="gdlr-core-testimonial clearfix">
                                                                    <div class="gdlr-core-testimonial-author-image gdlr-core-media-image">
                                                                        <img src="upload/P4.jpg" alt="11" width="979" height="816" title="P4" />
                                                                    </div>
                                                                    <div class="gdlr-core-testimonial-content-wrap" style="padding-top: 110px;">
                                                                        <div class="gdlr-core-testimonial-quote gdlr-core-quote-font gdlr-core-skin-icon" style="font-size: 278px; font-weight: 700; margin-top: 40px; color: var(--gradientBackground);">
                                                                            &#8220;
                                                                        </div>
                                                                        <div
                                                                            class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content"
                                                                            style="font-size: 19px; font-style: normal; font-weight: 400; letter-spacing: 0px; color: #ffffff;"
                                                                        >
                                                                            <p>
                                                                               I cannot recommend Balal enough! He is a fantastic trainer who is passionate about helping his clients reach their full potential. He is always available to answer questions and provide feedback, and his workouts are challenging but also fun. Thanks to him, I feel stronger, healthier, and more confident in my fitness abilities.🔥
                                                                            </p>
                                                                        </div>
                                                                        <div
                                                                            class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title"
                                                                            style="color: #ffffff; font-size: 20px; font-weight: 700; font-style: italic; letter-spacing: 0px; text-transform: uppercase;"
                                                                        >
                                                                            Adeel Khalil
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-50638">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="margin: 0px 0px 0px 0px; padding: 80px 0px 0px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align" style="padding-bottom: 0px;">
                                                    <a class="gdlr-core-button gdlr-core-button-transparent gdlr-core-center-align gdlr-core-button-no-border" href="review.html" id="gdlr-core-button-id-81067">
                                                        <span class="gdlr-core-content" style="transform: skewX(15deg); -webkit-transform: skewX(15deg);">More Reviews<i class="gdlr-core-pos-right gdlr-icon-oblique-arrow"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-60562">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 60px 0px 5px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-image-item gdlr-core-item-pdb gdlr-core-right-align gdlr-core-item-pdlr" style="padding-bottom: 0px;">
                                                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image gdlr-core-image-item-style-rectangle" style="border-width: 0px; max-width: 106px;">
                                                        <img src="upload/Google.png" alt="11" width="212" height="80" title="Google" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper" style="padding: 118px 0px 170px 0px;" data-float-social="social-dark">
                        <div class="gdlr-core-pbf-background-wrap">
                            <div
                                class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                                style="background-image: url(upload/NEWS-BGG.jpg); background-repeat: no-repeat; background-position: center;"
                                data-parallax-speed="0"
                            ></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first" id="gdlr-core-column-2689">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 10px 50px 0px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation="fadeInLeft" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-left-align" style="margin-bottom: 20px; margin-left: 5px;">
                                                    <div class="gdlr-core-divider-container" style="max-width: 38px;">
                                                        <div
                                                            class="gdlr-core-divider-line gdlr-core-skin-divider"
                                                            style="
                                                                transform: skewX(150deg);
                                                                -webkit-transform: skewX(150deg);
                                                                border-color: var(--gradientBackground);
                                                                border-width: 7px;
                                                                border-radius: 0px;
                                                                -moz-border-radius: 0px;
                                                                -webkit-border-radius: 0px;
                                                            "
                                                        ></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 35px;">
                                                    <div class="gdlr-core-title-item-title-wrap">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 61px; font-weight: 700; font-style: italic; letter-spacing: 0px; color: #1e1e1e;">
                                                            Latest Blog<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align gdlr-core-no-p-space" style="padding-bottom: 35px;">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 18px; font-weight: 400; letter-spacing: 0.34px; text-transform: none; color: #606060;">
                                                        <p>It is imperative that everyone maximises the time they spend exercising to help guarantee optimal results.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px;">
                                                    <a class="gdlr-core-button gdlr-core-button-transparent gdlr-core-left-align gdlr-core-button-no-border" href="blog-standard.php" id="gdlr-core-button-id-39226">
                                                        <span class="gdlr-core-content" style="transform: skewX(15deg); -webkit-transform: skewX(15deg);">Read The Blog<i class="gdlr-core-pos-right gdlr-icon-oblique-arrow"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-40">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix gdlr-core-style-blog-column-hover-bg" id="gdlr-core-blog-7928">
                                                    <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout="masonry">
                                                       
                                                       
                                                       <?php
                                                        $q = mysqli_query($con, "SELECT * FROM blog ") or die('Error197');
                                                        while ($row = mysqli_fetch_array($q)) {

                                                        echo '<div class="gdlr-core-item-list gdlr-core-item-pdlr gdlr-core-column-30">
                                                            <div class="gdlr-core-blog-column-hover-background gdlr-core-item-mgb clearfix">
                                                                <div class="gdlr-core-background" style="background-image: url(upload/image-from-rawpixel-id-2111610-jpeg.jpg);">
                                                                    <div class="gdlr-core-background-overlay" style="background-color: var(--gradientBackground); opacity: 0.8;"></div>
                                                                </div>
                                                                <div class="gdlr-core-content">
                                                                    <div class="gdlr-core-column-date">
                                                                        <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                            <span class="gdlr-core-head"><i class="icon_clock_alt"></i></span>
                                                                        </span>
                                                                    </div>
                                                                    <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 27px; font-style: italic; font-weight: 700; letter-spacing: 0px;">
                                                                        <a href="blogpost.php?idb='.$row['ID'].'">'.$row['title'].'</a>
                                                                    </h3>
                                                                    <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                        <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-tag">
                                                                            <span class="gdlr-core-head"><i class="icon_tags_alt"></i></span>
                                                                            
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>';
                                                        } 
                                                        ?>
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-shape-divider-item" id="gdlr-core-shape-divider-22053">
                                        <div class="gdlr-core-shape-divider-wrap gdlr-core-pos-bottom">
                                            <svg preserveaspectratio="none" viewbox="0 0 1000 100" xmlns="http://www.w3.org/2000/svg"><path d="m0 6v-6h1000v100z"></path></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper" style="padding: 70px 0px 100px 0px;" data-float-social="social-light">
                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #0c0c0c;">
                            <div
                                class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                                style="background-image: url(upload/Join-US-BG-1.jpg); background-repeat: no-repeat; background-position: center;"
                                data-parallax-speed="0"
                            ></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" data-skin="Plan Form" id="gdlr-core-column-26236">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 10px 0px 0px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" style="max-width: 870px;" data-gdlr-animation="fadeInUp" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-left-align" style="margin-left: 5px;">
                                                    <div class="gdlr-core-divider-container" style="max-width: 38px;">
                                                        <div
                                                            class="gdlr-core-divider-line gdlr-core-skin-divider"
                                                            style="
                                                                transform: skewX(150deg);
                                                                -webkit-transform: skewX(150deg);
                                                                border-color: var(--gradientBackground);
                                                                border-width: 7px;
                                                                border-radius: 0px;
                                                                -moz-border-radius: 0px;
                                                                -webkit-border-radius: 0px;
                                                            "
                                                        ></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 50px;">
                                                    <div class="gdlr-core-title-item-title-wrap">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 61px; font-weight: 700; font-style: italic; letter-spacing: 0px; color: #ffffff;">
                                                            Join Now<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                        </h3>
                                                    </div>
                                                    <span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 18px; font-style: normal; letter-spacing: 0px; color: #adadad;">
                                                        Select Your Plan
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-price-plan-item gdlr-core-js gdlr-core-item-pdlr gdlr-core-item-pdb">
                                                    <div class="gdlr-core-price-plan-options">
                                                        <div class="gdlr-core-price-plan clearfix gdlr-core-active" data-tab-id="1">
                                                            <div class="gdlr-core-price-plan-option"><span></span></div>
                                                            <div class="gdlr-core-price-plan-title">Taster Session</div>
                                                         <!--    <div class="gdlr-core-price-plan-price">$299 / Year</div> -->
                                                            <div class="gdlr-core-price-plan-content" style="color: #a8a8a8;">
                                                                No Term, train with me for one class and get introduced to the gym lifestyle.
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-price-plan clearfix" data-tab-id="2">
                                                            <div class="gdlr-core-price-plan-option"><span></span></div>
                                                            <div class="gdlr-core-price-plan-title">90 Day Tranformation</div>
                                                           <!--  <div class="gdlr-core-price-plan-price">$29 / Month</div> -->
                                                            <div class="gdlr-core-price-plan-content" style="color: #a8a8a8;">Your intial transformation where huge gains are made in just 90 days.</div>
                                                        </div>
                                                        <div class="gdlr-core-price-plan clearfix" data-tab-id="3">
                                                            <div class="gdlr-core-price-plan-option"><span></span></div>
                                                            <div class="gdlr-core-price-plan-title">6 Month Transformation</div>
                                                           <!--  <div class="gdlr-core-price-plan-price">$15 / Week</div> -->
                                                            <div class="gdlr-core-price-plan-content" style="color: #a8a8a8;">Your ultimate pathway to build that dream body.</div>
                                                        </div>
                                                      <a href="join-us.html">  <div class="gdlr-core-step2 gdlr-core-button gdlr-core-rectangle" style="transform: skewX(-20deg); -webkit-transform: skewX(-20deg);">
                                                            <span class="gdlr-core-content" style="transform: skewX(20deg); -webkit-transform: skewX(20deg);">Next Step<i class="gdlr-icon-oblique-arrow"></i></span>
                                                        </div>
                                                    </a> 
                                                    </div>
                                                    <div class="gdlr-core-price-plan-forms">
                                                        <div>
                                                            <div class="gdlr-core-price-plan-selected-title">You select : <strong>One Year Plan</strong></div>
                                                            <div role="form" class="wpcf7" id="wpcf7-f10921-p14670-o1" lang="en-US" dir="ltr">
                                                                <div class="screen-reader-response">
                                                                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                                                                    <ul></ul>
                                                                </div>
                                                                <form action="/zyth/gym/#wpcf7-f10921-p14670-o1" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
                                                                    <div style="display: none;">
                                                                        <input type="hidden" name="_wpcf7" value="10921" />
                                                                        <input type="hidden" name="_wpcf7_version" value="5.5.1" />
                                                                        <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                                                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f10921-p14670-o1" />
                                                                        <input type="hidden" name="_wpcf7_container_post" value="14670" />
                                                                        <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                                                                    </div>
                                                                    <p>Please fill your information</p>
                                                                    <div class="gdlr-core-input-wrap gdlr-core-full-width gdlr-core-bottom-border gdlr-core-with-column">
                                                                        <div class="gdlr-core-column-30">
                                                                            <span class="wpcf7-form-control-wrap your-first-name">
                                                                                <input
                                                                                    type="text"
                                                                                    name="your-first-name"
                                                                                    value=""
                                                                                    size="40"
                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                    aria-required="true"
                                                                                    aria-invalid="false"
                                                                                    placeholder="First Name*"
                                                                                />
                                                                            </span>
                                                                        </div>
                                                                        <div class="gdlr-core-column-30">
                                                                            <span class="wpcf7-form-control-wrap your-last-name">
                                                                                <input
                                                                                    type="text"
                                                                                    name="your-last-name"
                                                                                    value=""
                                                                                    size="40"
                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                    aria-required="true"
                                                                                    aria-invalid="false"
                                                                                    placeholder="Last Name*"
                                                                                />
                                                                            </span>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                        <div class="gdlr-core-column-30">
                                                                            <span class="wpcf7-form-control-wrap your-phone">
                                                                                <input
                                                                                    type="text"
                                                                                    name="your-phone"
                                                                                    value=""
                                                                                    size="40"
                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                    aria-required="true"
                                                                                    aria-invalid="false"
                                                                                    placeholder="Phone*"
                                                                                />
                                                                            </span>
                                                                        </div>
                                                                        <div class="gdlr-core-column-30">
                                                                            <span class="wpcf7-form-control-wrap your-email">
                                                                                <input
                                                                                    type="email"
                                                                                    name="your-email"
                                                                                    value=""
                                                                                    size="40"
                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                                    aria-required="true"
                                                                                    aria-invalid="false"
                                                                                    placeholder="Email*"
                                                                                />
                                                                            </span>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                        <div class="gdlr-core-column-30">
                                                                            <span class="wpcf7-form-control-wrap bdate">
                                                                                <input
                                                                                    type="date"
                                                                                    name="bdate"
                                                                                    value=""
                                                                                    class="wpcf7-form-control wpcf7-date wpcf7-validates-as-required wpcf7-validates-as-date"
                                                                                    aria-required="true"
                                                                                    aria-invalid="false"
                                                                                />
                                                                            </span>
                                                                        </div>
                                                                        <div class="gdlr-core-column-30">
                                                                            <span class="wpcf7-form-control-wrap your-zipcode">
                                                                                <input
                                                                                    type="text"
                                                                                    name="your-zipcode"
                                                                                    value=""
                                                                                    size="40"
                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                    aria-required="true"
                                                                                    aria-invalid="false"
                                                                                    placeholder="Zip Code*"
                                                                                />
                                                                            </span>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                        <div class="gdlr-core-column-30" style="margin-bottom: 35px;">
                                                                            <span class="wpcf7-form-control-wrap your-message">
                                                                                <textarea
                                                                                    name="your-message"
                                                                                    cols="40"
                                                                                    rows="10"
                                                                                    class="wpcf7-form-control wpcf7-textarea"
                                                                                    aria-invalid="false"
                                                                                    placeholder="Additional Request"
                                                                                ></textarea>
                                                                            </span>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                        <div class="gdlr-core-column-60">
                                                                            <span class="wpcf7-form-control-wrap checkbox-528">
                                                                                <span class="wpcf7-form-control wpcf7-checkbox wpcf7-validates-as-required gdlr-core-round-checkbox">
                                                                                    <span class="wpcf7-list-item first last">
                                                                                        <label><input type="checkbox" name="checkbox-528[]" value="" /><span class="wpcf7-list-item-label"></span></label>
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                            I've read and agree to the <a href="#" target="_blank">Terms and Data Privacy Policy</a>
                                                                        </div>
                                                                        <div class="clear" style="margin-bottom: 30px;"></div>
                                                                        <div class="gdlr-core-column-60 gdlr-core-left-align">
                                                                            <input type="submit" value="Submit Now" class="wpcf7-form-control has-spinner wpcf7-submit gdlr-core-large" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="wpcf7-response-output" aria-hidden="true"></div>
                                                                </form>
                                                            </div>
                                                            <div class="gdlr-core-price-plan-selected-back gdlr-core-step1"><i class="ion-ios-arrow-thin-left"></i>Go back to previous step</div>
                                                        </div>
                                                        <div>
                                                            <div class="gdlr-core-price-plan-selected-title">You select : <strong>One Month Plan</strong></div>
                                                            <div role="form" class="wpcf7" id="wpcf7-f15044-p14670-o2" lang="en-US" dir="ltr">
                                                                <div class="screen-reader-response">
                                                                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                                                                    <ul></ul>
                                                                </div>
                                                                <form action="/zyth/gym/#wpcf7-f15044-p14670-o2" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
                                                                    <div style="display: none;">
                                                                        <input type="hidden" name="_wpcf7" value="15044" />
                                                                        <input type="hidden" name="_wpcf7_version" value="5.5.1" />
                                                                        <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                                                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f15044-p14670-o2" />
                                                                        <input type="hidden" name="_wpcf7_container_post" value="14670" />
                                                                        <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                                                                    </div>
                                                                    <p>Please fill your information</p>
                                                                    <div class="gdlr-core-input-wrap gdlr-core-full-width gdlr-core-bottom-border gdlr-core-with-column">
                                                                        <div class="gdlr-core-column-30">
                                                                            <span class="wpcf7-form-control-wrap your-first-name">
                                                                                <input
                                                                                    type="text"
                                                                                    name="your-first-name"
                                                                                    value=""
                                                                                    size="40"
                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                    aria-required="true"
                                                                                    aria-invalid="false"
                                                                                    placeholder="First Name*"
                                                                                />
                                                                            </span>
                                                                        </div>
                                                                        <div class="gdlr-core-column-30">
                                                                            <span class="wpcf7-form-control-wrap your-last-name">
                                                                                <input
                                                                                    type="text"
                                                                                    name="your-last-name"
                                                                                    value=""
                                                                                    size="40"
                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                    aria-required="true"
                                                                                    aria-invalid="false"
                                                                                    placeholder="Last Name*"
                                                                                />
                                                                            </span>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                        <div class="gdlr-core-column-30">
                                                                            <span class="wpcf7-form-control-wrap your-phone">
                                                                                <input
                                                                                    type="text"
                                                                                    name="your-phone"
                                                                                    value=""
                                                                                    size="40"
                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                    aria-required="true"
                                                                                    aria-invalid="false"
                                                                                    placeholder="Phone*"
                                                                                />
                                                                            </span>
                                                                        </div>
                                                                        <div class="gdlr-core-column-30">
                                                                            <span class="wpcf7-form-control-wrap your-email">
                                                                                <input
                                                                                    type="email"
                                                                                    name="your-email"
                                                                                    value=""
                                                                                    size="40"
                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                                    aria-required="true"
                                                                                    aria-invalid="false"
                                                                                    placeholder="Email*"
                                                                                />
                                                                            </span>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                        <div class="gdlr-core-column-30">
                                                                            <span class="wpcf7-form-control-wrap bdate">
                                                                                <input
                                                                                    type="date"
                                                                                    name="bdate"
                                                                                    value=""
                                                                                    class="wpcf7-form-control wpcf7-date wpcf7-validates-as-required wpcf7-validates-as-date"
                                                                                    aria-required="true"
                                                                                    aria-invalid="false"
                                                                                />
                                                                            </span>
                                                                        </div>
                                                                        <div class="gdlr-core-column-30">
                                                                            <span class="wpcf7-form-control-wrap your-zipcode">
                                                                                <input
                                                                                    type="text"
                                                                                    name="your-zipcode"
                                                                                    value=""
                                                                                    size="40"
                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                    aria-required="true"
                                                                                    aria-invalid="false"
                                                                                    placeholder="Zip Code*"
                                                                                />
                                                                            </span>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                        <div class="gdlr-core-column-30" style="margin-bottom: 35px;">
                                                                            <span class="wpcf7-form-control-wrap your-message">
                                                                                <textarea
                                                                                    name="your-message"
                                                                                    cols="40"
                                                                                    rows="10"
                                                                                    class="wpcf7-form-control wpcf7-textarea"
                                                                                    aria-invalid="false"
                                                                                    placeholder="Additional Request"
                                                                                ></textarea>
                                                                            </span>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                        <div class="gdlr-core-column-60">
                                                                            <span class="wpcf7-form-control-wrap checkbox-528">
                                                                                <span class="wpcf7-form-control wpcf7-checkbox wpcf7-validates-as-required gdlr-core-round-checkbox">
                                                                                    <span class="wpcf7-list-item first last">
                                                                                        <label><input type="checkbox" name="checkbox-528[]" value="" /><span class="wpcf7-list-item-label"></span></label>
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                            I've read and agree to the <a href="#" target="_blank">Terms and Data Privacy Policy</a>
                                                                        </div>
                                                                        <div class="clear" style="margin-bottom: 30px;"></div>
                                                                        <div class="gdlr-core-column-60 gdlr-core-left-align">
                                                                            <input type="submit" value="Submit Now" class="wpcf7-form-control has-spinner wpcf7-submit gdlr-core-large" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="wpcf7-response-output" aria-hidden="true"></div>
                                                                </form>
                                                            </div>
                                                            <div class="gdlr-core-price-plan-selected-back gdlr-core-step1"><i class="ion-ios-arrow-thin-left"></i>Go back to previous step</div>
                                                        </div>
                                                        <div>
                                                            <div class="gdlr-core-price-plan-selected-title">You select : <strong>One Week Plan</strong></div>
                                                            <div role="form" class="wpcf7" id="wpcf7-f15045-p14670-o3" lang="en-US" dir="ltr">
                                                                <div class="screen-reader-response">
                                                                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                                                                    <ul></ul>
                                                                </div>
                                                                <form action="/zyth/gym/#wpcf7-f15045-p14670-o3" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
                                                                    <div style="display: none;">
                                                                        <input type="hidden" name="_wpcf7" value="15045" />
                                                                        <input type="hidden" name="_wpcf7_version" value="5.5.1" />
                                                                        <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                                                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f15045-p14670-o3" />
                                                                        <input type="hidden" name="_wpcf7_container_post" value="14670" />
                                                                        <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                                                                    </div>
                                                                    <p>Please fill your information</p>
                                                                    <div class="gdlr-core-input-wrap gdlr-core-full-width gdlr-core-bottom-border gdlr-core-with-column">
                                                                        <div class="gdlr-core-column-30">
                                                                            <span class="wpcf7-form-control-wrap your-first-name">
                                                                                <input
                                                                                    type="text"
                                                                                    name="your-first-name"
                                                                                    value=""
                                                                                    size="40"
                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                    aria-required="true"
                                                                                    aria-invalid="false"
                                                                                    placeholder="First Name*"
                                                                                />
                                                                            </span>
                                                                        </div>
                                                                        <div class="gdlr-core-column-30">
                                                                            <span class="wpcf7-form-control-wrap your-last-name">
                                                                                <input
                                                                                    type="text"
                                                                                    name="your-last-name"
                                                                                    value=""
                                                                                    size="40"
                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                    aria-required="true"
                                                                                    aria-invalid="false"
                                                                                    placeholder="Last Name*"
                                                                                />
                                                                            </span>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                        <div class="gdlr-core-column-30">
                                                                            <span class="wpcf7-form-control-wrap your-phone">
                                                                                <input
                                                                                    type="text"
                                                                                    name="your-phone"
                                                                                    value=""
                                                                                    size="40"
                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                    aria-required="true"
                                                                                    aria-invalid="false"
                                                                                    placeholder="Phone*"
                                                                                />
                                                                            </span>
                                                                        </div>
                                                                        <div class="gdlr-core-column-30">
                                                                            <span class="wpcf7-form-control-wrap your-email">
                                                                                <input
                                                                                    type="email"
                                                                                    name="your-email"
                                                                                    value=""
                                                                                    size="40"
                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                                    aria-required="true"
                                                                                    aria-invalid="false"
                                                                                    placeholder="Email*"
                                                                                />
                                                                            </span>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                        <div class="gdlr-core-column-30">
                                                                            <span class="wpcf7-form-control-wrap bdate">
                                                                                <input
                                                                                    type="date"
                                                                                    name="bdate"
                                                                                    value=""
                                                                                    class="wpcf7-form-control wpcf7-date wpcf7-validates-as-required wpcf7-validates-as-date"
                                                                                    aria-required="true"
                                                                                    aria-invalid="false"
                                                                                />
                                                                            </span>
                                                                        </div>
                                                                        <div class="gdlr-core-column-30">
                                                                            <span class="wpcf7-form-control-wrap your-zipcode">
                                                                                <input
                                                                                    type="text"
                                                                                    name="your-zipcode"
                                                                                    value=""
                                                                                    size="40"
                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                    aria-required="true"
                                                                                    aria-invalid="false"
                                                                                    placeholder="Zip Code*"
                                                                                />
                                                                            </span>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                        <div class="gdlr-core-column-30" style="margin-bottom: 35px;">
                                                                            <span class="wpcf7-form-control-wrap your-message">
                                                                                <textarea
                                                                                    name="your-message"
                                                                                    cols="40"
                                                                                    rows="10"
                                                                                    class="wpcf7-form-control wpcf7-textarea"
                                                                                    aria-invalid="false"
                                                                                    placeholder="Additional Request"
                                                                                ></textarea>
                                                                            </span>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                        <div class="gdlr-core-column-60">
                                                                            <span class="wpcf7-form-control-wrap checkbox-528">
                                                                                <span class="wpcf7-form-control wpcf7-checkbox wpcf7-validates-as-required gdlr-core-round-checkbox">
                                                                                    <span class="wpcf7-list-item first last">
                                                                                        <label><input type="checkbox" name="checkbox-528[]" value="" /><span class="wpcf7-list-item-label"></span></label>
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                            I've read and agree to the <a href="#" target="_blank">Terms and Data Privacy Policy</a>
                                                                        </div>
                                                                        <div class="clear" style="margin-bottom: 30px;"></div>
                                                                        <div class="gdlr-core-column-60 gdlr-core-left-align">
                                                                            <input type="submit" value="Submit Now" class="wpcf7-form-control has-spinner wpcf7-submit gdlr-core-large" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="wpcf7-response-output" aria-hidden="true"></div>
                                                                </form>
                                                            </div>
                                                            <div class="gdlr-core-price-plan-selected-back gdlr-core-step1"><i class="ion-ios-arrow-thin-left"></i>Go back to previous step</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                 
                    <div class="gdlr-core-pbf-wrapper" style="padding: 40px 40px 65px 40px;" data-float-social="social-dark">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-48908">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 0px 0px 0px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-gallery-item gdlr-core-item-pdb clearfix gdlr-core-gallery-item-style-grid-no-space gdlr-core-item-pdlr" style="padding-bottom: 45px;">
                                                    <div class="gdlr-core-gallery-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                                                        <div class="gdlr-core-item-list gdlr-core-gallery-column gdlr-core-column-10 gdlr-core-column-first">
                                                            <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                                <a class="gdlr-core-lightgallery gdlr-core-js" href="upload/iStock-1141197680.jpg" data-lightbox-group="gdlr-core-img-group-1">
                                                                    <img src="upload/iStock-1141197680-600x600.jpg" alt="11" width="600" height="600" title="iStock-1141197680" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-item-list gdlr-core-gallery-column gdlr-core-column-10">
                                                            <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                                <a class="gdlr-core-lightgallery gdlr-core-js" href="upload/iStock-972833328.jpg" data-lightbox-group="gdlr-core-img-group-1">
                                                                    <img src="upload/iStock-972833328-600x600.jpg" alt="11" width="600" height="600" title="iStock-972833328" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-item-list gdlr-core-gallery-column gdlr-core-column-10">
                                                            <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                                <a class="gdlr-core-lightgallery gdlr-core-js" href="upload/iStock-1149242325.jpg" data-lightbox-group="gdlr-core-img-group-1">
                                                                    <img src="upload/iStock-1149242325-600x600.jpg" alt="11" width="600" height="600" title="iStock-1149242325" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-item-list gdlr-core-gallery-column gdlr-core-column-10">
                                                            <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                                <a class="gdlr-core-lightgallery gdlr-core-js" href="upload/iStock-1133759237.jpg" data-lightbox-group="gdlr-core-img-group-1">
                                                                    <img src="upload/iStock-1133759237-600x600.jpg" alt="11" width="600" height="600" title="iStock-1133759237" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-item-list gdlr-core-gallery-column gdlr-core-column-10">
                                                            <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                                <a class="gdlr-core-lightgallery gdlr-core-js" href="upload/shutterstock_1061709296.jpg" data-lightbox-group="gdlr-core-img-group-1">
                                                                    <img src="upload/shutterstock_1061709296-600x600.jpg" alt="11" width="600" height="600" title="shutterstock_1061709296" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-item-list gdlr-core-gallery-column gdlr-core-column-10">
                                                            <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                                <a class="gdlr-core-lightgallery gdlr-core-js" href="upload/iStock-1163928786.jpg" data-lightbox-group="gdlr-core-img-group-1">
                                                                    <img src="upload/iStock-1163928786-600x600.jpg" alt="11" width="600" height="600" title="iStock-1163928786" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align" style="padding-bottom: 0px;">
                                                    <a
                                                        class="gdlr-core-button gdlr-core-button-transparent gdlr-core-center-align gdlr-core-button-no-border"
                                                        href="https://www.instagram.com/balal_strength/"
                                                        target="_blank"
                                                        style="
                                                            font-size: 17px;
                                                            font-style: italic;
                                                            font-weight: 700;
                                                            letter-spacing: 0px;
                                                            color: #1a1a1a;
                                                            padding: 0px 0px 0px 0px;
                                                            text-transform: none;
                                                            border-radius: 0px;
                                                            -moz-border-radius: 0px;
                                                            -webkit-border-radius: 0px;
                                                        "
                                                    >
                                                        <span class="gdlr-core-content"><i class="gdlr-core-pos-left fa fa-instagram" style="font-size: 20px; color: #1a1a1a;"></i>Follow me on @balal_Strength</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper" style="padding: 40px 0px 100px 0px;" data-float-social="social-dark">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-left-align" style="margin-bottom: 15px; margin-left: 5px;">
                                                    <div class="gdlr-core-divider-container" style="max-width: 38px;">
                                                        <div
                                                            class="gdlr-core-divider-line gdlr-core-skin-divider"
                                                            style="
                                                                transform: skewX(150deg);
                                                                -webkit-transform: skewX(150deg);
                                                                border-color: var(--gradientBackground);
                                                                border-width: 7px;
                                                                border-radius: 0px;
                                                                -moz-border-radius: 0px;
                                                                -webkit-border-radius: 0px;
                                                            "
                                                        ></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 0px;">
                                                    <div class="gdlr-core-title-item-title-wrap">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 61px; font-weight: 700; font-style: italic; letter-spacing: 0px; color: #1e1e1e;">
                                                            Newsletter<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-30" id="gdlr-core-column-82588">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 35px 0px 0px 100px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-newsletter-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-style-transparent-bottom-border" style="padding-bottom: 0px;">
                                                    <div class="newsletter newsletter-subscription">
                                                        <form class="gdlr-core-newsletter-form clearfix" method="post" action="https://demo.goodlayers.com/zyth/gym/?na=s" onsubmit="return newsletter_check(this)">
                                                            <div class="gdlr-core-newsletter-email">
                                                                <input class="newsletter-email gdlr-core-skin-e-background gdlr-core-skin-e-content" placeholder="Your Email Address" type="email" name="ne" size="30" required="" />
                                                            </div>
                                                            <div class="gdlr-core-newsletter-submit"><input class="newsletter-submit" type="submit" value="Subscribe" /></div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer>
                <div class="zyth-footer-wrapper">
                    <div class="zyth-footer-container zyth-container clearfix">
                        <div class="zyth-footer-column zyth-item-pdlr zyth-column-15">
                            <div id="block-13" class="widget widget_block zyth-widget">
                                <span class="gdlr-core-space-shortcode" style="margin-top: -20px;"></span>
                                <div><img class="alignnone size-full wp-image-14474" src="upload/logox2.png" alt="" width="172" /></div>
                                <p><span class="gdlr-core-space-shortcode" style="margin-top: -50px;"></span><br /></p>
                                <div class="gdlr-core-social-network-item gdlr-core-item-pdb gdlr-core-none-align gdlr-direction-horizontal" style="padding-bottom: 0px;">
                                    <a href="#" target="_blank" class="gdlr-core-social-network-icon" title="facebook" style="font-size: 20px; margin-right: 32px;"><i class="fa fa-facebook"></i></a>
                                    <a href="#" target="_blank" class="gdlr-core-social-network-icon" title="pinterest" style="font-size: 20px; margin-right: 32px;"><i class="fa fa-pinterest-p"></i></a>
                                    <a href="#" target="_blank" class="gdlr-core-social-network-icon" title="twitter" style="font-size: 20px; margin-right: 32px;"><i class="fa fa-twitter"></i></a>
                                    <a href="#" target="_blank" class="gdlr-core-social-network-icon" title="instagram" style="font-size: 20px; margin-right: 32px;"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="zyth-footer-column zyth-item-pdlr zyth-column-30">
                            <div id="gdlr-core-custom-menu-widget-2" class="widget widget_gdlr-core-custom-menu-widget zyth-widget">
                                <h3 class="zyth-widget-title">Quick Contact</h3>
                                 <p style="color: #ffffff; text-transform: uppercase;">
                                    <strong>
                                        Currently working at - <br/>
                                        Sparkhill pool and fitness centre, </br/>
                                        Stratford Rd, Birmingham - B11 4EA
                                    </strong>
                                </p>

                                <span class="clear"></span>
                              
                            </div>
                        </div>
                        <div class="zyth-footer-column zyth-item-pdlr zyth-column-15">
                            <div id="block-9" class="widget widget_block zyth-widget">
                           
                                <span class="gdlr-core-space-shortcode" style="margin-top: 30px;"></span>
                                <p><i class="icon-phone" style="font-size: 17px; color: #ffffff; margin-right: 11px;"></i>07864069985</p>
                                <p>
                                    <i class="icon-envelope-open" style="font-size: 17px; color: #ffffff; margin-right: 11px;"></i>
                                    <a href="#">Balal786121@gmail.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="zyth-copyright-wrapper">
                    <div class="zyth-copyright-container zyth-container"><div class="zyth-copyright-text zyth-item-pdlr">Designed by Akram. Powered by developerakram.com</div></div>
                </div>
            </footer>

        </div>
    </div>

    <div id="zyth-side-content-menu">

        <i class="zyth-side-content-menu-close ion-android-close"></i>

        <div id="text-7" class="widget widget_text zyth-widget">
            <div class="textwidget">
                <p><img class="alignnone size-full wp-image-14683" src="upload/logox1.png" alt="" width="87" /></p>
                <p>
                    <span class="gdlr-core-space-shortcode" style="margin-top: 40px;"></span>Zyth is a New-York-based gym focused on modern workout. From our inception in 2007, we have been serving with more than 10,000 customers.
                    <span class="gdlr-core-space-shortcode" style="margin-top: -10px;"></span>
                </p>
            </div>
        </div>

        <div id="block-11" class="widget widget_block widget_media_gallery zyth-widget">
            <figure class="wp-block-gallery columns-3 is-cropped">
                <ul class="blocks-gallery-grid">
                    <li class="blocks-gallery-item">
                        <figure>
                            <img
                                loading="lazy"
                                width="900"
                                height="1000"
                                src="upload/P15.jpg"
                                alt=""
                                data-id="15314"
                                data-full-url="upload/P15.jpg"
                                data-link="singleport.html"
                                class="wp-image-15314"
                            />
                        </figure>
                    </li>
                    <li class="blocks-gallery-item">
                        <figure>
                            <img
                                loading="lazy"
                                width="900"
                                height="1000"
                                src="upload/P13.jpg"
                                alt=""
                                data-id="15312"
                                data-full-url="upload/P13.jpg"
                                data-link="singleport.html"
                                class="wp-image-15312"
                            />
                        </figure>
                    </li>
                    <li class="blocks-gallery-item">
                        <figure>
                            <img
                                loading="lazy"
                                width="900"
                                height="1000"
                                src="upload/P7.jpg"
                                alt=""
                                data-id="15307"
                                data-full-url="upload/P7.jpg"
                                data-link="singleport.html"
                                class="wp-image-15307"
                            />
                        </figure>
                    </li>
                    <li class="blocks-gallery-item">
                        <figure>
                            <img
                                loading="lazy"
                                width="1024"
                                height="682"
                                src="upload/image-from-rawpixel-id-2194653-jpeg-1024x682.jpg"
                                alt=""
                                data-id="15433"
                                data-full-url="upload/image-from-rawpixel-id-2194653-jpeg.jpg"
                                data-link="https://demo.goodlayers.com/zyth/gym/2021/09/21/find-your-flow-which-type-of-yoga-class-is-right-for-you/image-from-rawpixel-id-2194653-jpeg/"
                                class="wp-image-15433"
                            />
                        </figure>
                    </li>
                    <li class="blocks-gallery-item">
                        <figure>
                            <img
                                loading="lazy"
                                width="1024"
                                height="682"
                                src="upload/image-from-rawpixel-id-2107319-jpeg-1024x682.jpg"
                                alt=""
                                data-id="15434"
                                data-full-url="upload/image-from-rawpixel-id-2107319-jpeg.jpg"
                                data-link="https://demo.goodlayers.com/zyth/gym/2021/09/21/find-your-flow-which-type-of-yoga-class-is-right-for-you/image-from-rawpixel-id-2107319-jpeg/"
                                class="wp-image-15434"
                            />
                        </figure>
                    </li>
                </ul>
            </figure>
        </div>

        <div id="text-8" class="widget widget_text zyth-widget">
            <div class="textwidget">
                <p>
                    <span class="gdlr-core-space-shortcode" style="margin-top: -35px;"></span><br />
                    <span style="color: #ffffff;">
                        <strong>
                                        Currently working at - <br/>
                                        Sparkhill pool and fitness centre, </br/>
                                        Stratford Rd, Birmingham - B11 4EA
                                    </strong>
                    </span>
                </p>
            </div>
        </div>

        <div id="text-9" class="widget widget_text zyth-widget">
            <div class="textwidget">
                <p>
                    <span class="gdlr-core-space-shortcode" style="margin-top: -40px;"></span><br />
                    <span style="color: #9e9e9e;">T. 1800-2355-2356</span><span class="gdlr-core-space-shortcode" style="margin-top: 20px;"></span>
                    <span style="color: #9e9e9e;">E. <a href="#" style="color:#fff;" class="__cf_email__" >test@gmail.com</a></span>
                    <span class="gdlr-core-space-shortcode" style="margin-top: -5px;"></span>
                </p>
            </div>
        </div>

        <div id="text-10" class="widget widget_text zyth-widget">
            <div class="textwidget">
                <div class="gdlr-core-social-network-item gdlr-core-item-pdb gdlr-core-none-align gdlr-direction-horizontal" style="padding-bottom: 0px;" id="gdlr-core-social-network-40404">
                    <a href="#url" target="_blank" class="gdlr-core-social-network-icon" title="facebook" style="color: #eeeeee; margin-right: 30px;" rel="noopener"><i class="fa fa-facebook"></i></a>
                    <a href="#" target="_blank" class="gdlr-core-social-network-icon" title="pinterest" style="color: #eeeeee; margin-right: 30px;" rel="noopener"><i class="fa fa-pinterest-p"></i></a>
                    <a href="#url" target="_blank" class="gdlr-core-social-network-icon" title="twitter" style="color: #eeeeee; margin-right: 30px;" rel="noopener"><i class="fa fa-twitter"></i></a>
                    <a href="#url" target="_blank" class="gdlr-core-social-network-icon" title="instagram" style="color: #eeeeee; margin-right: 30px;" rel="noopener"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>

    </div>


    <script type="text/javascript" src="js/jquery.min.js?ver=3.6.0" id="jquery-core-js"></script>
    <script type="text/javascript" src="js/jquery-migrate.min.js?ver=3.3.2" id="jquery-migrate-js"></script>
    <script type="text/javascript" src="js/plugins/goodlayers-core/plugins/script.js" id="gdlr-core-plugin-js"></script>
    <script type="text/javascript" id="gdlr-core-page-builder-js-extra">
        /* <![CDATA[ */
        var gdlr_core_pbf = { admin: "", video: { width: "640", height: "360" }, ajax_url: "#" };
        /* ]]> */
    </script>
    <script type="text/javascript" src="js/plugins/goodlayers-core/include/js/page-builder.js?ver=1.3.9" id="gdlr-core-page-builder-js"></script>
    <script type="text/javascript" src="js/plugins/revslider/public/assets/js/rbtools.min.js?ver=6.5.8" defer="" async="" id="tp-tools-js"></script>
    <script type="text/javascript" src="js/plugins/revslider/public/assets/js/rs6.min.js?ver=6.5.8" defer="" async="" id="revmin-js"></script>
    <script type="text/javascript" src="js/plugins/ui/effect.min.js?ver=1.12.1" id="jquery-effects-core-js"></script>
    <script type="text/javascript" src="js/plugins/jquery.mmenu.js?ver=1.0.0" id="jquery-mmenu-js"></script>
    <script type="text/javascript" src="js/plugins/jquery.superfish.js?ver=1.0.0" id="jquery-superfish-js"></script>
    <script type="text/javascript" src="js/plugins/script-core.js?ver=1.0.0" id="zyth-script-core-js"></script>
    <script type="text/javascript" src="js/plugins/underscore.min.js?ver=1.13.1" id="underscore-js"></script>
    <script type="text/javascript" src="js/plugins/mp-timetable/media/js/mptt-functions.min.js?ver=2.4.2" id="mptt-functions-js"></script>
    <script type="text/javascript" id="mptt-event-object-js-extra">
        /* <![CDATA[ */
        var MPTT = { table_class: "mptt-shortcode-table" };
        /* ]]> */
    </script>
    <script type="text/javascript" src="js/plugins/mp-timetable/media/js/events/event.min.js?ver=2.4.2" id="mptt-event-object-js"></script>



    <script type="text/javascript">
        function setREVStartSize(e) {
            //window.requestAnimationFrame(function() {
            window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
            window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
            try {
                var pw = document.getElementById(e.c).parentNode.offsetWidth,
                    newh;
                pw = pw === 0 || isNaN(pw) ? window.RSIW : pw;
                e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
                e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
                e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
                e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
                e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
                e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
                e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
                if (e.layout === "fullscreen" || e.l === "fullscreen") newh = Math.max(e.mh, window.RSIH);
                else {
                    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                    for (var i in e.rl) if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                    e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                    for (var i in e.rl) if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

                    var nl = new Array(e.rl.length),
                        ix = 0,
                        sl;
                    e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                    e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                    e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                    e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                    for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                    sl = nl[0];
                    for (var i in nl)
                        if (sl > nl[i] && nl[i] > 0) {
                            sl = nl[i];
                            ix = i;
                        }
                    var m = pw > e.gw[ix] + e.tabw + e.thumbw ? 1 : (pw - (e.tabw + e.thumbw)) / e.gw[ix];
                    newh = e.gh[ix] * m + (e.tabh + e.thumbh);
                }
                var el = document.getElementById(e.c);
                if (el !== null && el) el.style.height = newh + "px";
                el = document.getElementById(e.c + "_wrapper");
                if (el !== null && el) {
                    el.style.height = newh + "px";
                    el.style.display = "block";
                }
            } catch (e) {
                console.log("Failure at Presize of Slider:" + e);
            }
            //});
        }
    </script>
    <script type="text/javascript">
        setREVStartSize({
            c: "rev_slider_1_1",
            rl: [1240, 1024, 778, 480],
            el: [1088, 768, 700, 500],
            gw: [1320, 1024, 778, 480],
            gh: [1088, 768, 700, 500],
            type: "standard",
            justify: "",
            layout: "fullwidth",
            mh: "0",
        });
        if (window.RS_MODULES !== undefined && window.RS_MODULES.modules !== undefined && window.RS_MODULES.modules["revslider11"] !== undefined) {
            window.RS_MODULES.modules["revslider11"].once = false;
            window.revapi1 = undefined;
            if (window.RS_MODULES.checkMinimal !== undefined) window.RS_MODULES.checkMinimal();
        }
    </script>
    <script type="text/javascript">
        window.RS_MODULES = window.RS_MODULES || {};
        window.RS_MODULES.modules = window.RS_MODULES.modules || {};
        window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
        window.RS_MODULES.defered = true;
        window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
        window.RS_MODULES.type = "compiled";
    </script>
    <script type="text/javascript">
        if (typeof revslider_showDoubleJqueryError === "undefined") {
            function revslider_showDoubleJqueryError(sliderID) {
                console.log("You have some jquery.js library include that comes after the Slider Revolution files js inclusion.");
                console.log("To fix this, you can:");
                console.log("1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on");
                console.log("2. Find the double jQuery.js inclusion and remove it");
                return "Double Included jQuery Library";
            }
        }
    </script>
    <script type="text/javascript" id="rs-initialisation-scripts">
        var tpj = jQuery;

        var revapi1;

        if (window.RS_MODULES === undefined) window.RS_MODULES = {};
        if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
        RS_MODULES.modules["revslider11"] = {
            once: RS_MODULES.modules["revslider11"] !== undefined ? RS_MODULES.modules["revslider11"].once : undefined,
            init: function () {
                window.revapi1 = window.revapi1 === undefined || window.revapi1 === null || window.revapi1.length === 0 ? document.getElementById("rev_slider_1_1") : window.revapi1;
                if (window.revapi1 === null || window.revapi1 === undefined || window.revapi1.length == 0) {
                    window.revapi1initTry = window.revapi1initTry === undefined ? 0 : window.revapi1initTry + 1;
                    if (window.revapi1initTry < 20)
                        requestAnimationFrame(function () {
                            RS_MODULES.modules["revslider11"].init();
                        });
                    return;
                }
                window.revapi1 = jQuery(window.revapi1);
                if (window.revapi1.revolution == undefined) {
                    revslider_showDoubleJqueryError("rev_slider_1_1");
                    return;
                }
                revapi1.revolutionInit({
                    revapi: "revapi1",
                    DPR: "dpr",
                    sliderLayout: "fullwidth",
                    visibilityLevels: "1240,1024,778,480",
                    gridwidth: "1320,1024,778,480",
                    gridheight: "1088,768,700,500",
                    lazyType: "smart",
                    perspective: 600,
                    perspectiveType: "local",
                    editorheight: "1088,768,700,500",
                    responsiveLevels: "1240,1024,778,480",
                    progressBar: { disableProgressBar: true },
                    navigation: {
                        wheelCallDelay: 1000,
                        onHoverStop: false,
                        touch: {
                            touchenabled: true,
                        },
                    },
                    viewPort: {
                        global: true,
                        globalDist: "-200px",
                        enable: false,
                    },
                    fallbacks: {
                        allowHTML5AutoPlayOnAndroid: true,
                    },
                });
            },
        }; // End of RevInitScript

        if (window.RS_MODULES.checkMinimal !== undefined) {
            window.RS_MODULES.checkMinimal();
        }
    </script>
</body>
</html>
