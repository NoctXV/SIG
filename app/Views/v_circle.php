<div id="map" style="width: 100%; height: 100vh;"></div>

<script>
// Inisialisasi peta
var map = L.map('map').setView([-6.984067838662779, 110.40959609552087], 15); // Atur view awal

// 1. OpenStreetMap (Default)
var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '© OpenStreetMap contributors'
});

// 2. OpenTopoMap
var openTopoMap = L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
    maxZoom: 17,
    attribution: '© OpenTopoMap contributors'
});

// 3. Esri World Imagery
var esriWorldImagery = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
    attribution: 'Tiles © Esri'
});

// 4. Stamen Toner
var stamenToner = L.tileLayer('https://stamen-tiles.a.ssl.fastly.net/toner/{z}/{x}/{y}.png', {
    attribution: 'Map tiles by Stamen Design, under CC BY 3.0. Data by OpenStreetMap, under ODbL.'
});

// 5. CartoDB Positron
var cartoDBPositron = L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
    maxZoom: 19,
    attribution: '© OpenStreetMap contributors & CartoDB'
});

// Tambahkan base layers ke peta
cartoDBPositron.addTo(map);

// Layer control
var baseLayers = {
    "OpenStreetMap": osm,
    "OpenTopoMap": openTopoMap,
    "Esri World Imagery": esriWorldImagery,
    "Stamen Toner": stamenToner,
    "CartoDB Positron": cartoDBPositron
};

// Tambahkan kontrol layer ke peta
L.control.layers(baseLayers).addTo(map);

//circle
L.circle([-6.990363139115461, 110.42288925191767], 
{radius: 200,
 color: 'red',
 fillColor: 'blue'
}).addTo(map)

</script>



