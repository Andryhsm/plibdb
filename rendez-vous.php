<?php
session_start();
if ((!isset($_SESSION['email'])) || (empty($_SESSION['email']))) {
    header("Location: login.html");
}
include_once "./lib-php/cnx.php";
?>

<!DOCTYPE html>
<html lang="fr-FR" class="no-js">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta name="viewport" content="width=device-width">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>liste de demande</title>

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
                                    <li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a href="./lib-php/renouvellement.php"><span class="menu-item-label">Commander matériel</span></a></li>
                                    <li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a href="./lib-php/modifierprofil_inf.php"><span class="menu-item-label">Modifier mon profil</span></a></li>
                                    <li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a href="./contact2.html"><span class="menu-item-label">Contact</span></a></li>
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
                                    <li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a href="./liste.php"><span class="menu-item-label">Liste</span></a></li>
                                    <li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a href="./lib-php/renouvellement.php"><span class="menu-item-label">Commander matériel</span></a></li>
                                    <li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a href="./lib-php/modifierprofil_inf.php"><span class="menu-item-label">Modifier mon profil</span></a></li>
                                    <li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a href="./contact2.html"><span class="menu-item-label">Contact</span></a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a href="./lib-php/deconnexion.php"><span class="menu-item-label">Deconnexion</span></a></li>
                                </ul>                    
                            </nav>
                        </div>
                    </div>

                    <div class="clear"></div>
                </header>  
            </div>
            <div id="alchem-home-sections">


                <section class="section magee-section alchem-home-section-4 alchem-home-style-0" id="section-5">
                    <div class="section-content">
                        <div class="container alchem_section_4_model">

                            <?php
                            $req = $bdd->query("SELECT * FROM liste_demande WHERE emailI = '" . $_SESSION['email'] . "' AND status = 'accepter'");
                            while ($data = $req->fetch()) {
                                ?>
                                <?php if ($data) { ?>
                                    <table class="table table-hover">
                                        <tbody id="content">

                                            <tr>
                                                <td width='15%'>
                                                    <img class="thumbnail img-responsive" style="vertical-align: center;" width="130px" src="./image-person/<?php echo($data['photo']); ?>">
                                                </td>
                                                <td width='45%'>
                                                    <?php echo "<h4><b>" . $data['nomP'] . " " . $data['prenomP'] . "</b></h4>"; ?>
                                                    <?php echo($data['telP']); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo($data['emailP']); ?><br>
                                                    <b>Type de soin:</b> <?php echo($data['typeSoinP']); ?> <br>
                                                    <b>Heure de soin:</b> <?php echo($data['date']); ?> <br>
                                                    <b>Fréquence de soin:</b> <?php echo($data['frequenceSoin']); ?>
                                                </td>
                                                <td width='40%'>
                                                    <br><br>
                                                    <?php echo($data['commentaire']); ?>
                                                    <br><br>
                                                    <a id="itineraire" class="btn btn-success" href="#">Itineraire</a>
                                                    <a id="terminer" class="btn btn-danger" href="./lib-php/edit3.php?id='<?php echo($data['id']); ?>'">Terminer</a>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                    <?php
                                } else {
                                    echo '<center><h3>Vous n\'avez pas de rendez-vous aujourd\'hui</h3></center>';
                                }
                            }
                            ?>

                        </div>
                    </div>
                </section>

                <button class="btn btn-primary hidden btn-lg" id="triggerwarning" data-toggle="modal" data-target="#loginerror"></button>
                <div class="modal" id="loginerror">
                    <div class="modal-dialog">
                        <div class="modal-content alert alert-dismissible alert-info col-lg-12">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="ferme">&times;</button>
                                <h4 class="modal-title" style="text-align: center;">Erreur !</h4>
                            </div>
                            <div class="modal-body">
                                <div class="warning" id="erreur_inscription"></div>
                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="btn_up">
                <img src="img/retour-en-haut.png" class="img-responsive" id="returnOnTop">
            </div>

            <!--Footer-->
            <footer class="">
                <div class="footer-info-area">
                    <div class="container text-center alchem_footer_social_icon_1"> 
                        <div class="clearfix"></div>
                        <div class="site-info">
                            <a href="#" >OUSOFT SAS</a>. 38 Rue de la convention, 94270, Le Kremlin-Bicêtre.</div>
                    </div>
                </div>          
            </footer>
        </div>  
        <script type="text/javascript" src="bootstrap/js/jquery.js"></script>
        <script type="text/javascript" src="./others/owl.carousel.min.js.téléchargement"></script>

        <script type="text/javascript" src="./others/main.js.téléchargement"></script>
        <script type="text/javascript">
            $('#terminer').click(function (e)
            {
                e.preventDefault();

                var form = $('#form-filter').get(0);
                var formData = new FormData(form);// get the form data
                // on envoi formData vers mail.php
                $.ajax({
                    type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                    url: 'lib-php/edit3.php?id=\'<?php echo($data['id']); ?>\'', // the url where we want to POST
                    data: formData, // our data object
                    dataType: 'text', // what type of data do we expect back from the server
                    processData: false,
                    contentType: false,
                    success: function (server_response)
                    {
                        if (server_response === "reussi")
                        {
                            window.location.replace("rendez-vous.php");
                        }
                        else
                        {
                            $('#erreur_inscription').html('<p>' + server_response + '</p>');
                            $('#triggerwarning').trigger('click');
                            setTimeout(function () {
                                $('#ferme').trigger('click');
                            }, 4000);
                        }
                    },
                    error: function (server_response)
                    {
                        alert(server_response);
                    }
                });
            });

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
        </script>
    </body>
</html>