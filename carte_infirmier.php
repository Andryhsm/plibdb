<?php
session_start();
if ((!isset($_SESSION['email'])) || (empty($_SESSION['email']))) {
    header("Location: login.html");
}
?>

<!DOCTYPE html>
<html lang="fr-FR" class="no-js">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta name="viewport" content="width=device-width">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>carte</title>

        <meta name="robots" content="noindex,follow">
        <link rel="stylesheet" href="./others/index.css" type="text/css" media="all">
        <link rel="stylesheet" id="bootstrap-css" href="./others/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" id="animate-css" href="./others/animate.css" type="text/css">
        <link rel="stylesheet" id="magee-shortcode-css" href="./others/shortcode.css" type="text/css">
        <link rel="stylesheet" id="wds_frontend-css" href="./others/wds_frontend.css" type="text/css" media="all">
        <link rel="stylesheet" id="wds_effects-css" href="./others/wds_effects.css" type="text/css" media="all">
        <link rel="stylesheet" id="wds_font-awesome-css" href="./others/font-awesome(1).css" type="text/css" media="all">
        <link rel="stylesheet" id="wonderplugin-slider-css-css" href="./others/wonderpluginsliderengine.css" type="text/css" media="all">
        <link rel="stylesheet" id="parent-style-css" href="./others/style.css" type="text/css" media="all">

        <script type="text/javascript" src="./others/jquery.js.téléchargement"></script>

        <script type="text/javascript">
            /* <![CDATA[ */
            var object = {"ajaxurl": "http:\/\/localhost\/wordpress\/wp-admin\/admin-ajax.php"};
            /* ]]> */
        </script>

        <script src="js/jssor.slider-22.2.10.min.js" type="text/javascript"></script>


        <!-- Meta OG tags by Kiwi Social Sharing Plugin -->
        <meta property="og:type" content="article"> 
        <meta property="og:title" content="Alchem">
        <meta property="og:image" content="http://localhost/wordpress/wp-content/plugins/kiwi-social-share/admin/images/placeholder-image.png">
        <meta property="og:url" content="http://localhost/wordpress/">
        <meta property="og:site_name" content="">
        <meta property="article:published_time" content="2017-02-28T18:11:19+00:00">
        <meta property="article:modified_time" content="2017-02-28T18:11:19+00:00">
        <meta property="og:updated_time" content="2017-02-28T18:11:19+00:00">
        <!--/end meta tags by Kiwi Social Sharing Plugin --><style id="cw_css">#about {
                margin-top:14rem!important
            }
            .col-sm-12,div.col-sm-8.col-sm-offset-2 {
                margin-top:-70rem!important
            }
            .btn_up
            {
                position: fixed;
                bottom: 10px;
                right: 15px;
                height: 80px;
                width: 80px;
                padding: 0;
            }

            #returnOnTop
            {
                display: none;
                cursor: pointer;
            }</style><!-- <meta name="vfb" version="2.9.2" /> -->
        <style type="text/css">
        </style></head>
    <body class="home page-template page-template-template-frontpage page-template-template-frontpage-php page page-id-40 has-slider">
        <div class="wrapper ">
            <div class="top-wrap">
                <header class="header-style-1 header-wrap  logo-left">


                    <div class="main-header " style="display: block;">
                        <div class="container">
                            <div class="logo-box alchem_header_style alchem_default_logo">
                                <img class="site-logo normal_logo" alt="" src="./others/Logo-ousoft-HD.png">

                            </div>
                            <button class="site-nav-toggle">
                                <span class="sr-only">Toggle navigation</span>
                                <i class="fa fa-bars fa-2x"></i>
                            </button>
                            <nav class="site-nav" role="navigation" style="">
                                <ul id="menu-main" class="main-nav">
                                    <li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a href="./liste.php"><span class="menu-item-label">Liste</span></a></li>
                                    <li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a href="#"><span class="menu-item-label">Notification</span></a></li>
                                    <li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a href="./lib-php/modifierprofil-infirmier.php"><span class="menu-item-label">Modifier mon profil</span></a></li>
                                    <li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a href="./contact1.php"><span class="menu-item-label">Contact</span></a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a href="./lib-php/deconnexion.php"><span class="menu-item-label">Deconnexion</span></a></li>
                                </ul>                    
                            </nav>
                        </div>
                    </div>
                    <!-- sticky header -->
                    <div class="fxd-header logo-left" style="top: 0px; display: none;">
                        <div class="container">
                            <div class="logo-box text-left alchem_header_style alchem_default_logo">
                                <a href="#">
                                    <img class="site-logo normal_logo" alt="" src="./others/Logo-ousoft-HD.png">
                                </a>

                            </div>
                            <button class="site-nav-toggle">
                                <span class="sr-only">Toggle navigation</span>
                                <i class="fa fa-bars fa-2x"></i>
                            </button>
                            <nav class="site-nav" role="navigation" style="">
                                <ul id="menu-main1" class="main-nav">
                                    <li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a href="./carte.php"><span class="menu-item-label">Carte</span></a></li>
                                    <li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a href="#"><span class="menu-item-label">Notification</span></a></li>
                                    <li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a href="./lib-php/modifierprofil.php"><span class="menu-item-label">Modifier mon profil</span></a></li>
                                    <li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a href="./contact1.php"><span class="menu-item-label">Contact</span></a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a href="./lib-php/deconnexion.php"><span class="menu-item-label">Deconnexion</span></a></li>
                                </ul>                    
                            </nav>
                        </div>
                    </div>

                    <div class="clear"></div>
                </header>  
            </div>
            <div id="alchem-home-sections">


                <section class="section magee-section alchem-home-section-4 alchem-home-style-0" id="section-5" style="padding:0%;">

                    djfsugfk sdfkud fksudfk sd

                </section>


            </div>

            <div class="btn_up">
                <img src="img/retour-en-haut.png" class="img-responsive" id="returnOnTop">
            </div>


            <!--Footer-->
            <footer class="">

                <div class="footer-info-area">
                    <div class="container text-center alchem_footer_social_icon_1"> 
                        <div class="site-info">
                            <a href="#" >OUSOFT SAS</a>. 38 Rue de la convention, 94270, Le Kremlin-Bicêtre.</div>
                    </div>
                </div>          
            </footer>
        </div>  
        <script type="text/javascript" src="bootstrap/js/jquery.js"></script>
        <script type="text/javascript" src="./others/owl.carousel.min.js.téléchargement"></script>
        <script type="text/javascript">
            /* <![CDATA[ */
            var alchem_params = {"ajaxurl": "http:\/\/localhost\/wordpress\/wp-admin\/admin-ajax.php", "themeurl": "http:\/\/localhost\/wordpress\/wp-content\/themes\/alchem", "responsive": "yes", "site_width": "1170px", "sticky_header": "yes", "show_search_icon": "yes", "slider_autoplay": "yes", "slideshow_speed": "3000", "portfolio_grid_pagination_type": "pagination", "blog_pagination_type": "pagination", "global_color": "#fdd200", "admin_ajax_nonce": "2ed3a22947", "admin_ajax": "http:\/\/localhost\/wordpress\/wp-admin\/admin-ajax.php", "isMobile": "0", "footer_sticky": "0"};
            /* ]]> */
        </script>
        <script type="text/javascript" src="./others/main.js.téléchargement"></script>
        <script type="text/javascript">
            $(document).ready(function ()
            {
                $('#returnOnTop').hide();
                $('#returnOnTop').click(function () {
                    //e.preventDefault();
                    $('html,body').animate({scrollTop: 0}, 'slow');
                });
            });

            $(window).scroll(function ()
            {
                if ($(window).scrollTop() == 0)
                    $('#returnOnTop').fadeOut();
                else
                    $('#returnOnTop').fadeIn();
            });

            function rechercher() {
                alert("test");
            }
        </script>
    </body>
</html>