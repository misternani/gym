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




            <div class="zyth-page-title-wrap zyth-style-custom zyth-center-align">
                <div class="zyth-header-transparent-substitute"></div>
                <div class="zyth-page-title-overlay"></div>
                <div class="zyth-page-title-top-gradient"></div>
                <div class="zyth-page-title-container zyth-container">
                    <div class="zyth-page-title-content zyth-item-pdlr">
                        <h1 class="zyth-page-title">Blog Standard</h1>
                        <div class="zyth-page-caption"></div>
                    </div>
                </div>
            </div>
            <div class="zyth-page-wrapper" id="zyth-page-wrapper">
                <div class="zyth-content-container zyth-container">
                    <div class="zyth-sidebar-wrap clearfix zyth-line-height-0 zyth-sidebar-style-right">
                        <div class="zyth-sidebar-center zyth-column-40 zyth-line-height">
                            <div class="gdlr-core-page-builder-body">
                                <div class="gdlr-core-pbf-section">
                                    <div class="gdlr-core-pbf-section-container gdlr-core-container clearfix">
                                        <div class="gdlr-core-pbf-element">
                                            
                                            <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix gdlr-core-style-blog-full" style="padding-bottom: 40px;">

                                            <?php
                                              $maxChars = 250; 
                                            $q = mysqli_query($con, "SELECT * FROM blog ") or die('Error197');
                                                        while ($row = mysqli_fetch_array($q)) {
                                                         
   

                                         

                                            if (strlen($row['blogtext']) > $maxChars) {
                                            $displayText = substr($row['blogtext'], 0, $maxChars) . "..."; // Extract the first $maxChars characters and add "..." at the end
                                            } else {
                                               $displayText = $row['blogtext']; // The text is shorter than the maximum, so display it as is
                                            }

                                          



                                                echo '<div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                                                   
                                                   
                                                   
                                                    <div class="gdlr-core-item-list gdlr-core-blog-full gdlr-core-item-mglr gdlr-core-style-left" style="margin-bottom: 80px;">
                                                        <div class="gdlr-core-blog-thumbnail gdlr-core-media-image gdlr-core-zoom-on-hover">
                                                            <a href="blogpost.php?idb='.$row['ID'].'">
                                                                <img src="blogcontent/'.$row['blogheaderimage'].'" alt="11"style="max-width: 1280px; max-height: 580px;" title="Image Title" />
                                                            </a>
                                                        </div>
                                                        <div class="gdlr-core-blog-full-head clearfix">
                                                            <div class="gdlr-core-blog-full-head-right">
                                                                <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 39px; font-style: normal; font-weight: 700; letter-spacing: 0px;">
                                                                    <a href="blogpost.php?idb='.$row['ID'].'">'.$row['title'].'</a>
                                                                </h3>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-blog-content clearfix">
                                                           '.$displayText.'
                                                            <div class="clear"></div>
                                                            <a class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-rectangle" href="blogpost.php?idb='.$row['ID'].'">Read More</a>
                                                        </div>
                                                    </div>


                                                </div>';
                                                        }?>
                                                
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
        var gdlr_core_pbf = { admin: "", video: { width: "640", height: "360" }, ajax_url: "https:\/\/demo.goodlayers.com\/zyth\/gym\/wp-admin\/admin-ajax.php" };
        /* ]]> */
    </script>
    <script type="text/javascript" src="js/plugins/goodlayers-core/include/js/page-builder.js?ver=1.3.9" id="gdlr-core-page-builder-js"></script>
    <script type="text/javascript" src="js/plugins/revslider/public/assets/js/rbtools.min.js?ver=6.5.8" defer="" async="" id="tp-tools-js"></script>
    <script type="text/javascript" src="js/plugins/revslider/public/assets/js/rs6.min.js?ver=6.5.8" defer="" async="" id="revmin-js"></script>
    <script type="text/javascript" src="js/plugins/ui/effect.min.js?ver=1.12.1" id="jquery-effects-core-js"></script>
    <script type="text/javascript" src="js/plugins/jquery.mmenu.js?ver=1.0.0" id="jquery-mmenu-js"></script>
    <script type="text/javascript" src="js/plugins/jquery.superfish.js?ver=1.0.0" id="jquery-superfish-js"></script>
    <script type="text/javascript" src="js/plugins/script-core.js?ver=1.0.0" id="zyth-script-core-js"></script>
    <script type="text/javascript" src="js/plugins/mp-timetable/media/js/mptt-functions.min.js?ver=2.4.2" id="mptt-functions-js"></script>
    <script type="text/javascript" id="mptt-event-object-js-extra">
        /* <![CDATA[ */
        var MPTT = { table_class: "mptt-shortcode-table" };
        /* ]]> */
    </script>
</body>
</html>
