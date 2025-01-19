<div id="map" style="width: 100%; height: 100vh;"></div>

<script>
// Inisialisasi peta
var map = L.map('map', {
    center: [-1.0017675747499997, 118.43553831205608],
    zoom: 5
}); // Atur view awal

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
    "Classic": osm,
    "Topography": openTopoMap,
    "Satellite": esriWorldImagery,
    "Black and White": stamenToner,
    "Clean": cartoDBPositron
};

// Tambahkan kontrol layer ke peta
L.control.layers(baseLayers).addTo(map);

//GeoJSON

// 1. ACEH
$.getJSON("<?= base_url('provinsi/11.geojson') ?>", function(data) {
    L.geoJson(data, {
        style: function(feature) {
            return {
                color: '#FF0000',
                fillOpacity: 0.3,
            }
        }
    })
    .bindPopup("<img src='<?= base_url('gambar/1. aceh.jpg') ?>' width='100%'> <br>" +
        "<b>Provinsi Aceh</b><br>" +
        "Penduduk : 5.512.000 Jiwa <br>" +
        "Luas : 58.376 km²")
    .addTo(map);
})

// 2. SUMATERA UTARA
$.getJSON("<?= base_url('provinsi/12.geojson') ?>", function(data) {
    L.geoJson(data, {
        style: function(feature) {
            return {
                color: '#00FF00',
                fillOpacity: 0.3,
            }
        }
    })
    .bindPopup("<img src='<?= base_url('gambar/2. Sumatra Utara.jpg') ?>' width='100%'> <br>" +
        "<b>Provinsi Sumatera Utara</b><br>" +
        "Penduduk : 15.390.000 Jiwa <br>" +
        "Luas : 72.981 km²")
    .addTo(map);
})

// 3. SUMATeRA BARAT
$.getJSON("<?= base_url('provinsi/13.geojson') ?>", function(data) {
    L.geoJson(data, {
        style: function(feature) {
            return {
                color: '#0000FF',
                fillOpacity: 0.3,
            }
        }
    })
    .bindPopup("<img src='<?= base_url('gambar/3. Sumatra Barat.jpg') ?>' width='100%'> <br>" +
        "<b>Provinsi Sumatera Barat</b><br>" +
        "Penduduk : 5.757.000 Jiwa <br>" +
        "Luas : 42.297 km²")
    .addTo(map);
})

// 4. RIAU
$.getJSON("<?= base_url('provinsi/14.geojson') ?>", function(data) {
    L.geoJson(data, {
        style: function(feature) {
            return {
                color: '#FFFF00',
                fillOpacity: 0.3,
            }
        }
    })
    .bindPopup("<img src='<?= base_url('gambar/4. Riau.jpg') ?>' width='100%'> <br>" +
        "<b>Provinsi Riau</b><br>" +
        "Penduduk : 6.643.000 Jiwa <br>" +
        "Luas : 87.023 km²")
    .addTo(map);
})

// 5. JAMBI
$.getJSON("<?= base_url('provinsi/15.geojson') ?>", function(data) {
    L.geoJson(data, {
        style: function(feature) {
            return {
                color: '#FF00FF',
                fillOpacity: 0.3,
            }
        }
    })
    .bindPopup("<img src='<?= base_url('gambar/5. Jambi.jpg') ?>' width='100%'> <br>" +
        "<b>Provinsi Jambi</b><br>" +
        "Penduduk : 3.679.000 Jiwa <br>" +
        "Luas : 50.058 km²")
    .addTo(map);
})

// 6. SUMATERA SELATAN
$.getJSON("<?= base_url('provinsi/16.geojson') ?>", function(data) {
    L.geoJson(data, {
        style: function(feature) {
            return {
                color: '#00FFFF',
                fillOpacity: 0.3,
            }
        }
    })
    .bindPopup("<img src='<?= base_url('gambar/6. Sumatera Selatan.jpg') ?>' width='100%'> <br>" +
        "<b>Provinsi Sumatera Selatan</b><br>" +
        "Penduduk : 8.744.000 Jiwa <br>" +
        "Luas : 87.017 km²")
    .addTo(map);
})

