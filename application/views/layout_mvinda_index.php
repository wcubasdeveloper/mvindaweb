<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en-US" class=" yes-js js_active js js_active  vc_desktop  vc_transform  vc_transform ">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mvinda S.A.C</title>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline!important;
            border: none!important;
            box-shadow: none!important;
            height: 1em!important;
            width: 1em!important;
            margin: 0 .07em!important;
            vertical-align: -0.1em!important;
            background: none!important;
            padding: 0!important
        }
    </style>
    <link rel="stylesheet" id="wp-block-library-css" href="<?=base_url()?>front/css/style.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="jquery-selectBox-css" href="<?=base_url()?>front/css/jquery.selectBox.css" type="text/css" media="all">
    <link rel="stylesheet" id="yith-wcwl-font-awesome-css" href="<?=base_url()?>front/css/font-awesome.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="yith-wcwl-main-css" href="<?=base_url()?>front/css/style.css" type="text/css" media="all">
    <link rel="stylesheet" id="contact-form-7-css" href="<?=base_url()?>front/css/styles.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" media="all">

    <style id="rs-plugin-settings-inline-css" type="text/css">
        .tp-bullets {
            left: calc( 50% - 170px) !important;
        }
        
        @media (max-width: 1200px) and (min-width: 900px) {
            .tp-revslider-mainul li:first-child div:nth-child(3),
            .tp-revslider-mainul li:first-child div:nth-child(4),
            .tp-revslider-mainul li:first-child div:nth-child(5),
            .tp-revslider-mainul li:nth-child(3) div:nth-child(2),
            .tp-revslider-mainul li:nth-child(3) div:nth-child(3),
            .tp-revslider-mainul li:nth-child(3) div:nth-child(4),
            .tp-revslider-mainul li:nth-child(2) div:nth-child(2),
            .tp-revslider-mainul li:nth-child(2) div:nth-child(3),
            .tp-revslider-mainul li:nth-child(2) div:nth-child(4),
            .tp-revslider-mainul li:nth-child(2) div:nth-child(6) {
                left: 120px !important;
            }
            .tp-revslider-mainul li:nth-child(2) div:nth-child(5),
            .tp-revslider-mainul li:nth-child
             div:nth-child(2),
            .tp-revslider-mainul li:nth-child(3) div:nth-child(5) {
                left: 570px !important;
            }
            .forcefullwidth_wrapper_tp_banner,
            .fullwidthbanner-container,
            .fullwidthbanner-container .fullwidthabanner {
                height: 438px !important;
            }
        }
        
        .custom.tp-bullets {}
        
        .custom.tp-bullets:before {
            content: " ";
            position: absolute;
            width: 100%;
            height: 100%;
            background: transparent;
            padding: 10px;
            margin-left: -10px;
            margin-top: -10px;
            box-sizing: content-box;
        }
        
        .custom .tp-bullet {
            width: 12px;
            height: 12px;
            position: absolute;
            background: #aaa;
            background: rgba(125, 125, 125, 0.5);
            cursor: pointer;
            box-sizing: content-box;
        }
        
        .custom .tp-bullet:hover,
        .custom .tp-bullet.selected {
            background: rgb(125, 125, 125);
        }
        
        .custom .tp-bullet-image {}
        
        .custom .tp-bullet-title {}

        .site-content+.brands-carousel{
            margin-top: 26px;
        }
        .resaltarRowCategoria{
         background-color: #d8d8d894;
         color: white !important;
        }
    </style>
    <style id="woocommerce-inline-inline-css" type="text/css">
        .woocommerce form .form-row .required {
            visibility: visible
        }
    </style>
    <link rel="stylesheet" id="jquery-colorbox-css" href="<?=base_url()?>front/css/colorbox.css" type="text/css" media="all">
    <link rel="stylesheet" id="electro-fonts-css" href="<?=base_url()?>front/css/css" type="text/css" media="all">
    <link rel="stylesheet" id="bootstrap-css" href="<?=base_url()?>front/css/bootstrap.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="animate-css" href="<?=base_url()?>front/css/animate.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="font-electro-css" href="<?=base_url()?>front/css/font-electro.css" type="text/css" media="all">
    <link rel="stylesheet" id="jquery-mCustomScrollbar-css" href="<?=base_url()?>front/css/jquery.mCustomScrollbar.css" type="text/css" media="all">
    <link rel="stylesheet" id="electro-style-css" href="<?=base_url()?>front/css/style.min(1).css" type="text/css" media="all">
    <link rel="stylesheet" id="electro-style-v2-css" href="<?=base_url()?>front/css/v2.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="electro-color-css" href="<?=base_url()?>front/css/yellow.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="electro-color-css" href="<?=base_url()?>front/css/pagination.css" type="text/css" media="all">
    <script type="text/javascript" src="<?=base_url()?>front/js/jquery.js"></script>
    <script type="text/javascript" src="<?=base_url()?>front/js/jquery-migrate.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>front/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>front/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>front/js/jquery.blockUI.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>front/js/add-to-cart.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>front/js/woocommerce-add-to-cart.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    
    <script src="<?=base_url()?>front/js/general/index.js" ></script>
    <script src="<?=base_url()?>front/js/plugin/pagination.js" ></script>
    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1!important
            }
        </style>
    </noscript>
    <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress.">
    <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="https://demo2.madrasthemes.com/electro-wide/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]-->
    <meta name="generator" content="Powered by Slider Revolution 5.4.8.1 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface.">
    <link rel="icon" href="https://demo2.madrasthemes.com/electro-wide/wp-content/uploads/2019/04/cropped-electro-fav-icon-32x32.png" sizes="32x32">
    <link rel="icon" href="https://demo2.madrasthemes.com/electro-wide/wp-content/uploads/2019/04/cropped-electro-fav-icon-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon-precomposed" href="https://demo2.madrasthemes.com/electro-wide/wp-content/uploads/2019/04/cropped-electro-fav-icon-180x180.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <meta name="msapplication-TileImage" content="https://demo2.madrasthemes.com/electro-wide/wp-content/uploads/2019/04/cropped-electro-fav-icon-270x270.png">

    <style type="text/css" id="wp-custom-css">
        .handheld-footer .handheld-footer-bar .footer-logo svg path {
            fill: #FFF
        }
        
        .handheld-footer .handheld-footer-bar .handheld-footer-bar-inner {
            flex-direction: row
        }
    </style>
    <noscript>
        <style type="text/css">
            .wpb_animate_when_almost_visible {
                opacity: 1
            }
        </style>
    </noscript>

    <script src="<?=base_url()?>front/js/jquery.mousewheel.min.js"></script>
