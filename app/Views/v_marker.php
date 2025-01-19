<div id="map" style="width: 100%; height: 100vh;"></div>

<script>
// Inisialisasi peta
var map = L.map('map').setView([-6.989604965553131, 110.42322800905191], 15); // Atur view awal

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
    const baseLayers = {
        "OpenStreetMap": osm,
        "OpenTopoMap": openTopoMap,
        "Esri World Imagery": esriWorldImagery,
        "Stamen Toner": stamenToner,
        "CartoDB Positron": cartoDBPositron
    };

// Tambahkan kontrol layer ke peta
    const layerControl = L.control.layers(baseLayers, null,{
        collapsed: false
    }).addTo(map);

//Marker
L.marker([-6.989604965553131, 110.42322800905191]).
bindPopup("<img src='<?= base_url('gambar/1.png') ?>' width='100%'>" 
+ "Ini adalah marker").addTo(map);

//Custom marker
const marker1 = L.icon({
    iconUrl: '<?= base_url('gambar/marker.png') ?>',
    iconSize:     [35, 45], // size of the icon
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});

//marker dengan custom
L.marker([-6.989859373392031, 110.42368960955002], {icon: marker1}).
bindPopup("<img src='<?= base_url('gambar/2.png') ?>' width='100%'>" 
+ "Ini adalah marker").addTo(map);

</script>