// 7. BENGKULU
$.getJSON("<?= base_url('provinsi/17.geojson') ?>", function(data) {
    L.geoJson(data, {
        style: function(feature) {
            return {
                color: '#800000',
                fillOpacity: 0.3,
            }
        }
    })
    .bindPopup("<img src='<?= base_url('gambar/7. Bengkulu.jpg') ?>' width='100%'> <br>" +
        "<b>Provinsi Bengkulu</b><br>" +
        "Penduduk : 2.086.000 Jiwa <br>" +
        "Luas : 19.919 km²")
    .addTo(map);
})

// 8. LAMPUNG
$.getJSON("<?= base_url('provinsi/18.geojson') ?>", function(data) {
    L.geoJson(data, {
        style: function(feature) {
            return {
                color: '#808000',
                fillOpacity: 0.3,
            }
        }
    })
    .bindPopup("<img src='<?= base_url('gambar/8. Lampung.jpg') ?>' width='100%'> <br>" +
        "<b>Provinsi Lampung</b><br>" +
        "Penduduk : 9.314.000 Jiwa <br>" +
        "Luas : 35.288 km²")
    .addTo(map);
})

// 9. KEPULAUAN BANGKA BELITUNG
$.getJSON("<?= base_url('provinsi/19.geojson') ?>", function(data) {
    L.geoJson(data, {
        style: function(feature) {
            return {
                color: '#008000',
                fillOpacity: 0.3,
            }
        }
    })
    .bindPopup("<img src='<?= base_url('gambar/9. Bangka Belitung.jpg') ?>' width='100%'> <br>" +
        "<b>Provinsi Kepulauan Bangka Belitung</b><br>" +
        "Penduduk : 1.512.000 Jiwa <br>" +
        "Luas : 81.725 km²")
    .addTo(map);
})

// 10. KEPULAUAN RIAU
$.getJSON("<?= base_url('provinsi/21.geojson') ?>", function(data) {
    L.geoJson(data, {
        style: function(feature) {
            return {
                color: '#800080',
                fillOpacity: 0.3,
            }
        }
    })
    .bindPopup("<img src='<?= base_url('gambar/10. KRiau.jpg') ?>' width='100%'> <br>" +
        "<b>Provinsi Kepulauan Riau</b><br>" +
        "Penduduk : 2.162.000 Jiwa <br>" +
        "Luas : 251.810 km²")
    .addTo(map);
})

// 11. JAKARTA
$.getJSON("<?= base_url('provinsi/31.geojson') ?>", function(data) {
    L.geoJson(data, {
        style: function(feature) {
            return {
                color: '#008080',
                fillOpacity: 0.3,
            }
        }
    })
    .bindPopup("<img src='<?= base_url('gambar/11. Jakarta.jpg') ?>' width='100%'> <br>" +
        "<b>Provinsi DKI Jakarta</b><br>" +
        "Penduduk : 11.350.000 Jiwa <br>" +
        "Luas : 661.5 km²")
    .addTo(map);
})

// 12. Jawa Barat
$.getJSON("<?= base_url('provinsi/32.geojson') ?>", function(data) {
    L.geoJson(data, {
        style: function(feature) {
            return {
                color: '#000080',
                fillOpacity: 0.3,
            }
        }
    })
    .bindPopup("<img src='<?= base_url('gambar/12. Jawa Barat.jpg') ?>' width='100%'> <br>" +
        "<b>Provinsi Jawa Barat</b><br>" +
        "Penduduk : 49.860.000 Jiwa <br>" +
        "Luas : 35.377 km²")
    .addTo(map);
})

// 13. Jawa Tengah
$.getJSON("<?= base_url('provinsi/33.geojson') ?>", function(data) {
    L.geoJson(data, {
        style: function(feature) {
            return {
                color: '#FFA500',
                fillOpacity: 0.3,
            }
        }
    })
    .bindPopup("<img src='<?= base_url('gambar/13. Jawa Tengah.jpg') ?>' width='100%'> <br>" +
        "<b>Provinsi Jawa Tengah</b><br>" +
        "Penduduk : 37.610.000 Jiwa <br>" +
        "Luas : 34.337 km²")
    .addTo(map);
})

