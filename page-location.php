<?php include 'header.php';  ?>
<section class="location">
   <div id="map"></div>
    <div id="aerial"><img src="<?php echo get_template_directory_uri(); ?>/images/Aerial-Photo-Map.jpg"></div>
   <div class="map-footer">
   <p class="white" id="showMap">MAP 
        <svg class="mapsvg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   width="23px" height="23px" viewBox="0 0 23 23" style="enable-background:new 0 0 23 23;" xml:space="preserve">
<style type="text/css">
  .st0{fill:#FFFFFF;}
</style>
<g>
  <path class="st0" d="M22,22.5c-0.1,0-0.2,0-0.3-0.1L15,17.6l-6.7,4.8c-0.2,0.1-0.4,0.1-0.6,0l-7-5c-0.1-0.1-0.2-0.2-0.2-0.4V1
    c0-0.2,0.1-0.4,0.3-0.4s0.4-0.1,0.5,0L8,5.3l6.7-4.8c0.2-0.1,0.4-0.1,0.6,0l7,5c0.1,0.1,0.2,0.2,0.2,0.4v16c0,0.2-0.1,0.4-0.3,0.4
    C22.1,22.4,22.1,22.5,22,22.5z M1.5,16.7L8,21.3l6.7-4.8c0.2-0.1,0.4-0.1,0.6,0l6.2,4.4V6.2L15,1.6L8.3,6.4c-0.2,0.1-0.4,0.1-0.6,0
    L1.5,1.9V16.7z"/>
  <path class="st0" d="M8,22.5c-0.3,0-0.5-0.2-0.5-0.5V6c0-0.3,0.2-0.5,0.5-0.5S8.5,5.7,8.5,6v16C8.5,22.2,8.3,22.5,8,22.5z"/>
  <path class="st0" d="M15,17.5c-0.3,0-0.5-0.2-0.5-0.5V1c0-0.3,0.2-0.5,0.5-0.5s0.5,0.2,0.5,0.5v16C15.5,17.2,15.3,17.5,15,17.5z"/>
</g>
</svg>
   </p>
   <p id="showAerial">AERIAL 
           <svg class="aerialsvg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
           width="22px" height="25px" viewBox="0 0 22 25" style="enable-background:new 0 0 22 25;" xml:space="preserve">
              <style type="text/css">
                .st1{fill:#2c2c2b;}
              </style>
              <g>
                <g>
                  <path class="st1" d="M11.2,15.8c-0.1,0-0.3-0.1-0.4-0.2c-0.2-0.3-5.2-6.3-5.2-9.2c0-3.1,2.5-5.6,5.6-5.6c3.1,0,5.6,2.5,5.6,5.6
                    c0,3-5,9-5.2,9.2C11.5,15.8,11.3,15.8,11.2,15.8z M11.2,1.8c-2.5,0-4.6,2.1-4.6,4.6c0,2,3,6.2,4.6,8.1c1.6-2,4.6-6.1,4.6-8.1
                    C15.8,3.9,13.7,1.8,11.2,1.8z"/>
                  <path class="st1" d="M11.2,8.8c-1.3,0-2.4-1.1-2.4-2.4S9.9,4,11.2,4s2.4,1.1,2.4,2.4S12.5,8.8,11.2,8.8z M11.2,5
                    c-0.8,0-1.4,0.6-1.4,1.4c0,0.8,0.6,1.4,1.4,1.4s1.4-0.6,1.4-1.4C12.6,5.7,12,5,11.2,5z"/>
                </g>
                <path class="st1" d="M21.1,24.8h-20c-0.1,0-0.3-0.1-0.4-0.2c-0.1-0.1-0.1-0.2-0.1-0.4l2-19c0-0.3,0.2-0.4,0.5-0.4h3.1
                  c0.3,0,0.5,0.2,0.5,0.5S6.5,5.8,6.2,5.8H3.6l-1.9,18h18.9l-1.9-18h-2.5c-0.3,0-0.5-0.2-0.5-0.5s0.2-0.5,0.5-0.5h2.9
                  c0.3,0,0.5,0.2,0.5,0.4l2,19c0,0.1,0,0.3-0.1,0.4C21.4,24.8,21.2,24.8,21.1,24.8z"/>
                <path class="st1" d="M20.5,18.8H1.7c-0.3,0-0.5-0.2-0.5-0.5s0.2-0.5,0.5-0.5h18.7c0.3,0,0.5,0.2,0.5,0.5S20.7,18.8,20.5,18.8z"/>
                <path class="st1" d="M19.7,11.8h-5.6c-0.3,0-0.5-0.2-0.5-0.5s0.2-0.5,0.5-0.5h5.6c0.3,0,0.5,0.2,0.5,0.5S20,11.8,19.7,11.8z"/>
                <path class="st1" d="M8.3,11.8H2.5c-0.3,0-0.5-0.2-0.5-0.5s0.2-0.5,0.5-0.5h5.8c0.3,0,0.5,0.2,0.5,0.5S8.5,11.8,8.3,11.8z"/>
                <path class="st1" d="M6.1,24.8C6.1,24.8,6.1,24.8,6.1,24.8c-0.3,0-0.5-0.3-0.5-0.5l1-15c0-0.3,0.3-0.5,0.5-0.5
                  c0.3,0,0.5,0.3,0.5,0.5l-1,15C6.6,24.6,6.4,24.8,6.1,24.8z"/>
                <path class="st1" d="M16.3,24.8c-0.3,0-0.5-0.2-0.5-0.5l-1-15c0-0.3,0.2-0.5,0.5-0.5c0.3,0,0.5,0.2,0.5,0.5l1,15
                  C16.8,24.6,16.6,24.8,16.3,24.8C16.3,24.8,16.3,24.8,16.3,24.8z"/>
              </g>
          </svg>
        

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
                    center: new google.maps.LatLng(53.770376, -1.497819), // Not New York

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
                    position: new google.maps.LatLng(53.770376, -1.497819),
                    map: map,
                    title: 'Snazzy!',
                     icon: {
                        url: "<?php echo get_template_directory_uri(); ?>/images/marker.png",
                      
                      }
                });

            }

        </script>

<?php include 'footer.php';  ?>