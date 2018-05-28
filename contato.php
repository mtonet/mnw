<!DOCTYPE html>
<?php $thisPage="Contato"; ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>MãonaWeb<?php if ($thisPage!="")  echo " | $thisPage"; ?></title>
<link rel="stylesheet" type="text/css" href="css/estilo.css" />
<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?sensor=false&language=pt">
    </script>
    <script  type="text/javascript">
      function initialize() {
        var myOptions = {
          scaleControl: true,
          center: new google.maps.LatLng(-23.6131333, -46.7159089),
          zoom: 16,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var map = new google.maps.Map(document.getElementById('map_canvas'),
            myOptions);

        var marker = new google.maps.Marker({
          map: map,
          position: map.getCenter()
        });
        var infowindow = new google.maps.InfoWindow();
        infowindow.setContent('<b>القاهرة</b>');
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map, marker);
        });
      }

      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-31544802-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>
	<div class="container">    	
        <header class="menu">
            <?php include("includes/navigation.php"); ?>
        </header>    
        <div class="estrategia">
        <div class="breadcrumbs">
            	<h2>MãonaWeb <span>/ Contato</span></h2>
            </div>
            <img src="img/hr-gd.jpg">
            <div class="top-internas">
            	<h1 class="contato">Estamos aqui!</h1>                
            </div>
            <img src="img/hr-gd.jpg">
            <div class="mapa">
            <div id="map_canvas" style="height: 400px;"></div>
            </div>
        </div>
   		  	<?php include("includes/footer.php"); ?>            
    </div><!--Fim container-->
</body>
</html>