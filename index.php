<!DOCTYPE html>
<html>
<head>
		<title>Informação do Ônibus</title>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
		<meta charset="utf-8">
		<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="funcao.js"></script>
		
	<!--

		<uses-permission android:name="android.permission.ACCESS_FINE_LOCATION"/>
		
		<uses-permission android:name="android.permission.ACCESS_COARSE_LOCATION"/>
		
		<uses-permission android:name="android.permission.INTERNET"/>
	
	 -->
		<script>
		setInterval(function(){ AlteraConteudo(); }, 20000);
		</script>
	
	
	 
   

		<style>
			/* Always set the map height explicitly to define the size of the div
			* element that contains the map. */
			#map {
			height: 80%;
			width:80%;
				}
			/* Optional: Makes the sample page fill the window. */
			html, body {
			height: 100%;
			margin: 0;
			padding: 0;
				}
		</style>
	
	 <script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.

	  
      function initMap() 
	  {
        var map = new google.maps.Map(document.getElementById("map"), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 16
        });
        var infoWindow = new google.maps.InfoWindow({map: map});

        // Try HTML5 geolocation.
        if (navigator.geolocation)
		{
          navigator.geolocation.getCurrentPosition(function(position)
		  {
            var pos = 
			{
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
			
            infoWindow.setPosition(pos);
            infoWindow.setContent("Você está aqui!");
			document.dados.latitude.value = position.coords.latitude;
			document.dados.longitude.value = position.coords.longitude;
			
			
			
			
            map.setCenter(pos);
          }, function() 
		  {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else 
		{
          // Browser doesnt support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              "Error: The Geolocation service failed." :
                              "Error: Your browser doesn\'t support geolocation.");
      }
		</script>
   
		<script async defer
			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAF_pe4i4A9UlOu8u3u99GoJLDzhihpyZU&callback&callback&callback&callback=myMap&callback=initMap">
		</script>
	
		<form  name = "dados" METHOD="POST" action="retorna_informacoes.php">
    
		<div id="map"></div>
	
	
</head>

<body>
 
   


	 nome:<input id="nome" name="nome" type="text" /><p><br>
	latitude:<input id="latitude" name="latitude" type="text" /><p><br>
	longitude:<input id="longitude" name="longitude" type="text" /><p><br>
	
	
		
	
</body>
</html>