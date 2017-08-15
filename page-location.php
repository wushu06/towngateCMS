<?php include 'header.php';  ?>
<section class="location">
   <div id="map"></div>
    <div id="aerial"><img src="<?php echo get_template_directory_uri(); ?>/images/Aerial-Photo-Map.jpg"></div>
   <div class="map-footer">
   <p class="white" id="showMap">MAP 
        <img src="<?php echo get_template_directory_uri(); ?>/images/Map.svg" >
        <img src="<?php echo get_template_directory_uri(); ?>/images/Map-2.svg" style="display: none;">
   </p>
   <p id="showAerial">AERIAL 
      <img src="<?php echo get_template_directory_uri(); ?>/images/Aerial.svg" style="display: none;">
       <img src="<?php echo get_template_directory_uri(); ?>/images/Aerial-2.svg">
   </p>
   </div>
</section>
<section class="times">
    <div class="row">
        <div class="container">
        <h2>DRIVE TIMES</h2>
            <div class="col-md-5 col-xs-6">
                <h4 class="time-title">Leeds</h4>
                <p><span class="color">Drive Time</span> 7 minutes</p>
                <p><span class="color">Distance</span> 3 miles</p>
                <h4 class="time-title">Leeds</h4>
                <p><span class="color">Drive Time</span> 7 minutes</p>
                <p><span class="color">Distance</span> 3 miles</p>         
                <h4 class="time-title">Leeds</h4>
                <p><span class="color">Drive Time</span> 7 minutes</p>
                <p><span class="color">Distance</span> 3 miles</p>
             </div> 
              <div class="col-md-2  "> </div>
             <div class="col-md-5   col-xs-6">  

                <h4 class="time-title">Leeds</h4>
                <p><span class="color">Drive Time</span> 7 minutes</p>
                <p><span class="color">Distance</span> 3 miles</p>       
                <h4 class="time-title">Leeds</h4>
                <p><span class="color">Drive Time</span> 7 minutes</p>
                <p><span class="color">Distance</span> 3 miles</p>
                <h4 class="time-title">Leeds</h4>
                <p><span class="color">Drive Time</span> 7 minutes</p>
                <p><span class="color">Distance</span> 3 miles</p>
            </div>
        </div>
    </div>
    </div>
</section>
 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

 <script type="text/javascript">

            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                var image = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,
                     zoomControl: false,
                      scaleControl: false,
                      scrollwheel: false,
                      disableDoubleClickZoom: true,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(40.6700, -73.9400), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [
  {
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#ededed"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#cccccc"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#333333"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#575756"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#575756"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#ffffff"
      },
      {
        "weight": 1.5
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#009fe3"
      },
      {
        "weight": 3
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#009fe3"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#575756"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#333333"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#333333"
      }
    ]
  },
  {
    "featureType": "transit.station.rail",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#333333"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#d4edfc"
      }
    ]
  }
]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);



                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(40.6700, -73.9400),
                    map: map,
                    title: 'Snazzy!',
                     icon: image
                });

            }

        </script>

<?php include 'footer.php';  ?>