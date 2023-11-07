let map, marker;

document.addEventListener('DOMContentLoaded', function() {
    map = L.map('map').setView([-6.5718599,106.9005411], 9);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

    marker = L.marker([0, 0], { draggable: true }).addTo(map);
    marker.on('dragend', onMarkerDragend);

    // Menambahkan kontrol pencarian
    const geocoder = L.Control.geocoder({
        defaultMarkGeocode: false,
        collapsed: false
    }).addTo(map);

    geocoder.on('markgeocode', function(e) {
        const latlng = e.geocode.center;
        marker.setLatLng(latlng);
        map.setView(latlng, 15);
        
        const lat = latlng.lat;
        const lng = latlng.lng;

        document.getElementById("latitude").value = lat;
        document.getElementById("longitude").value = lng;
    });

   
    });

function onMarkerDragend(event) {
    const lat = event.target.getLatLng().lat;
    const lng = event.target.getLatLng().lng;

    document.getElementById("latitude").value = lat;
    document.getElementById("longitude").value = lng;
}


