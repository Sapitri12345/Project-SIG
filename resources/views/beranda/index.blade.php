<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <style>
        #map {
            height: 421px;
        }
        .utama {
            padding: 15px;
        }
    </style>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
</head>

<body>
    @include('component.navbar')
    <div class="utama" style="text-align:center">
        <h3>PETA INDONESIA</h3>
        <p>Data yang didapat melalui BPS dan berikut merupakan semua titik dari Provinsi yang ada di Indonesia</p>
    </div>
    <div id="map"></div>
    <script>
        var map = L.map('map').setView([-0.3155398750904368, 117.1371634207888], 5);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 18,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        var provinces = @json($list_provinsi);
        console.log(provinces);
        provinces.forEach(function (province) {
            var marker = L.marker([province.latitude, province.longitude]).addTo(map);
            marker.bindPopup(province.name);
        });

    </script>

    @include('component.footer')

</body>

</html>