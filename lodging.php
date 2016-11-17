<?php
/**
 * Created by PhpStorm.
 * User: Pe
 * Date: 3/12/14
 * Time: 13:53
 */

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8_spanish_ci">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootbusiness | Short description about company">
    <meta name="author" content="Your name">
    <title>Sleepy | Give unique title of the page here</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap responsive -->
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <!-- Font awesome - iconic font with IE7 support -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/font-awesome-ie7.css" rel="stylesheet">
    <!-- Bootbusiness theme -->
    <link href="css/boot-business.css" rel="stylesheet">

    <script src="plugin/jquery-2.1.1.min.js" type="text/javascript" language="javascript"></script>
    <script src="plugin/multifile-master/jQuery.MultiFile.min.js" type="text/javascript" language="javascript"></script>


    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script>

        function valida(f) {
            var ok = true;
            var msg = "You must complete all the fields:\n";
            if(f.address.value == "")
            {
                msg += "- Address\n";
                ok = false;
            }
            if(f.bedtype.value == "")
            {
                msg += "- Bed type\n";
                ok = false;
            }
            if(f.size.value == "")
            {
                msg += "- Size\n";
                ok = false;
            }
            if(f.ppn.value == "")
            {
                msg += "- Pay per night\n";
                ok = false;
            }

            if(ok == false)
                alert(msg);
            return ok;
        }

        var map;
        var myCenter=new google.maps.LatLng(40.44694705960048,-3.702392578125);
        var marker;
        var infowindow=new google.maps.InfoWindow();

        function initialize()
        {
            var mapProp = {
                center:myCenter,
                zoom:5,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };

            map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

            google.maps.event.addListener(map, 'click', function(event) {
                placeMarker(event.latLng);
            });
        }

        function initialize2()
        {
            var mapProp = {
                center:myCenter,
                zoom:5,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };
            var res = document.getElementById('gmapsCoords').value.split(",");
            map = new google.maps.Map(document.getElementById('googleMapReadOnly'),mapProp);
            var myCoords=new google.maps.LatLng(res[0],res[1]);
            var marker=new google.maps.Marker({
                position:myCoords,
                animation:google.maps.Animation.BOUNCE,
                map:map
            });
        }

        function initialize3()
        {
            var mapProp = {
                center:myCenter,
                zoom:5,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };
            var res = document.getElementById('gmapsCoords').value.split(",");
            map = new google.maps.Map(document.getElementById('googleMap'),mapProp);
            var myCoords=new google.maps.LatLng(res[0],res[1]);
            var marker=new google.maps.Marker({
                position:myCoords,
                animation:google.maps.Animation.BOUNCE,
                map:map
            });

            google.maps.event.addListener(map, 'click', function(event) {
                placeMarker(event.latLng);
            });

        }

        function placeMarker(location) {
            if ( marker ) {
                marker.setPosition(location);
            } else {
                marker = new google.maps.Marker({
                    position: location,
                    map: map
                });
            }
            var cadena = location.toString();

            cadena = cadena.replace('(','');
            cadena = cadena.replace(')','');

            document.getElementById('gmapsCoords').value=cadena;
        }
        <?php
            if(ISSET($_POST['newLodging']))
                 echo "google.maps.event.addDomListener(window, 'load', initialize)";
            elseif(ISSET($_POST['updateLodging']))
                echo "google.maps.event.addDomListener(window, 'load', initialize3)";
            else
                 echo "google.maps.event.addDomListener(window, 'load', initialize2)";
        ?>

    </script>
</head>
<body>
<!-- Start: HEADER -->
<header>
    <?php
    include 'utilsPHP/header.php'
    ?>
</header>
<!-- End: HEADER -->
<!-- Start: MAIN CONTENT -->



<div class="content">
    <div class="container">
        <div class="page-header">
            <h1>My lodgings</h1>
        </div>
        <div class="row">
            <div class="span10 offset1">
                <h4 class="widget-header"><i class="fa fa-home"></i> My lodgings</h4>
                <div class="widget-body">
                    <div class="center-align">
                        <!-- Lodging data... -->

                            <?php
                            if(ISSET($_SESSION['userId']) && ISSET($_POST['newLodging']))
                                include "utilsPHP/newLodging.php";
                            elseif(ISSET($_SESSION['userId']) && ISSET($_POST['addLodging']))
                                include "utilsPHP/actions/addLodging.php";
                            elseif(ISSET($_SESSION['userId']) && ISSET($_POST['updateLodging']))
                                include "utilsPHP/lodgingEditable.php";
                            elseif(ISSET($_SESSION['userId']) && ISSET($_POST['editLodging']))
                                include "utilsPHP/actions/editLodging.php";
                            elseif(ISSET($_SESSION['userId']) && ISSET($_POST['deleteLodging']))
                                include "utilsPHP/actions/deleteLodging.php";
                            elseif(ISSET($_GET['lodgingId']))
                                include "utilsPHP/lodging.php";
                            else
                                echo "You are not authorized.";
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End: MAIN CONTENT -->
<!-- Start: FOOTER -->
<footer>
    <?php
    include 'utilsPHP/footer.php';
    ?>
</footer>
<!-- End: FOOTER -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/boot-business.js"></script>
</body>
</html>
