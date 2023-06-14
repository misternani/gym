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
 <link rel="stylesheet" href="./bastyle.css">

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
                <div class="zyth-page-title-overlay" style="background-color: #f8f8f8;"></div>
                <div class="zyth-page-title-top-gradient"></div>
                <div class="zyth-page-title-container zyth-container">
                    <div class="zyth-page-title-content zyth-item-pdlr"><h1 class="zyth-page-title">Transformations</h1></div>
                </div>
            </div>
          
                 <!--  -->





<br><br>


<?php $q = mysqli_query($con, "SELECT * FROM transformations ") or die('Error197');
                                                        while ($row = mysqli_fetch_array($q)) {
                                                           
                                                       
 echo '<div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first" id="gdlr-core-column-86034">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="margin-bottom: 0px; padding: 40px 30px 0px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 35px;">
                                                    <div class="gdlr-core-title-item-title-wrap">
                                                        <h3
                                                            class="gdlr-core-title-item-title gdlr-core-skin-title"
                                                            style="font-size: 36px; font-weight: 700; font-style: italic; letter-spacing: 0px; text-transform: none; color: #070707;"
                                                        >';
                                                      
                                                        echo 'Name: ' . $row['name'] . '<br>';
                                                        echo 'Age: ' . $row['age'] . '<br>';
                                                        echo 'Weight Before: ' . $row['weightbefore'] . '<br>';
                                                        echo 'Weight After: ' . $row['weightafter'] . '<br>';
                                                        echo 'Duration: ' . $row['duration'] . '<br>';
                                                           echo ' <span
                                                                class="gdlr-core-title-item-title-side-border gdlr-core-style-lower"
                                                                style="
                                                                    transform: skewX(150deg);
                                                                    -webkit-transform: skewX(150deg);
                                                                    border-bottom-width: 6px;
                                                                    border-color: var(--gradientBackground);
                                                                    border-radius: 0px;
                                                                    -moz-border-radius: 0px;
                                                                    -webkit-border-radius: 0px;
                                                                    width: 36px;
                                                                    margin-left: 25px;
                                                                "
                                                            ></span>

                                                            <span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align gdlr-core-no-p-space" style="padding-bottom: 35px;">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 19px; font-weight: 400; letter-spacing: 0.34px; color: #252525;">
                                                        <p>';
                                                        echo $row['description'];
                                                        echo '</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align gdlr-core-no-p-space" style="padding-bottom: 50px;">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 19px; font-weight: 400; letter-spacing: 0.34px; text-transform: lowercase; color: #252525;">
                                                 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px;">
                                            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>';

                                echo '<div class="gdlr-core-pbf-column gdlr-core-column-30" id="gdlr-core-column-13451">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="margin: 0px 0px 0px 0px; padding: 0px 20px 0px 20px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-image-item gdlr-core-item-pdb gdlr-core-center-align gdlr-core-item-pdlr" style="padding-bottom: 0px;">';
                                                

echo '<div  id="comparison">

  <figure style=" background-image: url(transformations/after.jpeg); ">
    <div id="divisor'.$row['ID'].'" style="  background-image: url(transformations/before.jpeg);"></div>
  </figure>
  <input type="range" min="0" max="100" value="50" id="slider'.$row['ID'].'" oninput="moveDivisor'.$row['ID'].'()">
  <script> var divisor'.$row['ID'].' = document.getElementById("divisor'.$row['ID'].'"),
  slider'.$row['ID'].' = document.getElementById("slider'.$row['ID'].'");
  function moveDivisor'.$row['ID'].'() { 
      divisor'.$row['ID'].'.style.width = slider'.$row['ID'].'.value+"%";
  }
  </script>
</div>';




                                                               echo' </span>     </span>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>';



                } ?>




<br><br>






















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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
      <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><!--<script  src="./bascript.js"></script>-->
    <script type="text/javascript" id="mptt-event-object-js-extra">

        /* <![CDATA[ */
        var MPTT = { table_class: "mptt-shortcode-table" };
        /* ]]> */
    </script>
</body>
</html>
