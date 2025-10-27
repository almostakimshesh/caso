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
var map = L.map('map').setView([23.8103, 90.4125], 13);

// Load OpenStreetMap tiles
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  maxZoom: 19,
  attribution: '&copy; OpenStreetMap contributors'
}).addTo(map);

// Marker icon
var selectedIcon = L.icon({
  iconUrl: 'https://maps.gstatic.com/mapfiles/ms2/micons/blue-dot.png',
  iconSize: [32, 32],
  iconAnchor: [16, 32],
  popupAnchor: [0, -30]
});

var currentMarker = null;

// Handle map click
map.on('click', function(e) {
  const lat = parseFloat(e.latlng.lat.toFixed(6));
  const lon = parseFloat(e.latlng.lng.toFixed(6));

  // Debugging (optional)
  console.log("Lat:", lat, "Lon:", lon);

  if (isNaN(lat) || isNaN(lon)) {
    alert("Invalid coordinates. Please click again.");
    return;
  }

  // Remove previous marker
  if (currentMarker) {
    map.removeLayer(currentMarker);
  }

  // Use encodeURIComponent for safety
  const url = "https://nominatim.openstreetmap.org/reverse?format=json&lat=" + encodeURIComponent(lat) + "&lon=" + encodeURIComponent(lon) + "&zoom=18&addressdetails=1";

  fetch(url, {
    headers: {
      'Accept': 'application/json'
    }
  })
    .then(response => response.json())
    .then(data => {
      console.log("API response:", data);

      let placeName = "Unknown Location";
      if (data && data.display_name) {
        placeName = data.display_name;
      }

      currentMarker = L.marker([lat, lon], { icon: selectedIcon })
        .addTo(map)
        .bindPopup("<b>" + placeName + "</b>")
        .openPopup();
    })
    .catch(error => {
      console.error("Error fetching location name:", error);
      alert("Unable to get location name. Please try again later.");
    });
});
</script>
</body>
</html>
