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
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootsrap.min.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.miin.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/paper.css">
        <link rel="stylesheet" type="text/css" href="js/datepicker/css/datepicker.css">

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

            .logo
            {
                position: absolute;
                width: 10%;
                z-index: 9;
                left: 5%;
            }

            #returnOnTop
            {
                display: none;
                cursor: pointer;
            }

            #map {
                margin: 0% 0% 0% 0%;
                width: 100vw;
                height: 80vh;
                background: white;
            }

            .controls {
                margin-top: 10px;
                border: 1px solid transparent;
                border-radius: 2px 0 0 2px;
                box-sizing: border-box;
                -moz-box-sizing: border-box;
                height: 32px;
                outline: none;
                box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
            }
            #pac-input {
                position: absolute;
                z-index: 1;
                margin: 1% 0% 0% 10%;
                background-color: #fff;
                font-family: Roboto;
                font-size: 15px;
                font-weight: 300;
                margin-left: 12px;
                padding: 0 11px 0 13px;
                text-overflow: ellipsis;
                width: 300px;
            }

            #pac-input:focus {
                border-color: #4d90fe;
            }

            .pac-container {
                font-family: Roboto;
            }

            #type-selector {
                color: #fff;
                background-color: #4d90fe;
                padding: 5px 11px 0px 11px;
            }

            #type-selector label {
                font-family: Roboto;
                font-size: 13px;
                font-weight: 300;
            }

            #chercher{
                margin: -4% 0% 0% -16%;
            }

            .main-header {
                background-color: rgb(77, 144, 254);
                color: white;
                width: 100%;
                border-bottom: 1px solid transparent;
            }

            #img-infirmier {
                width: 60%;
                margin-left: 60%;

            }
            .modal-header-infirmier {
                text-align: center;
                padding: 15px;
                border-bottom: 1px solid transparent;
                background: #2196f3;
                border: 1px solid white;
                color: white;
            }
            .modal-title-infirmier {
                color: white;
            }
            .info {
               background: #f3f8f7;
            }
            #nomInfirmier {
                font-size: 2.2em;
                color: #6b624d;
            }
            footer .footer-info-area {
                background-color: rgb(77, 144, 254);
            }
            .navbar
            {
                background-color: rgb(77, 144, 254);
            }

            #alchem-home-sections
            {
                padding-top: 60px;
            }

            #dmd_deja_envoyer {
                background: #e95e5e;
                font-size: 1.2em;
                color: white;
                width: 100%;
                height: 19%;
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
                      <li><a href="lib-php/modifierprofil.php">Modifier mon profil</a></li>
                      <li><a href="./contact1.php">Contact</a></li>
                      <li><a href="lib-php/deconnexion.php">Deconnexion</a></li>
                    </ul>
                  </div>
                </div>
            </nav>     



            <div id="alchem-home-sections">
                <!-- Un test de modal dialogue -->
                <a class="btn btn-primary hidden" data-toggle="modal" id="triggerwarningI" href='#modal-id'>Trigger modal</a>
                <div class="modal fade" id="modal-id">
                    <div class="modal-dialog" style="margin:0%; height: 100vh;">
                        <div class="modal-content">
                            <div class="modal-header-infirmier">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title modal-title-infirmier">INFIRMIERE LIBERALE</h4>
                            </div>
                            <div class="modal-body modal-body-infirmier" >
                                <div class="warning" id="infoI"></div>    
                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Modal -->
                <a class="btn btn-primary hidden" id="triggerwarning" data-toggle="modal" href='#warning'>Trigger modal</a>
                <div class="modal fade" id="warning">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Information</h4>
                            </div>
                            <div class="modal-body">
                                <div class="warning" id="info"></div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" id="ferme" class="btn btn-default hidden" data-dismiss="modal"></button>
                            </div>
                        </div>
                    </div>
                </div>


                <section class="section magee-section alchem-home-section-4 alchem-home-style-0" id="section-5" style="padding:0%;">
                    <input id="pac-input" class="controls" type="text" placeholder="Entrer adresse, lieu, Ville">
                    <div id="type-selector" class="controls">  
                        <label>Ici pour chercher un lieu</label>

                    </div>
                    <div id="map"></div>

                </section>


            </div>

            <div class="btn_up">
                <img src="img/retour-en-haut.png" class="img-responsive" id="returnOnTop">
            </div>


            <footer class="">
                <div class="footer-info-area">
                    <div class="container text-center alchem_footer_social_icon_1">
                        <div class="site-info">
                            <a href="#" >OUSOFT SAS</a>. 38 Rue de la convention, 94270, Le Kremlin-Bicêtre.</div>
                            <input type="hidden" id="emailP" value="<?php echo($_SESSION['email']);?>">
                    </div>
                </div>          
            </footer>
        </div>  




        <script type="text/javascript" src="bootstrap/js/jquery.js"></script>
        <script type="text/javascript" src="js/datepicker/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="./others/owl.carousel.min.js.téléchargement"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            /* <![CDATA[ */
            var alchem_params = {"ajaxurl": "http:\/\/localhost\/wordpress\/wp-admin\/admin-ajax.php", "themeurl": "http:\/\/localhost\/wordpress\/wp-content\/themes\/alchem", "responsive": "yes", "site_width": "1170px", "sticky_header": "yes", "show_search_icon": "yes", "slider_autoplay": "yes", "slideshow_speed": "3000", "portfolio_grid_pagination_type": "pagination", "blog_pagination_type": "pagination", "global_color": "#fdd200", "admin_ajax_nonce": "2ed3a22947", "admin_ajax": "http:\/\/localhost\/wordpress\/wp-admin\/admin-ajax.php", "isMobile": "0", "footer_sticky": "0"};
            /* ]]> */
        </script>
        <script type="text/javascript" src="./others/main.js.téléchargement"></script>

        <script src="http://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAFYS6_tY3pkUEhb3cSkRUqiifSbTGOFa4&callback=initMap" async defer></script>



        <script type="text/javascript">
            var map;
            var tab_marqueur = [];
            function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: 48.862226, lng: 2.340173},
                    zoom: 13
                });

                //Affichage des infirmiers sur la carte
                $.ajax({
                    url: 'lib-php/infirmier_json.php',
                    type: 'GET',
                    success: function (data) {
                        var json = $.parseJSON(data);
                        for (var i = json.length - 1; i >= 0; i--) {
                            var infirmier = $.parseJSON(json[i]);

                            if (typeof infirmier.latLng != "undefined") {
                                latLng = infirmier.latLng.replace('(', '');
                                latLng = latLng.replace(')', '');
                                var latLng = latLng.split(',');
                                var pos = new google.maps.LatLng(latLng[0], latLng[1]);

                                afficher_marqueur(map, infirmier, pos);
                            }
                        }
                    },
                    error: function () {
                        alert("Une erreur de recuperation des données ! ");
                    }
                });

                // Try HTML5 geolocation.
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function (position) {

                        var pos = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        };

                        var marker = new google.maps.Marker({
                            map: map,
                            position: pos
                        });

                        var infoW = new google.maps.InfoWindow({
                            content: "Vous êtes içi ! "
                        });

                        infoW.open(map, marker);

                        marker.setIcon("http://maps.google.com/mapfiles/ms/icons/blue-dot.png");
                        map.setCenter(pos);


                    }, function () {
                        handleLocationError(true, infoWindow, map.getCenter());
                    });
                } else {
                    handleLocationError(false, infoWindow, map.getCenter());
                }

                //Pour l'autocompletion


                function handleLocationError(browserHasGeolocation, infoWindow, pos) {
                    infoWindow.setPosition(pos);
                    infoWindow.setContent(browserHasGeolocation ?
                            'Error: The Geolocation service failed.' :
                            'Error: Your browser doesn\'t support geolocation.');
                }


                var input = /** @type {!HTMLInputElement} */(
                        document.getElementById('pac-input'));

                var types = document.getElementById('type-selector');
                map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
                map.controls[google.maps.ControlPosition.TOP_LEFT].push(types);

                var autocomplete = new google.maps.places.Autocomplete(input);
                autocomplete.bindTo('bounds', map);

                var infowindow = new google.maps.InfoWindow();
                var marker = new google.maps.Marker({
                    map: map,
                    anchorPoint: new google.maps.Point(0, -29)
                });

                autocomplete.addListener('place_changed', function () {
                    infowindow.close();
                    marker.setVisible(false);
                    var place = autocomplete.getPlace();
                    if (!place.geometry) {
                        var addr = $("#pac-input").val();
                        geocodeAddress(map, addr);
                    }

                    // If the place has a geometry, then present it on a map.
                    if (place.geometry.viewport) {
                        map.fitBounds(place.geometry.viewport);
                    } else {
                        map.setCenter(place.geometry.location);
                        map.setZoom(17);  // Why 17? Because it looks good.
                    }
                    marker.setIcon(/** @type {google.maps.Icon} */({
                        url: place.icon,
                        size: new google.maps.Size(71, 71),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(17, 34),
                        scaledSize: new google.maps.Size(35, 35)
                    }));
                    marker.setPosition(place.geometry.location);
                    marker.setVisible(true);

                    var address = '';
                    if (place.address_components) {
                        address = [
                            (place.address_components[0] && place.address_components[0].short_name || ''),
                            (place.address_components[1] && place.address_components[1].short_name || ''),
                            (place.address_components[2] && place.address_components[2].short_name || '')
                        ].join(' ');
                    }

                    infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
                    infowindow.open(map, marker);
                });

                // Sets a listener on a radio button to change the filter type on Places
                // Autocomplete.
                function setupClickListener(id, types) {
                    var radioButton = document.getElementById(id);
                    radioButton.addEventListener('click', function () {
                        autocomplete.setTypes(types);
                    });
                }

                setupClickListener('changetype-all', []);
                setupClickListener('changetype-address', ['address']);
                setupClickListener('changetype-establishment', ['establishment']);
                setupClickListener('changetype-geocode', ['geocode']);
            }


            jQuery(document).ready(function ($) {
               
            });
            function rendezVous(emailI) {
                var commentaire = encodeURIComponent($("#commentaire").val());
                var heure_soin = encodeURIComponent($("#heure_soin").val());
                var date_soin = encodeURIComponent($("#date_soin").val());
                $.ajax({
                    url: 'lib-php/rendez-vous.php?emailI='+emailI+'&date_soin='+date_soin+'&heure_soin='+heure_soin+'&commentaire='+commentaire,  
                    type: 'GET',
                    success: function (data) {
                        if (data === "reussi") {
                            $('#info').html('<p> Votre demande est bien envoyer . </p>');
                            $('#triggerwarning').trigger('click');
                            setTimeout(function () {
                                $('#ferme').trigger('click');
                            }, 40000);
                    } else if (data === "existe") {
                            var nom = $('#nomInfirmier').html();

                            $('#info').html('<p> Votre demande à <strong>' + nom + '</strong> est dejà envoyer !</p>');
                            $('#triggerwarning').trigger('click');
                            setTimeout(function () {
                                $('#ferme').trigger('click');
                            }, 40000);
                        } else {
                            alert("Une erreur de requete dans rendez-vous.php");
                        }
                    },
                    error: function () {
                        $('#info').html('<p> Veuillez indiquer un adresse e-mail valide et un mot de passe. </p>');
                        $('#triggerwarning').trigger('click');
                        setTimeout(function () {
                            $('#ferme').trigger('click');
                        }, 40000);
                    }
                });
            }

            //Geocodage des adresses
            
            function geocodeAddress(resultsMap, address) {
                var geocoder = new google.maps.Geocoder();
                geocoder.geocode({'address': address}, function (results, status) {
                    if (status === google.maps.GeocoderStatus.OK) {
                        resultsMap.panTo(results[0].geometry.location);
                        if (marker) {
                            marker.setMap(null);
                        }
                        marker = new google.maps.Marker({
                            map: resultsMap,
                            position: results[0].geometry.location
                        });
                        var latLng = results[0].geometry.location.lat;
                        var position = marker.getPosition();
                        // alert(results[0].geometry.location);
                        var infoBull = new google.maps.InfoWindow({
                            content: "Votre lieu d'intervention est ici ?"
                        });
                        infoBull.open(map, marker);
                        $("#latLng").val(position);
                    } else {
                        alert('Geocode was not successful for the following reason: ' + status);
                    }
                });
            }


            function afficher_marqueur(Smap, infirmier, pos) {
                var marqueur = new google.maps.Marker({
                    map: map,
                    position: pos,
                    title: infirmier.nomI,
                    id: infirmier.id
                });

                var p = "<div class='col-lg-12 info'>";
                p += "<div class='row'>";
                p += "<div class='col-xs-6 col-lg-6 col-sm-6'><h4 id='nomInfirmier'>" + infirmier.prenomI + " " + infirmier.nomI + "</h4></center></div>";
                p += "<div id='img-infirmier' class='col-xs-3 col-lg-3 col-sm-3'>";
                p += "<img src='./image-person/" + infirmier.photo + "' style='width:60%;'/>";
                p += "</div>";
                p += "</div>";
                p += "<div class='col-lg-8'>";
                p += "<p><strong>Téléphone : </strong>" + infirmier.telI + "</p>";
                p += "<p><strong>Email : </strong>" + infirmier.emailI + "</p>";
                p += "<p><strong>Adresse : </strong>" + infirmier.rueI + " - " + infirmier.code_postalI + " - " + infirmier.villeI + "</p>";
                p += "<p><strong>Type de soin : </strong> " + infirmier.type_soinI1 + " - " + infirmier.type_soinI2 + " - " + infirmier.type_soinI3 + " - " + infirmier.type_soinI4 + "</p>";
                p += "<p><strong>Lieu d'intervention : " + infirmier.lieu_intervention + "</strong></p>";
                p += "<div id='input_date'>";
                p += "</div>";
                p += "<div>";
                p += "<p><label for='date_soin'>Date de soin : </label>";
                p += "<input class='form-control col-lg-2' id='date_soin' name='date_soin' type='datep' placeholder='12-12-2012'></input></p>";
                p += "<p><label for='heure_soin'>Heure de soin : </label>";
                p += "<div class='input-group'>";
                p += "  <input class='form-control col-lg-2' id='heure_soin' name='heure_soin' type='time' placeholder='12'></input></p>";
                p += "  <span class='input-group-addon'>h</span>";
                p += "</div>";
                p += "</div>";
                p += "<div class='col-lg-12'>";
                p += "<center></br></br><textarea class='form-control' placeholder='Decriver votre demande içi' name='commentaire' id='commentaire' type='text'></textarea><br>";
                p += "<input type='submit' class='btn btn-primary' name='rdv' onclick='rendezVous(\"" + infirmier.emailI + "\");' value='Prendre rendez-vous' /></center>";
                p += "</div>";
                p += "</div>";


                var p2 = "<div class='col-lg-12 info'>";
                p2 += "<div class='row'>";
                p2 += "<div class='col-xs-6 col-lg-6 col-sm-6'><h4 id='nomInfirmier'>" + infirmier.prenomI + " " + infirmier.nomI + "</h4></center></div>";
                p2 += "<div id='img-infirmier' class='col-xs-3 col-lg-3 col-sm-3'>";
                p2 += "<img src='./image-person/" + infirmier.photo + "' style='width:60%;'/>";
                p2 += "</div>";
                p2 += "</div>";
                p2 += "<div class='col-lg-8'>";
                p2 += "<p><strong>Téléphone : </strong>" + infirmier.telI + "</p>";
                p2 += "<p><strong>Email : </strong>" + infirmier.emailI + "</p>";
                p2 += "<p><strong>Adresse : </strong>" + infirmier.rueI + " - " + infirmier.code_postalI + " - " + infirmier.villeI + "</p>";
                p2 += "<p><strong>Type de soin : </strong> " + infirmier.type_soinI1 + " - " + infirmier.type_soinI2 + " - " + infirmier.type_soinI3 + " - " + infirmier.type_soinI4 + "</p>";
                p2 += "<p><strong>Lieu d'intervention : " + infirmier.lieu_intervention + "</strong></p>";
                p2 += "</div>";
                p2 += "<div id='dmd_deja_envoyer' class='col-lg-12'>";
                p2 += "<center>Demande dejà envoyer. </center>";
                p2 += "</div>";
                p2 += "</div>";



                <?php echo "var emailP = \"" . $_SESSION["email"] . "\";"; ?>
                /*
                 var infoWindow = new google.maps.InfoWindow({
                 content: p
                 });*/



                marqueur.addListener('click', function () {
                    // infoWindow.open(Smap, marqueur);

                    $.ajax({
                        url: 'lib-php/lib/savoir_demande.php?emailP=' + emailP + '&emailI=' + infirmier.emailI,
                        type: 'GET',
                        success: function (data) {
                            if (data === "inexiste") {
                                $('.modal-body-infirmier').html(p);
                                $('#triggerwarningI').trigger('click');

                            } else if (data === "existe") {
                                $('.modal-body-infirmier').html(p2);
                                $('#triggerwarningI').trigger('click');
                            } else {
                                alert("Une erreur php dans savoir_demande.php");
                            }
                        },
                        error: function (data) {
                            alert("Erreur de requete ajax sur savoir_demande.php");
                        }

                    });
                });
            }

            function encode_utf8(s) {
                 return unescape(encodeURIComponent(s));
            }

            function decode_utf8(s) {
                 return decodeURIComponent(escape(s));
            }
            
            $("#test").click(function(event) {

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


        </script>

    </body>
</html>