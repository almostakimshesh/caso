<?php
// Template Name: Map
?>

<!DOCTYPE html>
<html>
<head>
  <title>My OpenStreetMap</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Leaflet CSS -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <!-- Leaflet JS -->
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

  <style>
    #map {
      height: 100vh;
      width: 100%;
    }
  </style>
</head>
<body>
  <div id="map"></div>

  <script>
    // Initialize map centered on Dhaka
    var map = L.map('map').setView([24.8510, 89.3711], 13);

    // Load OpenStreetMap tiles
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 19,
      attribution: '&copy; <a href="https://openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Add a marker
    L.marker([24.8510, 89.3711]).addTo(map)
      .bindPopup("<b>Bogura, Bangladesh</b><br>My Location.")
      .openPopup();
  </script>
</body>
</html>
