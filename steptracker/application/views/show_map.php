<!DOCTYPE html>
<html>
  <head>
    <title>Simple Polylines</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }

      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <?php $tracks=json_decode($history->trackpoints);?>
    <script>
      // This example creates a 2-pixel-wide red polyline showing the path of
      // the first trans-Pacific flight between Oakland, CA, and Brisbane,
      // Australia which was made by Charles Kingsford Smith.
      function initMap() {
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 3,
          center: { lat: <?=$tracks[0]->lat?>, lng: <?=$tracks[0]->lang?> },
          mapTypeId: "terrain",
        });
        const flightPlanCoordinates = [
        <?php 
              foreach ($tracks as $track) {
              	?>
{ lat: <?=$track->lat?>, lng: <?=$track->lang?> },
              	<?php
              }
        ?>
          
         
        ];
        const flightPath = new google.maps.Polyline({
          path: flightPlanCoordinates,
          geodesic: true,
          strokeColor: "#FF0000",
          strokeOpacity: 1.0,
          strokeWeight: 2,
        });
        flightPath.setMap(map);
      }
    </script>
  </head>
  <body>
    <div id="map"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfOfMzEhDTIfi-Bck69st4ARDvi9mn6MU&callback=initMap&libraries=&v=weekly"
      async
    ></script>
  </body>
</html>

