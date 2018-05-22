<!doctype html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
        html, body{
            height:100%;
            margin:0px;
            padding:0px;
        }
        #map_canvas{
            width: 100%;
            height:100%;
            font-family:Arial, Helvetica, sans-serif;
            font-size:12px;
        }
    </style>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
        function initialize() {
            var latlng = new google.maps.LatLng(10.064383,-68.109267);
            var myOptions = {
                zoom: 12,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                panControl: true,
                zoomControl: true,
                mapTypeControl: true,
                scaleControl: true,
                streetViewControl: true,
                overviewMapControl: true
            };
            var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
			
            var marker = new google.maps.Marker({
                position: latlng, 
                map: map, 
                title:"Sarisariyama",
                animation: google.maps.Animation.BOUNCE
            });

            var contentString = '<div style="text-align:left;"><b>Sarisariyama</b><br />Safari Carabobo Country Club<br />Parcela 943, Tocuyito, Carabobo.<br /><br />A 18 minutos al sur de Valencia<br />vía Campo de Carabobo muy cerca<br />de la Encrucijada de Carabobo.<br /><br /><a href="contact-us.php">[ Volver ]</a></div>';
            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });
            infowindow.open(map,marker);
        }
    </script>
</head>
<body onload="initialize()">
    <div id="map_canvas"></div>
</body>