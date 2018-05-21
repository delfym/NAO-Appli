
var mymap = L.map('mapid').setView([47.331, 2.465], 5);


L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: 'pk.eyJ1IjoiZGVsZnk0OSIsImEiOiJjamhncXI4bGIwMHF1MzZsY20zcDVxdzh0In0.ODcQtyuIcVhhE4-XkbLzGA'
}).addTo(mymap);


var myLocation;
var myLat;
var myLng;

function onMapClick(e) {
    myLocation = e.latlng;
    myLat = myLocation.lat;
    myLng = myLocation.lng;
}

mymap.on('click', function (e) {
    onMapClick(e);
    var marker;
    if(marker != null)
    {
        marker.remove();
    }
    marker = L.marker([myLat, myLng]).addTo(mymap);
    /* pop-up */
    marker.bindPopup("<b>J'ai vu un oiseau ici : </b><br>Latitude : " + myLat + " - Longitude : " + myLng).openPopup();

});
