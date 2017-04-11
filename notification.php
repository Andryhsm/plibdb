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

            .logo
            {
                position: absolute;
                width: 10%;
                z-index: 9;
                left: 5%;
            }

            li>a:hover
            {
                font-size: 1.1em;
                color:  #fff;
                text-decoration: none;
            }

            li>a
            {
                background-color: transparent;
                font-size: 1.1em;
                color: #fff;
                text-decoration: none;
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
        		left: 25%; top: 70px;
        		width: 50%;
        		z-index: 1;
                height: 420px;
                overflow: auto;
                padding-left: 40px;
                padding-right: 40px;
                padding-top: 10px;
                padding-bottom: 10px;   
        	}
            .enbas
            {
                position: fixed;
                bottom: 0;
                left: 0;
                right: 0;
                z-index: 9999;
            }
        </style><!-- <meta name="vfb" version="2.9.2" /> -->
        <style type="text/css">
        </style></head>
    <body class="home page-template page-template-template-frontpage page-template-template-frontpage-php page page-id-40 has-slider">
        <div class="wrapper ">
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                      <div class="logo">
                          <a href="#"><img src="img/logo.png"></a>
                      </div>
                  </div>
          
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="./carte.php">Carte</a></li>
                      <li><a href="./notification.php"><span id="badges">Notification</span></a></li>
                      <li><a href="./lib-php/modifierprofil.php">Modifier mon profil</a></li>
                      <li><a href="./contact1.php">Contact</a></li>
                      <li><a href="./lib-php/deconnexion.php">Deconnexion</a></li>
                    </ul>
                  </div>
                </div>
            </nav>
            <div class="container-fluid">

                <input class="hidden" name="emailP" id="emailP" value="<?php echo($_SESSION['email'] ); ?>" readonly>
                	<div class="container">
                        <div class="notifications" id="notifications">
                        </div>
                	</div>
            </div>


            <div class="btn_up">
                <img src="img/retour-en-haut.png" class="img-responsive" id="returnOnTop">
            </div>


            <!--Footer-->
            <footer class="enbas">

                <div class="footer-info-area">
                    <div class="text-center alchem_footer_social_icon_1"> 
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
			                	$('#notifications').html(server_response);
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