// 14. Yogyakarta
$.getJSON("<?= base_url('provinsi/34.geojson') ?>", function(data) {
    L.geoJson(data, {
        style: function(feature) {
            return {
                color: '#A52A2A',
                fillOpacity: 0.3,
            }
        }
    })
    .bindPopup("<img src='<?= base_url('gambar/14. Yogyakarta.jpg') ?>' width='100%'> <br>" +
        "<b>Provinsi Yogyakarta</b><br>" +
        "Penduduk : 3.736.000 Jiwa <br>" +
        "Luas : 3.185 km²")
    .addTo(map);
})

// 15. Jawa Timur
$.getJSON("<?= base_url('provinsi/35.geojson') ?>", function(data) {
    L.geoJson(data, {
        style: function(feature) {
            return {
                color: '#7FFF00',
                fillOpacity: 0.3,
            }
        }
    })
    .bindPopup("<img src='<?= base_url('gambar/15. Jawa Timur.jpg') ?>' width='100%'> <br>" +
        "<b>Provinsi Jawa Timur</b><br>" +
        "Penduduk : 41.530.000 Jiwa <br>" +
        "Luas : 47.963 km²")
    .addTo(map);
})

// 16. Banten
$.getJSON("<?= base_url('provinsi/36.geojson') ?>", function(data) {
    L.geoJson(data, {
        style: function(feature) {
            return {
                color: '#D2691E',
                fillOpacity: 0.3,
            }
        }
    })
    .bindPopup("<img src='<?= base_url('gambar/16. Banten.jpg') ?>' width='100%'> <br>" +
        "<b>Provinsi Banten</b><br>" +
        "Penduduk : 12.310.000 Jiwa <br>" +
        "Luas : 9.352 km²")
    .addTo(map);
})

// 17. Bali
$.getJSON("<?= base_url('provinsi/51.geojson') ?>", function(data) {
    L.geoJson(data, {
        style: function(feature) {
            return {
                color: '#6495ED',
                fillOpacity: 0.3,
            }
        }
    })
    .bindPopup("<img src='<?= base_url('gambar/17. Bali.jpg') ?>' width='100%'> <br>" +
        "<b>Provinsi Bali</b><br>" +
        "Penduduk : 4.404.000 Jiwa <br>" +
        "Luas : 5.636 km²")
    .addTo(map);
})

// 18. Nusa Tenggara Barat
$.getJSON("<?= base_url('provinsi/52.geojson') ?>", function(data) {
    L.geoJson(data, {
        style: function(feature) {
            return {
                color: '#DC143C',
                fillOpacity: 0.3,
            }
        }
    })
    .bindPopup("<img src='<?= base_url('gambar/18. NTB.jpg') ?>' width='100%'> <br>" +
        "<b>Provinsi Nusa Tenggara Barat</b><br>" +
        "Penduduk : 5.646.000 Jiwa <br>" +
        "Luas : 20.153 km²")
    .addTo(map);
})

// 19. Nusa Tenggara Timur
$.getJSON("<?= base_url('provinsi/53.geojson') ?>", function(data) {
    L.geoJson(data, {
        style: function(feature) {
            return {
                color: '#00CED1',
                fillOpacity: 0.3,
            }
        }
    })
    .bindPopup("<img src='<?= base_url('gambar/19. NTT.jpg') ?>' width='100%'> <br>" +
        "<b>Provinsi Nusa Tenggara Timur</b><br>" +
        "Penduduk : 5.646.000 Jiwa <br>" +
        "Luas : 47,245 km²")
    .addTo(map);
})

// 20. Kalimantan Barat
$.getJSON("<?= base_url('provinsi/61.geojson') ?>", function(data) {
    L.geoJson(data, {
        style: function(feature) {
            return {
                color: '#ADFF2F',
                fillOpacity: 0.3,
            }
        }
    })
    .bindPopup("<img src='<?= base_url('gambar/20. Kalbar.jpg') ?>' width='100%'> <br>" +
        "<b>Provinsi Kalimantan Barat</b><br>" +
        "Penduduk : 5.696.000 Jiwa <br>" +
        "Luas : 147.307 km²")
    .addTo(map);
})