</head>

<body class="page-template page-template-template-homepage-v2 page-template-template-homepage-v2-php page page-id-2172 woocommerce-js electro-compact electro-wide wpb-js-composer js-comp-ver-5.7 vc_responsive  pace-done">


<div id="yith-wcwl-popup-message" style="display: none;">
        <div id="yith-wcwl-message"></div>
    </div>
    <div class="pace  pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>
    <div class="off-canvas-wrapper">
        <div id="page" class="hfeed site" style="transform: none; transition: all 0.5s ease 0s;"> 
            <div style="border-bottom: 1px solid gray;">
                <p style="margin-bottom: 1px; background-color: #bf040a; color: white;text-align: center;">
                    <span class="fa fa-phone" aria-hidden="true"></span>&nbsp;955102830&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;
                    <span class="fa fa-map-marker"></span> &nbsp;Av. Garcilazo de la Vega Nro. 1261 Int. 131 (Costado del Real Plaza Centro Civico)</p>
            </div>
            <header id="masthead" style="border-bottom: 2px solid #80808059;" class="header-v2 stick-this site-header">
                <div class="container hidden-lg-down">
                    <div class="masthead">
                        <div class="header-logo-area">
                            <div class="header-site-branding">
                                <a href="<?=base_url()?>" data-href="https://demo2.madrasthemes.com/electro-wide/" class="header-logo-link">
                                    <img  src="<?=base_url()?>front/assets/AniversarioMVC2.png" />
                                </a>
                            </div>
                            <div class="off-canvas-navigation-wrapper">
                                <div class="off-canvas-navbar-toggle-buttons clearfix">
                                    <button class="navbar-toggler navbar-toggle-hamburger " type="button"> <span class="fa fa-align-justify"></span> </button>
                                    <button class="navbar-toggler navbar-toggle-close " type="button"> <span class="fa fa-close"></span> </button>
                                </div>
                           
                            </div>
                        </div>
                        <div class="primary-nav-menu electro-animate-dropdown">
                            <ul id="menu-main-menu" class="nav nav-inline yamm">
                                <!-- <li id="menu-item-4101" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-4101 dropdown"><a title="Home" href="https://demo2.madrasthemes.com/electro-wide/shop/" class="dropdown-toggle" aria-haspopup="true" data-hover="dropdown" aria-expanded="false">Home</a>
                                    <ul role="menu" class=" dropdown-menu">
                                        <li id="menu-item-4122" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-4122"><a title="Home v1" href="https://demo2.madrasthemes.com/electro-wide/">Inicio</a></li>
                                        <li id="menu-item-4104" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2172 current_page_item menu-item-4104 active"><a title="Home v2" href="https://demo2.madrasthemes.com/electro-wide/home-v2/">Nuestros locales</a></li>
                                        <li id="menu-item-4103" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4103"><a title="Home v3" href="https://demo2.madrasthemes.com/electro-wide/home-v3/">Nosotros</a></li>
                                        <li id="menu-item-4756" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4756"><a title="Home v3.1" href="https://demo2.madrasthemes.com/electro-wide/home-v3-full-color-background/">Delivery lima</a></li>
                                        <li id="menu-item-4241" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4241"><a title="Home v4" href="https://demo2.madrasthemes.com/electro-wide/home-v4/">Contáctenos</a></li>

                                    </ul>
                                </li> -->
                                <li id="menu-item-4123" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4123"><a title="About Us" href="<?=base_url()?>">Inicio</a></li>
                                <li id="menu-item-4123" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4123" hidden><a title="About Us" href="<?=base_url()?>">Nuestros locales</a></li>
                                <li id="menu-item-4123" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4123"><a title="About Us" href="<?=base_url()?>">Nosotros</a></li>
                                <li id="menu-item-4123" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4123"><a title="About Us" href="<?=base_url()?>Web/Contactenos">Contáctenos</a></li>
                            </ul>
                        </div>
                        <div class="header-support">
                            <div class="header-support-inner">
                                <div class="support-icon"> <span class="fa fa-whatsapp" aria-hidden="true" style="font-size: 43px;color: green;"></span></div>
                                <div class="support-info">
                                    <div class="support-number"><strong>Chat Whatsapp</strong></div>
                                    <div class="support-email">Escribenos dando click&nbsp;&nbsp;<a target="_blank" href="https://api.whatsapp.com/send?phone=51955102830&text=Hola%20me%20pueden%20ayudar?"><strong>Aqui</strong></a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
        
                </div>
                <div class="handheld-header-wrap container hidden-xl-up">
                    <div class="handheld-header-v2 handheld-stick-this " style="background-color: #ffffff;">
                        <div class="off-canvas-navigation-wrapper">
                            <div class="off-canvas-navbar-toggle-buttons clearfix">
                                <button class="navbar-toggler navbar-toggle-hamburger " type="button"> <i class="ec ec-menu"></i> </button>
                                <button class="navbar-toggler navbar-toggle-close " type="button"> <i class="ec ec-close-remove"></i> </button>
                            </div>
                            <div class="off-canvas-navigation mCustomScrollbar _mCS_2 mCS-autoHide mCS_no_scrollbar" id="default-oc-header" style="overflow: visible;">
                                <div id="mCSB_2" class="mCustomScrollBox mCS-minimal-dark mCSB_vertical mCSB_outside" style="max-height: 657px;" tabindex="0">
                                    <div id="mCSB_2_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                                        <ul id="menu-all-departments-menu-1" class="nav nav-inline yamm">
                                            <li id="menu-item-4155" class="highlight menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2172 current_page_item menu-item-4155 active"><a href="#">Inicio</a></li>
                                            <li id="menu-item-4156" class="highlight menu-item menu-item-type-post_type menu-item-object-page menu-item-4156"><a title="Top 100 Offers" href="#">Nuestros locales</a></li>
                                            <li id="menu-item-4157" class="highlight menu-item menu-item-type-post_type menu-item-object-page menu-item-4157"><a title="New Arrivals" href="#">Nosotros</a></li>
                                            <li id="menu-item-4157" class="highlight menu-item menu-item-type-post_type menu-item-object-page menu-item-4157"><a title="New Arrivals" href="#">Delivery Lima</a></li>
                                            <li id="menu-item-4157" class="highlight menu-item menu-item-type-post_type menu-item-object-page menu-item-4157"><a title="New Arrivals" href="#">Contáctenos</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="mCSB_2_scrollbar_vertical" class="mCSB_scrollTools mCSB_2_scrollbar mCS-minimal-dark mCSB_scrollTools_vertical" style="display: none;">
                                    <div class="mCSB_draggerContainer">
                                        <div id="mCSB_2_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 50px; top: 0px;">
                                            <div class="mCSB_dragger_bar" style="line-height: 50px;"></div>
                                        </div>
                                        <div class="mCSB_draggerRail"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-logo">
                            <a href="#" data-href="https://demo2.madrasthemes.com/electro-wide/"  class="header-logo-link">
                                <img src="<?=base_url()?>front/assets/AniversarioMVC2.png" style="height: 50px;" />
                            </a>
                        </div>
                        <div class="handheld-header-links">
                            <ul class="columns-3">
                                <li class="search"> <a href="#" data-href="https://demo2.madrasthemes.com/electro-wide/home-v2">Search</a>
                                    <div class="site-search">
                                        <div class="widget woocommerce widget_product_search">
                                            <form role="search" method="get" class="woocommerce-product-search" action="https://demo2.madrasthemes.com/electro-wide/">
                                                <label class="screen-reader-text" for="woocommerce-product-search-field-0">Search for:</label>
                                                <input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="Buscar un producto" value="" name="s">
                                                <button type="submit" value="Search">Search</button>
                                                <input type="hidden" name="post_type" value="product">
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>