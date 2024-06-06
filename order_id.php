<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>parcel Location</title>
<style>
    #map {
        height: 400px;
        width: 100%;
    }
</style>
</head>
<body>
<center><h2>Parcel Location</center></h2>

<div id="map"></div>

<script>
function initMap() {
    // Create a map object and specify the DOM element for display.
    var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 0, lng: 0}, // Default to center of the world
        zoom: 2 // Default zoom level
    });

    // Get user's location
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var userLatLng = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };

            // Center the map on the user's location
            map.setCenter(userLatLng);
            map.setZoom(15); // Adjust zoom level as desired

            // Add a marker at the user's location
            var marker = new google.maps.Marker({
                position: userLatLng,
                map: map,
                title: 'Your Location'
            });
        }, function() {
            handleLocationError(true, map);
        });
    } else {
        // Browser doesn't support Geolocation
        handleLocationError(false, map);
    }
}

function handleLocationError(browserHasGeolocation, map) {
    var infoWindow = new google.maps.InfoWindow({
        content: browserHasGeolocation ?
            'Error: The Geolocation service failed.' :
            'Error: Your browser doesn\'t support geolocation.'
    });

    var pos = {lat: 0, lng: 0}; // Default position

    // Display default location
    map.setCenter(pos);
    map.setZoom(2); // Default zoom level

    // Display info window at the default location
    infoWindow.setPosition(pos);
    infoWindow.open(map);
}
</script>
<!-- Replace 'YOUR_API_KEY' with your actual Google Maps API key -->
<script src="https://maps.googleapis.com/maps/api/js?key=123456789&callback=initMap" async defer></script>

</body>
</html>
