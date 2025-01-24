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
        <h3>PETA KABUPATEN/KOTA SULAWESI TENGAH INDONESIA</h3>
        <p>Data yang didapat melalui BPS dan berikut merupakan semua titik dari Kabupaten/Kota yang ada di Sulawesi
            Tengah Indonesia</p>
    </div>
    <div id="map"></div>
    <script>
        var map = L.map('map').setView([-0.3155398750904368, 117.1371634207888], 6);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 18,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        var kabkotas = @json($list_kabkota);
        console.log(kabkotas);
        kabkotas.forEach(function (kabkot) {
            var marker = L.marker([kabkot.latitude, kabkot.longitude]).addTo(map);
            marker.bindPopup(kabkot.name);
        });

    </script>

    @include('component.footer')
</body>

</html>