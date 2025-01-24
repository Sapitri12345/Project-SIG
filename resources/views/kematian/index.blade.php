<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />


    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <style>
        #map {
            height: 425px;
        }

        .utama {
            padding: 15px;
        }

        .info {
            padding: 6px 8px;
            font: 14px/16px Arial, Helvetica, sans-serif;
            background: white;
            background: rgba(255, 255, 255, 0.8);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }

        .info h4 {
            margin: 0 0 5px;
            color: #777;
        }

        .legend {
            line-height: 18px;
            color: #555;
        }

        .legend i {
            width: 18px;
            height: 18px;
            float: left;
            margin-right: 8px;
            opacity: 0.7;
        }
    </style>
</head>

<body>
    @include('component.navbar')
    <div class="utama" style="text-align:center">
        <h4>PETA RATA-RATA KEMATIAN KABUPATEN/KOTA SULAWESI TENGAH INDONESIA</h4>
        <p>Data yang didapat melalui BPS dan berikut merupakan Rata-rata kematian Kabupaten/Kota yang ada di Sulawesi
            Tengah Indonesia</p>
    </div>
    <div id="map"></div>

    <script>
        var map = L.map('map').setView([-0.9730197, 121.6477471], 6);

        var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        const regencies = {!! json_encode($list_kematian) !!}


        const dataKematian = regencies.map(kabkota => ({
            type: "Feature",
            properties: {
                name: kabkota.name,
                rata2_kematian: kabkota.rata2_kematian,
            },
            geometry: {
                type: kabkota.type_polygon,
                coordinates: JSON.parse(kabkota.polygon),
            }
        }));

        console.log(regencies);

        const geoJson = {
            type: "FeatureCollection",
            features: dataKematian,
        };

        const info = L.control();

        info.onAdd = function (map) {
            this._div = L.DomUtil.create('div', 'info');
            this.update();
            return this._div;
        };

        info.update = function (props) {
            const contents = props ? `<b>${props.name}</b><br />Rata-rata ${props.rata2_kematian} Orang/Tahun` : 'Berdasarkan Kaupaten/Kota';
            this._div.innerHTML = `<p><b>Rata-rata Kematian Kab/Kota Sulawesi Tengah</b></p>${contents}`;
        };

        info.addTo(map);

        function getColor(d) {
            return d > 71 ? '#10002b' :
                d > 70 ? '#240046' :
                    d > 69 ? '#3c096c' :
                        d > 67 ? '#5a189a' :
                            d > 66 ? '#7b2cbf' : '#fdffb6';
        }


        function style(feature) {
            return {
                weight: 2,
                opacity: 1,
                color: 'white',
                dashArray: '3',
                fillOpacity: 0.7,
                fillColor: getColor(feature.properties.rata2_kematian)
            };
        }

        function highlightFeature(e) {
            const layer = e.target;

            layer.setStyle({
                weight: 5,
                color: '#666',
                dashArray: '',
                fillOpacity: 0.7
            });

            layer.bringToFront();

            info.update(layer.feature.properties);
        }

        var geojson = L.geoJson(geoJson, {
            style: style,
            onEachFeature: function (feature, layer) {
                layer.on({
                    mouseover: highlightFeature,
                    mouseout: resetHighlight,
                    click: zoomToFeature
                });
            }
        }).addTo(map);

        function resetHighlight(e) {
            geojson.resetStyle(e.target);
            info.update();
        }

        function zoomToFeature(e) {
            map.fitBounds(e.target.getBounds());
        }

        function onEachFeature(feature, layer) {
            layer.on({
                mouseover: highlightFeature,
                mouseout: resetHighlight,
                click: zoomToFeature
            });
        }


        const legend = L.control({ position: 'bottomright' });

        legend.onAdd = function (map) {

            const div = L.DomUtil.create('div', 'info legend');
            const grades = [0, 66, 67, 69, 70, 71];
            const labels = [];
            let from, to;


            for (let i = 0; i < grades.length; i++) {
                from = grades[i];
                to = grades[i + 1];

                labels.push(`<i style="background:${getColor(from + 1)}"></i> ${from}${to ? `&ndash;${to}` : '+'}`);
            }

            div.innerHTML = labels.join('<br>');
            return div;
        };

        legend.addTo(map);
    </script>
    @include('component.footer')
</body>

</html>