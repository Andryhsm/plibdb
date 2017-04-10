<?php
	session_start();
	if ((!isset($_SESSION['email'])) || (empty($_SESSION['email']))) 
	{
	    header("Location: ../login.html");
	}

	include_once "lib-php/cnx.php";

	$req = $bdd->query("SELECT * FROM oulib_patient WHERE emailP = '" . $_SESSION['email'] . "'");
	$data = $req->fetch();
?>

<!DOCTYPE html>
<html lang="fr-FR" class="no-js">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta name="viewport" content="width=device-width">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>modification profil</title>

        <meta name="robots" content="noindex,follow">
        <link rel="stylesheet" href="./others/index.css" type="text/css" media="all">
        <!-- 
                <link rel="stylesheet" id="bootstrap-css" href="./others/bootstrap.min.css" type="text/css"> -->
        <link rel="stylesheet" id="animate-css" href="./others/animate.css" type="text/css">
        <link rel="stylesheet" id="magee-shortcode-css" href="./others/shortcode.css" type="text/css">
        <link rel="stylesheet" id="wds_frontend-css" href="./others/wds_frontend.css" type="text/css" media="all">
        <link rel="stylesheet" id="wds_effects-css" href="./others/wds_effects.css" type="text/css" media="all">
        <link rel="stylesheet" id="wds_font-awesome-css" href="./others/font-awesome(1).css" type="text/css" media="all">
        <link rel="stylesheet" id="wonderplugin-slider-css-css" href="./others/wonderpluginsliderengine.css" type="text/css" media="all">
        <link rel="stylesheet" id="parent-style-css" href="./others/style.css" type="text/css" media="all">

        <link href="./bootstrap/css/paper.css" rel="stylesheet">

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
            .alert
            {
                position: absolute;
                top: 35%;
                left: 5%;
                z-index: 0;
                background-color: rgba(84, 46, 90, 0.66);
                border-radius: 10px;
                border-color: rgb(84, 46, 90);
                font-size: 1.4em;
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
            }
        	.notifications
        	{
        		position: absolute;
        		left: 25%; top: 60%;
        		width: 50%;
        		z-index: 9999;
                height: 500px;
                overflow: auto;
                padding: 50px;
                background-color: #fff;
        	}
        	.notification
        	{
        		margin-bottom: 20px;
        	}
            .enbas
            {
                position: fixed;
                bottom: 0;
                left: 0;
                right: 0;
            }
        </style><!-- <meta name="vfb" version="2.9.2" /> -->
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
                                    <li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a href="./carte.php"><span class="menu-item-label">Carte</span></a></li>
                                    <li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a href="./notification.php"><span class="menu-item-label" id="badges">Notification</span></a></li>
                                    <li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a href="./lib-php/modifierprofil.php"><span class="menu-item-label">Modifier mon profil</span></a></li>
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
                                    <li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a href="../carte.php"><span class="menu-item-label">Carte</span></a></li>
                                    <li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a href="../notification.php"><span class="menu-item-label" id="badges">Notification</span></a></li>
                                    <li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a href="./lib-php/modifierprofil.php"><span class="menu-item-label">Modifier mon profil</span></a></li>
                                    <li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a href="./contact1.php"><span class="menu-item-label">Contact</span></a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a href="./lib-php//deconnexion.php"><span class="menu-item-label">Deconnexion</span></a></li>
                                </ul>                    
                            </nav>
                        </div>
                    </div>

                    <div class="clear"></div>
                </header>     
            </div>
            <div id="alchem-home-sections">

                <input class="hidden" name="emailP" id="emailP" value="<?php echo($_SESSION['email'] ); ?>" readonly>
                <section class="section magee-section alchem-home-section-1 alchem-home-style-0" id="section-2">
                	<div class="notifications">
                	</div>
                </section>
            </div>


            <div class="btn_up">
                <img src="img/retour-en-haut.png" class="img-responsive" id="returnOnTop">
            </div>


            <!--Footer-->
            <footer class="enbas">

                <div class="footer-info-area">
                    <div class="container text-center alchem_footer_social_icon_1"> 
                        <!-- <ul class="footer-sns"><li><a  rel="" href="http://localhost/wordpress/#" data-placemeynt="top" data-toggle="tooltip" title="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li><li><a  rel="" href="http://localhost/wordpress/#" data-placement="top" data-toggle="tooltip" title="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li><li><a  rel="" href="http://localhost/wordpress/#" data-placement="top" data-toggle="tooltip" title="" data-original-title="YouTube"><i class="fa fa-youtube"></i></a></li><li><a  rel="" href="http://localhost/wordpress/#" data-placement="top" data-toggle="tooltip" title="" data-original-title="Skype"><i class="fa fa-skype"></i></a></li><li><a  rel="" href="http://localhost/wordpress/#" data-placement="top" data-toggle="tooltip" title="" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a></li><li><a  rel="" href="http://localhost/wordpress/#" data-placement="top" data-toggle="tooltip" title="" data-original-title="Email"><i class="fa fa-envelope"></i></a></li></ul>                    <div class="clearfix"></div>
                        -->
                        <div class="site-info">
                            <a href="#" >OUSOFT SAS</a>. 38 Rue de la convention, 94270, Le Kremlin-Bicêtre.</div>
                    </div>
                </div>          
            </footer>
        </div>  
        <script type="text/javascript" src="bootstrap/js/jquery.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
                $('#returnOnTop').hide();
                $('#returnOnTop').click(function () {
                    //e.preventDefault();
                    $('html,body').animate({scrollTop: 0}, 'slow');
                });
				var auto_refresh = setInterval(
					function() 
					{
						var status = "lu";
        				var email = $('#emailP').val();

						$.ajax({
			                url: "badges.php",
			                type: "POST",
			                data: "email="+email,
			                success: function(server_response) 
			                {  
			                	$('#badges').html(server_response);
			                },
			                error: function(server_response) 
			                {  
			                  alert('Erreur :' + server_response);
			                }
	            		});
					}, 1000);	

				var refresh_auto = setInterval(
					function() 
					{
						var status = "lu";
        				var email = $('#emailP').val();

						$.ajax({
			                url: "notif.php",
			                type: "POST",
			                data: "email="+email,
			                success: function(server_response) 
			                {  
			                	$('.notifications').html(server_response);
			                },
			                error: function(server_response) 
			                {  
			                  alert('Erreur :' + server_response);
			                }
	            		});
					}, 2000);			
			});          
            function showId(id)
            { 
                var id = id;
                var etat = $('.'+id).attr('value');
                var status ="";
                if(etat === "refuser")
                {
                    status = "luRefuser";
                } else if (etat === "accepter") {
                    status = "luAccepter";
                }
                $.ajax({
                    url: "change.php",
                    type: "POST",
                    data: "id="+id+"&status="+status,
                    success: function(server_response) 
                    {  
                        if (server_response === "Succes") 
                        {
                            $(this).parents('.panel').fadeOut();
                            alert('mis à jour');
                        } else {
                            alert('Erreur :' + server_response);
                        }
                    },
                    error: function(server_response) 
                    {  
                      alert('Erreur :' + server_response);
                    }
                });
            }
		</script>
	</body>
</html>