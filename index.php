
<!doctype html>
<html lang="en">
		<head>
		  <title>Geolocation</title>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		  <link rel="shortcut icon" href="">
			<!-- Load Leaflet from CDN -->
			<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
			  integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
			  crossorigin=""/>
			<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
			  integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
			  crossorigin=""></script>
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		  <script src="https://unpkg.com/esri-leaflet@2.5.1/dist/esri-leaflet.js"
    integrity="sha512-q7X96AASUF0hol5Ih7AeZpRF6smJS55lcvy+GLWzJfZN+31/BQ8cgNx2FGF+IQSA4z2jHwB20vml+drmooqzzQ=="
    crossorigin=""></script>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		   <!--Load Esri  leftlet from CDN---->
		  <script src="https://unpkg.com/esri-leaflet@2.0.8" ></script>
		  
		  <!--Load Esri  leftlet geocoder from CDN---->
		  <link rel="stylesheet" href="https://unpkg.com/esri-leaflet-geocoder@2.2.4/dist/esri-leaflet-geocoder.css" />
		  <script src="https://unpkg.com/esri-leaflet-geocoder@2.2.4" ></script>
	   
	  
	  
	  <!--Load leftlet from CDN---->
	  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
	  <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js" ></script>
	  
	  <!--Load Esri  leftlet from CDN---->
	  <script src="https://unpkg.com/esri-leaflet@2.0.8" ></script>
	  
	  <!--Load Esri  leftlet geocoder from CDN---->
	  <link rel="stylesheet" href="https://unpkg.com/esri-leaflet-geocoder@2.2.4/dist/esri-leaflet-geocoder.css" />
	  <script src="https://unpkg.com/esri-leaflet-geocoder@2.2.4" ></script>
	
</head>

	
<style>
 body { margin:0; padding:0; }
    #map { position: absolute; top:75px; bottom:0; right:0; left:0; }
 #basemaps-wrapper {
    position: absolute;
    top: 200px;
    right: 10px;
    z-index: 400;
    background: white;
    padding: 10px;
  }
  #basemaps {
    margin-bottom: 5px;
  }
	
</style>
<body>

<nav class="navbar navbar-inverse">
Country
<a class="navbar-brand" href="#"><select id="data">default</select></a>


		<a class="navbar-brand" href="#"></a><button type="button" class="btn btn-info btn-lg" data-toggle="modal" id="submit" data-target="#myModal">Country Data</button></a>
		<a class="navbar-brand" href="#"></a><button type="button" class="pure-button pure-button-primary"  id="pure">Get my location</button></a>
</nav>
<div  id="map"  ></div>
<div id ="col">
<div id="basemaps-wrapper" class="leaflet-bar">
	<select id="basemaps">
	  <option value="Topographic">Topographic</option>
	  <option value="Streets">Streets</option>
	  <option value="NationalGeographic">National Geographic</option>
	  <option value="Oceans">Oceans</option>
	  <option value="Gray">Gray</option>
	  <option value="DarkGray">Dark Gray</option>
	  <option value="Imagery">Imagery</option>
	  <option value="ImageryClarity">Imagery (Clarity)</option>
	  <option value="ImageryFirefly">Imagery (Firefly)</option>
	  <option value="ShadedRelief">Shaded Relief</option>
	  <option value="Physical">Physical</option>
	</select>
  </div>
  </div>
  <div id ="myModal"  class="modal">
		  <div class="modal-dialog">
		
			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header">
			
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<h4 class="modal-title">Country Information</h4>
			  </div>
			  <div class="modal-body">
				<div class="row">
  <table>
	

<tr><td id="country_flag"><img src="" alt=""  class="center"></td> </tr>
<tr><td id="name"></td></tr>								
<tr><td id="capital"></td></tr>								 
<tr><td id="regio"></td></tr>						  
<tr><td id="population"></td></tr>								
<tr><td id="currencies"></td></tr>
<tr><td id="languages"></td></tr>						
<tr><td id="lat"></td></tr>									
<tr><td id="name1"></td></tr>									  
<tr><td id="country"></td></tr>								
<tr><td id="main"></td></tr>	
<tr><td id="temprature"></td></tr>								  
<tr><td id="min"></td></tr>								
<tr><td id="max"></td></tr>							  
<tr><td id="humidity"></td>	</tr>							 
<tr><td id="wind"></td>	</tr>							
<tr><td id="weather"></td></tr>								  
<tr><td id="pressure"></td></tr>								
								
</table>				
</div>
</div>
</div>
 </div>
  </div> 								  
								
								
								
								
								
								
					
									
									
								
								
								
							
									
									
									  
								
								
								  
								
								
								
									
									
									  
									
								
								
								
								 
													
		
		 
  <script>
		var map =L.map('map').setView([40.91,-96.63],4);
	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	}).addTo(map);
	
	var searchControl = L.esri.Geocoding.geosearch().addTo(map);
	var results = L.layerGroup().addTo(map);
	searchControl.on('results',function(data){
		results.clearLayers();
		for(var i= data.results.length - 1; i>=0; i--){
	
			results.addLayer(L.marker(data.results[i].latlng));
		}
	
	})
	

	L.control.scale({
    metric:true,
    imperial:false,
    position:'topright'
}).addTo(map);
var leafletIcon =L.icon({

iconUrl:'https://leafletjs.com/examples/custom-icons/leaf-green.png',
shadowUrl:'https://leafletjs.com/examples/custom-icons/leaf-shadow.png',
iconSize: [38,95],
iconAnchor: [22,94],
shadowAnchor: [4,62],
popupAnchot:[12,-90],
})
$('.pure-button pure-button-primary').on('click', function(){
  map.locate({setView: true, maxZoom: 15});
});

map.on('locationfound', onLocationFound);
function onLocationFound(e) {
    console.log(e); 
    // e.heading will contain the user's heading (in degrees) if it's available, and if not it will be NaN. This would allow you to point a marker in the same direction the user is pointed. 
	L.marker(e.latlng).addTo(map);
	
}



var marker = L.marker([51.5, -0.09],{icon:leafletIcon}). addTo(map);
var layer = L.esri.basemapLayer('Topographic').addTo(map);
  var layerLabels;

  function setBasemap (basemap) {
    if (layer) {
      map.removeLayer(layer);
    }

    layer = L.esri.basemapLayer(basemap);

    map.addLayer(layer);

    if (layerLabels) {
      map.removeLayer(layerLabels);
    }

    if (
      basemap === 'ShadedRelief' ||
      basemap === 'Oceans' ||
      basemap === 'Gray' ||
      basemap === 'DarkGray' ||
      basemap === 'Terrain'
    ) {
      layerLabels = L.esri.basemapLayer(basemap + 'Labels');
      map.addLayer(layerLabels);
    } else if (basemap.includes('Imagery')) {
      layerLabels = L.esri.basemapLayer('ImageryLabels');
      map.addLayer(layerLabels);
    }
  }

  document
    .querySelector('#basemaps')
    .addEventListener('change', function (e) {
      var basemap = e.target.value;
      setBasemap(basemap);
    });
                                                                                                            
	
	
	</script>
<script type="application/javascript" src="lib/js/fore.js"></script>
	<script type="application/javascript" src="lib/js/script.js"></scrip
<script src="jquery/jquery-2.2.3.min.js"></script>
<script src="lib/js/app.js"></script>
</body>
</html>