// 21. Kalimantan Tengah
$.getJSON("<?= base_url('provinsi/62.geojson') ?>", function(data) {
    L.geoJson(data, {
        style: function(feature) {
            return {
                color: '#FF1493',
                fillOpacity: 0.3,
            }
        }
    })
    .bindPopup("<img src='<?= base_url('gambar/21. Kalteng.jpeg') ?>' width='100%'> <br>" +
        "<b>Provinsi Kalimantan Tengah</b><br>" +
        "Penduduk : 2.810.000 Jiwa <br>" +
        "Luas : 153.564 km²")
    .addTo(map);
})

// 22. Kalimantan Selatan
$.getJSON("<?= base_url('provinsi/63.geojson') ?>", function(data) {
    L.geoJson(data, {
        style: function(feature) {
            return {
                color: '#FFD700',
                fillOpacity: 0.3,
            }
        }
    })
    .bindPopup("<img src='<?= base_url('gambar/22. Kalsel.jpg') ?>' width='100%'> <br>" +
        "<b>Provinsi Kalimantan Selatan</b><br>" +
        "Penduduk : 4.222.000 Jiwa <br>" +
        "Luas : 38.744 km²")
    .addTo(map);
})

// 23. Kalimantan Timur
$.getJSON("<?= base_url('provinsi/64.geojson') ?>", function(data) {
    L.geoJson(data, {
        style: function(feature) {
            return {
                color: '#4B0082',
                fillOpacity: 0.3,
            }
        }
    })
    .bindPopup("<img src='<?= base_url('gambar/23. Kaltim.jpg') ?>' width='100%'> <br>" +
        "<b>Provinsi Kalimantan Timur</b><br>" +
        "Penduduk : 4.030.000 Jiwa <br>" +
        "Luas : 127.267 km²")
    .addTo(map);
})

// 24. Kalimantan Utara
$.getJSON("<?= base_url('provinsi/65.geojson') ?>", function(data) {
    L.geoJson(data, {
        style: function(feature) {
            return {
                color: '#90EE90',
                fillOpacity: 0.3,
            }
        }
    })
    .bindPopup("<img src='<?= base_url('gambar/24. Kalut.jpg') ?>' width='100%'> <br>" +
        "<b>Provinsi Kalimantan Utara</b><br>" +
        "Penduduk : 746.201 Jiwa <br>" +
        "Luas : 75.467 km²")
    .addTo(map);
})

// 25. Sulawesi Utara
$.getJSON("<?= base_url('provinsi/71.geojson') ?>", function(data) {
    L.geoJson(data, {
        style: function(feature) {
            return {
                color: '#FF4500',
                fillOpacity: 0.3,
            }
        }
    })
    .bindPopup("<img src='<?= base_url('gambar/25. Sulut.jpg') ?>' width='100%'> <br>" +
        "<b>Provinsi Sulawesi Utara</b><br>" +
        "Penduduk : 2.682.000 Jiwa <br>" +
        "Luas : 15.069 km²")
    .addTo(map);
})

// 26. Sulawesi Tengah
$.getJSON("<?= base_url('provinsi/72.geojson') ?>", function(data) {
    L.geoJson(data, {
        style: function(feature) {
            return {
                color: '#DA70D6',
                fillOpacity: 0.3,
            }
        }
    })
    .bindPopup("<img src='<?= base_url('gambar/26. Sulteng.jpg') ?>' width='100%'> <br>" +
        "<b>Provinsi Sulawesi Tengah</b><br>" +
        "Penduduk : 3.087.000 Jiwa <br>" +
        "Luas : 61.841 km²")
    .addTo(map);
})

// 27. Sulawesi Selatan
$.getJSON("<?= base_url('provinsi/73.geojson') ?>", function(data) {
    L.geoJson(data, {
        style: function(feature) {
            return {
                color: '#EEE8AA',
                fillOpacity: 0.3,
            }
        }
    })
    .bindPopup("<img src='<?= base_url('gambar/27. Sulsel.jpeg') ?>' width='100%'> <br>" +
        "<b>Provinsi Sulawesi Selatan</b><br>" +
        "Penduduk : 9.362.000 Jiwa <br>" +
        "Luas : 46.717 km²")
    .addTo(map);
})

