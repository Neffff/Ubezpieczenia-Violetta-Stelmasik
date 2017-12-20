function initMap() {
    var isDraggable = $(document).width() > 800 ? true : false;
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    var mapOptions = {
        draggable: isDraggable,
        // How zoomed in you want the map to start at (always required)
        zoom: 15,
        panControl: true,
        scrollwheel: false,
        // The latitude and longitude to center the map (always required)
        center: new google.maps.LatLng(52.360037, 18.292146), // Agencja
        // How you would like to style the map. 
        // This is where you would paste any style found on Snazzy Maps.
        styles: [{"featureType":"road","elementType":"geometry","stylers":[{"lightness":100},{"visibility":"simplified"}]},{"featureType":"water","elementType":"geometry","stylers":[{"visibility":"on"},{"color":"#C6E2FF"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#C5E3BF"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"color":"#D1D1B8"}]}]
    };

    // Get the HTML DOM element that will contain your map 
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('map');

    // Create the Google Map using our element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);
    var icon = {
        url: "img/google-map-location.svg", // url
        scaledSize: new google.maps.Size(50, 50), // scaled size

    };

    // Let's also add a marker while we're at it
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(52.360037, 18.292146),
        map: map,
        icon: icon,


        title: 'Tu jesteśmy!',

    });

}
