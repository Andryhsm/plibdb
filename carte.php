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
            }

            #map {
                margin: 0% 2% 0% 2%;
                width: 95vw;
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
                                    <li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a href="./carte.php"><span class="menu-item-label">Carte</span></a></li>
                                    <li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a href="./notification.php"><span class="menu-item-label" id="badges">Notification</span></a></li>
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
                <button class="btn btn-primary hidden btn-lg" id="triggerwarning" data-toggle="modal" data-target="#loginerror">tester</button>

                <div class="modal" id="loginerror">
                    <div class="modal-dialog">
                        <div class="modal-content alert alert-dismissible alert-info col-lg-12">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="ferme">&times;</button>
                                <h4 class="modal-title" style="text-align: center;">Information !</h4>
                            </div>
                            <div class="modal-body">
                                <div class="warning" id="info"></div>
                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>
                    </div>
                </div>

                <section class="section magee-section alchem-home-section-4 alchem-home-style-0" id="section-5" style="padding:0%;">
                    <input id="pac-input" class="controls" type="text" placeholder="Enter a location">
                    <input type="hidden" id="emailP" value="<?php echo($_SESSION['email']); ?>">
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
                    </div>
                </div>          
            </footer>
        </div>  




        <script type="text/javascript" src="bootstrap/js/jquery.js"></script>
        <script type="text/javascript" src="./others/owl.carousel.min.js.téléchargement"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            /* <![CDATA[ */
            var alchem_params = {"ajaxurl": "http:\/\/localhost\/wordpress\/wp-admin\/admin-ajax.php", "themeurl": "http:\/\/localhost\/wordpress\/wp-content\/themes\/alchem", "responsive": "yes", "site_width": "1170px", "sticky_header": "yes", "show_search_icon": "yes", "slider_autoplay": "yes", "slideshow_speed": "3000", "portfolio_grid_pagination_type": "pagination", "blog_pagination_type": "pagination", "global_color": "#fdd200", "admin_ajax_nonce": "2ed3a22947", "admin_ajax": "http:\/\/localhost\/wordpress\/wp-admin\/admin-ajax.php", "isMobile": "0", "footer_sticky": "0"};
            /* ]]> */
        </script>
        <script type="text/javascript" src="./others/main.js.téléchargement"></script>

        <script src="http://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAFYS6_tY3pkUEhb3cSkRUqiifSbTGOFa4&callback=initMap" async defer></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFYS6_tY3pkUEhb3cSkRUqiifSbTGOFa4&libraries=places"></script>


        <script type="text/javascript">
            var map;
            function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: -33.8688, lng: 151.2195},
                    zoom: 13
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
                $.ajax({
                    url: 'lib-php/infirmier_json.php',
                    type: 'GET',
                    success: function (data) {
                        var json = $.parseJSON(data);
                        //alert(json.length);
                        for (var i = json.length - 1; i >= 0; i--) {
                            var infirmier = $.parseJSON(json[i]);
                            if (typeof infirmier.latLng != "undefined") {
                                latLng = infirmier.latLng.replace('(', '');
                                latLng = latLng.replace(')', '');
                                var latLng = latLng.split(',');
                                //alert(latLng[0]);
                                var pos = new google.maps.LatLng(latLng[0], latLng[1]);
                                var marker = new google.maps.Marker({
                                    map: map,
                                    position: pos
                                });


                                var p = "<div class='col-lg-12'>";
                                p += "<center><h4>" + infirmier.prenomI + " " + infirmier.nomI + "</h4></center>";
                                p += "<div class='col-lg-8'>";
                                p += "<p><strong>Téléphone : </strong>" + infirmier.telI + "</p>";
                                p += "<p><strong>Email : </strong>" + infirmier.emailI + "</p>";
                                p += "<p><strong>Adresse : </strong>" + infirmier.rueI + " - " + infirmier.code_postalI + " - " + infirmier.villeI + "</p>";
                                p += "<p><strong>Type de soin : </strong> " + infirmier.type_soinI1 + " - " + infirmier.type_soinI2 + " - " + infirmier.type_soinI3 + " - " + infirmier.type_soinI4 + "</p>";
                                p += "<p><strong>Lieu d'intervention : " + infirmier.lieu_intervention + "</strong></p>";
                                p += "</div>";
                                p += "<div class='col-lg-4'>";
                                p += "<img src='./image-person/" + infirmier.photo + "' style='width:60%;'/>";
                                p += "</div>";
                                p += "<div class='col-lg-12'>";
                                p += "<center><textarea class='form-control' placeholder='Ecrivez varotre commentaire ici' name='commentaire' id='commentaire' type='text'></textarea><br>";
                                p += "<input type='submit' class='btn btn-primary' name='rdv' onclick='rendezVous(\"" + infirmier.emailI + "\");' value='Prendre rendez-vous' /></center>";
                                p += "</div>";
                                p += "</div>";

                                var infoW = new google.maps.InfoWindow({
                                    content: p
                                });

                                marker.addListener('click', function () {
                                    infoW.open(map, marker);
                                });

                            }
                        }
                    },
                    error: function () {
                        alert("Une erreur de recuperation des données ! ");
                    }
                });


            });
            function rendezVous(emailI) {
                var commentaire = encodeURIComponent($("#commentaire").val());

                $.ajax({
                    url: 'lib-php/rendez-vous.php?emailI=' + emailI + "&commentaire=" + commentaire,
                    type: 'GET',
                    success: function (data) {
                        if (data === "reussi") {

                            $('#info').html('<p> Votre demande est vient envoyer . </p>');
                            $('#triggerwarning').trigger('click');
                            setTimeout(function () {
                                $('#ferme').trigger('click');
                            }, 40000);


                        } else if (data === "existe") {
                            
                            $('#info').html('<p> Vous avez deja envoyer une demande </p>');
                            $('#triggerwarning').trigger('click');
                            setTimeout(function () {
                                $('#ferme').trigger('click');
                            }, 40000);
                        } else {
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
        </script>

    </body>
</html>