// 28. Sulawesi Tenggara
$.getJSON("<?= base_url('provinsi/74.geojson') ?>", function(data) {
    L.geoJson(data, {
        style: function(feature) {
            return {
                color: '#98FB98',
                fillOpacity: 0.3,
            }
        }
    })
    .bindPopup("<img src='<?= base_url('gambar/28. Sultenggara.jpg') ?>' width='100%'> <br>" +
        "<b>Provinsi Sulawesi Tenggara</b><br>" +
        "Penduduk : 2.744.000 Jiwa <br>" +
        "Luas : 38.068 km²")
    .addTo(map);
})

// 29. Gorontalo
$.getJSON("<?= base_url('provinsi/75.geojson') ?>", function(data) {
    L.geoJson(data, {
        style: function(feature) {
            return {
                color: '#AFEEEE',
                fillOpacity: 0.3,
            }
        }
    })
    .bindPopup("<img src='<?= base_url('gambar/29. Gorontalo.jpg') ?>' width='100%'> <br>" +
        "<b>Provinsi Gorontalo</b><br>" +
        "Penduduk : 1.213.000 Jiwa <br>" +
        "Luas : 12.435 km²")
    .addTo(map);
})

//30. Sulawesi Barat
$.getJSON("<?= base_url('provinsi/76.geojson') ?>", function(data) {
    L.geoJson(data, {
        style: function(feature) {
            return {
                color: '#D8BFD8',
                fillOpacity: 0.3,
            }
        }
    })
    .bindPopup("<img src='<?= base_url('gambar/30. Sulbar.jpg') ?>' width='100%'> <br>" +
        "<b>Provinsi Sulawesi Barat</b><br>" +
        "Penduduk : 1.481.000 Jiwa <br>" +
        "Luas : 16.787 km²")
    .addTo(map);
})

//31. Maluku
$.getJSON("<?= base_url('provinsi/81.geojson') ?>", function(data) {
    L.geoJson(data, {
        style: function(feature) {
            return {
                color: '#FF6347',
                fillOpacity: 0.3,
            }
        }
    })
    .bindPopup("<img src='<?= base_url('gambar/31. Maluku.jpg') ?>' width='100%'> <br>" +
        "<b>Provinsi Maluku</b><br>" +
        "Penduduk : 1.848.8923 Jiwa <br>" +
        "Luas : 57.803 km²")
    .addTo(map);
})

//32. Maluku Utara
$.getJSON("<?= base_url('provinsi/82.geojson') ?>", function(data) {
    L.geoJson(data, {
        style: function(feature) {
            return {
                color: '#40E0D0',
                fillOpacity: 0.3,
            }
        }
    })
    .bindPopup("<img src='<?= base_url('gambar/32. Malut.jpg') ?>' width='100%'> <br>" +
        "<b>Provinsi Maluku Utara</b><br>" +
        "Penduduk : 1.329.8923 Jiwa <br>" +
        "Luas : 140.255 km²")
    .addTo(map);
})

//33. Papua
$.getJSON("<?= base_url('provinsi/91.geojson') ?>", function(data) {
    L.geoJson(data, {
        style: function(feature) {
            return {
                color: '#9ACD32',
                fillOpacity: 0.3,
            }
        }
    })
    .bindPopup("<img src='<?= base_url('gambar/33. Papua.jpg') ?>' width='100%'> <br>" +
        "<b>Provinsi Papua</b><br>" +
        "Penduduk : 1.047.8923 Jiwa <br>" +
        "Luas : 317.062 km²")
    .addTo(map);
})

//34. Papua Barat
$.getJSON("<?= base_url('provinsi/94.geojson') ?>", function(data) {
    L.geoJson(data, {
        style: function(feature) {
            return {
                color: '#000000',
                fillOpacity: 0.3,
            }
        }
    })
    .bindPopup("<img src='<?= base_url('gambar/34. Papua Barat.jpg') ?>' width='100%'> <br>" +
        "<b>Provinsi Papua Barat</b><br>" +
        "Penduduk : 569.570 Jiwa <br>" +
        "Luas : 64.134 km²")
    .addTo(map);
})

</script>